<?php

namespace App\Http\Controllers;

use App\Etudiant;
use App\filiere;
use App\Matiere;
use App\Niveau;

class AjaxController extends Controller
{
    public function filieres($id)
    {

        $filieres = filiere::where('departement_id', $id)->get();
        $options = array();
        foreach ($filieres as $filiere) {
            array_push($options,"<option value='$filiere->filiere_id'>$filiere->nom</option>");
        }
        return $options;
    }

    public function nombreDesEtudiantDansFiliereNiveau($filiere_id,$niveau_id){
        $data['filiere'] = filiere::find($filiere_id)->nom;
        $data['niveau'] = Niveau::find($niveau_id)->nom;
        $data['etudiants_count'] = Etudiant::query()->where('filiere_id',$filiere_id)->where('niveau_id',$niveau_id)->count();

        return $data;
    }

    public function matiereDansModule($module_id){
        $matieres = Matiere::query()->where("module_id",$module_id)->get();
        return json_encode($matieres);
    }

}
