<?php

namespace app\core;
class Application
{
    public $router;
    public $request;

    public function __construct()
    {
        $this->request = new RequestClass();

        $this->router = new Router($this->request);

    }

    public function run()
    {

        $this->router->resolve();
    }
}