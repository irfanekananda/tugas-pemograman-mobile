<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTblMhs extends Migration
{
    public function up()
    {
        $this->createMahasiswaTable();
    }

    public function down()
    {
        $this->forge->dropTable('tbl_mahasiswa');
    }

    private function createMahasiswaTable()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'npm' => [
                'type'       => 'VARCHAR',
                'constraint' => '12',
                'unique'     => true,
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
        ]);
        
        $this->forge->addKey('id', true);
        $this->forge->createTable('tbl_mahasiswa');

        // Add timestamps
        $this->forge->addColumn('tbl_mahasiswa', [
            'created_at' => [
                'type' => 'TIMESTAMP',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'TIMESTAMP',
                'null' => true,
            ],
        ]);
    }
}
