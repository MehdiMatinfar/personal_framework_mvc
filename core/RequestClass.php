<?php

namespace app\core;

class RequestClass
{
    public function getMethode()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public function getPath()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $position = strpos($path, '?');

        if ($position == false) {
            return $path;
        }
        return substr($path, 0, $position);

    }
}