<?php

namespace Database\Seeders;

use App\Models\MataKuliah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        MataKuliah::factory()->create([
            'NIM' => '123456',
            'matakuliah' => 'Pemrograman Web',
            'nilai' => 85,
            'dosen' => 'Pak Budi'
        ]);
        MataKuliah::factory()->create([
            'NIM' => '234567',
            'matakuliah' => 'Basis Data',
            'nilai' => 70,
            'dosen' => 'Ibu Ani'
        ]);
        MataKuliah::factory()->create([
            'NIM' => '345678',
            'matakuliah' => 'Jaringan Komputer',
            'nilai' => 75,
            'dosen' => 'Pak Dosi'
        ]);
        MataKuliah::factory()->create([
            'NIM' => '123456',
            'matakuliah' => 'Sistem Operasi',
            'nilai' => 90,
            'dosen' => 'Pak BUdi'
        ]);
        MataKuliah::factory()->create([
            'NIM' => '456789',
            'matakuliah' => 'Manajemen Proyek',
            'nilai' => 80,
            'dosen' => 'Ibu Desi'
        ]);
        MataKuliah::factory()->create([
            'NIM' => '567890',
            'matakuliah' => 'Bahasa Inggris',
            'nilai' => 85,
            'dosen' => 'Ibu Eka'
        ]);
        MataKuliah::factory()->create([
            'NIM' => '678901',
            'matakuliah' => 'Statistika',
            'nilai' => 75,
            'dosen' => 'Pak Farhan'
        ]);
        MataKuliah::factory()->create([
            'NIM' => '789012',
            'matakuliah' => 'Algoritma',
            'nilai' => 65,
            'dosen' => 'Pak Galih'
        ]);
        MataKuliah::factory()->create([
            'NIM' => '123456',
            'matakuliah' => 'Pemrograman Java',
            'nilai' => 95,
            'dosen' => 'Pak Budi'
        ]);
    }
}
