<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Text_libre extends Model
{
    //
    use SoftDeletes;
    protected $table = "text_libre";
    protected $fillable = ['question_text','test_id','note','difficulty'];
    protected $primaryKey = 'question_id';
    protected $dates = ['deleted_at'];

    public function reponse_text()
    {
        return $this->hasMany('App\Reponse_text', 'question_id', 'question_id');
    }


}
