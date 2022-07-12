<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CourseUser;

class CourseUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CourseUser::factory()->count(20)->create();
    }
}
