<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Auth::index');
$routes->post('/login', 'Auth::login');
$routes->get('/logout', 'Auth::logout');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/sql', 'SqlInjection::index');
$routes->get('/bola', 'Bola::index');
$routes->get('/ransomware', 'Ransomware::index');
$routes->get('/backup', 'Backup::index');
$routes->get('/logs', 'Logs::index');
$routes->get('/sql', 'SqlInjection::index');
$routes->post('/sql/process', 'SqlInjection::process');
$routes->get('/bola', 'Bola::index');
$routes->get('/bola/view/(:num)', 'Bola::view/$1');
$routes->post('/bola/view/(:num)', 'Bola::view/$1');
$routes->get('/ransomware','Ransomware::index');
$routes->post('/ransomware/attack','Ransomware::attack');
$routes->post('/ransomware/restore','Ransomware::restore');