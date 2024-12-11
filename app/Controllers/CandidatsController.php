<?php  
namespace App\Controllers; 

use App\Models\Candidats; 
use App\Controllers\BaseController;  
use App\Models\Moniteurs;

class CandidatsController extends BaseController {    

    public function index()
    {
        $candidatsModel = new Candidats();
        $moniteursModel = new Moniteurs();

        $candidats = $candidatsModel->getCandidatsWithMoniteurs();

   
    $moniteursPratique = $moniteursModel->where('type', 'Pratique')->findAll();
    $moniteursTheorique = $moniteursModel->where('type', 'Théorique')->findAll();

    
        $data = [
            'candidats' => $candidats,
            'moniteursPratique' => $moniteursPratique,
            'moniteursTheorique' => $moniteursTheorique,
        ];
    
        return view('Candidats', $data);
    }
    public function getMoniteurInfo($id)
{
    $moniteursModel = new Moniteurs();
    $moniteur = $moniteursModel->find($id); 
    if ($moniteur) {
        return $this->response->setJSON($moniteur);
    }

    return $this->response->setJSON([]); 
}

    
public function ajouter() {
    $moniteursModel = new Moniteurs();
    $moniteurPratique = $moniteursModel->where('type', 'Pratique')->first(); 
    $moniteurTheorique = $moniteursModel->where('type', 'Théorique')->first(); 
    
   
    if (!$moniteurPratique || !$moniteurTheorique) {
        return redirect()->back()->with('errors', ['Moniteur pratique ou théorique non disponible.']);
    }

    $validation = $this->validate([
        'nom' => 'required',
        'cin' => 'required',
        'tele' => 'required',
        'image' => 'uploaded[image]|is_image[image]|max_size[image,1024]',
        'dateInscription' => 'required|valid_date',
        'prix' => 'required|numeric',       
        'age' => 'required|integer',       
        'adresse' => 'required',
    ]);

    if ($validation) {
       
        $imageFile = $this->request->getFile('image');
        if ($imageFile->isValid() && !$imageFile->hasMoved()) {
            
            $imageName = $imageFile->getRandomName();
            
            $imageFile->move(FCPATH . 'uploads', $imageName);

            
            $data = [
                'nom' => $this->request->getPost('nom'),
                'cin' => $this->request->getPost('cin'),
                'tele' => $this->request->getPost('tele'),
                'image' => $imageName, 
                'dateInscription' => $this->request->getPost('dateInscription'),
                'prix' => $this->request->getPost('prix'),
                'age' => $this->request->getPost('age'),
                'adresse' => $this->request->getPost('adresse'),
                'moniteur_pratique_id' => $moniteurPratique['id'], 
                'moniteur_theorique_id' => $moniteurTheorique['id'], 
            ];

            
            $candidatsModel = new Candidats();
            $candidatsModel->insert($data);

            return redirect()->to('/Candidats')->with('success', 'Candidat ajouté avec succès !');
        } else {
            return redirect()->back()->withInput()->with('errors', ['Erreur lors du téléchargement de l\'image.']);
        }
    } else {
        
        return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
    }
}

    public function supprimer($id) {     
        $candidatsModel = new Candidats();     
        if ($candidatsModel->find($id)) {         
            $candidatsModel->delete($id);         
            return redirect()->to('/Candidats')->with('success', 'Candidat supprimé avec succès.');     
        } else {         
            return redirect()->to('/Candidats')->with('errors', ['Candidat introuvable.']);     
        } 
    }  
    public function modifier($id) {
        helper('form');
        $candidatsModel = new Candidats();
        $candidat = $candidatsModel->find($id);
    
        if (!$candidat) {
            return redirect()->to('/Candidats')->with('errors', ['Candidat introuvable.']);
        }
    
        
        $moniteursModel = new Moniteurs();
        $moniteursPratique = $moniteursModel->where('type', 'Pratique')->findAll();
        $moniteursTheorique = $moniteursModel->where('type', 'Théorique')->findAll();
    
        $data = [
            'candidat' => $candidat,
            'moniteursPratique' => $moniteursPratique,
            'moniteursTheorique' => $moniteursTheorique,
        ];
    
        return view('modifierCandidat', $data);
    }
    
    public function update($id) {
        $candidatsModel = new Candidats();
        $moniteursModel = new Moniteurs();
    
        
        $candidat = $candidatsModel->find($id);
        if (!$candidat) {
            return redirect()->to('/Candidats')->with('errors', ['Candidat introuvable.']);
        }
    
        $validation = $this->validate([
            'nom' => 'required',
            'cin' => 'required',
            'tele' => 'required',
            'image' => 'if_exist|uploaded[image]|is_image[image]|max_size[image,1024]',
            'dateInscription' => 'required|valid_date',
            'prix' => 'required|numeric',
            'age' => 'required|integer',
            'adresse' => 'required',
            'moniteur_pratique_id' => 'required|integer|is_not_unique[moniteurs.id]',
            'moniteur_theorique_id' => 'required|integer|is_not_unique[moniteurs.id]'
        ]);
    
        if ($validation) {
            $data = [
                'nom' => $this->request->getPost('nom'),
                'cin' => $this->request->getPost('cin'),
                'tele' => $this->request->getPost('tele'),
                'dateInscription' => $this->request->getPost('dateInscription'),
                'prix' => $this->request->getPost('prix'),
                'age' => $this->request->getPost('age'),
                'adresse' => $this->request->getPost('adresse'),
                'moniteur_pratique_id' => $this->request->getPost('moniteur_pratique_id'),
                'moniteur_theorique_id' => $this->request->getPost('moniteur_theorique_id')
            ];
    
            
            $imageFile = $this->request->getFile('image');
            if ($imageFile && $imageFile->isValid() && !$imageFile->hasMoved()) {
                $imageName = $imageFile->getRandomName();
                $imageFile->move(FCPATH . 'uploads', $imageName);
                $data['image'] = $imageName;
    
                
                if (!empty($candidat['image']) && file_exists(FCPATH . 'uploads/' . $candidat['image'])) {
                    unlink(FCPATH . 'uploads/' . $candidat['image']);
                }
            }
    
            
            $candidatsModel->update($id, $data);
    
            return redirect()->to('/Candidats')->with('success', 'Candidat modifié avec succès.');
        } else {
            
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
    }
    
    public function getCandidatDetails($id)
    {
        $candidatsModel = new Candidats();
        $moniteursModel = new Moniteurs();
    
        
        $candidat = $candidatsModel->find($id);
    
        if ($candidat) {
            
            $moniteurPratique = $moniteursModel->find($candidat['moniteur_pratique_id']);
            $moniteurTheorique = $moniteursModel->find($candidat['moniteur_theorique_id']);
    
            
            $data = [
                'id' => $candidat['id'],
                'nom' => $candidat['nom'],
                'cin' => $candidat['cin'],
                'tele' => $candidat['tele'],
                'image' => $candidat['image'],
                'dateInscription' => $candidat['dateInscription'],
                'prix' => $candidat['prix'],
                'age' => $candidat['age'],
                'adresse' => $candidat['adresse'],
                'moniteur_pratique_nom' => $moniteurPratique ? $moniteurPratique['nom'] : null,
                'moniteur_theorique_nom' => $moniteurTheorique ? $moniteurTheorique['nom'] : null,
            ];
    
            
            return $this->response->setJSON($data);
        } else {
            
            return $this->response->setJSON(['error' => 'Candidat non trouvé']);
        }
    }
    
}