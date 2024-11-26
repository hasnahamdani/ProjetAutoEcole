<?php

namespace App\Models;

use CodeIgniter\Model;

class Candidats extends Model
{
    protected $table      = 'candidats';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nom', 'cin', 'tele', 'image', 'dateInscription', 'moniteur_id', 'prix', 'age', 'adresse'];


    // Relation avec Moniteur (si le moniteur est une table liée)
    public function getMoniteur()
    {
        return $this->belongsTo('App\Models\Moniteurs', 'moniteur_id', 'id');
    }

    public function getCandidatsWithMoniteurs()
    {
        return $this->select('candidats.*, 
                              moniteurs.nom as moniteur_nom, 
                              moniteurs.type as moniteur_type, 
                              moniteurs.dateCAP as moniteur_dateCAP, 
                              moniteurs.numCAP as moniteur_numCAP')
                    ->join('moniteurs', 'candidats.moniteur_id = moniteurs.id', 'left')
                    ->findAll();
    }
    

}

