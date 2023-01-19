<?php

namespace Armored\Source\classes;

class Router
{
    private $routes;
    public function register($route, $action) : self
    {
        $this->routes[$route] = $action;

        return $this;
    }

    public function resolve($requestUri)
    {
$route = \explode('?', $requestUri)[0];
$action = $this->routes[$route] ?? null;

if (!$action) {
    throw new RouteNotFound();
}
return \call_user_func($action);
    }
}
