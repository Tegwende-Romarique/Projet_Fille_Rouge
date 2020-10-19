<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parent extends Model
{
    public function etablissement(){
        return $this->hasMany(Etablissement::class);
    }
}
