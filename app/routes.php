<?php

use App\Controllers\HomeController;

$app->get("/", function () {
    return new \Symfony\Component\HttpFoundation\Response('Hello World!');
});

$app->get("/status", [HomeController::class, 'home']);

