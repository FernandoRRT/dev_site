<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([
            'language' => 'Inglês',
            'level' => 'B2',
            'id_profile' => '1',
        ]);
        DB::table('languages')->insert([
            'language' => 'Português',
            'level' => 'C2',
            'id_profile' => '1',
        ]);
    }
}
