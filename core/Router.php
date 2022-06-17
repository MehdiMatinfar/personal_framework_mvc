<?php

namespace app\core;

class Router
{
    protected array $routes = [];
    public $request;

    /**
     * @param $request
     */
    public function __construct(RequestClass $request)
    {
        $this->request = $request;
    }

    public function get($path, $callback)
    {

        $this->routes['get'][$path] = $callback;


    }

    public function resolve()

    {
        $path = $this->request->getPath();

        $methode = $this->request->getMethode();

//        echo "<pre>";
//
//var_dump($path);
//var_dump($methode);
//
//echo "</pre>";



       $callback= $this->routes[$methode][$path] ?? false;
       if ($callback==false){

           echo 'Not Found';
           exit;
       }
     echo  call_user_func($callback);

    }

}