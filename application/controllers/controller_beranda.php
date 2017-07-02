<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Beranda extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('m_laporan');
	}

	public function index() {
		$kode_bank = $this->session->userdata('kode_bank');
		$data['daftar_laporan'] = $this->m_laporan->select_all($kode_bank)->result();
		$this->load->view('new_manager', $data);
	}

	public function delete_laporan($id) {
		$this->m_laporan->delete_laporan($id);
		redirect(site_url('manager'));
	}

	public function detail_laporan($id) {
		redirect(site_url('manager/detail/id=' .$id));
	}
}

?>