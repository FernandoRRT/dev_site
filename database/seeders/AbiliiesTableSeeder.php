<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AbiliiesTableSeeder extends Seeder 
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abilities')->insert([
            'name' => 'HTML semântico',
            'id_profile' => '1',
        ]);
        DB::table('abilities')->insert([
            'name' => 'Boas práticas de acessibilidade',
            'id_profile' => '1',
        ]);
        DB::table('abilities')->insert([
            'name' => 'Metodologia CSS BEM',
            'id_profile' => '1',
        ]);
        DB::table('abilities')->insert([
            'name' => 'Noções de UI / UX',
            'id_profile' => '1',
        ]);
        DB::table('abilities')->insert([
            'name' => 'Versionamento de código',
            'id_profile' => '1',
        ]);
    }
}
