<?php

namespace Confee\Units\Authentication\Http\Routes;

use Confee\Support\Http\Routing\RouteFile;
use Illuminate\Http\Request;

class Api extends RouteFile
{

    public function routes()
    {
        $this->registerDefaultRoutes();
        $this->registerV1Routes();
    }

    protected function registerDefaultRoutes()
    {
        $this->userRoutes();
        $this->loginRoutes();
    }

    protected function userRoutes()
    {
        $this->router->get('user', function (Request $request) {
            return $this->registerDefaultRoutes();
        });
    }

    protected function registerV1Routes()
    {
        $this->router->group(['prefix' => 'v1'], function () {
            $this->registerDefaultRoutes();
        });
    }

    protected function loginRoutes() {
        $this->router->post('login', 'LoginController@login');
    }
}