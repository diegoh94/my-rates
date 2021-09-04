<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contract;

class ContractsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contract::create([
        	'name' => 'Contract name example 1',
        	'date' => '2022-12-12',
        ]);
        Contract::create([
        	'name' => 'Contract name example 2',
        	'date' => '2022-11-10',
        ]);
        Contract::create([
        	'name' => 'Contract name example 3',
        	'date' => '2021-10-11',
        ]);
    }
}
