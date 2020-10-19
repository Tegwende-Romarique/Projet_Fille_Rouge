<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    public function etablissement()
    {
        return $this->belongsTo('App\Models\Etablissement');
    }
}
