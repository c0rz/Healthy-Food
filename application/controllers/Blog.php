<?php
defined('BASEPATH') or exit('No direct script access allowed');
set_time_limit(0);
ignore_user_abort(1);
class Blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->database();
        $this->load->model('berita');
        $this->load->config('mainconfig');
    }
    public function index()
    {
        $this->load->helper('form');
        $data['list_config'] = $this->config->config;
        $data['demo_berita'] = $this->berita->getData();
        $this->load->view('header.phtml', $data);
        $this->load->view('blog/landing', $data);
    }
}
