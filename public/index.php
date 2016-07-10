<?php
// Front Controller

error_reporting(E_ALL);

require '../Core/Router.php';

$router = new Router();

$router->add('', ["controller" => "Home", "action" => "index"]);
$router->add('posts', ["controller" => "Posts", "action" => "index"]);
$router->add('posts/new', ["controller" => "Posts", "action" => "new"]);

$url = $_SERVER["QUERY_STRING"];

echo "Requested URL : " . $url . "<br>";

// echo "<pre>";
// var_dump($router->getRoutes());
// echo "</pre>";
if ($router->match($url)) {
	echo "<pre>";	
	var_dump($router->getParams());
	echo "</pre>";
}
else{
	echo "no route found for the " . $url;
}