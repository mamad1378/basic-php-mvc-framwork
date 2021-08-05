<?php

namespace app\core;

class Router
{
    protected $routes = [];
    protected Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function get($path , $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        $this->request->getPath();

    }
}