<?php
defined('BASEPATH') or exit('No direct script access allowed');
set_time_limit(0);
date_default_timezone_set("Asia/Jakarta");
ignore_user_abort(1);
class Blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->database();
        $this->load->model('berita');
        $this->load->model('user');
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

    public function view($url)
    {
        $data['list_config'] = $this->config->config;
        $data_artikel = $this->berita->search_url($url);
        if ($data_artikel) {
            $ses = $this->session->userdata('credentials');
            if (($data_artikel["verif"] == 0) && ($ses["level"] == "Admin") || ($data_artikel["verif"] == 1)) {
                $data['artikel'] = $data_artikel;
                $con['id_akun'] = $data_artikel['id_akun'];
                $data['author'] =  $this->user->getData($con);
                $this->load->view('header.phtml', $data);
                $this->load->view('blog/read', $data);
            } else {
                $this->load->view('template/error', $data);
            }
        } else {
            $this->load->view('template/error', $data);
        }
    }

    public function buat()
    {
        $data['list_config'] = $this->config->config;
        if (!$this->session->userdata('credentials')) :
            $this->load->view('template/error');
        else :
            $session = $this->session->userdata('credentials');
            $data["user_data"] = $session;
            if ($session["level"] ==  "Dokter") {
                if ($this->input->method() == 'post') {
                    $judul = $this->input->post('judul');
                    $post = $this->input->post('isi');
                    if (!empty($judul) && !empty($post)) {
                        $hari = strftime("%A");
                        $jam = date("H:i");
                        $waktusub = "Hari " . $hari . ", Jam " . $jam . "";
                        $config['upload_path']        = './assets/blog/';
                        $config['allowed_types']        = 'gif|png|jpg|JPEG';
                        $config['max_size']        = 10000;
                        $this->load->library('upload', $config);
                        if ($this->upload->do_upload('gambar')) {
                            $foto = $this->upload->data();
                            $userData = array(
                                'judul' => $judul,
                                'isi_blog' => $post,
                                'gambar' => $foto['file_name'],
                                'rilis_blog' => $waktusub,
                                'url' => strtolower(str_replace(" ", "-", $judul)),
                                'id_akun' => $session['id_akun'],
                                'verif' => 0,
                            );
                            $insert = $this->berita->insert($userData);
                            $data['sukses_message'] = "Berhasil membuat data, mohon tunggu verifikasi admin.";
                            $this->load->view('template/header', $data);
                            $this->load->view('dokter/post', $data);
                            $this->load->view('template/footer', $data);
                        } else {
                            var_dump($this->upload->display_errors());
                            exit();
                            $data['error_message'] = "IMG (error).";
                            $this->load->view('template/header', $data);
                            $this->load->view('dokter/post', $data);
                            $this->load->view('template/footer', $data);
                        }
                    } else {
                        $data['error_message'] = "Data belum terisi dengan lengkap.";
                        $this->load->view('template/header', $data);
                        $this->load->view('dokter/post', $data);
                        $this->load->view('template/footer', $data);
                    }
                } else {
                    $this->load->view('template/header', $data);
                    $this->load->view('dokter/post', $data);
                    $this->load->view('template/footer', $data);
                }
            } else {
                $this->load->view('template/error');
            }
        endif;
    }

    public function delete($id)
    {
        $data['list_config'] = $this->config->config;
        if (!$this->session->userdata('credentials')) :
            $this->load->view('template/error', $data);
        else :
            $session = $this->session->userdata('credentials');
            $data["user_data"] = $session;
            if ($session["level"] ==  "Admin") {
                $delete = $this->berita->delete($id);
                if ($delete) {
                    $data["list_data"] = $this->berita->getData();
                    $data['sukses_message'] = "Data Berhasil dihapus.";
                    $this->load->view('template/header', $data);
                    $this->load->view('admin/verif_post', $data);
                    $this->load->view('template/footer', $data);
                } else {
                    $data["list_data"] = $this->berita->getData();
                    $data['error_message'] = "Database (error).";
                    $this->load->view('template/header', $data);
                    $this->load->view('admin/verif_post', $data);
                    $this->load->view('template/footer', $data);
                }
            } else {
                $this->load->view('template/error', $data);
            }
        endif;
    }

    public function update($id)
    {
        $data['list_config'] = $this->config->config;
        if (!$this->session->userdata('credentials')) :
            $this->load->view('template/error', $data);
        else :
            $session = $this->session->userdata('credentials');
            $data["user_data"] = $session;
            if ($session["level"] ==  "Admin") {
                $blogData['verif'] = 1;
                $update = $this->berita->update($blogData, $id);
                if ($update) {
                    $data["list_data"] = $this->berita->getData();
                    $data['sukses_message'] = "Berhasil Di Post.";
                    $this->load->view('template/header', $data);
                    $this->load->view('admin/tabel_user', $data);
                    $this->load->view('template/footer', $data);
                } else {
                    $data["list_data"] = $this->berita->getData();
                    $data['error_message'] = "Database (error).";
                    $this->load->view('template/header', $data);
                    $this->load->view('admin/tabel_user', $data);
                    $this->load->view('template/footer', $data);
                }
            } else {
                $this->load->view('template/error', $data);
            }
        endif;
    }
}
