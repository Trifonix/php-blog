<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';

$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Home page!");
    return $response;
});

$app->get('/about', function (Request $request, Response $response, $args) {
    $response->getBody()->write("About page!");
    return $response;
});

$app->run();