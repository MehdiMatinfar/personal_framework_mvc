<?php

require_once __DIR__ . '/vendor/autoload.php';

use app\core\Application;

$app = new Application();
$app->router->get('/', function () {

    return 'Hello User';
});
$app->router->get('/contact', function () {

    return 'Contact Me User';
});
$app->run();


?>