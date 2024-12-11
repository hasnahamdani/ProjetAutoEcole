<?php

namespace App\Models;

use CodeIgniter\Model;

class Candidats extends Model
{
    protected $table = 'candidats'; 
    protected $primaryKey = 'id';   
    protected $allowedFields = ['nom', 'adresse', 'dateInscription', 'prix', 'tele', 'cin', 'age', 'image', 'moniteur_pratique_id', 'moniteur_theorique_id']; 

    
    public function getCandidatsWithMoniteurs()
    {
        return $this->select('candidats.*, moniteurs_pratique.nom as nom_pratique, moniteurs_pratique.dateCAP as dateCAP_pratique, moniteurs_pratique.numCAP as numCAP_pratique, moniteurs_theorique.nom as nom_theorique, moniteurs_theorique.dateCAP as dateCAP_theorique, moniteurs_theorique.numCAP as numCAP_theorique')
                    ->join('moniteurs moniteurs_pratique', 'moniteurs_pratique.id = candidats.moniteur_pratique_id', 'left')
                    ->join('moniteurs moniteurs_theorique', 'moniteurs_theorique.id = candidats.moniteur_theorique_id', 'left')
                    ->findAll();
    }
}



