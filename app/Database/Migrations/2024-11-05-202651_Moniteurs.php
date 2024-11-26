<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Moniteurs extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'         => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'nom'        => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => true,
            ],
            'cin'        => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
                'null'       => true,
            ],
            'tele'       => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
                'null'       => true,
            ],
            'type'       => [
              'type'       => 'VARCHAR',
              'constraint' => '100',
                'null'       => true,
            ],
            'dateCAP'    => [
                'type'       => 'DATE',
                'null'       => true,
            ],
            'numCAP'     => [
                'type'       => 'INT',
                'null'       => true,
            ],
            'created_at' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
            'updated_at' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('moniteurs');
    }

    public function down()
    {
        $this->forge->dropTable('moniteurs');
    }
}
