<?php

class Komentar_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function select_all($id_laporan) {
		$this->db->select('komentar.*, akun.role');
		$this->db->from('komentar');
		$this->db->join('akun', 'komentar.id_akun = akun.username');
		$this->db->where('id_laporan', $id_laporan);
		$this->db->order_by("tanggal", "desc");

		return $this->db->get();
	}

	function tambah_komentar($data) {
		$this->db->set('tanggal', 'NOW()', FALSE);
		$this->db->insert('komentar', $data);
	}
}

?>