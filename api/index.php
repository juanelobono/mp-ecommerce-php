<?php

date_default_timezone_set('America/Argentina/Cordoba');

require 'RestServer.php';
require 'controlador/Test.php';
require 'controlador/PasarelaMercadoPago.php';

$server = new RestServer('debug');
$server->addClass('Test');
$server->addClass('PasarelaMercadoPago');
$server->handle();
