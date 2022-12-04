<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Matakuliah;

class MatkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $matkul = [
            [
                'nama' => 'Pemrograman Dasar'
            ],
            [
                'nama' => 'Pemrograman Lanjut'
            ],
            [
                'nama' => 'Algoritma dan Struktur Data'
            ],
            [
                'nama' => 'Sistem Basis Data'
            ],
            [
                'nama' => 'Jaringan Komputer Dasar'
            ]
            ];

            foreach ($matkul as $key => $value) {
                Matakuliah::create($value);
            }
    }
}
