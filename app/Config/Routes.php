<?php 

use CodeIgniter\Router\RouteCollection;

/**
 *  @var RouteCollection $routes 
 */
$routes->get('/', 'Home::index');
$routes->post('/guarda_cliente', 'Home::guardar_cliente');
$routes->get('/cliente', 'Home::vista_cliente');
$routes->get('clientes', 'Home::lista_clientes');
$routes->get('datosc/(:num)', 'Home::recuperar/$1');
$routes->get('borrarc/(:num)', 'Home::borrar/$1');
$routes->post('actualiza', 'Home::actualizar');
$routes->get('repartidor', 'Repartidor::index');
$routes->post('repartidor/guardar', 'Repartidor::guardar');
$routes->get('repartidor/eliminar/(:num)', 'Repartidor::eliminar/$1');