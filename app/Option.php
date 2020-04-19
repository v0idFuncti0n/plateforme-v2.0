<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class Option extends Model implements ToModel, WithHeadingRow
{
    use SoftDeletes;
    protected $table="option";
    protected $fillable=['option_text','point','question_id','binaire_id'];
    protected $primaryKey='option_id';
    protected $dates = ['deleted_at'];
    //
    /**
     * @param array $row
     *
     * @return Model|Model[]|null
     */
    public function model(array $row)
    {
        // TODO: Implement model() method.
        return new option(array(
            'option_text'     => $row['option_text'],
            'point'    => $row['point'],
            'question_id'=>$row['question_id'],
            'binaire_id'=>$row['binaire_id']
        ));
    }

    public function qcm(){
    return $this->belongsTo('App\qcm','question_id','question_id');
}

    public function binaire(){
        return $this->belongsTo('App\binaire','binaire_id','binaire_id');
    }
}
