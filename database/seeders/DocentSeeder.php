<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Docent;

class DocentSeeder extends Seeder
{
    public function run(): void
    {
        Docent::insert([
            ['naam' => 'Hans van de Qeeuz', 'hobby' => 'Programmeren', 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Bander Kalam', 'hobby' => 'Fotografie', 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Jsdoe van de lind', 'hobby' => 'schoonmaken', 'created_at' => now(), 'updated_at' => now()],

        ]);
    }
}
