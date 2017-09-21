<?php

namespace Confee\Support\Http\Routing;

abstract class RouteFile
{
    /**
     * @var \Illuminate\Routing\Router
     */
    public $router;
    protected $options;

    public function __construct($options = [])
    {
        $this->options = $options;
        $this->router = app('router');
    }

    public function register()
    {
        $this->router->group($this->options, function () {
            $this->routes();
        });
    }

    abstract function routes();
}