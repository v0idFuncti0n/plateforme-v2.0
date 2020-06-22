<?php

namespace App\Http\Controllers;

use App\binaire;
use App\Option;
use App\OptionTemp;
use App\QCM;
use App\QuestionTemp;
use App\Text_libre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionTempController extends Controller
{
    public function copyQuestionToDB($questions){
        foreach ($questions as $question) {
            if ($question->type == 'qcm') {
                $QCM = array(
                    'question_text' => $question->question_text,
                    'difficulty' => $question->difficulty,
                    'test_id' => $question->test_id,
                    'note' => $question->note,
                );
                $id = qcm::create($QCM);
                $options = OptionTemp::query()->where('question_id', $question->question_id)->get();
                foreach ($options as $option) {
                    $option = array(
                        'option_text' => $option->option_text,
                        'option_image' => $option->option_image,
                        'question_id' => $id->question_id,
                        'point' => $option->point,
                        'type'=>$option->type
                    );
                    Option::create($option);
                }

            } elseif ($question->type == 'binaire') {
                $binaire = array(
                    'question_text' => $question->question_text,
                    'test_id' => $question->test_id,
                    'difficulty' => $question->difficulty,
                    'note' => $question->note,
                    'type'=>'binaire'

                );
                $id = binaire::create($binaire);
                $options = OptionTemp::query()->where('binaire_id', $question->question_id)->get();
                foreach ($options as $option) {
                    $option = array(
                        'option_text' => $option->option_text,
                        'binaire_id' => $id->binaire_id,
                        'point' => $option->point,
                        'type'=>$question->type
                    );
                    Option::create($option);
                }
            } elseif ($question->type == 'text_libre') {
                $text_libre = array(
                    'question_text' => $question->question_text,
                    'difficulty' => $question->difficulty,
                    'test_id' => $question->test_id,
                    'note' => $question->note,
                );
                Text_libre::query()->create($text_libre);
            }
        }
    }

    public function validation(Request $request)
    {
        $test_id = $request->test_id;
        $questions = QuestionTemp::query()->where('test_id', $test_id)->get();
        $this->copyQuestionToDB($questions);
//        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
//        OptionTemp::query()->truncate();
//        QuestionTemp::query()->truncate();
//        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        QuestionTemp::query()->where('test_id',$test_id)->delete();
        return redirect()->back();
    }

    public function discardAll(Request $request)
    {
        QuestionTemp::query()->where('test_id',$request->test_id)->delete();
        return redirect()->back();
    }

    public function validationOf(Request $request){
    if($request->input('questions')!=null){
        $questionsIds= $request->questions;

        $testId = $request->test_id;
        $questions = DB::table('Question_Temp')->whereIn('question_id',$questionsIds)->get();


        $this->copyQuestionToDB($questions);
        DB::table('question_temp')->delete();
        DB::table('option_temp')->delete();
        return redirect()->back();

    }
    }
}
