<?php
defined('BASEPATH') or exit('No direct script access allowed');
set_time_limit(0);
ignore_user_abort(1);
class Register extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->database();
		$this->load->model('user');
		$this->load->config('mainconfig');
	}
	public function index()
	{
		$this->load->helper('form');
		$data['list_config'] = $this->config->config;
		if (!$this->session->userdata('credentials')) :
			if ($this->input->method() == 'post') {
				$email = $this->input->post('email');
				$password = $this->input->post('password');
				$cek_password = $this->input->post('password2');
				$nama_lengkap = $this->input->post('nama_lengkap');
				$tanggal_lahir = $this->input->post('ttl');
				if ($email && $password && $cek_password && $nama_lengkap && $tanggal_lahir) {
					if ($password == $cek_password) {
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
								'level' => 'Member',
							);
							$insert = $this->user->insert($userData);
							if ($insert) {
								$data['sukses_message'] = "Berhasil membuat akun, sekarang anda bisa Login/Masuk.";
								$this->load->view('auth/daftar', $data);
							} else {
								$data['error_message'] = "Terdapat masalah pada bagian penambahan database (1).";
								$this->load->view('auth/daftar', $data);
							}
						}
					} else {
						$data['error_message'] = "Konfirmasi password tidak sesuai dengan password.";
						$this->load->view('auth/daftar', $data);
					}
				} else {
					$data['error_message'] = "Terdapat data yang kosong.";
					$this->load->view('auth/daftar', $data);
				}
			} else if ($this->session->userdata('credentials'))
				redirect(base_url());
			else
				$this->load->view('auth/daftar', $data);
		else :
			redirect(base_url());
		endif;
	}
}
