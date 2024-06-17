<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->group('Contenidos',['namespace' => 'App\Controllers\api'],function($routes){
    $routes->get('listaContenidosPortada','listaContenidos::index');
    $routes->get('listaContenidos/(:num)','listaContenidos::show/$1');
    $routes->post('nuevoContenido','listaContenidos::create');
    $routes->post('actualizarContenido/(:num)','listaContenidos::update/$1');
});
