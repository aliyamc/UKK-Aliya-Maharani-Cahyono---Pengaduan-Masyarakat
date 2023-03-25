<?php

namespace Database\Seeders;

use App\Models\Masyarakat;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class MasyarakatSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'nik' => '1320123456789012',
                'nama' => 'Masyarakat1',
                'username' => 'masyarakat1',
                'password' => Hash::make('masyarakat1'),
                'telp' => '081234567890',
            ],
            [
                'nik' => '2320123456789012',
                'nama' => 'Masyarakat2',
                'username' => 'masyarakat2',
                'password' => Hash::make('masyarakat2'),
                'telp' => '081234567890',
            ],
        ];
        Masyarakat::insert($data);
    }
}
