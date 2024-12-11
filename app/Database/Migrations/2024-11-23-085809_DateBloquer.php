<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DateBloquer extends Migration
{
    public function up()
    {
        // Définir la structure de la table
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'blocked_date' => [
                'type' => 'DATE',
                'null' => false,
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

        // Définir la clé primaire
        $this->forge->addKey('id', true);

        // Créer la table
        $this->forge->createTable('date_bloquer');
    }

    public function down()
    {
        // Supprimer la table
        $this->forge->dropTable('date_bloquer');
    }
}
