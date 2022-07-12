<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProgramUser;

class ProgramUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProgramUser::factory()->count(10)->create();
    }
}
