<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {
	private $restApi;

	public function __construct() {
		//load database in autoload libraries 
		parent::__construct(); 
		$this->load->model('AuthModel');
		$this->load->model('PostModel');
		$this->load->library('RestApi');
		$this->restApi = new RestApi;
		$authModel = new AuthModel;
		if(!$authModel->isAuth()){
			$response['authenticated'] = false;
			$this->restApi->response($response);
			 exit;
		}

	}
	public function index()
	{
		$postModel = new PostModel;
		return $this->restApi->response($postModel->list());
	}

	public function store()
	{
		$postModel = new postModel;
		$data = $this->restApi->input();
		$response = $postModel->insert($data);
		return $this->restApi->response($response);
	}

}
