<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class HistoryPerkuliahanSeeder extends Seeder
{
    public function run()
    {
        $grade = ['A', 'B', 'C'];

        for ($i = 1; $i <= 30; $i++) {
            $p = [];
            for ($j = 1; $j <= 50; $j++) {
                $r = rand(1, 50);
                $choiceGrade = $grade[rand(0, 2)];
                if (in_array($r, $p)) {
                    continue;
                } else {
                    $keterangan = $this->getKeterangan($choiceGrade);
                    $data = [
                        'mahasiswa_id' => $i,
                        'dosen_id' => rand(1, 10),
                        'matkul_id' => $r,
                        'grade' => $choiceGrade,
                        'keterangan' => $keterangan
                    ];
                    $this->db->table('history_perkuliahan')->insert($data);
                }
                array_push($p, $r);
            }
        }
    }

    private function getKeterangan($choiceGrade)
    {
        if ($choiceGrade == "A" || $choiceGrade == "B") {
            return 'LOLOS';
        } else {
            return 'TIDAK LOLOS';
        }
    }
}

