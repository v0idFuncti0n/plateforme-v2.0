<?php

namespace App\Http\Controllers;

use App\binaire;
use App\departement;
use App\option;
use App\OptionTemp;
use App\Professeur;
use App\QCM;
use App\QuestionTemp;
use App\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BinaireController extends Controller
{

    public function index()
    {
        return view('create-binaire.index');
    }
    public function index1($test_id)
    {
        $test=test::find($test_id);
        $prof = Professeur::find($test->professeur_id);
        return view('create-binaire.index',compact('test'),compact('prof'));
    }

    public function index2(){
    $binaires['binaires'] = binaire::OrderBy('binaire_id', 'asc')->paginate(10);
        return view('binaire.index',compact('binaires'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store1(Request $request)
    {
        $question =$request->question;
        $test_id=$request->test_id;
        $choice =$request->choice ;
        $question = array(
            'question_text'=> $question,
            'test_id' =>$test_id,
            'difficulty' => $request->difficulty,
            'note' => $request->note,
            'type' => 'binaire'
        );
       $id= QuestionTemp::create($question);
       if($choice=='vrai') {
           $option = array(
               'option_text' => 'vrai',
               'binaire_id' => $id->question_id ,
               'point' => '1',
               'type'=>'binaire'
           );
           OptionTemp::create($option);
           $option1 = array(
               'option_text' => 'faux',

               'binaire_id' => $id->question_id ,
               'point' => '0',
               'type'=>'binaire'
           );
           OptionTemp::create($option1);
       }
        if($choice=='faux') {
            $option = array(
                'option_text' => 'faux',

                'binaire_id' => $id->question_id ,
                'point' => '1',
                 'type'=>'binaire'

            );
            OptionTemp::create($option);
            $option1 = array(
                'option_text' => 'vrai',
                'binaire_id' => $id->question_id ,
                'point' => '0',
                'type'=>'binaire'

            );
            OptionTemp::create($option1);
        }
       return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\binaire  $binaire
     * @return \Illuminate\Http\Response
     */
    public function show(binaire $binaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\binaire  $binaire
     * @return \Illuminate\Http\Response
     */
    public function edit(binaire $binaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\binaire  $binaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, binaire $binaire)
    {
        $binaire = array(


            'question_text' => $request->question_text,
            'note' => $request->note,
            'difficulty' => $request->difficulty,
            'test_id' => $request->test_id,

        );

        binaire::findOrfail($request->binaire_id)->update($binaire);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\binaire  $binaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $binaire)
    {
        $delete = $binaire->all();
        $deletebinaire = binaire::find($binaire->binaire_id);
        $deletebinaire->delete();
        return redirect()->back();
    }

    public function forceDelete(Request $request)
    {
        $test = binaire::query()->where('binaire_id', $request->force_question_id)->first();
        $test->forceDelete();
        return redirect()->back();
    }

    public function restoreBin(Request $request)
    {
        $question_ids = $request->questions;
        if (!is_null($question_ids)) {
            foreach ($question_ids as $question_id) {
                binaire::withTrashed()->find($question_id)->restore();
                $options['options']=DB::table('option')->where('binaire_id', $question_id)->get('option_id');
                foreach ($options['options'] as $option) {
                    Option::withTrashed()->find($option->option_id)->restore();

                }

            }
        }
        return redirect()->back();
    }

    public function indexRestore()
    {
        return view('create-qcm.restore');
    }

    public function forceDeleteMass(Request $request)
    {
        $question_ids = $request->questions;
        if (!is_null($question_ids)) {
            foreach ($question_ids as $question_id) {
                binaire::withTrashed()->find($question_id)->forceDelete();

            }
        }
        return redirect()->back();
    }
}
