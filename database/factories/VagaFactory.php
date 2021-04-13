<?php

namespace Database\Factories;

use App\Models\Vaga;
use Illuminate\Database\Eloquent\Factories\Factory;

class VagaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vaga::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            'vaga' => $this->faker->name,
            'descricao' => $this->faker->text,
            'curtidas' => rand()
        ];
    }
}
