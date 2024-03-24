<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Studi extends Migration
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
            'mulai' => [
                'type'       => 'DATETIME',
            ],
            'selesai' => [
                'type'       => 'DATETIME',
            ],
            'ruang' => [
                'type'       => 'VARCHAR',
                'constraint'       => '10',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('mahasiswa_id','mahasiswa','id');
        $this->forge->addForeignKey('dosen_id','dosen','id');
        $this->forge->addForeignKey('matkul_id','matkul','id');
        $this->forge->createTable('studi');
    }
    
    public function down()
    {
        $this->forge->dropTable('studi');
    }
}
