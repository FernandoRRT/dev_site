<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class EducationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('education')->insert([
            'course' => 'Análise e desenvolvimento de sistemas',
            'institution' => 'Uninter – Centro Universitário Internacional',
            'type' => 'Tecnólogo',
            'start' => 'Março/2019',
            'conclusion' => 'Março/2021',
            'id_profile' => '1',
        ]);
        DB::table('education')->insert([
            'course' => 'Gestão de Turismo',
            'institution' => 'Uninter – Centro Universitário Internacional',
            'type' => 'Tecnólogo',
            'start' => 'Outubro/2015',
            'conclusion' => 'Fevereiro/2017',
            'id_profile' => '1',
        ]);
        DB::table('education')->insert([
            'course' => 'Educação continuada',
            'institution' => 'IFSUL – Instituto Federal do Rio Grande do Sul',
            'type' => 'Pós-graduação Lato Sensu em educação',
            'start' => 'Março/2009',
            'conclusion' => 'Outubro/2012',
            'id_profile' => '1',
        ]);
        DB::table('education')->insert([
            'course' => 'História',
            'institution' => 'FAPA – Faculdades Porto Alegrense',
            'type' => 'Graduação plena',
            'start' => 'Março/2003',
            'conclusion' => 'Dezembro/2008',
            'id_profile' => '1',
        ]);
    }
}
