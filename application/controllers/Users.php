<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

	public function index()
	{
		$this->load->view('landing_page');
	}
}
