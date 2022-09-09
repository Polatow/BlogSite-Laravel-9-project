<?php

namespace Database\Seeders;

use App\Models\Makalalar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MakalalarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Makalalar::factory(10)->create();
    }
}
