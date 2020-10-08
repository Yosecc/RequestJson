<?php 

	require('../vendor/autoload.php');

	$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/..');
	$dotenv->load();

	$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
	    $r->addRoute('GET', '/', '\Yosecc\RequestJson\RequestJson::index');
	    $r->addRoute('GET', '/search', '\Yosecc\RequestJson\RequestJson::get');

	});
		// Fetch method and URI from somewhere
		$httpMethod = $_SERVER['REQUEST_METHOD'];
		$uri = $_SERVER['REQUEST_URI'];

		// Strip query string (?foo=bar) and decode URI
		if (false !== $pos = strpos($uri, '?')) {
		    $uri = substr($uri, 0, $pos);
		}
		$uri = rawurldecode($uri);

		$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
		switch ($routeInfo[0]) {
		    case FastRoute\Dispatcher::NOT_FOUND:
		        // ... 404 Not Found
		    var_dump('404');
		        break;
		    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
		        $allowedMethods = $routeInfo[1];
		        // ... 405 Method Not Allowed
		    var_dump('405');

		        break;
		    case FastRoute\Dispatcher::FOUND:
		        $handler = $routeInfo[1];
		        $vars = $routeInfo[2];
		        call_user_func($routeInfo[1]);
		        break;
		}
	


function get_user_handler($id){
	echo 'df';
}