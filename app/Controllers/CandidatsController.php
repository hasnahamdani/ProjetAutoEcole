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
    
        // Récupération des candidats avec les informations des moniteurs
        $candidats = $candidatsModel->getCandidatsWithMoniteurs();

    // Récupération des moniteurs pratiques et théoriques
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
    $moniteur = $moniteursModel->find($id); // Trouver le moniteur par ID

    if ($moniteur) {
        return $this->response->setJSON($moniteur); // Retourner les données au format JSON
    }

    return $this->response->setJSON([]); // Retourner un tableau vide si le moniteur n'existe pas
}

    
    public function ajouter() {
        $moniteursModel = new Moniteurs();
    
    // Par exemple, récupérer le premier moniteur pratique disponible
    $moniteur = $moniteursModel->where('type', 'Pratique')->first();
    
    if (!$moniteur) {
        return redirect()->back()->with('errors', ['Aucun moniteur disponible.']);
    }
    
    $moniteur_id = $moniteur['id'];
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
            // Récupération des données du formulaire
            $imageFile = $this->request->getFile('image');
            if ($imageFile->isValid() && !$imageFile->hasMoved()) {
                // Définir un nom pour l'image
                $imageName = $imageFile->getRandomName();
                // Déplacer l'image dans un dossier (par exemple "uploads/")
                $imageFile->move(FCPATH . 'uploads', $imageName);

    
                // Récupération des autres données du formulaire
                $data = [
                    'nom' => $this->request->getPost('nom'),
                    'cin' => $this->request->getPost('cin'),
                    'tele' => $this->request->getPost('tele'),
                    'image' => $imageName,  // Le nom de l'image est stocké dans la base de données
                    'dateInscription' => $this->request->getPost('dateInscription'),
                    'moniteur_id' => $this->request->getPost('moniteur_id'),
                    'prix' => $this->request->getPost('prix'),    // Champ prix
                    'age' => $this->request->getPost('age'),      // Champ âge
                    'adresse' => $this->request->getPost('adresse'), // Champ adresse
                    'moniteur_id' => $moniteur_id,
                ];
    
                // Insertion des données dans la base de données
                $candidatsModel = new Candidats();
                $candidatsModel->insert($data);
    
                return redirect()->to('/Candidats');
            } else {
                return redirect()->back()->withInput()->with('errors', ['Erreur lors du téléchargement de l\'image']);
            }
        } else {
            // Gérer les erreurs de validation
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

        // Récupération des moniteurs pour le formulaire
        $moniteursModel = new Moniteurs();
        $moniteursPratique = $moniteursModel->where('type', 'Pratique')->findAll();

        $data = [
            'candidat' => $candidat,
            'moniteursPratique' => $moniteursPratique,
        ];

        return view('modifierCandidat', $data);
    }

    public function update($id) {
        $candidatsModel = new Candidats();
        $moniteursModel = new Moniteurs();

        // Vérifier si le candidat existe
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
            'moniteur_id' => 'required|integer|is_not_unique[moniteurs.id]'
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
                'moniteur_id' => $this->request->getPost('moniteur_id')
            ];

            // Gestion de l'image
            $imageFile = $this->request->getFile('image');
            if ($imageFile && $imageFile->isValid() && !$imageFile->hasMoved()) {
                $imageName = $imageFile->getRandomName();
                $imageFile->move(FCPATH . 'uploads', $imageName);
                $data['image'] = $imageName;

                // Supprimer l'ancienne image si elle existe
                if (!empty($candidat['image']) && file_exists(FCPATH . 'uploads/' . $candidat['image'])) {
                    unlink(FCPATH . 'uploads/' . $candidat['image']);
                }
            }

            // Mise à jour des données dans la base
            $candidatsModel->update($id, $data);

            return redirect()->to('/Candidats')->with('success', 'Candidat modifié avec succès.');
        } else {
            // Gestion des erreurs de validation
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
}
    }
    public function getCandidatDetails($id) {
        $candidatsModel = new Candidats();
        $candidat = $candidatsModel->find($id);
    
        if ($candidat) {
            return $this->response->setJSON($candidat); // Retourner les données au format JSON
        }
    
        return $this->response->setJSON([]); // Retourner un tableau vide si le candidat n'existe pas
    }
}