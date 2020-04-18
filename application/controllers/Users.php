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
			$this->load->view('login', $data);
		endif;
	}
}
