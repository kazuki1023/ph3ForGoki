<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QuizzesTableSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Quiz::create([
            'name' => 'ITクイズ',
        ]);
    }
}
