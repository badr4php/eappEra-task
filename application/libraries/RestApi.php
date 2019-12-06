<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RestApi {

	public function input()
	{
		// Takes raw data from the request
		$json = file_get_contents('php://input');
		// Converts it into array & return
		return json_decode($json, true);
	}

	public function response($data){
		echo json_encode($data);
	}
}