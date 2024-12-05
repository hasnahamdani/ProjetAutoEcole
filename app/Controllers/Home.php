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
<<<<<<< HEAD
    public function test2()
    {
        return view('test2');
    } 
    public function Contact()
    {
        return view('Contact');
    } 
    public function About()
    {
        return view('About');
    } 
    
=======
>>>>>>> b3da94a285d2918939ed59599fb917cd18b2fb04
    public function Dashboard()
    {
        return view('Dashboard');
    }
<<<<<<< HEAD
    
   
=======
    public function Vehicules()
    {
        return view('Vehicules');
    } 
>>>>>>> b3da94a285d2918939ed59599fb917cd18b2fb04
    public function Candidats()
    {
        $moniteursModel = new Moniteurs();
        $data['moniteurs'] = $moniteursModel->findAll();
        
        return view('Candidats', $data);
      
    } 
    
}
