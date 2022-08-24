<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class MahasiswaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'          =>  'wildania',
                'jenis_kelamin' =>  'wanita',
                'no_telp'       =>  '081234555678',
                'email'         =>  'wildania@gmail.com',
                'alamat'    =>  'Jl. Mawar Putih No. 190, Waru Sidoarjo',
                'created_at' => Time::now()
            ],
            [
                'nama'          =>  'Eka',
                'jenis_kelamin' =>  'wanita',
                'no_telp'       =>  '08571234567',
                'email'         =>  'eka@gmail.com',
                'alamat'    =>  'Jl. Melati Putih No. 77, Gedangan Sidoarjo',
                'created_at' => Time::now()
            ],
            [
                'nama'          =>  'Zahira',
                'jenis_kelamin' =>  'wanita',
                'no_telp'       =>  '08122334455',
                'email'         =>  'zahira@gmail.com',
                'alamat'    =>  'Jl. Rembulan No. 90, Krian Sidoarjo',
                'created_at' => Time::now()
            ]
        ];
        $this->db->table('mahasiswa')->insertBatch($data);
    }
}
