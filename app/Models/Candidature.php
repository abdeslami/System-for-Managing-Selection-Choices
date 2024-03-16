<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidature extends Model
{
    use HasFactory;

    public function diplomes(){

        return $this->hasOne(Diplome::class);
    }
    public function choix_classement(){
        return $this->hasOne(Choix_classement::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
