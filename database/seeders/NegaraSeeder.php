<?php

namespace Database\Seeders;

use App\Models\Negara;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NegaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Negara::create([
            'negara' => 'Indonesia',
        ]);
    }
}
