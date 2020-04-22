<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->database();
        $this->load->model('user');
        $this->load->model('berita');
        $this->load->config('mainconfig');
    }

    public function index()
    {
        $this->load->view('template/error');
    }

    public function lihat_user()
    {
        $data['list_config'] = $this->config->config;
        if (!$this->session->userdata('credentials')) :
            $this->load->view('template/error', $data);
        else :
            $session = $this->session->userdata('credentials');
            $data["user_data"] = $session;
            if ($session["level"] ==  "Admin") {
                $data["list_data"] = $this->user->getData();
                $this->load->view('template/header', $data);
                $this->load->view('admin/tabel_user', $data);
                $this->load->view('template/footer', $data);
            } else {
                $this->load->view('template/error', $data);
            }
        endif;
    }

    public function verif_blog()
    {
        $data['list_config'] = $this->config->config;
        if (!$this->session->userdata('credentials')) :
            $this->load->view('template/error', $data);
        else :
            $session = $this->session->userdata('credentials');
            $data["user_data"] = $session;
            if ($session["level"] ==  "Admin") {
                $cons['conditions'] = array(
                    'verif' => 0
                );
                $data["list_data"] = $this->berita->getData($cons);
                $this->load->view('template/header', $data);
                $this->load->view('admin/verif', $data);
                $this->load->view('template/footer', $data);
            } else {
                $this->load->view('template/error', $data);
            }
        endif;
    }
}
