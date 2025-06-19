<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vak;

class VakSeeder extends Seeder
{
    public function run(): void
    {
        Vak::insert([
            ['naam' => 'Laravel', 'beschrijving' => 'Laravel Framework', 'docent_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'PHP Basics', 'beschrijving' => 'PHP Fundamentals', 'docent_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Webdesign', 'beschrijving' => ' HTML, CSS, JavaScript', 'docent_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'API Development', 'beschrijving' => 'api development', 'docent_id' => 3, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
