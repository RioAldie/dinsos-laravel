<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Report>
 */
class ReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'NIK' => $this->faker->unique()->numerify('##########'), // Adjust the format as needed
            'nama_pelapor' => $this->faker->name,
            'umur_pelapor' => $this->faker->numberBetween(18, 70),
            'pekerjaan' => $this->faker->jobTitle,
            'alamat' => $this->faker->address,
            'judul' => $this->faker->sentence,
            'isi' => $this->faker->paragraph,
            'nama_terlapor' => $this->faker->name,
            'umur_terlapor' => $this->faker->numberBetween(18, 70),
            'hubungan' => $this->faker->word,
            'status' => $this->faker->word,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
        ];
    }
}
