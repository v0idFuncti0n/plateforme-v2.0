<?php

namespace App\Http\Controllers;

use App\departement;
use App\Option;
use App\OptionTemp;
use App\Professeur;
use App\QuestionTemp;
use App\Reponse_text;
use App\Test;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\QCM;

class QCMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('create-question.index');
    }

    public function index2($test_id)
    {
        $test['test'] = Test::findOrfail($test_id);
        $prof = Professeur::find($test['test']->professeur_id);
        return view('create-qcm.index', compact('test'),compact('prof'));
    }

    public function index1(Request $request)
    {
        return view('create-qcm.index');
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
        $i = 0;
        $question = $request->question;
        $test_id = $request->test_id;
        $options = $request->input('option_text');
        $nbrs = $request->input('hidden');

        $nbrs2 = array($nbrs);
        $point = $request->input('point');
        $QCM = array(
            'question_text' => $question,
            'difficulty' => $request->difficulty,
            'test_id' => $test_id,
            'note' => $request->note,
            'type' => 'qcm'
        );
        $id = QuestionTemp::create($QCM);
        for ($i = 1; $i <= count($nbrs); $i++) {

            $test = in_array($i + 0, $point);
            if ($test == true) {
                $option = array(
                    'option_text' => $options[$i - 1],
                    'question_id' => $id->question_id,
                    'point' => '1'
                );
                OptionTemp::create($option);

            }
            if ($test == false) {
                $option = array(
                    'option_text' => $options[$i - 1],
                    'question_id' => $id->question_id,
                    'point' => '0'
                );
                OptionTemp::create($option);


            }


        }

        $count = count($nbrs);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
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
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $qcm = array(


            'question_text' => $request->question_text,
            'note' => $request->note,
            'difficulty' => $request->difficulty,
            'test_id' => $request->test_id,

        );

        qcm::findOrfail($request->question_id)->update($qcm);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $QCM)
    {
        $deleteQCM = QCM::find($QCM->question_id);
        $deleteQCM->delete();
        //
        return redirect()->back();
    }

    public function import(Request $request)
    {

    }

    public function forceDelete(Request $request)
    {
        $test = QCM::query()->where('question_id', $request->force_question_id)->first();
        $test->forceDelete();
        return redirect()->back();
    }

    public function restoreQCM(Request $request)
    {
        $question_ids = $request->questions;
        if (!is_null($question_ids)) {
            foreach ($question_ids as $question_id) {
                QCM::withTrashed()->find($question_id)->restore();

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
                QCM::withTrashed()->find($question_id)->forceDelete();

            }
        }
        return redirect()->back();
    }


}
