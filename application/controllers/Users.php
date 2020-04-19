<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->database();
		$this->load->config('mainconfig');
	}
	public function index()
	{
		$data['list_config'] = $this->config->config;
		if (!$this->session->userdata('credentials')) :
			$this->load->view('landing', $data);
		else :
			$data['user_data'] = $this->session->userdata('credentials');
			// $this->load->view('list/header.phtml', $data);
			$this->load->view('home', $data);
		endif;
	}

	public function update()
	{
		
	}
	
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
