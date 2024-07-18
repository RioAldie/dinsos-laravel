<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul' => $this->faker->sentence,
            'lokasi' => $this->faker->address,
            'waktu' => $this->faker->time,
            'date' => $this->faker->date,
            'peserta' => $this->faker->numberBetween(10, 100),
            'isActive' => $this->faker->boolean,
        ];
    }
}
