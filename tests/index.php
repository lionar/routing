<?php

use routing\router;

require __DIR__ . '/../vendor/autoload.php';

$router = new router;
$router->add ( 'GET /', function ( )
{
	echo 'Hello world';
} );

( $router->match ( 'GET /' ) ) ( );