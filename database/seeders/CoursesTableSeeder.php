<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'course' => 'Criando REST API com Laravel 8',
            'institution' => 'Udemy',
            'method' => 'EAD',
            'conclusion' => 'Maio/2022',
            'id_profile' => '1',
        ]);
        DB::table('courses')->insert([
            'course' => 'Desenvolvedor React',
            'institution' => 'IGTI – Instituto de Gestão da Tecnologia da Informação',
            'method' => 'Bootcamp',
            'conclusion' => 'Dezembro/2021',
            'id_profile' => '1',
        ]);
        DB::table('courses')->insert([
            'course' => 'Desenvolvedor Front-End',
            'institution' => 'IGTI – Instituto de Gestão da Tecnologia da Informação',
            'method' => 'Bootcamp',
            'conclusion' => 'Dezembro/2021',
            'id_profile' => '1',
        ]);
        DB::table('courses')->insert([
            'course' => 'Javascript ES6',
            'institution' => 'Origamid.com',
            'method' => 'EAD',
            'conclusion' => 'Julho/2021',
            'id_profile' => '1',
        ]);
        DB::table('courses')->insert([
            'course' => 'Grid Layout',
            'institution' => 'Origamid.com',
            'method' => 'EAD',
            'conclusion' => 'Janeiro/2021',
            'id_profile' => '1',
        ]);
        DB::table('courses')->insert([
            'course' => 'Flexbox',
            'institution' => 'Origamid.com',
            'method' => 'EAD',
            'conclusion' => 'Dezembro/2020',
            'id_profile' => '1',
        ]);
        DB::table('courses')->insert([
            'course' => 'CSS',
            'institution' => 'Origamid.com',
            'method' => 'EAD',
            'conclusion' => 'Novembro/2020',
            'id_profile' => '1',
        ]);
    }
}
