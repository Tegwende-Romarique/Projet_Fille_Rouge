<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etablissement extends Model
{
    protected $guarded =[];
    // protected $fillable = ['nom', 'ville', 'type', 'user_id'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function actualites()
    {
        return $this->hasMany('App\Models\Actualite');
    }

    public function offres()
    {
        return $this->hasMany('App\Models\Offre');
    }

    public function evenements()
    {
        return $this->hasMany('App\Models\Evenement');
    }

    public function photos()
    {
        return $this->hasMany('App\Models\Photo');
    }

    public function postes()
    {
        return $this->hasMany('App\Models\Poste');
    }


    public function  eleves()
    {
        return $this->hasMany('App\Models\Eleve');
    }

    public function enseignants()
    {
        return $this->belongsToMany('App\Models\Enseignant');
    }

    public function tuteurs()
    {
        return $this->belongsToMany('App\Models\Tuteur');
    }
}

