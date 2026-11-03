<?php

namespace Database\Seeders;

use App\Models\Lagu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LaguSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lagu::factory(100)->create();
    }
}
