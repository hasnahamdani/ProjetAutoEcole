<?php

namespace App\Controllers;

use App\Models\Candidats;
use App\Models\Moniteurs;
use App\Models\Vehicules;
use App\Models\RendezVous;
use CodeIgniter\Controller;
use Psr\Log\LoggerInterface;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardController extends Controller
{
  
  public function index()
  {
      $RendezVousModel = new RendezVous();
      $moniteurModel = new Moniteurs();
      $candidatModel = new Candidats();
      $vehiculeModel = new Vehicules();
  
      
      $today = date('Y-m-d');
  
      
      $data['total_today'] = $RendezVousModel
          ->where('DATE(rendezVous)', $today) 
          ->countAllResults();
  
      
      $data['total_vehicules'] = $vehiculeModel->countAllResults();
      $data['total_moniteurs'] = $moniteurModel->countAllResults();
      $data['total_candidats'] = $candidatModel->countAllResults();
      
      
      $statistics = $this->getRendezVousStatistics();
     $data['jours'] = json_encode($statistics['jours']);
    $data['datasets'] = json_encode($statistics['datasets']);

  
      
      return view('Dashboard', $data);
  }
  


    
    
    public function getRendezVousStatistics()
    {
        $RendezVousModel = new RendezVous();
        
        
        $statistics = $RendezVousModel
            ->select("DATE_FORMAT(rendezVous, '%d/%m/%Y') as jour, MONTH(rendezVous) as mois, COUNT(*) as count")
            ->groupBy("jour, mois")
            ->orderBy("jour")
            ->findAll();
        
        
        $groupedData = [];
        foreach ($statistics as $stat) {
            $jour = $stat['jour'];
            $mois = $stat['mois'];
            
            if (!isset($groupedData[$mois])) {
                $groupedData[$mois] = [];
            }
            $groupedData[$mois][$jour] = $stat['count'];
        }
        
        
        $jours = array_unique(array_column($statistics, 'jour'));
        sort($jours); 
        
        
        $datasets = [];
        foreach ($groupedData as $mois => $data) {
            $datasets[] = [
                'label' => "Mois $mois",
                'data' => array_values(array_replace(array_fill_keys($jours, 0), $data)),
                'backgroundColor' => sprintf('rgba(%d, %d, %d, 0.7)', rand(0, 255), rand(0, 255), rand(0, 255)),
            ];
        }
        
        
        return [
            'jours' => $jours,
            'datasets' => $datasets
        ];
    }
}
