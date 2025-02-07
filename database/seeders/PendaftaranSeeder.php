<?php

namespace Database\Seeders;

use App\Models\Pendaftaran;
use App\Policies\PendaftaranPolicy;
use Database\Factories\PendaftaranFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PendaftaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pendaftaran::factory(30)->create();
    }
}
