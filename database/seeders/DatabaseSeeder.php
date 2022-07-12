<?php

namespace Database\Seeders;

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
        $this->call([
            UsersTableSeeder::class,
            CoursesTableSeeder::class,
            LessonTableSeeder::class,
            CourseUserTableSeeder::class,
            TagTableSeeder::class,
            ReviewTableSeeder::class,
            ProgramTableSeeder::class,
            CourseTagTableSeeder::class,
            LessonUserTableSeeder::class,
            ProgramUserTableSeeder::class,
        ]);
    }
}
