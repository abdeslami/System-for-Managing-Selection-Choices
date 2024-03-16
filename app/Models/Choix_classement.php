<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Choix_classement extends Model
{
    use HasFactory;
    public function candidature(){
        return $this->belongsTo(Candidature::class);
    }
}
