<?php
require 'vendor/autoload.php';

$app = new \Slim\App();

$app->get('/hello/{name}', function($request, $response, $args) {
    echo 'Hello, ', $args['name'];
});

$app->run();
