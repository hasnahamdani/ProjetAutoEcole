<?php

namespace App\Controllers;

use App\Models\RendezVous;

class RendezvousController extends BaseController
{
    public function index()
    {
        $RendezVousModel = new RendezVous();
        $data['rendezvous'] = $RendezVousModel->findAll();
        return view('RendezVous', $data);
    }
    public function RendezVousAdmin()
    {
        $RendezVousModels = new RendezVous();
        $data['RendezVous'] = $RendezVousModels->findAll(); 
        return view('RendezVousAdmin', $data);
    }
    public function supprimer($id)
    {
        $rendezModel = new RendezVous();
        if ($rendezModel->find($id)) {
            $rendezModel->delete($id);
            return redirect()->to('/RendezVousAdmin')->with('success', 'RendezVous supprimé avec succès.');
        } else {
            return redirect()->to('/RendezVousAdmin')->with('errors', ['RendezVous introuvable.']);
        }
    }

    public function ajouter()
    {
        $RendezVousModel = new RendezVous();

        $validation = $this->validate([
            'nom' => 'required',
            'email' => 'required|valid_email',
            'tele' => 'required|numeric',
            'address' => 'required',
            'city' => 'required',
            'cin' => 'required',
            'dateNaissance' => 'required|valid_date',
            'rendezVous' => 'required|valid_date',
        ]);

        if ($validation) {
            $date = $this->request->getPost('rendezVous');

            
            if ($RendezVousModel->countByDate($date) < 3) {
                $data = [
                    'nom' => $this->request->getPost('nom'),
                    'email' => $this->request->getPost('email'),
                    'tele' => $this->request->getPost('tele'),
                    'address' => $this->request->getPost('address'),
                    'city' => $this->request->getPost('city'),
                    'cin' => $this->request->getPost('cin'),
                    'dateNaissance' => $this->request->getPost('dateNaissance'),
                    'rendezVous' => $date,
                ];

                $RendezVousModel->insert($data);
                return redirect()->to('/RendezVous')->with('success', 'Rendez-vous a envoyé avec succès.');
            } else {
                return redirect()->back()->withInput()->with('error', 'Ce rendez-vous est déjà complet.');
            }
        } else {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
    }

    public function getUnavailableDates()
    {
        $RendezVousModel = new RendezVous();
    
        
        $dates = $RendezVousModel
            ->select('rendezVous, COUNT(rendezVous) as total')
            ->groupBy('rendezVous')
            ->having('total >=', 3)
            ->findAll();
    
        
        $unavailableDates = array_column($dates, 'rendezVous');
    
        
        log_message('debug', 'Unavailable dates: ' . json_encode($unavailableDates));
    
        
        return $this->response->setJSON($unavailableDates);
    }
    
    
}
