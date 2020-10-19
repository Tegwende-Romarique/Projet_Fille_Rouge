<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cycle extends Model
{
    public function  classes()
    {
        return $this->hasMany('App\Models\Classe');
    }
 
}
