<?php
defined('BASEPATH') or exit('No direct script access allowed');
set_time_limit(0);
date_default_timezone_set("Asia/Jakarta");
ignore_user_abort(1);
class Konsultasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->database();
        $this->load->model('user');
        $this->load->model('konsul');
        $this->load->model('pesan');
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

    public function member()
    {
        $this->load->helper('form');
        $data['list_config'] = $this->config->config;
        $session = $this->session->userdata('credentials');
        $data['user_data'] = $session;
        if ($this->session->userdata('credentials')) :
            $this->load->view('template/header.php', $data);
            if ($this->input->method() == 'post') {
                $subjek = $this->input->post('subjek');
                $dokter = $this->input->post('dokter');
                $topik = $this->input->post('topik');
                $post = $this->input->post('isi');
                if (!empty($subjek) && !empty($dokter) && !empty($topik) && !empty($post)) {
                    $url = "pesandokter" . rand(00000, 99999);
                    $userData = array(
                        'id_dokter' => $dokter,
                        'id_konsul' => $session["id_akun"],
                        'subject' => $subjek,
                        'topic' => $topik,
                        'status' => 0,
                        'created' => date("Y-m-d H:i:s"),
                        'dokter_respone' => 0,
                        'user_respone' => 0,
                        'url_hash' => md5($url),
                    );
                    $insert = $this->konsul->insert($userData);
                    $userData = array(
                        'url_hash' => md5($url),
                        'pesan' => $post,
                        'ida' => $session["id_akun"],
                        'created' => date("Y-m-d H:i:s"),
                    );
                    $insert = $this->pesan->insert($userData);
                    if ($insert) {
                        $data['sukses_message'] = "Konsul sudah terkirim.";
                        $data["list_data"] = $this->user->getData();
                        $this->load->view('account/konsul.php', $data);
                        $this->load->view('template/footer.php', $data);
                    } else {
                        $data['error_message'] = "Db error.";
                        $data["list_data"] = $this->user->getData();
                        $this->load->view('account/konsul.php', $data);
                        $this->load->view('template/footer.php', $data);
                    }
                } else {
                    $data['error_message'] = "Data belum terisi dengan lengkap.";
                    $data["list_data"] = $this->user->getData();
                    $this->load->view('account/konsul.php', $data);
                    $this->load->view('template/footer.php', $data);
                }
            } else {
                $data["list_data"] = $this->user->getData();
                $this->load->view('account/konsul.php', $data);
                $this->load->view('template/footer.php', $data);
            } else :
            $this->load->view('template/error');
        endif;
    }

    public function kirim($id)
    {
        $this->load->helper('form');
        $data['list_config'] = $this->config->config;
        $session = $this->session->userdata('credentials');
        $data['user_data'] = $session;
        if ($this->session->userdata('credentials')) :
            if ($this->input->method() == 'post') {
                $pesan = $this->input->post('reply');
                $userData = array(
                    'url_hash' => $id,
                    'pesan' => $pesan,
                    'ida' => $session["id_akun"],
                    'created' => date("Y-m-d H:i:s"),
                );
                $insert = $this->pesan->insert($userData);
                if ($session["level"] != "Dokter") {
                    $Data["dokter_respone"] = 0;
                    $update = $this->konsul->update($Data, $id);
                } else {
                    $Data["user_respone"] = 0;
                    $update = $this->konsul->update($Data, $id);
                }
                if ($insert) {
                    $data['sukses_message'] = "Pesan Berhasil dikirim.";
                    $data["konsul"] = $this->konsul->cari($id);
                    $this->load->view('template/header.php', $data);
                    $this->load->view('account/read.php', $data);
                    $this->load->view('template/footer.php', $data);
                } else {
                    $data["konsul"] = $this->konsul->cari($hash);
                    $this->load->view('template/header.php', $data);
                    $this->load->view('account/read.php', $data);
                    $this->load->view('template/footer.php', $data);
                }
            } else {
                $this->load->view('template/error');
            } else :
            $this->load->view('template/error');
        endif;
    }

    public function update($id)
    {
        $this->load->helper('form');
        $data['list_config'] = $this->config->config;
        $session = $this->session->userdata('credentials');
        $data['user_data'] = $session;
        if ($this->session->userdata('credentials')) :
            $Data["status"] = 1;
            $update = $this->konsul->update($Data, $id);
            if ($update) {
                $data['sukses_message'] = "Status Berhasil ditutup.";
                $data["konsul"] = $this->konsul->cari($id);
                $this->load->view('template/header.php', $data);
                $this->load->view('account/read.php', $data);
                $this->load->view('template/footer.php', $data);
            } else {
                $data["konsul"] = $this->konsul->cari($hash);
                $this->load->view('template/header.php', $data);
                $this->load->view('account/read.php', $data);
                $this->load->view('template/footer.php', $data);
            } else :
            $this->load->view('template/error');
        endif;
    }
    
    public function view($hash)
    {
        $this->load->helper('form');
        $data['list_config'] = $this->config->config;
        $session = $this->session->userdata('credentials');
        $data['user_data'] = $session;
        if ($this->session->userdata('credentials')) :
            if ($session["level"] == "Dokter") {
                $userData["dokter_respone"] = 1;
                $update = $this->konsul->update($userData, $hash);
            } else if ($session["level"] == "Member") {
                $userData["user_respone"] = 1;
                $update = $this->konsul->update($userData, $hash);
            }
            $data["konsul"] = $this->konsul->cari($hash);
            $this->load->view('template/header.php', $data);
            $this->load->view('account/read.php', $data);
            $this->load->view('template/footer.php', $data);
        else :
            $this->load->view('template/error');
        endif;
    }
}
