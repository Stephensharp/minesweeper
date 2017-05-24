<?php


//include the bootstrap php
require '../bootstrap/bootstrap.php';

//echo PUBLIC_DIR.'<br>';
//echo __DIR__.'<br>';
//echo __FILE__.'<br>';
//echo __LINE__.'<br>';   these check the locations of the paths and accesses to see the difference between public and local access


//gets the array with controller name and action based on the 
function getControllerActionFromRequest()
{
    //initialise routes as an empty array
    $routes = [];
    
    //include the file with the routes (contains routes array as well)
    include '../routes/web.php';
    // at this point $routes contains all the routes from web.php

    // var_dump($routes);

// get the current route parameter or homepage if no route is set
    $current_route =request::get('route', 'homepage');

   if (array_key_exists($current_route, $routes))
   {//return the value from $routes
       return $routes[$current_route];
   }
   else
   {//return the errorController's error404 action
       return[
        'controller' => 'errorController',
        'action' => 'error404'
       ];
   }
}   
// run an action of a controller
function runControllerAction($controller_name, $action_name)  //this is a function that gets the controller name and action when the function is called
{           //it takes the controllers from the controller file as per below and returns it when the function is called


        //include the controller file
        require '../app/controllers/'.$controller_name.'.php';

        //create new object of the class Controller and put in a new variable $controller
        $controller = new $controller_name();

        //print the return value of calling the method of the created $controller
        echo $controller->$action_name();
};

$controller_action = getControllerActionFromRequest();

//run the controller action as per above
runControllerAction(
    $controller_action['controller'],
    $controller_action['action']
);


// var_dump($controller_action);

// echo request::get('route', '404');

// $current_route = request::get('route', '404');

//     if($current_route == '404')
//     {
//         //include the controller file
//         require '../app/controllers/errorController.php';

//         //create new object of the class indexController and put in a new variable $controller
//         $controller = new errorController();

//         //print the return value of calling the method index of the created $controller
//         echo $controller->error404();

//     }
//     else
//     {
//         //display the list of games

//         //require the correct controller file
//         //include the controller file
//         require '../app/controllers/gamesController.php';

//          //create new object of the class gamesController and put in a new variable $controller
//         $controller = new gamesController();

//         //print the return value of calling the method index of the created $controller
//         echo $controller->listing();
//     }



?>