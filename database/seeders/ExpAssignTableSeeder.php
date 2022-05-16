<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ExpAssignTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('expassign')->insert([
            'assignment' => 'Desenvolvimento de blogs no Wordpress.',
            'id_experience' => '1',
        ]);
        DB::table('expassign')->insert([
            'assignment' => 'Sites pessoais (hotsites).',
            'id_experience' => '1',
        ]);
        DB::table('expassign')->insert([
            'assignment' => 'Landing Pages para E-mail marketing.',
            'id_experience' => '1',
        ]);
        DB::table('expassign')->insert([
            'assignment' => 'Auxílio na criação de marcas.',
            'id_experience' => '1',
        ]);
        DB::table('expassign')->insert([
            'assignment' => 'Planejamento e organização de planos de ação para ensino com ênfase na redução da evasão escolar.',
            'id_experience' => '2',
        ]);
        DB::table('expassign')->insert([
            'assignment' => 'Ministrar aulas de história para os anos finais do Ensino Fundamental.',
            'id_experience' => '2',
        ]);
        DB::table('expassign')->insert([
            'assignment' => 'Organização e coordenação de feiras pedagógicas.',
            'id_experience' => '2',
        ]);
    }
}
