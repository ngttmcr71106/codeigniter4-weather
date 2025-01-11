<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/weather', 'Weather::index');
$routes->post('/weather/getWeather', 'Weather::getWeather');