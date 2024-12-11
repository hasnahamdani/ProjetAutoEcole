<?php

namespace App\Models;

use CodeIgniter\Model;

class Vehicules extends Model
{
    protected $table = 'Vehicules';
    protected $primaryKey = 'id';

    
    protected $allowedFields = [
        'Image', 'Nom', 'Modele', 'DateAchat', 'Matricule', 'created_at', 'updated_at'
    ];
   
}