<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profile')->insert([
            'id' => '1',
            'name' => 'Fernando da Rosa Rosado Torres',
            'area' => 'Desenvolvedor Front-End Júnior',
            'bio' => 'Sou formado em análise e desenvolvimento de sistemas e procuro transição de carreira para área de Desenvolvedor Front-End em cargo de nível Júnior. Minhas principais competências são em React, Styled Components, CSS e HTML. Também possuo conhecimentos menores em PHP, Laravel, SQL, MySQL, Vue, Flutter e React Native.',
            'city' => 'Balneário Pinhal, Rio Grande do Sul, Brasil.',
            'phone' => '(51)99326-1772',
            'email' => 'contato@fernandotorres.dev.br',
            'website' => 'https://fernandotorres.dev.br/',
            'linkedin' => 'https://www.linkedin.com/in/fernando-rosado-torres',
            'github' => 'https://github.com/FernandoRRT',
        ]);
    }
}
