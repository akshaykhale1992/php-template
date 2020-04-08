<?php

require __DIR__ . '/../vendor/autoload.php';

// Loading Dotenv
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

// Loading Fast Route
$dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $route) {
    require_once __DIR__ . '/../routes.php';
});

$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri        = $_SERVER['REQUEST_URI'];

if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        echo "404 - Page Not Found";
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        echo "405 - Invalid Method";
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars    = $routeInfo[2];
        if (is_string($routeInfo[1])) {
            $handler    = explode('@', $routeInfo[1]);
            $controller = "\\Controllers\\" . $handler[0];
            $method     = $handler[1];
            (new $controller())->{$method}($vars);
            break;
        }
        $handler($vars);
}
