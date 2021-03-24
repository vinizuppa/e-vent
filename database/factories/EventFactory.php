<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => "Evento teste - \"" . $this->faker->word() . "\"",
            'description' => $this->faker->paragraph(),
            'address' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber(),
            'registration_fee' => $this->faker->randomFloat(2, 0, 100),
            'start_date' => $this->faker->dateTimeBetween('+0 days', '+1 days'),
            'end_date' => $this->faker->dateTimeBetween('+2 days', '+15 days'),
            'user_id' => 1
        ];
    }
}
