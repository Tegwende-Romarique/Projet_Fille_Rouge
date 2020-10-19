<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    public function notes()
    {
        return $this->hasMany('App\Models\Note');
    }
}
