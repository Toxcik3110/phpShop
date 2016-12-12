<?php

/**
 *
 */
class Router
{
    private $routes;

    public function __construct()
    {
        # code...
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include($routesPath);
    }

    private function getURI() {
        if(!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run() {
        $uri = $this->getURI();
        // echo $uri;

        foreach ($this->routes as $uriPattern => $path) {
            if (preg_match("~$uriPattern~", $uri)) {

                // echo '<br>Где ищем: '.$uri;
                // echo '<br>Что ищем: '.$uriPattern;
                // echo '<br>Кто обрабатывает '.$path;
                //
                // $internalPath = preg_replace("~$uriPattern~", $path, $uri);
                //
                // echo '<br><br>Нужно сформировать: '.$internalPath;


                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
                $segments = explode('/', $internalRoute);

                //KOSTЫЛЬ
                $buffer = array_shift($segments);
                // echo print_r($segments);

                $controllerName = array_shift($segments).'Controller';
                $controllerName = ucfirst($controllerName);

                $actionName = 'action'.ucfirst(array_shift($segments));
                // echo '<br>Class name: '.$controllerName;
                // echo '<br>Controller name: '.$actionName;
                $parameters = $segments;
                // echo '<pre>';
                // print_r($parameters);
                $controllerFile = ROOT.'/controllers/'.$controllerName.'.php';

                if(file_exists($controllerFile)) {
                    include_once($controllerFile);
                }

                $controllerObject = new $controllerName;

                $result = call_user_func(array($controllerObject, $actionName), $parameters);

                if($result != null) {
                    break;
                }
                // die;

                // // echo '+';
                // // echo '<pre>';
                // // print_r($segments);
                // // echo '</pre>';
                //
                //
                //
            }
            // echo "<br>$uriPattern -> $path";
        }

    }
}


?>
