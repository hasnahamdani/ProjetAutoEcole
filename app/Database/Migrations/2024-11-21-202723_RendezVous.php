<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RendezVous extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nom' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'tele' => [
                'type' => 'VARCHAR',
                'constraint' => '15',
            ],
            'address' => [
                'type' => 'VARCHAR',
                'constraint' => '150',

            ],
            'city' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'cin' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
            'dateNaissance' => [
                'type' => 'DATE',
            ],
            'rendezVous' => [
                'type' => 'DATE',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('rendezvous');
    }

    public function down()
    {
        $this->forge->dropTable('rendezvous');
    }
}

