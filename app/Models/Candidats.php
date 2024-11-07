<?php

namespace App\Models;

use CodeIgniter\Model;

class Candidats extends Model
{
    protected $table      = 'candidats';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nom', 'cin', 'tele', 'image', 'dateInscription', 'moniteur_id'];

    // Relation avec Moniteur (si le moniteur est une table liée)
    public function getMoniteur()
    {
        return $this->belongsTo('App\Models\Moniteurs', 'moniteur_id', 'id');
    }
}

