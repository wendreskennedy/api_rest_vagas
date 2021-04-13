<?php

namespace Database\Seeders;

use App\Models\Vaga;
use Illuminate\Database\Seeder;

class VagaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vaga::factory()->times(10)->create();
    }
}
