<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Matkul extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint' => '11',
                'auto_increment' => true,
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'sks' => [
                'type' => 'CHAR',
                'constraint' => '1',
            ],
            'tipe' => [
                'type' => 'ENUM',
                'constraint' => ['MATERI', 'PRAKTEK'],
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('matkul');
    }

    public function down()
    {
        $this->forge->dropTable('matkul');
    }
}
