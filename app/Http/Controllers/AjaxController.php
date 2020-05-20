<?php

namespace App\Http\Controllers;

use App\filiere;

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
}
