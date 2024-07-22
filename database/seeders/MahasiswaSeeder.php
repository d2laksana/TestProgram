<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Mahasiswa::factory()->create([
            'NIM' => '123456',
            'nama' => 'John',
            'alamat' => 'Jl. Merdeka No. 1',
            'jurusan' => 'Teknik Informatika',
            'umur' => '21'
        ]);

        Mahasiswa::factory()->create([
            'NIM' => '234567',
            'nama' => 'Alice',
            'alamat' => 'Jl. Gatot Subroto',
            'jurusan' => 'Sistem Informasi',
            'umur' => '23'
        ]);
        Mahasiswa::factory()->create([
            'NIM' => '345678',
            'nama' => 'Bob',
            'alamat' => 'Jl. Sudirman No. 5',
            'jurusan' => 'Teknik Informatika',
            'umur' => '20'
        ]);
        Mahasiswa::factory()->create([
            'NIM' => '456789',
            'nama' => 'Cindy',
            'alamat' => 'Jl. Pahlawan No. 2',
            'jurusan' => 'Manajemen',
            'umur' => '22'
        ]);
        Mahasiswa::factory()->create([
            'NIM' => '567890',
            'nama' => 'David',
            'alamat' => 'Jl. Diponegoro No. 3',
            'jurusan' => 'Teknik Elektro',
            'umur' => '25'
        ]);
        Mahasiswa::factory()->create([
            'NIM' => '678901',
            'nama' => 'Emely',
            'alamat' => 'Jl. Cendrawasih No. 4',
            'jurusan' => 'Manajemen',
            'umur' => '24'
        ]);
        Mahasiswa::factory()->create([
            'NIM' => '789012',
            'nama' => 'Frank',
            'alamat' => 'Jl. Ahmad Yani No. 6',
            'jurusan' => 'Teknik Informatika',
            'umur' => '19'
        ]);
    }
}
