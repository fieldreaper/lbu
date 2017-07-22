<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('laporan_model');
		$this->load->model('form_model');
	}

	public function index() {
		$kode_bank = $this->session->userdata('kode_bank');
		$data['daftar_laporan'] = $this->laporan_model->select_all($kode_bank)->result();
		$this->load->view('beranda_view', $data);
	}

	public function delete_laporan($id) {
		$this->laporan_model->delete_laporan($id);
		redirect(site_url('beranda'));
	}

	public function detail_laporan($id) {
		$data['form13'] = $this->form_model->select_all_form13($id)->row();
		$data['form19'] = $this->form_model->select_all_form19($id)->row();
		$this->load->view('detail_view', $data);
	}
}

?>