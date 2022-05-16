<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ExperienceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('experience')->insert([
            'id' => '1',
            'company' => 'Freelancer',
            'entrance' => 'Junho/2020',
            'departure' => 'Atual',
            'position' => 'Desenvolvedor Front End / Web Designer',
            'id_profile' => '1',
        ]);
        DB::table('experience')->insert([
            'id' => '2',
            'company' => 'Prefeitura municipal de Palmares do Sul / RS.',
            'entrance' => 'Abril/2017',
            'departure' => 'Atual',
            'position' => 'Professor',
            'id_profile' => '1',
        ]);
    }
}
