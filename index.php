<?php

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

require_once "vendor/autoload.php";
$app = new \Slim\App();

$app-> get('/produtos', function(Request $request, Response $response, array $args){
    $limit = $request -> getQueryParams()['limit'];
    return $response -> getBody()-> write("{$limit} protudos do banco");

});

$app->run();

?>