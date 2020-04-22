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

    public function dokter()
    {
        $this->load->helper('form');
        $data['list_config'] = $this->config->config;
        if ($this->session->userdata('credentials')) :
            $session = $this->session->userdata('credentials');
            $data["user_data"] = $session;
            if ($session["level"] == "Admin") {
                $this->load->view('template/header', $data);
                if ($this->input->method() == 'post') {
                    $email = $this->input->post('email');
                    $password = $this->input->post('password');
                    $spel = $this->input->post('spel');
                    $nama_lengkap = $this->input->post('full_name');
                    $tanggal_lahir = $this->input->post('ttl');
                    if ($email && $password && $spel && $nama_lengkap && $tanggal_lahir) {
                        $con['returnType'] = 'count';
                        $con['conditions'] = array(
                            'email' => $email
                        );
                        $user = $this->user->getData($con);
                        if ($user > 0) {
                            $data['error_message'] = "Email sudah terdaftar.";
                            $this->load->view('auth/daftar', $data);
                        } else {
                            $userData = array(
                                'nama_lengkap' => $nama_lengkap,
                                'tanggal_lahir' => $tanggal_lahir,
                                'email' => $email,
                                'password' => md5($password),
                                'level' => 'Dokter',
                                'semua_spesialisasi' => $spel,
                            );
                            $insert = $this->user->insert($userData);
                            if ($insert) {
                                $data['sukses_message'] = "Berhasil membuat akun, sekarang anda bisa Login/Masuk.";
                                $this->load->view('admin/insert', $data);
                                $this->load->view('template/footer', $data);
                            } else {
                                $data['error_message'] = "Error (1).";
                                $this->load->view('admin/insert', $data);
                                $this->load->view('template/footer', $data);
                            }
                        }
                    } else {
                        $data['error_message'] = "Terdapat data yang kosong.";
                        $this->load->view('admin/insert', $data);
                        $this->load->view('template/footer', $data);
                    }
                } else {
                    $this->load->view('admin/insert', $data);
                    $this->load->view('template/footer', $data);
                }
            } else {
                $this->load->view('template/error');
            } else :
            $this->load->view('template/error');
        endif;
    }
}
