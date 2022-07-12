<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\LessonUser;

class LessonUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LessonUser::factory()->count(10)->create();
    }
}
