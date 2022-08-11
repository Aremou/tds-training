<?php

namespace Database\Factories;

use App\Models\Categorie;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategorieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Categorie::class;

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
            'description' => $this->faker->text($maxNbChars = 100),
        ];
    }
}
