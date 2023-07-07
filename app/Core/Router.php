<?php 


// Je crée une instance de Altorouter

use App\Controllers\MainController;

$_ROUTER = new AltoRouter();

// Je dis à Altorouter qu'il doit tenir compte du chemin de base de l'application dans les routes que je vais lui donner à manger
$_ROUTER->setBasePath($_SERVER['BASE_URI']);



$routes = [
    [
        'method' => 'GET',
        'route' => '/',
        'target' => [
            'controller' => MainController::class,
            'method' => 'home'
        ],
        'name' => 'home'
    ],
    [
        'method' => 'GET',
        'route' => '/pokemon/[i:numero]',
        'target' => [
            'controller' => MainController::class,
            'method' => 'pokemon'
        ],
        'name' => 'pokemon'
    ],
    [
        'method' => 'GET',
        'route' => '/list',
        'target' => [
            'controller' => MainController::class,
            'method' => 'list'
        ],
        'name' => 'list'
    ]
    ];

   
// Je donne touuuutes les routes d'un seul coup à Altorouter
$_ROUTER->addRoutes($routes);

$match = $_ROUTER->match();

