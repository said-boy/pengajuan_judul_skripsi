<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Proposal extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint' => '11',
                'auto_increment' => true,
            ],
            'mahasiswa_id' => [
                'type'       => 'INT',
                'constraint' => '11',
            ],
            'judul' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'status_judul' => [
                'type' => 'ENUM',
                'constraint' => ['DITERIMA', 'PENDING', 'DITOLAK'],
                'default' => 'PENDING'
            ],
            'status_perlengkapan' => [
                'type' => 'ENUM',
                'constraint' => ['DITERIMA', 'PENDING', 'DITOLAK'],
                'default' => 'PENDING'
            ],
            'status_proposal' => [
                'type' => 'ENUM',
                'constraint' => ['DITERIMA', 'PENDING', 'DITOLAK'],
                'default' => 'PENDING'
            ],
            'file' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'created_at' => [
                'type' => 'TIMESTAMP'
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('mahasiswa_id','mahasiswa','id');
        $this->forge->createTable('proposal');
    }

    public function down()
    {
        $this->forge->dropTable('proposal');
    }
}
