<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etablissement extends Model
{
    protected $fillable = ['nom', 'ville', 'type', 'user_id'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
