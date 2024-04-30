<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Paciente>
 */
class PacienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'nome' => $this->faker->name,
        'datanascimento' => $this->faker->date,
        'cep' => $this->faker->postcode(),
        'endereco' => $this->faker ->address,
        'numcartaocred'=> $this->faker ->creditCardNumber(),
        'hobbies' => $this->faker ->text,
        'doencascronicas' => $this->faker->word,
        'remediosregulares' =>$this->faker->word,
        ];
    }
}
