<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class callSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            driverSeeder::class,
            carSeeder::class,
            medicalSeeder::class,
            photoSeeder::class,
        ]);
    }
}
