<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMhsWithKelas extends Migration
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
            'npm' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unique'     => true,
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'kelas_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'null'           => true,
                'foreignKey'     => 'id',
                'referenceTable' => 'tbl_kelas_mhs',
            ],
        ]);
        
        $this->forge->addKey('id', true);
        $this->forge->createTable('tbl_mahasiswa_with_kelas');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_mahasiswa_with_kelas');
    }
}
