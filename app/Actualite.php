<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actualite extends Model
{
    protected $guarded=[];
    
    public function etablissement()
    {

        return $this->belongsTo('App\Models\Etablissement');
    }
}
