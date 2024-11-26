<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/Dashboard', 'Home::Dashboard');
$routes->get('/Vehicules', 'Home::Vehicules');
$routes->get('/Candidats', 'CandidatsController::index');
$routes->get('/Moniteurs', 'MoniteursController::index');
///ajouter moniteur
$routes->post('/Moniteurs', 'MoniteursController::ajouter');
$routes->post('/CandidatsA', 'CandidatsController::ajouter');
//supprimer 
$routes->get('Moniteurs/supprimer/(:num)', 'MoniteursController::supprimer/$1');
$routes->get('Candidats/supprimer/(:num)', 'CandidatsController::supprimer/$1');
$routes->get('/test', 'Home::test');
// Route pour afficher le formulaire de modification
$routes->get('Moniteurs/modifier/(:num)', 'MoniteursController::modifier/$1');
// Route pour traiter la soumission du formulaire de modification  
$routes->post('Moniteurs/update/(:num)', 'MoniteursController::update/$1');

$routes->get('path_to_get_moniteur_info/(:num)', 'CandidatsController::getMoniteurInfo/$1');
$routes->post('Candidats/update/(:num)', 'CandidatsController::update/$1');
$routes->get('Candidats/modifier/(:num)', 'CandidatsController::modifier/$1');
$routes->get('Candidats/getCandidatDetails/(:num)', 'CandidatsController::getCandidatDetails/$1');

