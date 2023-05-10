<?php

namespace Database\Seeders;

use App\Models\DriverInf;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class driverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
             DriverInf::factory(10)->create();
    }
}
