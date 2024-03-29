<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Candidature;
use App\Models\Diplome;
use App\Models\Choix_classement;

class Allmodul extends Seeder
{
    public function run()
    {
        // Create users
        User::factory()
            ->count(10)
            ->create();
    }
    
}
