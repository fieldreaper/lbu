<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index($id) {
		$kode_bank = $this->session->userdata('kode_bank');
		$this->load->view('beranda_view', $id);
	}
}

?>