<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MatkulSeeder extends Seeder
{
    public function run()
    {
        $mataPelajaran = [
            'Metodologi Penelitian',
            'Pemrograman Dasar',
            'Struktur Data',
            'Algoritma dan Kompleksitas',
            'Pemrograman Berorientasi Objek',
            'Analisis dan Desain Sistem',
            'Basis Data',
            'Sistem Operasi',
            'Jaringan Komputer',
            'Keamanan Komputer',
            'Teknik Kompilasi',
            'Rekayasa Perangkat Lunak',
            'Pemrograman Web',
            'Desain Antarmuka Pengguna',
            'Pengembangan Aplikasi Mobile',
            'Pengembangan Game',
            'Kecerdasan Buatan',
            'Pembelajaran Mesin',
            'Analisis Data',
            'Visualisasi Data',
            'Komputasi Awan',
            'Teknologi Big Data',
            'Internet of Things (IoT)',
            'Blockchain',
            'Kriptografi',
            'Administrasi Sistem',
            'Manajemen Proyek TI',
            'Pengujian Perangkat Lunak',
            'Pengelolaan Basis Data',
            'Cloud Computing',
            'Virtualisasi',
            'Analisis Kinerja Sistem',
            'Manajemen Jaringan',
            'Keamanan Jaringan',
            'Sistem Cerdas',
            'Pengolahan Citra dan Video',
            'Pengolahan Bahasa Alami',
            'Robotika',
            'Pengembangan Situs E-Commerce',
            'Manajemen Pengetahuan',
            'Etika dan Hukum Teknologi Informasi',
            'Pengembangan Aplikasi Web Lanjutan',
            'Keamanan Sistem Informasi',
            'Manajemen Proyek Perangkat Lunak',
            'Kecerdasan Buatan dalam Bisnis',
            'Analisis Bisnis dan Manajemen Keputusan',
            'Pemrograman Game Interaktif',
            'Teknologi Cloud Computing Terapan',
            'Rekayasa Perangkat Lunak Terdistribusi',
            'Sistem Informasi Geografis (SIG)',
        ];

        $totalSks = 180;
        $tipeMatkul = ['materi', 'praktek'];

        foreach ($mataPelajaran as $mataPel) {
            $sks = rand(3, 4);

            if ($totalSks - $sks >= 0) {
                $totalSks -= $sks;

                $tipe = $tipeMatkul[array_rand($tipeMatkul)];

                $data = [
                    'nama' => $mataPel,
                    'sks' => $sks,
                    'tipe' => $tipe,
                ];

                $this->db->table('matkul')->insert($data);
            }
        }
    }
}
