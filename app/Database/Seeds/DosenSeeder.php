<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DosenSeeder extends Seeder
{
    public function run()
    {
        $namaPalsu = [
            'David Miller',
            'Ashley Wilson',
            'James Taylor',
            'Sarah Martinez',
            'John Anderson',
            'Elizabeth Thomas',
            'Daniel Moore',
            'Linda Jackson',
            'Robert White',
            'Emily Harris',
            'Jack Sparrow',
            'Jhon The Ripper'
        ];

        $jurusanPalsu = [
            'Teknik Informatika',
            'Sistem Informasi',
            'Ilmu Komputer',
            'Teknologi Informasi',
        ];

        $status = [
            'Kepala Prodi',
            'Sekertaris Prodi',
            'Opt Prodi',
        ];

        $indexJurusan = 0;
        $indexStatus = 0;

        $dosen = [];
        for ($i = 1; $i <= 12; $i++) {
            $nidn = sprintf('%09d', $i);
            $dosen[] = [
                'nama' => $namaPalsu[$i-1],
                'nidn' => $nidn,
                'jurusan' => $jurusanPalsu[$indexJurusan],
                'status' => $status[$indexStatus],
            ];

            if($indexJurusan >= 3){
                $indexJurusan = 0;
            }else{
                $indexJurusan += 1;
            }

            if($indexStatus >= 2){
                $indexStatus = 0;
            }else{
                $indexStatus += 1;
            }

        }

        $this->db->table('dosen')->insertBatch($dosen);

    }
}
