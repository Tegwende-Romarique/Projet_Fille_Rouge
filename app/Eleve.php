<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    public function etablissement()
    {
        return $this->belongsTo('App\Models\Etablissement');
    }

    public function classes()
    {
        return $this->belongsTo('App\Models\Classe');
    }

    public function notes()
    {
        return $this->hasMany('App\Models\Note');
    }
}
