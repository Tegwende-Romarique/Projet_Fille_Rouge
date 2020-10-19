<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    public function cycles()
    {
        return $this->belongsTo('App\Models\Cycle');
    }

    public function eleves()
    {
        return $this->hasMany('App\Models\Eleve');
    }
}
