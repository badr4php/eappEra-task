<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	private $restApi;

	public function __construct() {
		//load database in autoload libraries 
		parent::__construct(); 
		$this->load->model('AuthModel');
		$this->load->library('RestApi');
		$this->restApi = new RestApi;
	}
	public function login()
	{
		$authModel = new AuthModel;
		$data = $authModel->login($this->restApi->input());
		return $this->restApi->response($data);
	}
}
