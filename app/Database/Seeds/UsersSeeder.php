<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        // Data untuk mahasiswa
        $mahasiswa = [];
        for ($i = 1; $i <= 30; $i++) {
            $nim = sprintf('%02d.%03d.%04d', 22, 230, $i);
            $mahasiswa[] = [
                'username' => $nim,
                'password' => 'password',
                'role'     => 'mahasiswa',
            ];
        }

        // Data untuk dosen
        $dosen = [];
        for ($i = 1; $i <= 12; $i++) {
            $nidn = sprintf('%09d', $i);
            $dosen[] = [
                'username' => $nidn,
                'password' => 'password',
                'role'     => 'dosen',
            ];
        }

        // Data untuk staf
        $staf = [];
        for ($i = 1; $i <= 5; $i++) {
            $stafId = sprintf('%03d.%03d.%03d', 001, 234, $i);
            $staf[] = [
                'username' => $stafId,
                'password' => 'password',
                'role'     => 'staf',
            ];
        }

        // Gabungkan semua data
        $data = array_merge($mahasiswa, $dosen, $staf);

        // Masukkan data ke dalam tabel
        $this->db->table('users')->insertBatch($data);
    }
}
