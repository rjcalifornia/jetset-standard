<?php

use App\Controllers\HomeController;
use App\Config\Database;
use Whoops\Handler\PrettyPageHandler;

$app['doctrine'] = function($app) {
    return new Database;
};

$app['home.controller'] = function() use ($app) {
    return new HomeController($app['doctrine']);
};




$app->get("/status", "home.controller:status");
$app->get('/', "home.controller:frontpage");
