<?php
use Dotenv\Dotenv;
require_once __DIR__ . '/../vendor/autoload.php';

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->safeLoad();

$app = new Silex\Application();
$app->register(new Silex\Provider\ServiceControllerServiceProvider());


require_once __DIR__ . '/../app/routes.php';

$app->run();

