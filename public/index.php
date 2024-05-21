<?php

use App\Api;

require dirname(__DIR__).'/vendor/autoload.php';

$api = new Api();
$api->generateSitemaps();