<?php

namespace App\Controllers;

use App\Models\Candidats;
use App\Models\Moniteurs;
use App\Models\RendezVous;
use App\Models\Vehicules;

class SearchController extends BaseController
{
    public function index()
    {
        
        $query = $this->request->getGet('query');

        
        $candidatsModel = new Candidats();
        $moniteursModel = new Moniteurs();
        $rendezvousModel = new RendezVous();
        $vehiculesModel = new Vehicules();

        
        $candidatsResults = [];
        $moniteursResults = [];
        $rendezvousResults = [];
        $vehiculesResults = [];

        if ($query) {
            

            
            $candidatsResults = $candidatsModel->like('nom', $query)
                                               ->orLike('adresse', $query)
                                               ->orLike('tele', $query)
                                               ->orLike('cin', $query)
                                               ->findAll();

            
            $moniteursResults = $moniteursModel->like('nom', $query)
                                               ->orLike('cin', $query)
                                               ->orLike('tele', $query)
                                               ->findAll();

            
            $rendezvousResults = $rendezvousModel->like('nom', $query)
                                                 ->orLike('email', $query)
                                                 ->orLike('tele', $query)
                                                 ->orLike('address', $query)
                                                 ->findAll();

            
            $vehiculesResults = $vehiculesModel->like('Nom', $query)
                                               ->orLike('Modele', $query)
                                               ->orLike('Matricule', $query)
                                               ->findAll();
        }

        
        return view('search_results', [
            'query' => $query,
            'candidats' => $candidatsResults,
            'moniteurs' => $moniteursResults,
            'rendezvous' => $rendezvousResults,
            'vehicules' => $vehiculesResults,
        ]);
    }
}
