<?php

namespace app;

class Router
{
    private static $instance = null;

    private $routes = [];

    private function __construct()
    {
    }


    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function addRoute(string $method, string $path, string $action): void
    {
        $this->routes[$method][$path] = $action;
    }

    public function get(string $path, string $action): void
    {
        $this->addRoute("GET", $path, $action);
    }

    public function post(string $path, string $action): void
    {
        $this->addRoute("POST", $path, $action);
    }

    public function resolve(): void
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        if (isset($this->routes[$method][$path])) {
            [$class, $method] = explode('@', $this->routes[$method][$path]);
            $controller = new $class;
            call_user_func([$controller, $method]);
        } else {
            http_response_code(404);
            echo "Página não encontrada";
        }
    }
}
