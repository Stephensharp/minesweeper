<?php


//create new variable routes and initialise it with an empty array
$routes = [    //this is where our routes will go

    // route to games list
    'games' => [
        'controller' => 'gamesController',   //this is the controller
        'action' => 'listing'       //this is the action
    ],
    // route to homepage
    'homepage' => [
        'controller' => 'indexController',   //this is the controller
        'action' => 'listing'       //this is the action
    ]
];
