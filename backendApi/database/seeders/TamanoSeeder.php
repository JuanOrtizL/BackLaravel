<?php

namespace Database\Seeders;

use App\Models\Tamano;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TamanoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tamano::factory()->count(5)->create();
    }
}
