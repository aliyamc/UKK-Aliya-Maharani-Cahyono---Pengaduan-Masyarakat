<?php

namespace Database\Seeders;

use App\Models\Petugas;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PetugasSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Aliya Maharani Cahyono',
                'username' => 'aliya',
                'password' => Hash::make('aliya77'),
                'telp' => '085771088591',
                'level' => 'Admin',
            ],
            [
                'nama' => 'Haruto W',
                'username' => 'ruto',
                'password' => Hash::make('ruto77'),
                'telp' => '085771088592',
                'level' => 'Petugas',
            ],
        ];
        Petugas::insert($data);
    }
}
