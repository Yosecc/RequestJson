<?php

namespace Yosecc\RequestJson;
/**
 * Metodos al API
 */
class Methods 
{
	
	var $urlBase;
	
	public function __construct() {
         $this->urlBase = $_ENV['API_ENDPOINT'];
    }

    function get($url){
    	$options = array(
			'http' => array(
	     		'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
	        	'method'  => 'GET',
	    	)
	    );
		$context  = stream_context_create($options);
		$json = @file_get_contents($this->urlBase.$url, false, $context);
		if($json==false){
			return 403;
		}
		return $json;
    }

    function post($url, $data){
    	$options = array(
			'http' => array(
	     		'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
	        	'method'  => 'POST',
	        	'content' => http_build_query($data)
	    	)
	    );
		$context  = stream_context_create($options);
		$json = @file_get_contents($this->urlBase.$url, false, $context);
		if($json==false){
			return 403;
		}
		return $json;
    }
    function put($url, $data){
    	$options = array(
			'http' => array(
	     		'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
	        	'method'  => 'PUT',
	        	'content' => http_build_query($data)
	    	)
	    );
		$context  = stream_context_create($options);
		$json = @file_get_contents($this->urlBase.$url, false, $context);
		if($json==false){
			return 403;
		}
		return $json;
    }
    function patch($url, $data){
    	$options = array(
			'http' => array(
	     		'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
	        	'method'  => 'PATCH',
	        	'content' => http_build_query($data)
	    	)
	    );
		$context  = stream_context_create($options);
		$json = @file_get_contents($this->urlBase.$url, false, $context);
		if($json==false){
			return 403;
		}
		return $json;
    }
    function delete($url){
    	$options = array(
			'http' => array(
	     		'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
	        	'method'  => 'DELETE',
	    	)
	    );
		$context  = stream_context_create($options);
		$json = @file_get_contents($this->urlBase.$url, false, $context);
		if($json==false){
			return 403;
		}
		return $json;
    }
    

}
