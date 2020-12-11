<?php

require 'vendor/autoload.php';
require './src/GrpcClient.php';

$grpcClient = new GrpcClient();

$url = trim($_SERVER['REQUEST_URI'], '/');

if ((preg_match('/users\/([0-9]+)/', $url, $matches))) {
    $userId = $matches[1];
    $guid = new Guid();
    $guid->setGuid($userId);
    try {
        $user = $grpcClient->getUser($guid);
        require 'views/show-user.php';
    } catch (Exception $e) {
        $message = $e->getMessage();
        require 'views/error.php';
    }
} else {
    require 'views/home.php';
}

