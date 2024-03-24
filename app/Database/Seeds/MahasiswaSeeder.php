<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    public function run()
    {
        $namaPalsu = [
            "Muhammad Rifqi Pratama",
            "Fitriani Rahayu",
            "Ahmad Fauzi",
            "Dewi Nurul Hidayah",
            "Rizki Pratama Putra",
            "Anisa Fitriani",
            "Rizky Maulana",
            "Diana Putri",
            "Firdaus Ramadhan",
            "Siti Aisyah",
            "Rizal Pratama",
            "Dewi Lestari",
            "Agus Setiawan",
            "Intan Puspita Sari",
            "Agung Nugroho",
            "Siti Fatimah",
            "Rudi Hermawan",
            "Dian Rosita",
            "Fajar Surya",
            "Sinta Nur Aulia",
            "Dedi Sutrisno",
            "Putri Kartika",
            "Rizki Ananda",
            "Siti Rahmah",
            "Maulana Malik Ibrahim",
            "Nadia Sari",
            "Andi Firmansyah",
            "Desi Anggraeni",
            "Ade Kurniawan",
            "Anisa Wahyuni"
        ];
        

        $kelasPalsu = [
            'P51',
            'P52',
            'M42',
            'M12',
        ];

        $jurusanPalsu = [
            'Teknik Informatika',
            'Sistem Informasi',
            'Ilmu Komputer',
            'Teknologi Informasi',
        ];

        $status = [
            'aktif',
            'nonaktif',
        ];

        $mahasiswa = [];
        for ($i = 1; $i <= 30; $i++) {
            $nim = sprintf('%02d.%03d.%04d', 22, 230, $i);
            $mahasiswa[] = [
                'nama' => $namaPalsu[$i-1],
                'nim' => $nim,
                'dosen_id' => rand(1, 12),
                'semester' => '6',
                'kelas' => $kelasPalsu[rand(0, 3)],
                'jurusan' => $jurusanPalsu[rand(0, 3)],
                'status' => $status[rand(0, 1)],
            ];
        }

        $this->db->table('mahasiswa')->insertBatch($mahasiswa);
    }
}
