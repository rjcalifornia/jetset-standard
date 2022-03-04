<?php

require_once __DIR__ . '/../vendor/autoload.php';

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$app = new Silex\Application();
require_once __DIR__ . '/../app/routes.php';

$app->run();

