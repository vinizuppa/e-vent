<?php

namespace Database\Factories;

use App\Models\Activity;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActivityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Activity::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => "Atividade teste - \"" . $this->faker->word() . "\"",
            "description" => $this->faker->paragraph(),
            "start_date" => $this->faker->dateTimeBetween('+0 days', '+1 days'),
            "end_date" => $this->faker->dateTimeBetween('+1 days', '+14 days'),
            "type" => $this->faker->randomElement(['Curso', 'Palestra', 'Seminário']),
            "place" => $this->faker->randomElement(['Auditório', 'Quadra', 'Laboratório']),
            "vacancies" => $this->faker->randomNumber(2),
            "instructions" => $this->faker->paragraph(),
            "responsible" => $this->faker->firstName()
        ];
    }
}
