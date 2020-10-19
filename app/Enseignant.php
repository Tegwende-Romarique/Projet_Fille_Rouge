<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
  
    public function  etablissements()
    {
        return $this->belongsToMany('App\Models\Etablissement');
    }
}
