<?php

namespace Database\Factories;

use App\Models\Formation;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class FormationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Formation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $nom = $this->faker->name();
        $slug = Str::slug($nom, '-');

        return [
            'nom' => $nom,
            'slug' => $slug,
            'reference' => $this->faker->swiftBicNumber(),
            'niveau' => $this->faker->randomElement($array = array ('debutant', 'intermediaire', 'expert')),
            'duree' => $this->faker->randomDigitNotNull() . 'j',
            'lieu' => 'TDS',
            'type_formation' => $this->faker->randomElement($array = array ('Présentiel', 'virtuel ', 'hybride')),
            'description' => $this->faker->text($maxNbChars = 700),
            'objectif' => $this->faker->text($maxNbChars = 300),
            'prerequis' => $this->faker->text($maxNbChars = 200),
            'public' => $this->faker->text($maxNbChars = 200),
            'points_forts' => $this->faker->text($maxNbChars = 200),
            'certification' => $this->faker->text($maxNbChars = 100),
            'programme' => $this->faker->text($maxNbChars = 1000),
            'categorie_id' => $this->faker->randomElement($array = array ('1', '2', '3', '4', '5', '6', '7', '8', '9', '10')),

        ];
    }
}
