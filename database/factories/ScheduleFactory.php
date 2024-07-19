<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'subject_id' => 5,
            'jam_mulai' => fake()->time(),
            'jam_selesai' => fake()->time(),
            'ruangan' => Str::random(3),
            'tahun_akademik' => fake()->year(),
            'semester' => rand(1, 8),
        ];
    }
}
