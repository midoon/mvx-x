<?php

require_once __DIR__."/../vendor/autoload.php";

use Harun\MvcDasar\App\Router;
use Harun\MvcDasar\Controller\HomeController;
use Harun\MvcDasar\Controller\ProductController;
use Harun\MvcDasar\Middleware\AuthMiddleware;

Router::add("GET", "/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)",ProductController::class,"categories");

Router::add("GET", "/", HomeController::class, "index");
Router::add("GET", "/hello",  HomeController::class, "hello",[AuthMiddleware::class]);
Router::add("GET", "/world",  HomeController::class, "world", [AuthMiddleware::class]);

Router::run();  