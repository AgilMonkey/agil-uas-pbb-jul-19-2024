<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pendaftaran>
 */
class PendaftaranFactory extends Factory
{
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'username' => fake()->userName(),
            'email' => fake()->email(),
            'password' => static::$password ??= Hash::make('password'),
            'alamat' => fake()->address(),
            'provinsi_id' => rand(1, 34),
            'negara_id' => 1,
            'kode_pos' => fake()->postcode(),
            'handphone' => fake()->phoneNumber(),
            'captcha' => Str::random(7),
        ];
    }
}
