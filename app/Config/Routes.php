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

