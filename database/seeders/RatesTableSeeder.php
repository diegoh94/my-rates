<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rate;

class RatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rate::factory(150)->create();
    }
}
