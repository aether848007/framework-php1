<?php

namespace Somecode\Framework\Http;

use FastRoute\RouteCollector;
use function FastRoute\simpleDispatcher;

class Kernel
{
    public function handle(Request $request): Response
    {
        $dispatcher = simpleDispatcher(function (RouteCollector $collector) {
            $collector->get('/', function () {
                return new Response('Hello, world!');
            });

            $collector->get('/posts/{id}', function (array $vars) {
                return new Response("<h1>Post - {$vars['id']}</h1>");
            });
        });

        $routeInfo = $dispatcher->dispatch(
            $request->getMethod(),
            $request->getPath()
        );

        if ($routeInfo[0] !== \FastRoute\Dispatcher::FOUND) {
            return new Response('404 Not Found', 404);
        }

        $handler = $routeInfo[1];
        $vars = $routeInfo[2];

        if ($handler instanceof \Closure) {
            return $handler($vars);
        }

        [$controller, $method] = $handler;

        return call_user_func_array([new $controller, $method], $vars);
    }
}