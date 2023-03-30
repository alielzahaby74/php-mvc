<?php

namespace src\Http;

class Route {

    protected Request $request;

    protected Response $response;

    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }
    public static array $routes = [];
    
    public static function get($route, callable|array|string $action)
    {
        self::$routes['get'][$route] = $action;
    }

    public static function post($route, callable|array|string $action)
    {
        self::$routes['post'][$route] = $action;
    }
}