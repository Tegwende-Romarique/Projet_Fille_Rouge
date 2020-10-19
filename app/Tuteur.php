<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tuteur extends Model
{
    public function  etablissements()
    {
        return $this->belongsToMany('App\Models\Etablissement');
    }
}
