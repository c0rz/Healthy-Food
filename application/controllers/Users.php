<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
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
		$data['list_config'] = $this->config->config;
		if (!$this->session->userdata('credentials')) :
			$this->load->view('landing', $data);
		else :
			$data['demo_berita'] = $this->berita->getData();
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, 'https://api.kawalcorona.com/');
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
			$headers = array();
			$headers[] = 'Authority: api.kawalcorona.com';
			$headers[] = 'Cache-Control: max-age=0';
			$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36 OPR/66.0.3515.115';
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			$result = json_decode(curl_exec($ch))[36];
			$data['corona_indonesia'] = $result->attributes;
			// var_dump($result->attributes);
			// exit();
			$data['user_data'] = $this->session->userdata('credentials');
			$cons['conditions'] = array(
				'verif' => 1
			);
			$cons['limit'] = 3;
			$data['berita'] = $this->berita->getData($cons);
			$this->load->view('template/header.php', $data);
			$this->load->view('home', $data);
			$this->load->view('template/footer.php', $data);
		endif;
	}

	public function update()
	{
		$this->load->helper('form');
		$data['list_config'] = $this->config->config;
		$session = $this->session->userdata('credentials');
		$data['user_data'] = $session;
		if ($this->session->userdata('credentials')) :
			$this->load->view('template/header.php', $data);
			if ($this->input->method() == 'post') {
				$full_name = $this->input->post('full_name');
				$password_old = $this->input->post('password_old');
				$password_new = $this->input->post('password_new');
				$password_new2 = $this->input->post('password_new2');
				if ((!empty($full_name) && !empty($password_old)) || (!empty($password_old) && !empty($password_new) && !empty($password_new2))) {
					$con['returnType'] = 'count';
					$con['conditions'] = array(
						'email' => $session["email"],
						'password' => md5($password_old)
					);
					$user = $this->user->getData($con);
					if ($user > 0) {
						$userData['nama_lengkap'] = $full_name;
						if ($password_new == $password_new2) {
							$userData['password'] = md5($password_new2);
						} else {
							$data['error_message'] = "Konfrimasi password tidak sama dengan baru.";
							$this->load->view('account/profile.php', $data);
							$this->load->view('template/footer.php', $data);
						}
						$update = $this->user->update($userData, $session["id_akun"]);
						if ($update) {
							$data['sukses_message'] = "Data berhasil di ubah.";
							$this->load->view('account/profile.php', $data);
							$this->load->view('template/footer.php', $data);
						} else {
							$data['error_message'] = "Error (1).";
							$this->load->view('account/profile.php', $data);
							$this->load->view('template/footer.php', $data);
						}
					} else {
						$data['error_message'] = "Password tidak benar.";
						$this->load->view('account/profile.php', $data);
						$this->load->view('template/footer.php', $data);
					}
				} else {
					$data['error_message'] = "Terdapat data yang kosong.";
					$this->load->view('account/profile.php', $data);
					$this->load->view('template/footer.php', $data);
				}
			} else {
				$this->load->view('account/profile.php', $data);
				$this->load->view('template/footer.php', $data);
			} else :
			redirect(base_url());
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
				$delete = $this->user->delete($id);
				if ($delete) {
					$data["list_data"] = $this->user->getData();
					$data['sukses_message'] = "Data Berhasil dihapus.";
					$this->load->view('template/header', $data);
					$this->load->view('admin/tabel_user', $data);
					$this->load->view('template/footer', $data);
				} else {
					$data["list_data"] = $this->user->getData();
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

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
