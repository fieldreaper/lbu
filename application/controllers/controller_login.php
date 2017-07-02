<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Login extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('model_akun');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}

	public function index() {
		$logged_in = $this->session->userdata('logged_in');
		if(!$logged_in) {
			$this->load->view('view_login');
		} else {
			redirect(site_url('controller_manager'));
		}
	}

	public function cek_login() {
		$username = $this->input->post('username', 'true');
		$password = $this->input->post('password', 'true');

		$akun = $this->model_akun->cek_akun($username, $password)->row();
		$jumlah_akun = count($akun);

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('view_login');
		} else {
			if($jumlah_akun > 0) {
				$data_session = array(
					'username'=>$akun->username,
					'kode_bank'=>$akun->kode_bank,
					'role'=>$akun->role,
					'logged_in'=>true);
				$this->session->set_userdata($data_session);

				if($akun->role == "Manager") {
					redirect(site_url('controller_manager'));
				} else {
					$this->session->set_flashdata('notifikasi_login', 'Username atau Password salah');
					redirect(site_url('controller_login'));
				}
			} else {
				$this->session->set_flashdata('notifikasi_login', 'Username atau Password salah');
				redirect(site_url('controller_login'));
			}
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect(site_url('controller_login'));
	}
}

?>