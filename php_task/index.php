<?php

// include 'router/functions.php';

// $routes = include 'router/routes.php';

// deploy($_SERVER['REQUEST_URI'], $routes);

$uri=$_SERVER['REQUEST_URI'];

switch ($uri) {
    case '/':
        require 'home.php';
        break;
    case '/index':
        require 'home.php';
        break;
    case '/index.php':
        require 'home.php';
        break;
    case '/home':
        require 'home.php';
        break;
    case '/login':
        require 'login.php';
        break;
    case '/registration':
        require 'registration.php';
        break;
    case '/dashboard':
        require 'dashboard.php';
        break;
    case '/logout':
        require 'logout.php';
        break;
    case '/table':
        require 'table.php';
        break;
}

?>
