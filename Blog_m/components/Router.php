<?php
class Router {
    private $routes;
    
    public function __construct() {
        $routesPath = ROOT . '/config/routes.php';
        $this->routes = include($routesPatch);
    }
    
    public function run() {
        
        if(!empty($_SERVER['REQUEST_URI']));
        $uri = trim($_SERVER['REQUEST_URI'], '/'); //
    }
}

