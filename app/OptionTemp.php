<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OptionTemp extends Model
{
    protected $table = "option_temp";
    protected $fillable = ['option_text', 'point', 'question_id', 'binaire_id','option_image','type'];
    protected $primaryKey = 'option_id';
    protected $dates = ['deleted_at'];

    public function question()
    {
        return $this->belongsTo('App\QuestionTemp', 'question_id', 'question_id');
    }
}
