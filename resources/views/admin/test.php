<?php

namespace Database\Factories;

use App\Models\Candidature;
use App\Models\Choix_classement;
use App\Models\Diplome;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ModelFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('password'), // You might want to change this to generate hashed passwords
            'role' => 'user',
            'email_verified_at' => now(),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (User $user) {
            // Create Choix_classement
            $choixClassement = Choix_classement::factory()->create([
                'choix_1' => $this->faker->name,
                'choix_2' => $this->faker->name,
                'choix_3' => $this->faker->name,
                'choix_4' => $this->faker->name,
                'choix_5' => $this->faker->name,
                'choix_6' => $this->faker->name,
                'choix_7' => $this->faker->name,
                'choix_8' => $this->faker->name,
                'choix_9' => $this->faker->name,
            ]);

            // Create Diplome
            $diplome = Diplome::factory()->create([
                'nom' => $this->faker->lastName,
                'mention_diplome' => $this->faker->firstName,
                'etablissement' => $this->faker->randomElement(['male', 'female']),
                'scan_bac' => $this->faker->unique()->numerify('#############'),
                'scan_cin' => 'path/to/scan_cin',
                'date_bac' => $this->faker->unique()->numerify('#############'),
                'scan_diplome' => $this->faker->date(),
                'type_diplome' => $this->faker->country,
                'moyenne_s1' => $this->faker->randomNumber(2),
                'moyenne_s2' => $this->faker->randomNumber(2),
                'moyenne_s3' => $this->faker->randomNumber(2),
                'moyenne_s4' => $this->faker->randomNumber(2),
                'moyenne_s5' => $this->faker->randomNumber(2),
                'moyenne_s6' => $this->faker->randomNumber(2),
                'moyenne_s7' => $this->faker->randomNumber(2),
                'moyenne_s8' => $this->faker->randomNumber(2),
                'moyenne_s9' => $this->faker->randomNumber(2),
                'moyenne_s10' => $this->faker->randomNumber(2),
                'ville_natale' => $this->faker->city,
                'num_tel' => $this->faker->phoneNumber,
                'photo_personnel' => 'path/to/photo',
                'note_ecrite' => $this->faker->randomFloat(2, 0, 20),
                'merite' => $this->faker->randomFloat(2, 0, 20),
                'annee_universitaire' => $this->faker->year(),
                'etat' => $this->faker->randomElement(['pending', 'accepted', 'rejected']),
            ]);

            // Create Candidature with associated Choix_classement and Diplome
            $user->candidature()->save(Candidature::factory()->make([
                'nom' => $this->faker->lastName,
                'prenom' => $this->faker->firstName,
                'sexe' => $this->faker->randomElement(['male', 'female']),
                'cin' => $this->faker->unique()->numerify('#############'),
                'scan_cin' => 'path/to/scan_cin',
                'cne_cme' => $this->faker->unique()->numerify('#############'),
                'date_naissance' => $this->faker->date(),
                'nationalite' => $this->faker->country,
                'adresse' => $this->faker->address,
                'ville_natale' => $this->faker->city,
                'num_tel' => $this->faker->phoneNumber,
                'photo_personnel' => 'path/to/photo',
                'note_ecrite' => $this->faker->randomFloat(2, 0, 20),
                'merite' => $this->faker->randomFloat(2, 0, 20),
                'annee_universitaire' => $this->faker->year(),
                'etat' => $this->faker->randomElement(['pending', 'accepted', 'rejected']),
                'choix_classement_id' => $choixClassement->id,
                'diplome_id' => $diplome->id,
            ]));
        });
    }
}

