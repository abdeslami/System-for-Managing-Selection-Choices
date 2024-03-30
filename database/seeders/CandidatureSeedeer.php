<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Candidature;
use App\Models\User;

class CandidatureSeeder extends Seeder
{
    public function run()
    {
        // Create candidatures and associate them with users
        Candidature::factory()->count(20)->create()->each(function ($candidature) {
            $user = User::inRandomOrder()->first();
            $candidature->user()->associate($user);
            $candidature->save();
        });
    }
}
