<?php

namespace Yosecc\RequestJson;

use Yosecc\RequestJson\Methods;

class RequestJson
{

	public function __construct() {
    }

    private function method(){
    	return new Methods();
    }

    static function index(){
    	$dat = new Methods();
    	$data  = $dat->get('/posts');
    	return require_once('../Resources/views/index.php');
    }

    static function get(){
    	$rout = explode("1", $_REQUEST['tipo']);
    	$route = $rout[0];
    	if (isset($rout[1])) {
    		$route .= $_REQUEST['id'].$rout[1];
    	}
    	$dat = new Methods();
    	$data  = $dat->get($route);

    	return require_once('../Resources/views/index.php');
    }

    /**
	 * Listing all resources 
	 */
	public function posts(){
		$a = new Methods();
		return $a->get('/posts');
	}

	/**
	 * Getting a resource
	 */
	public function post($id){
		if ($id) {
			return $this->method()->get('/posts/'.$id);
		}else{
			return 422;
		}
	}
	/*
	* Creating a resource
	*/
	public function create_posts($data){
		if ($data) {
			return $this->method()->post('/posts',$data);
		}else{
			return 422;
		}
	}

	/*
	* Updating a resource with PUT
	*/
	public function edit_posts($id, $data){
		if ($data && $id) {
			return $this->method()->put('/posts/'.$id, $data);
		}else{
			return 422;
		}
	}
	/*
	* Updating a resource with PATCH
	*/
	public function edit_posts_patch($id, $data){
		if ($data && $id) {
			return $this->method()->put('/posts/'.$id, $data);
		}else{
			return 422;
		}
	}
	/*
	* Deleting a resource
	*/
	public function delete($id){
		if ($id) {
			return $this->method()->delete('/posts/'.$id);
		}else{
			return 422;
		}
	}
	
}