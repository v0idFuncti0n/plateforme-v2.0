<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Database\Eloquent\SoftDeletes;

class Module extends Model implements ToModel, WithHeadingRow
{

    use SoftDeletes;

    protected $table="module";
    protected $fillable=['nom_module'];
    protected $primaryKey='module_id';

    /**
     * @param array $row
     *
     * @return Model|Model[]|null
     */
    public function model(array $row)
    {
        // TODO: Implement model() method.
        return new Module(array(
            'nom_module' => $row['nom_module']
        ));
    }

    public function filiere(){
        return $this->belongsToMany('App\filiere','filiere_module','module_id','filiere_id');
    }
    public function matiere(){
        return $this->hasMany('App\matiere','matiere_id','matiere_id');
}
}
