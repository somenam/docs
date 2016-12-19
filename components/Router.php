<?php

class Router
{

    private $routes;

    public function __construct()
    {
        $this->routes = include(ROOT.'/config/routes.php');
    }

    /*
     * Returns request string
     */

    protected function getUri()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run()
    {
        
        if (!isset($_SESSION['isGuest'])) {
            $uri = '/';
        }  else {
            $uri = $this->getUri();
        }
        if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {


            foreach ($this->routes as $pattern => $path) {
                if (preg_match("~$pattern~", $uri)) {
                    $segments = explode('/', $path);
                    $controllerName = ucfirst(array_shift($segments).'Controller');
                    $actionName = 'action'.ucfirst(array_shift($segments));

                    $controllerFile = ROOT.'/controllers/'.$controllerName.'.php';
                    //var_dump($controllerFile);
                    if (file_exists($controllerFile)) {
                        include_once($controllerFile);
                        $controllerObject = new $controllerName();
                        echo $controllerObject->$actionName();
                        exit;
                    }
                }
            }
        }



        foreach ($this->routes as $pattern => $path) {
            if (preg_match("~$pattern~", $uri)) {
                $segments = explode('/', $path);
                $controllerName = ucfirst(array_shift($segments).'Controller');
                $actionName = 'action'.ucfirst(array_shift($segments));

                $controllerFile = ROOT.'/controllers/'.$controllerName.'.php';
                //var_dump($controllerFile);
                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                    $controllerObject = new $controllerName();
                    return $controllerObject->$actionName();
                    break;
                }
            }
        }
    }

}
