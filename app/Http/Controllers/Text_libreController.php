<?php

namespace App\Http\Controllers;

use App\Professeur;
use App\Test;
use App\Text_libre;
use Illuminate\Http\Request;

class Text_libreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }

    public function index2($test_id)
    {
        $test=test::findOrfail($test_id) ;
        $prof = Professeur::find($test['test']->professeur_id);
        return view('create-text-libre.index',compact('test'),compact('prof'));
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
    public function store(Request $request)
    {
        //

        $text_libre = array(
            'question_text' => $request->question_text,
            'difficulty' => $request->difficulty,
            'test_id' => $request->test_id,
            'note'  => $request->note,
        );

        Text_libre::query()->create($text_libre);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $text_libre = array(
            'question_text' => $request->question_text,
            'difficulty' => $request->difficulty,
            'test_id' => $request->test_id,
            'note'  => $request->note,
        );

        Text_libre::query()->find($request->question_id)->update($text_libre);
        return redirect()->back();
    }

    public function destroy(Request $text_libre)
    {
        $deletetextlibre = Text_libre::query()->find($text_libre->question_id);
        $deletetextlibre->delete();
        return redirect()->back();
    }

    public function forceDelete(Request $request)
    {
        $test = Text_libre::query()->where('question_id', $request->force_question_id)->first();
        $test->forceDelete();
        return redirect()->back();
    }

    public function restoreTextLibre(Request $request)
    {
        $question_ids = $request->questions;
        if (!is_null($question_ids)) {
            foreach ($question_ids as $question_id) {
                Text_libre::withTrashed()->find($question_id)->restore();

            }
        }
        return redirect()->back();
    }

    public function indexRestore()
    {
        return view('create-text-libre.restore');
    }

    public function forceDeleteMass(Request $request)
    {
        $question_ids = $request->questions;
        if (!is_null($question_ids)) {
            foreach ($question_ids as $question_id) {
                Text_libre::withTrashed()->find($question_id)->forceDelete();

            }
        }
        return redirect()->back();
    }
}
