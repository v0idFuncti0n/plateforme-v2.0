<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionTemp extends Model
{
    protected $table="question_temp";
    protected $fillable=['test_id','question_text','note','difficulty','type'];
    protected $primaryKey='question_id';
    protected $dates = ['deleted_at'];

    public function options(){
        return $this->hasMany('App\OptionTemp','question_id');
    }
    public function test(){
        return $this->belongsTo('App\Test','test_id','test_id');
    }

    public static function boot ()
    {
        parent::boot();

        self::deleting(function (QuestionTemp $q) {
            $options = OptionTemp::query()->where('binaire_id', $q->question_id)->orWhere('question_id', $q->question_id)->get();
            foreach ($options as $o)
            {
                $o->delete();
            }

        });
    }
}
