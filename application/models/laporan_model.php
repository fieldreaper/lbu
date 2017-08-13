<?php

class Laporan_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function select_all($kode_bank) {
		$this->db->select('*');
		$this->db->from('laporan');
		$this->db->where('kode_bank', $kode_bank);
		$this->db->where('deleted', FALSE);
		$this->db->order_by("tahun_laporan", "desc");
		$this->db->order_by("bulan_laporan", "desc");

		return $this->db->get();
	}

	function select_by_id($id) {
		$this->db->select('*');
		$this->db->from('laporan');
		$this->db->where('id', $id);

		return $this->db->get();
	}

	function tambah_persentase($id) {
		$this->db->set('persentase', 'persentase+1', FALSE);
		$this->db->where('id', $id);
		$this->db->update('laporan');
	}

	function delete_laporan($id) {
		$deleted = array('deleted'=>TRUE);
		$this->db->where('id', $id);
		$this->db->update('laporan', $deleted);
	}

	/*function select_all_paging($limit = array()) {
		$this->db->select('*');
		$this->db->from('laporan');
		$this->db->where('kode_bank', $kode_bank);

		if($limit != NULL) {
			$this->db->limit($limit['perpage'], $limit['offset']);
		}

		return $this->db->get();
	}*/
}

?>