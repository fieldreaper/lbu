<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('laporan_model');
		$this->load->model('form_model');
	}

	public function index() {
		$logged_in = $this->session->userdata('logged_in');
		$role = $this->session->userdata('role');
		if($logged_in && $role == "Manager") {
			$kode_bank = $this->session->userdata('kode_bank');
			$data['daftar_laporan'] = $this->laporan_model->select_all($kode_bank)->result();
			$this->load->view('beranda_view', $data);
		} else {
			redirect(site_url('login'));
		}
	}

	public function hapus_laporan($id) {
		$this->laporan_model->delete_laporan($id);
		redirect(site_url('beranda'));
	}

	public function detail_laporan($id) {
		$logged_in = $this->session->userdata('logged_in');
		$role = $this->session->userdata('role');
		$kode_bank = $this->session->userdata('kode_bank');
		$selected_laporan = $this->laporan_model->select_by_id($id)->row();
		$kode_bank_akses = $selected_laporan->kode_bank;
		$deleted = $selected_laporan->deleted;
		$nama_laporan = $this->conv_bulan_laporan($selected_laporan->bulan_laporan)." ".$selected_laporan->tahun_laporan;
		if($logged_in && $role == "Manager" && $kode_bank == $kode_bank_akses && !$deleted) {
			$data['form03'] = $this->form_model->select_all_form03($id)->row();
			$data['form15'] = $this->form_model->select_all_form15($id)->row();
			$data['form19'] = $this->form_model->select_all_form19($id)->row();
			$data['form39'] = $this->form_model->select_all_form39($id)->row();
			$data['form43'] = $this->form_model->select_all_form43($id)->row();
			$data['laporan_id'] = $id;
			$data['nama_laporan'] = $nama_laporan;
			$this->load->view('detail_view', $data);
		} else {
			redirect(site_url('login'));
		}
	}

	public function validasi_form() {
		$form = $this->input->post('form_num');
		$form_id = $this->input->post('id');
		$laporan_id = $this->input->post('laporan_id');
		$kode_validasi = $this->input->post('kode_validasi');
		if($form == 3) {
			$this->form_model->validasi_form03($form_id, $kode_validasi);
			$this->laporan_model->persentase($laporan_id, $kode_validasi);
		} else if($form == 15) {
			$this->form_model->validasi_form15($form_id, $kode_validasi);
			$this->laporan_model->persentase($laporan_id, $kode_validasi);
		} else if($form == 19) {
			$this->form_model->validasi_form19($form_id, $kode_validasi);
			$this->laporan_model->persentase($laporan_id, $kode_validasi);
		} else if($form == 39) {
			$this->form_model->validasi_form39($form_id, $kode_validasi);
			$this->laporan_model->persentase($laporan_id, $kode_validasi);
		} else if($form == 43) {
			$this->form_model->validasi_form43($form_id, $kode_validasi);
			$this->laporan_model->persentase($laporan_id, $kode_validasi);
		}
		redirect(site_url('beranda/detail_laporan/'.$laporan_id));
	}

	private function conv_bulan_laporan($index) {
		$bulan = array("1"=>"Januari", "2"=>"Februari", "3"=>"Maret", "4"=>"April", "5"=>"Mei", "6"=>"Juni", "7"=>"Juli", "8"=>"Agustus", "9"=>"September", "10"=>"Oktober", "11"=>"November", "12"=>"Desember");

		return $bulan[$index];
	}
}

?>