<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class departement extends Model
{
    protected $table="departement";
    protected $fillable=['nom','date_cr','chef','date_fin'];
    protected $primaryKey='id_dep';
}
