<?php

use App\Router;

// Initialize the router
$router = new Router();

// Define routes
$router->addRoute('/', 'PageController@index');
$router->addRoute('/folder1', 'PageController@folder1');
$router->addRoute('/folder2', 'PageController@folder2');

// Dispatch the route
$router->dispatch();