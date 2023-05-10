<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\DriverInf;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class carSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Car::factory(10)->create();

    }
}
