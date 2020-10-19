<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    public function eleve()
    {
        return $this->belongsTo('App\Models\Eleve');
    }

    public function matiere()
    {
        return $this->belongsTo('App\Models\Matiere');
    }
}
