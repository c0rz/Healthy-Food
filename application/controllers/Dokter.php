<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokter extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->database();
        $this->load->model('user');
        $this->load->model('konsul');
        $this->load->config('mainconfig');
    }

    public function index()
    {
        $this->load->view('template/error');
    }

    public function cek_inbox()
    {
        $data['list_config'] = $this->config->config;
        if (!$this->session->userdata('credentials')) :
            $this->load->view('template/error', $data);
        else :
            $session = $this->session->userdata('credentials');
            $data["user_data"] = $session;
            if ($session["level"] !=  "Admin") {
                if ($session["level"] ==  "Dokter") {
                    $cons['conditions'] = array(
                        'id_dokter' => $session["id_akun"]
                    );
                    $data["list_data"] = $this->konsul->getData($cons);
                } else {
                    $cons['conditions'] = array(
                        'id_konsul' => $session["id_akun"]
                    );
                    $data["list_data"] = $this->konsul->getData($cons);
                }
                $this->load->view('template/header', $data);
                $this->load->view('dokter/inbox', $data);
                $this->load->view('template/footer', $data);
            } else {
                $data["list_data"] = $this->konsul->getData();
                $this->load->view('template/header', $data);
                $this->load->view('dokter/inbox', $data);
                $this->load->view('template/footer', $data);
            }
        endif;
    }
}
