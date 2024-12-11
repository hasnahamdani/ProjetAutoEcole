<?php

namespace App\Controllers;
use App\Models\Moniteurs;
use App\Controllers\BaseController;

class MoniteursController extends BaseController
{
    public function index()
    {
        $moniteursModel = new Moniteurs();
        $data['moniteurs'] = $moniteursModel->findAll();
        
        return view('Moniteurs', $data); 
    }
    
   
    public function ajouter()
    {
        
        $validation = $this->validate([
            'nom' => 'required',
            'cin' => 'required',
            'tele' => 'required',
            'type' => 'required|in_list[Pratique,Théorique]',
            'dateCAP' => 'required|valid_date',
            'numCAP' => 'required',
        ]);

        if ($validation) {
            
            $data = [
                'nom' => $this->request->getPost('nom'),
                'cin' => $this->request->getPost('cin'),
                'tele' => $this->request->getPost('tele'),
                'type' => $this->request->getPost('type'),
                'dateCAP' => $this->request->getPost('dateCAP'),
                'numCAP' => $this->request->getPost('numCAP'),
            ];

            
            $moniteursModel = new Moniteurs();
            $moniteursModel->insert($data);

            return redirect()->to('/Moniteurs'); 
        } else {
            
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
    }

    public function supprimer($id)
{
    $moniteursModel = new Moniteurs();
    if ($moniteursModel->find($id)) {
        $moniteursModel->delete($id);
        return redirect()->to('/Moniteurs')->with('success', 'Moniteur supprimé avec succès.');
    } else {
        return redirect()->to('/Moniteurs')->with('errors', ['Moniteur introuvable.']);
    }
}
 public function modifier($id)
{
    $moniteursModel = new Moniteurs();
    $moniteur = $moniteursModel->find($id);

    if (!$moniteur) {
        return redirect()->to('/Moniteurs')->with('errors', ['Moniteur introuvable.']);
    }

    $data['moniteur'] = $moniteur;
    return view('ModifierMoniteur', $data);
}
public function update($id)
{
    $validation = $this->validate([
        'nom' => 'required',
        'cin' => 'required',
        'tele' => 'required',
        'type' => 'required',
        'dateCAP' => 'required|valid_date',
        'numCAP' => 'required',
    ]);

    if ($validation) {
        $data = [
            'nom' => $this->request->getPost('nom'),
            'cin' => $this->request->getPost('cin'),
            'tele' => $this->request->getPost('tele'),
           'type' => $this->request->getPost('type'),
            'dateCAP' => $this->request->getPost('dateCAP'),
            'numCAP' => $this->request->getPost('numCAP'),
        ];

        $moniteursModel = new Moniteurs();
        $moniteursModel->update($id, $data);

        return redirect()->to('/Moniteurs')->with('success', 'Moniteur modifié avec succès.');
    } else {
        return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
}
}
}
