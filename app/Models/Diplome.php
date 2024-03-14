<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diplome extends Model
{
    use HasFactory;
    protected $primaryKey="id_condidat";
    public function condidat(){
        return $this->belongsTo(Condidature::class,"id_condidat");

    }
}
