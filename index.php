<?php

$path = trim($_SERVER['REQUEST_URI'], '/');
$parsed_url = parse_url($path, PHP_URL_PATH);



$routes = [
	'chat-app'=>'view/index.php',
	'chat-app/login.php' => 'view/login.php',
	'chat-app/signup.php' => 'view/signup.php',
	'chat-app/dashboard.php'=> 'view/dashboard.php',
	


];
if (array_key_exists($parsed_url,$routes)) {
	require $routes[$parsed_url];
}else {

	require 'views/404-Not-Found.php';
}

