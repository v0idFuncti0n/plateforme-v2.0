<?php

namespace App\Http\Controllers;

use App\binaire;
use App\Etudiant;
use App\Reponse_text;
use App\Reponse_Bin;
use App\Reponse_QCM;
use App\Resultat;
use App\Option;
use App\qcm;
use App\Session;
use App\Test;
use App\Text_libre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResultatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $note = 0;
        $se = Session::find($request->session_id);
        if ($se->deleted == 1) {
            return redirect()->route('session.index');
        }
        $test_id = $request->test_id;
        $test = test::find($test_id);
        $question_qcm = null;
        $question_binaire = null;
        $question_text_libre = null;
        if ($request->input('question_qcm') != null) {
            $question_qcm = qcm::find(array_values($request->input('question_qcm')));
        }

        if ($request->input('question_binaire') != null) {
            $question_binaire = binaire::find(array_values($request->input('question_binaire')));
        }
        if ($request->input('question_text_libre') != null) {
            $question_text_libre = text_libre::find(array_values($request->input('question_text_libre')));
        }


        if ($question_qcm != null) {
            foreach ($question_qcm as $indice) {
                $note = $note + $indice->note;
            }
        }


        if ($question_binaire != null) {

            foreach ($question_binaire as $indice) {
                $note = $note + $indice->note;
            }
        }
        if ($question_text_libre != null) {

            foreach ($question_text_libre as $indice) {
                $note = $note + $indice->note;
            }
        }


        $vrai = 0;
        $faux = 0;
        $qcms = null;
        if ($request->input('qcms') != null) {
            $qcms = qcm::find(array_values($request->input('qcms')));
        }

        $somme = 0;
        $somme3 = 0;
        $somme2 = 0;
        $choices = null;
        $choices1 = null;

        if ($request->input('questions') != null) {
            $choices = option::find(array_values($request->input('questions')));
        }
        if ($request->input('options') != null) {
            $choices1 = option::find(array_values($request->input('options')));
        }
        //return dd($choices1);
        if ($choices1 != null) {
            foreach ($choices1 as $ch) {
                $reponse_qcm = array(
                    'test_id' => $test_id,
                    'question_id' => $ch->question_id,
                    'option_id' => $ch->option_id,
                    'session_id' => $request->session_id,
                    'note' => $ch->point
                );
                Reponse_QCM::query()->create($reponse_qcm);
            }
        }
        if ($choices != null) {
            foreach ($choices as $choice) {
                $er = false;
                if ($choice->point == 1) {
                    $vrai++;
                    $t = $choice->binaire;
                    $somme = $somme + $t->note;
                } else {
                    $faux++;
                }
                $reponse_bin = array(
                    'test_id' => $test_id,
                    'binaire_id' => $choice->binaire_id,
                    'option_id' => $choice->option_id,
                    'session_id' => $request->session_id,
                    'note' => $choice->point
                );
                Reponse_Bin::query()->create($reponse_bin);
            }
        }
        if ($qcms != null) {
            foreach ($qcms as $qcm) {
                $er = false;
                $somme2 = 0;
                $somme3 = 0;


                $option = DB::table('option')->where('question_id', '=', $qcm->question_id)->get();
                foreach ($option as $opt) {
                    $somme2 = $somme2 + $opt->point;
                }


                if ($choices1 != null) {
                    foreach ($choices1 as $ch) {
                        if ($ch->question_id == $qcm->question_id) {
                            $somme3 = $somme3 + $ch->point;
                            if ($ch->point == 0) {
                                $er = true;
                            }
                        }

                    }
                    if ($somme2 == $somme3 && $er == false) {
                        $somme = $somme + $qcm->note;
                        $vrai++;
                    } else {
                        $faux++;
                    }


                }
            }
        }

        $somme = ($somme * $test->note) / ($note);
        $etudiant_id = $se->etudiant_id;
        for ($i = 0; $i < $request->nb_ql; $i++) {
            $name = 'fichier' . strval($i);
            $text_libre = Text_libre::find($request->question_id[$i]);
            if ($i != $request->nb_ql - 1) {
                $rp = array(
                    'question_id' => $request->question_id[$i],
                    'etudiant_id' => $request->session_id,
                    'fichier' => "<p>" . $text_libre->question_text . ": </p><p>     " . $request->$name . "</p>",
                );
                $reponse_text = Reponse_text::query()->create($rp);
            } else {
                $text_libre = Text_libre::find($request->question_id[$i]);
                $rp = array(
                    'question_id' => $request->question_id[$i],
                    'etudiant_id' => $request->session_id,
                    'fichier' => "<p>" . $text_libre->question_text . ": </p><p>     " . $request->$name . '</p><p> Note de la parti QCM et binaire : ' . strval($somme) . '</p>',
                );
                $reponse_text = Reponse_text::query()->create($rp);
            }
        }
        if ($request->nb_ql == 0) {
            $r = array(
                'session_id' => $request->session_id,
                'note_total' => $somme,
            );
            Resultat::query()->create($r);
            $se->deleted = 1;
            $se->ip_address = $this->getUserIpAddr();
            $se->save();
            $somm = round($somme, 2);
            return view('resultat1.index', ['somme' => $somm, 'vrai' => $vrai, 'faux' => $faux, 'session' => $request->session_id]);
        } else {
            $se->deleted = 1;
            $se->ip_address = $this->getUserIpAddr();
            $se->save();
            session()->flush();
            return redirect()->route("session.index");
        }
    }

    public function getUserIpAddr(){
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if(isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }
    public function storeFinal(Request $request)
    {
        for ($i = 0; $i < $request->nbr; $i++) {
            $r = array(
                'session_id' => $request->session_id[$i],
                'note_total' => $request->note_final[$i],
            );
            Resultat::query()->create($r);
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Resultat $resultat
     * @return \Illuminate\Http\Response
     */
    public function show(Resultat $resultat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Resultat $resultat
     * @return \Illuminate\Http\Response
     */
    public function edit(Resultat $resultat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Resultat $resultat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resultat $resultat)
    {
        //
        $resultat = Resultat::where('session_id', $request->session_id)->first();
        $r = array(
            'session_id' => $request->session_id,
            'note_total' => $request->note_final,
        );
        if ($resultat != null) {
            Resultat::query()->where('session_id',$request->session_id)->update($r);
        } else {
            Resultat::query()->create($r);
        }

        return redirect()->back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Resultat $resultat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resultat $resultat)
    {
        //
    }

    public function test($request)
    {
        $test_id = $request->test_id;
        $qcm = DB::table('qcm')->where('test_id', '=', $test_id)->get();

        $somme = 0;
        $somme3 = 0;
        $somme2 = 0;
        $choices = option::find(array_values($request->input('questions')));
        $choices1 = option::find(array_values($request->input('options')));
        $qcms = DB::table('qcm')->where('test_id', $test_id);


        foreach ($choices as $choice) {
            $somme = $somme + $choice->point;
        }
        foreach ($qcms as $qcm) {
            $option = $qcm->options;
            foreach ($option as $opt) {
                $somme2 = $somme2 + $opt->point;
            }

            foreach ($choices1 as $choice) {
                if ($choice->question_id == $qcm->question_id) {
                    $somme3 = $somme3 + $choice->point;
                }

            }
            if ($somme2 == $somme3) {
                $sommme = $somme + 1;
            }
        }


        return compact('somme');
    }
}
