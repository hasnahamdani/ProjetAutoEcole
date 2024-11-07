<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Candidats extends Migration
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
                'null'       => false,
            ],
            'cin'        => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
                'null'       => false,
            ],
            'tele'       => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
                'null'       => false,
            ],
            'image'             => [
                'type'       => 'VARCHAR',
                'constraint' => '255', // Champ pour stocker le chemin complet du fichier image
                'null'       => false,
            ],
            'dateInscription'    => [
                'type'       => 'DATE',
                'null'       => false,
            ],
            'moniteur_id'       => [
                'type'       => 'INT',
                'unsigned'   => true,
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
    $this->forge->addForeignKey('moniteur_id', 'moniteurs', 'id', 'CASCADE', 'CASCADE');
    $this->forge->createTable('candidats');
    }

    public function down()
    {
        $this->forge->dropTable('candidats');
    }
}
