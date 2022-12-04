<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    use WithoutModelEvents;

    public function run()
    {
        $this->call([
            MahasiswaSeeder::class,
        ]);
        $this->call([
            MatkulSeeder::class,
        ]);
    }
}
