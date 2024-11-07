<?php  
namespace App\Controllers; 

use App\Models\Candidats; 
use App\Controllers\BaseController;  
use App\Models\Moniteurs;
class CandidatsController extends BaseController {    

    public function index() {
        $candidatsModel = new Candidats();
        $moniteursModel = new Moniteurs();
        
        // Récupérer les candidats
        $candidats = $candidatsModel->findAll();
        
        // Récupérer les moniteurs
        $moniteurs = $moniteursModel->findAll();
        
        // Ajouter les noms des moniteurs aux candidats
        foreach ($candidats as &$candidat) {
            $moniteur = $moniteursModel->find($candidat['moniteur_id']);
            $candidat['moniteur_nom'] = $moniteur ? $moniteur['nom'] : 'Inconnu';
        }
    
        // Passer les données aux vues
        $data['candidats'] = $candidats;
        $data['moniteurs'] = $moniteurs; // Passer les moniteurs à la vue
        
        return view('Candidats', $data);
    }
    
    public function ajouter() {
        // Validation des données du formulaire
        $validation = $this->validate([
            'nom' => 'required',
            'cin' => 'required',
            'tele' => 'required',
            'image' => 'uploaded[image]|is_image[image]|max_size[image,1024]',
            'dateInscription' => 'required|valid_date',
            'moniteur_id' => 'required',
        ]);
    
        if ($validation) {
            // Récupération des données du formulaire
            $imageFile = $this->request->getFile('image');
            if ($imageFile->isValid() && !$imageFile->hasMoved()) {
                // Définir un nom pour l'image
                $imageName = $imageFile->getRandomName();
                // Déplacer l'image dans un dossier (par exemple "uploads/")
                $imageFile->move(WRITEPATH . 'uploads', $imageName);
    
                // Récupération des autres données du formulaire
                $data = [
                    'nom' => $this->request->getPost('nom'),
                    'cin' => $this->request->getPost('cin'),
                    'tele' => $this->request->getPost('tele'),
                    'image' => $imageName,  // Le nom de l'image est stocké dans la base de données
                    'dateInscription' => $this->request->getPost('dateInscription'),
                    'moniteur_id' => $this->request->getPost('moniteur_id'),
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
}
