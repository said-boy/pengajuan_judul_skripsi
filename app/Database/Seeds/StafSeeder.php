<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class StafSeeder extends Seeder
{
    public function run()
    {
        $namaPalsu = [
            'Michael Smith',
            'Jennifer Johnson',
            'Christopher Williams',
            'Jessica Brown',
            'Matthew Jones',
            'Amanda Davis',
        ];
        
        $staf = [];
        for ($i = 1; $i <= 5; $i++) {
            $noStaf = sprintf('%03d.%03d.%03d', 1, 234, $i);
            $staf[] = [
                'nama' => $namaPalsu[$i],
                'no_staf' => $noStaf,
            ];
        }

        $this->db->table('staf')->insertBatch($staf);
    }
}
