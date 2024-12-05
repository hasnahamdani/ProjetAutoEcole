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
    
    public function Dashboard()
    {
        return view('Dashboard');
    }
    
   
   
    
}
