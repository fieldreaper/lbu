<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('login_model');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}

	public function index() {
		$logged_in = $this->session->userdata('logged_in');
		$role = $this->session->userdata('role');
		if($logged_in && $role == "Manager") {
			redirect(site_url('beranda'));
		} else {
			$this->load->view('login_view');
		}
	}

	public function cek_login() {
		$username = $this->input->post('username', 'true');
		$password = $this->input->post('password', 'true');

		$akun = $this->login_model->cek_akun($username, $password)->row();
		$jumlah_akun = count($akun);

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('login_view');
		} else {
			if($jumlah_akun > 0) {
				$data_session = array(
					'username'=>$akun->username,
					'kode_bank'=>$akun->kode_bank,
					'nama_bank'=>$akun->nama,
					'role'=>$akun->role,
					'logged_in'=>true);
				$this->session->set_userdata($data_session);

				if($akun->role == "Manager") {
					redirect(site_url('beranda'));
				} else {
					$this->session->set_flashdata('notifikasi_login', 'Username atau Password tidak cocok');
					redirect(site_url('login'));
				}
			} else {
				$this->session->set_flashdata('notifikasi_login', 'Username atau Password salah');
				redirect(site_url('login'));
			}
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect(site_url('login'));
	}
}

?>