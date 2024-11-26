<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/Dashboard', 'Home::Dashboard');

$routes->get('/Candidats', 'Home::Candidats');
$routes->get('/Moniteurs', 'MoniteursController::index');

///ajouter moniteur
$routes->post('/Moniteurs', 'MoniteursController::ajouter');
//supprimer 
$routes->get('Moniteurs/supprimer/(:num)', 'MoniteursController::supprimer/$1');
//modifier
// Route pour afficher le formulaire de modification
$routes->get('Moniteurs/modifier/(:num)', 'MoniteursController::modifier/$1');

// Route pour traiter la soumission du formulaire de modification
$routes->post('Moniteurs/update/(:num)', 'MoniteursController::update/$1');

//vehicules 
$routes->get('/Vehicules', 'VehiculesController::index', ['as' => 'vehicules.index']);
$routes->post('/Vehicules/ajouter', 'VehiculesController::ajouter', ['as' => 'vehicules.ajouter']);
$routes->get('/Vehicules/supprimer/(:num)', 'VehiculesController::supprimer/$1');
$routes->get('Vehicules/modifier/(:num)', 'VehiculesController::modifier/$1');
$routes->post('/Vehicules/update/(:num)', 'VehiculesController::update/$1');

/////rendez vous
$routes->get('/RendezVous', 'RendezvousController::index');
$routes->post('/RendezVous', 'RendezvousController::ajouter');
// $routes->get('/RendezvousController/getUnavailableDates', 'RendezvousController::getUnavailableDates');

$routes->get('/rendezvous', 'RendezvousController::getUnavailableDates');


$routes->get('/test', 'Home::test');
$routes->get('/test2', 'Home::test2');
$routes->get('/Contact', 'Home::Contact');
$routes->get('/About', 'Home::About');

$routes->post('login', 'AuthController::attemptLogin');



