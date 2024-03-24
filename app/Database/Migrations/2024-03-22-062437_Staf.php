<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Staf extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint' => '11',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'no_staf' => [
                'type'       => 'CHAR',
                'constraint' => '15',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('no_staf','users','username');
        $this->forge->createTable('staf');
    }

    public function down()
    {
        $this->forge->dropTable('staf');
    }
}
