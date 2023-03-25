<?php

namespace Database\Seeders;

use App\Models\Pengaduan;
use Illuminate\Database\Seeder;

class PengaduanSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'tgl_pengaduan' => now(),
                'nik' => '1320123456789012',
                'isi_laporan' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere repellendus temporibus tempora sint quas sed alias odit eaque optio explicabo. Autem consequuntur asperiores mollitia voluptatum ad quas reprehenderit! Itaque nulla placeat quos, rem ea, consectetur veniam nihil eligendi mollitia nisi fuga unde asperiores molestias atque illo, corporis ducimus illum. Atque?',
                'foto' => 'assets/images/1758323670530735.jpg',
                'status' => '0',
            ],
            [
                'tgl_pengaduan' => now(),
                'nik' => '1320123456789012',
                'isi_laporan' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere repellendus temporibus tempora sint quas sed alias odit eaque optio explicabo. Autem consequuntur asperiores mollitia voluptatum ad quas reprehenderit! Itaque nulla placeat quos, rem ea, consectetur veniam nihil eligendi mollitia nisi fuga unde asperiores molestias atque illo, corporis ducimus illum. Atque?',
                'foto' => 'assets/images/1758323670530735.jpg',
                'status' => 'Proses',
            ],
            [
                'tgl_pengaduan' => now(),
                'nik' => '1320123456789012',
                'isi_laporan' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere repellendus temporibus tempora sint quas sed alias odit eaque optio explicabo. Autem consequuntur asperiores mollitia voluptatum ad quas reprehenderit! Itaque nulla placeat quos, rem ea, consectetur veniam nihil eligendi mollitia nisi fuga unde asperiores molestias atque illo, corporis ducimus illum. Atque?',
                'foto' => 'assets/images/1758323670530735.jpg',
                'status' => 'Selesai',
            ],
            [
                'tgl_pengaduan' => now(),
                'nik' => '2320123456789012',
                'isi_laporan' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere repellendus temporibus tempora sint quas sed alias odit eaque optio explicabo. Autem consequuntur asperiores mollitia voluptatum ad quas reprehenderit! Itaque nulla placeat quos, rem ea, consectetur veniam nihil eligendi mollitia nisi fuga unde asperiores molestias atque illo, corporis ducimus illum. Atque?',
                'foto' => 'assets/images/1758323670530735.jpg',
                'status' => '0',
            ],
            [
                'tgl_pengaduan' => now(),
                'nik' => '2320123456789012',
                'isi_laporan' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere repellendus temporibus tempora sint quas sed alias odit eaque optio explicabo. Autem consequuntur asperiores mollitia voluptatum ad quas reprehenderit! Itaque nulla placeat quos, rem ea, consectetur veniam nihil eligendi mollitia nisi fuga unde asperiores molestias atque illo, corporis ducimus illum. Atque?',
                'foto' => 'assets/images/1758323670530735.jpg',
                'status' => 'Proses',
            ],
            [
                'tgl_pengaduan' => now(),
                'nik' => '2320123456789012',
                'isi_laporan' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere repellendus temporibus tempora sint quas sed alias odit eaque optio explicabo. Autem consequuntur asperiores mollitia voluptatum ad quas reprehenderit! Itaque nulla placeat quos, rem ea, consectetur veniam nihil eligendi mollitia nisi fuga unde asperiores molestias atque illo, corporis ducimus illum. Atque?',
                'foto' => 'assets/images/1758323670530735.jpg',
                'status' => 'Selesai',
            ],
        ];
        Pengaduan::insert($data);
    }
}
