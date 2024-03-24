<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class HistoryPerkuliahan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'mahasiswa_id' => [
                'type'           => 'INT',
                'constraint' => '11',
            ],
            'dosen_id' => [
                'type'           => 'INT',
                'constraint' => '11',
            ],
            'matkul_id' => [
                'type'           => 'INT',
                'constraint' => '11',
            ],
            'grade' => [
                'type'       => 'CHAR',
                'constraint'       => '1',
            ],
            'keterangan' => [
                'type'       => 'ENUM',
                'constraint'       => ['LOLOS', 'TIDAK LOLOS'],
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('mahasiswa_id', 'mahasiswa', 'id');
        $this->forge->addForeignKey('dosen_id', 'dosen', 'id');
        $this->forge->addForeignKey('matkul_id', 'matkul', 'id');
        $this->forge->createTable('history_perkuliahan');
    }

    public function down()
    {
        $this->forge->dropTable('history_perkuliahan');
    }
}
