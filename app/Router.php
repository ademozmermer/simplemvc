<?php

namespace App;

class Router
{
    private array $routes = [];

    /**
     * @param $url
     * @param $controllerMethod
     * @return void
     */
    public function addRoute($url, $controllerMethod): void
    {
        $this->routes[$url] = $controllerMethod;
    }

    /**
     * @return void
     */
    public function dispatch(): void
    {
        $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        if (array_key_exists($url, $this->routes)) {
            list($controllerName, $methodName) = explode('@', $this->routes[$url]);
            $controllerName = "App\\".$controllerName;
            $controller = new $controllerName();
            $controller->$methodName();
        } else {
            header('HTTP/1.0 404 Not Found');
            echo '404 Not Found';
        }
    }
}