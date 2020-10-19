<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    protected $guarded=[];
    
    public function etablissement()
    {
        return $this->belongsTo('App\Models\Etablissement');
    }
    public function user()
    {
        return $this->hasMany(User::class);
    }
}
