<?php 
	// namespace Yosecc\RequestJson;

	// /**
	//  * SISTEMA DE RUTAS WEB
	//  */
	// class ClassName extends AnotherClass
	// {
		
	// 	function __construct()
	// 	{
	// 		# code...
	// 	}


	// }
	// 
	require('../vendor/autoload.php');

	$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/..');
	$dotenv->load();

	// $dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
	//     $r->addRoute('GET', '/index', '\Yosecc\RequestJson\RequestJson::posts');

	//     // $r->addRoute('GET', '/posts/{id}/comment', '\Yosecc\RequestJson\RequestJson::comments');
	// });

	// // Fetch method and URI from somewhere
	// $httpMethod = $_SERVER['REQUEST_METHOD'];
	// $uri = $_SERVER['REQUEST_URI'];

	// // Strip query string (?foo=bar) and decode URI
	// if (false !== $pos = strpos($uri, '?')) {
	//     $uri = substr($uri, 0, $pos);
	// }
	// $uri = rawurldecode($uri);

	// $routeInfo = $dispatcher->dispatch($httpMethod, $uri);
	// call_user_func($routeInfo[1]);

