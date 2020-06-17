<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Database\Eloquent\SoftDeletes;

class Etudiant extends Model implements ToModel, WithHeadingRow
{
    use SoftDeletes;
    protected $table = "etudiant";
    protected $fillable = ['cin', 'niveau_id', 'filiere_id', 'cne', 'nom', 'prenom', 'email_address', 'username', 'password', 'numero', 'num_apologie', 'image'];
    protected $primaryKey = 'etudiant_id';

    /**
     * @param array $row
     *
     * @return Model|Model[]|null
     */
    public function model(array $row)
    {
        // TODO: Implement model() method.
        return new Etudiant(array(
            'cin' => $row['cin'],
            'niveau_id' => $row['niveau'],
            'filiere_id' => $row['filiere'],
            'cne' => $row['cne'],
            'nom' => $row['nom'],
            'prenom' => $row['prenom'],
            'email_address' => $row['email'],
            'numero' => $row['numero'],
            'num_apologie' => $row['num_apologie'],
            'image' => $row['image'],

        ));
    }

    public function groupe()
    {
        return $this->belongsToMany('App\Groupe', 'etudiant_groupe', 'etudiant_id', 'groupe_id');
    }

    public function session()
    {
        return $this->hasOne('App\Etudiant', 'etudiant_id', 'etudiant_id');
    }

}
