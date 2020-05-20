<?php

namespace App\Http\Controllers;


use App\Etudiant;
use App\filiere;
use App\Filiere_Niveau;
use App\Groupe;
use App\Matiere;
use App\Niveau;
use App\Professeur;
use App\Reponse_text;
use App\Session;
use App\Test;
use App\Text_libre;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Barryvdh\DomPDF\Facade as PDF;
use Maatwebsite\Excel\Facades\Excel;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $tests['tests'] = Test::OrderBy('test_id', 'asc')->paginate(10);
        return view('create-test.index', $tests);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $test = array(
            'nom' => $request->nom,
            'note' => $request->note,
            'duree' => $request->duree,
            'salle' => $request->salle,
            'date' => $request->date,
            'discription' => $request->discription,
            'professeur_id' => $request->professeur_id,
            'matiere_id' => $request->matiere_id,
            'd1' => $request->d1,
            'd2' => $request->d2,
            'd3' => $request->d3,
            'd4' => $request->d4,
            'd5' => $request->d5,
            'num' => $request->ng,
            'filiere_id' => $request->filiere_id,
            'num_inscrit'=> $request->nei,
        );

        $p = Professeur::query()->find($request->professeur_id)->first();

        $currentTest = Test::query()->create($test);

        $nbe = ceil(Etudiant::query()->where('filiere_id',$request->filiere_id)->count() / $request->ng);
        $numEtu = Etudiant::query()->where('filiere_id',$request->filiere_id)->count();
        $skip = 0;
        for ($i = 0; $i < $nbe; $i++) {

            if ($numEtu > $request->ng) {
                $groupe = array(
                    'test_id' => $currentTest->test_id,
                    'filiere_id' => $request->filiere_id,
                    'niveau_id' => $request->niveau_id,
                    'nombre_etudiant' => $request->ng,

                );

                $g = new Groupe($groupe);

                $etudiant = Etudiant::query()->where('filiere_id',$request->filiere_id)->skip($skip)->take($request->ng)->get();
                $numEtu = $numEtu - $request->ng;
                $skip += $request->ng;
            } else {
                $groupe = array(
                    'test_id' => $currentTest->test_id,
                    'filiere_id' => $request->filiere_id,
                    'niveau_id' => $request->niveau_id,
                    'nombre_etudiant' => $numEtu,
                );


                $g = new Groupe($groupe);
                $etudiant = Etudiant::query()->where('filiere_id',$request->filiere_id)->skip($skip)->take($numEtu)->get();
                $skip += $numEtu;
            }


            foreach ($etudiant as $e) {
                $e->groupe()->save($g);
                $session = array(
                    'etudiant_id' => $e->etudiant_id,
                    'test_id' => $currentTest->test_id,
                    'username' => strtolower(str_replace(" ", '', $e->nom . $e->prenom . $e->etudiant_id)),
                    'password' => $this->randomPassword(),

                );
                $s = Session::query()->create($session);
            }
        }
        return redirect()->route('manager-test',['prof_id'=>$p]);
    }
    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        /*$test = array(
            'nom' => $request->nom,
            'note' => $request->note,
            'duree' => $request->duree,
            'salle' => $request->salle,
            'date' => $request->date,
            'discription' => $request->discription,
            'matiere_id' => $request->matiere_id,
            'd1' => $request->d1,
            'd2' => $request->d2,
            'd3' => $request->d3,
            'd4' => $request->d4,
            'd5' => $request->d5
        );
        $profid = Professeur::findOrFail($request->professeur_id)->first();
        Test::findOrFail($request->test_id)->update($test);
        return redirect()->route('create-test.index', $profid);*/
    }

    public function update1(Request $request)
    {
        $test = array(
            'nom' => $request->nom,
            'note' => $request->note,
            'duree' => $request->duree,
            'salle' => $request->salle,
            'date' => $request->date,
            'discription' => $request->discription,
            'matiere_id' => $request->matiere_id,
            'd1' => $request->d1,
            'd2' => $request->d2,
            'd3' => $request->d3,
            'd4' => $request->d4,
            'd5' => $request->d5
        );
        Test::find($request->test_id)->update($test);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy(Request $test)
    {
        $deletetest = Test::find($test->test_id);
        $profid = Professeur::findOrFail($deletetest->professeur_id)->first();
        $deletetest->delete();
        return redirect()->back();
    }

    public function import(Request $request)
    {

    }

    public function export_pdf($test_id)
    {
        // Fetch all customers from database
        $sessions = Session::query()->get()->where('test_id', '=', $test_id);
        // Send data to the view using loadView function of PDF facade
        $pdf = PDF::loadView('profauth.pdf', compact('sessions'));
        // If you want to store the generated pdf to the server then you can use the store function
        $pdf->save(storage_path() . '_filename.pdf');
        // Finally, you can download the file using download function
        return $pdf->download('pdf.test');
    }

    public function note_export_pdf($test_id)
    {
        // Fetch all customers from database
        $sessions = Session::query()->get()->where('test_id', '=', $test_id);
        // Send data to the view using loadView function of PDF facade
        $pdf = PDF::loadView('profauth.note_pdf', compact('sessions'));
        // If you want to store the generated pdf to the server then you can use the store function
        $pdf->save(storage_path() . '_filename.pdf');
        // Finally, you can download the file using download function
        return $pdf->download('pdf.note');
    }

    public function randomPassword()
    {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }

    public function index1($s)
    {
        $session = Session::find(intval($s));
        $tests = Test::query()->orderBy('test_id', 'asc');
        $data['s'] = $session;
        $data['t'] = $tests;
        return view('quiz.index')->with('data', $data);
    }

    public function index2($prof)
    {
        //$tests['tests'] = Test::OrderBy('test_id', 'asc')->paginate(10);
        //return redirect()->route('create-test.index');
        $professeur = Professeur::all();
        foreach ($professeur as $p) {
            if ($p->professeur_id == $prof)
                return view('create-test.index', ['p' => $p]);
        }

    }

    public function question($test_id, $session)
    {


        $test = Test::findOrfail($test_id);
        $qcms['qcms'] = $test->qcm;
        $binaires['binaires'] = $test->binaire;
        $text_libres['text_libre'] = $test->text_libre;

        return view('question.index', compact('qcms', 'test', 'binaires', 'text_libres', 'session', $test));


    }

    public function reponses($test)
    {
        //$text_libre = Text_libre::query()->where('test_id','=',$test)->get();
        $session = Session::query()->where('test_id', '=', $test)->get();
        $test = Test::find($session->first()->test_id);
        $prof = Professeur::find($test->professeur_id);
        return view('reponses.index', compact('session') , compact('prof'));
        //return compact('text_libre');
    }


    public function setSession(Request $request)
    {
        if ($request->active == 0) {
            $sessions = Session::query()->where('test_id', '=', $request->test_id)->get();

            foreach ($sessions as $s) {
                $s1 = array(
                    'session_id' => $s->session_id,
                    'etudiant_id' => $s->etudiant_id,
                    'test_id' => $s->test_id,
                    'username' => $s->username,
                    'password' => $s->password,
                    'active' => 1,
                );
                Session::findOrFail($s->session_id)->update($s1);
            }
        } else {
            $sessions = Session::query()->where('test_id', '=', $request->test_id)->get();
            foreach ($sessions as $s) {
                $s1 = array(
                    'session_id' => $s->session_id,
                    'etudiant_id' => $s->etudiant_id,
                    'test_id' => $s->test_id,
                    'username' => $s->username,
                    'password' => $s->password,
                    'active' => 0,
                );
                Session::findOrFail($s->session_id)->update($s1);
            }
        }
        return redirect()->back();
    }

    public function forceDelete($test_id)
    {
        $test = Test::query()->where('test_id', $test_id)->first();
        $test->forceDelete();
        return redirect()->back();
    }

    public function restoreTest(Request $request)
    {
        $test_ids = $request->tests;
        //$test_ids = array_values($request->tests);
        //return $test_ids;
        if (!is_null($test_ids)) {
            foreach ($test_ids as $test_id) {
                Test::withTrashed()->find($test_id)->restore();
                $currentTest = Test::find($test_id);
                $nbe = ceil(Etudiant::query()->where('filiere_id',$currentTest->filiere_id)->count() / $currentTest->num);
                $numEtu = Etudiant::query()->where('filiere_id',$currentTest->filiere_id)->count();
                $filiere = filiere::where('filiere_id',$currentTest->filiere_id)->first();
                $skip = 0;
                for ($i = 0; $i < $nbe; $i++) {

                    if ($numEtu > $currentTest->num) {
                        $groupe = array(
                            'test_id' => $currentTest->test_id,
                            'filiere_id' => $currentTest->filiere_id,
                            'niveau_id' => $filiere->niveau_id,
                            'nombre_etudiant' => $currentTest->num,

                        );

                        $g = new Groupe($groupe);

                        $etudiant = Etudiant::query()->where('filiere_id',$currentTest->filiere_id)->skip($skip)->take($currentTest->num)->get();
                        $numEtu = $numEtu - $currentTest->ng;
                        $skip += $currentTest->num;
                    } else {
                        $groupe = array(
                            'test_id' => $currentTest->test_id,
                            'filiere_id' => $currentTest->filiere_id,
                            'niveau_id' => $filiere->niveau_id,
                            'nombre_etudiant' => $numEtu,
                        );
                        $g = new Groupe($groupe);
                        $etudiant = Etudiant::query()->where('filiere_id',$currentTest->filiere_id)->skip($skip)->take($numEtu)->get();
                        $skip += $numEtu;
                    }


                    foreach ($etudiant as $e) {
                        $e->groupe()->save($g);
                        $session = array(
                            'etudiant_id' => $e->etudiant_id,
                            'test_id' => $currentTest->test_id,
                            'username' => strtolower(str_replace(" ", '', $e->nom . $e->prenom . $e->etudiant_id)),
                            'password' => $this->randomPassword(),

                        );
                        $s = Session::query()->create($session);
                    }
                }
            }
        }
        return redirect()->back();
    }

    public function indexRestore()
    {
        return view('create-test.restore');
    }

    public function forceDeleteMass(Request $request)
    {
        $test_ids = $request->tests;
        //$test_ids = array_values($request->tests);
        //return $test_ids;
        if (!is_null($test_ids)) {
            foreach ($test_ids as $test_id) {
                Test::withTrashed()->find($test_id)->forceDelete();
                //echo $test_id. " ";
            }
        }
        return redirect()->back();
    }
}
