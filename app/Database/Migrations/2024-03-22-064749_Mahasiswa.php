<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mahasiswa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint' => '11',
                'auto_increment' => true,
            ],
            'dosen_id' => [
                'type'       => 'INT',
                'constraint' => '11',
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'nim' => [
                'type'       => 'CHAR',
                'constraint' => '15',
            ],
            'semester' => [
                'type' => 'CHAR',
                'constraint' => '2',
            ],
            'kelas' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
            ],
            'jurusan' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['AKTIF', 'NONAKTIF'],
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('nim','users','username');
        $this->forge->addForeignKey('dosen_id','dosen','id');
        $this->forge->createTable('mahasiswa');
    }

    public function down()
    {
        $this->forge->dropTable('mahasiswa');
    }
}
