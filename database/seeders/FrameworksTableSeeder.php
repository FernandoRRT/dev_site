<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class FrameworksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('frameworks')->insert([
            'framework' => 'JavaScript',
            'level' => 'Excelente',
            'id_profile' => '1',
        ]);
        DB::table('frameworks')->insert([
            'framework' => 'CSS/SASS',
            'level' => 'Muito bom',
            'id_profile' => '1',
        ]);
        DB::table('frameworks')->insert([
            'framework' => 'Styled Components',
            'level' => 'Muito bom',
            'id_profile' => '1',
        ]);
        DB::table('frameworks')->insert([
            'framework' => 'React',
            'level' => 'Muito bom',
            'id_profile' => '1',
        ]);
        DB::table('frameworks')->insert([
            'framework' => 'Vue',
            'level' => 'Bom',
            'id_profile' => '1',
        ]);
        DB::table('frameworks')->insert([
            'framework' => 'React native',
            'level' => 'Bom',
            'id_profile' => '1',
        ]);
        DB::table('frameworks')->insert([
            'framework' => 'PHP',
            'level' => 'Bom',
            'id_profile' => '1',
        ]);
        DB::table('frameworks')->insert([
            'framework' => 'Flutter',
            'level' => 'Bom',
            'id_profile' => '1',
        ]);
        DB::table('frameworks')->insert([
            'framework' => 'Laravel',
            'level' => 'Básico',
            'id_profile' => '1',
        ]);
    }
}
