<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('laporan_model');
	}

	public function index() {
		$kode_bank = $this->session->userdata('kode_bank');
		$data['daftar_laporan'] = $this->laporan_model->select_all($kode_bank)->result();
		$this->load->view('beranda_view', $data);
	}

	public function delete_laporan($id) {
		$this->m_laporan->delete_laporan($id);
		redirect(site_url('beranda'));
	}

	public function detail_laporan($id) {
		redirect(site_url('beranda/detail/id=' .$id));
	}
}

?>