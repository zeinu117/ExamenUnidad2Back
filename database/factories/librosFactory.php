<?php

namespace Database\Factories;

use App\Models\libros;
use Illuminate\Database\Eloquent\Factories\Factory;

class librosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = libros::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker-> name(),
            'autor' => $this->faker-> name(),
            'editorial' => $this->faker-> sentence(),
            'fechaPublicacion' => $this->faker->date(),
            'numeroPaginas' => $this->faker->numberBetween(100, 1000)
        ];
    }
}
