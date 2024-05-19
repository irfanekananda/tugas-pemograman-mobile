<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TambahTabelJam extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'jam' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'ruangan' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
        ]);
        
        $this->forge->addKey('id', true);
        $this->forge->createTable('tbl_jam');
    }

    public function down()
    {
        $this->forge->dropTable("tbl_jam");
    }
}
