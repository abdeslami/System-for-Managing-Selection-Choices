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
        // Create users and associate candidatures with diplomes and choix_classements
        User::factory()
            ->count(10)
            ->create()
            ->each(function ($user) {
                $candidature = Candidature::factory()->create([
                    'choix_classement_id' => Choix_classement::factory()->create()->id,
                    'diplome_id' => Diplome::factory()->create()->id,
                ]);
                $user->candidature()->save($candidature);
            });
    }
}
