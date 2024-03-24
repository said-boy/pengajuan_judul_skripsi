<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Skripsi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'proposal_id' => [
                'type'           => 'INT',
                'constraint' => '11',
            ],
            'dosen_id' => [
                'type'           => 'INT',
                'constraint' => '11',
            ],
        ]);
        $this->forge->addForeignKey('proposal_id','proposal','id');
        $this->forge->addForeignKey('dosen_id','dosen','id');
        $this->forge->createTable('skripsi');
    }

    public function down()
    {
        $this->forge->dropTable('skripsi');
    }
}
