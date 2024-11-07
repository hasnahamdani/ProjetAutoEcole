<?php

namespace App\Controllers;

use App\Models\Moniteurs;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function index2()
    {
        return view('admin/Dashboard');
    }
    public function test()
    {
        return view('test');
    }
    public function Dashboard()
    {
        return view('Dashboard');
    }
    public function Vehicules()
    {
        return view('Vehicules');
    } 
    public function Candidats()
    {
        $moniteursModel = new Moniteurs();
        $data['moniteurs'] = $moniteursModel->findAll();
        
        return view('Candidats', $data);
      
    } 
    
}
