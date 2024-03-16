<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Candidature extends Model
{
    protected $fillable = [
        'nom', 'prenom', 'sexe', 'cin', 'scan_cin', 'cne_cme', 'date_naissance',
        'nationalite', 'adresse', 'ville_natale', 'num_tel', 'photo_personnel',
        'merite', 'annee_universitaire', 'etat', 'choix_classement_id', 'user_id', 'diplome_id'
    ];
     protected $primaryKey = "id"; 
    public function choix()
    {
        return $this->hasOne(Choix_classement::class, 'candidature_id');
    }

    
   

    public function diplome()
    {
        return $this->belongsTo(Diplome::class);
    }
    public function user()
    {
        return $this->hasOne(User::class, 'user_id');
    }
}
