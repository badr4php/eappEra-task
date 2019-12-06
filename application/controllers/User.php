<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
		//load database in autoload libraries 
		parent::__construct(); 
		$this->load->model('UsersModel');
	}
	public function login(){}

	public function index()
	{
		$usersModel = new UsersModel;
		$this->load->view('layouts/header');
		$this->load->view('users/index', array('users' => $usersModel->list()));
		$this->load->view('layouts/sidebar');
		$this->load->view('layouts/footer');
	}

	public function create()
	{
		$data['url'] = "users/store";
		$this->load->view('layouts/header');
		$this->load->view('users/create',$data);
		$this->load->view('layouts/sidebar');
		$this->load->view('layouts/footer');
	}

	public function store()
	{
		$users = new UsersModel;
		$users->insert();
		redirect(site_url('users'));
	}

	public function edit($id){
		$usersModel = new UsersModel;
		$data['user'] = $usersModel->getRow('id', $id);
		$data['url'] = "users/update/$id";
		$this->load->view('layouts/header');
		$this->load->view('users/create', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('layouts/footer');
	}

	public function update($id)
	{
		$users = new UsersModel;
		$users->update($id);
		redirect(site_url('users'));
	}

	public function delete($id){
		$users = new UsersModel;
		$users->delete($id);
		redirect(site_url('users'));
	}
}
