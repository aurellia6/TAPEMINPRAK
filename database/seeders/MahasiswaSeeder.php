<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prodi = [
            [
                'nim' => '205150701111010',
                'nama' => 'Aurellia Ristivani',
                'angkatan' => 2020,
                'password' => Hash::make('orell123')
            ]
            ];

            foreach ($prodi as $key => $value) {
                Mahasiswa::create($value);
            }
    }
}
