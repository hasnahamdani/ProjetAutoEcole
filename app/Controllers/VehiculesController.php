<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class VehiculesController extends Controller
{
    public function index()
    {
        return view('Vehicules'); // Charge une vue "index" pour la liste des véhicules
    }

    public function afficher($id)
    {
        // Code pour afficher un véhicule spécifique
    }

    public function ajouter()
    {
        // Code pour ajouter un nouveau véhicule
    }

    public function modifier($id)
    {
        // Code pour modifier un véhicule existant
    }

    public function supprimer($id)
    {
        // Code pour supprimer un véhicule
    }
}
