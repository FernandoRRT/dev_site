<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProfileTableSeeder::class);
        $this->call(ExperienceTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(AbiliiesTableSeeder::class);
        $this->call(EducationTableSeeder::class);
        $this->call(ExpAssignTableSeeder::class);
        $this->call(FrameworksTableSeeder::class);
        $this->call(LanguagesTableSeeder::class);
        $this->call(UserTableSeeder::class);
    }
}
