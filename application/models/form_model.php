<?php

class Form_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function select_all_form03($id_laporan) {
		$this->db->select('*');
		$this->db->from('form03');
		$this->db->where('id_laporan', $id_laporan);

		return $this->db->get();
	}

	function select_all_form15($id_laporan) {
		$this->db->select('*');
		$this->db->from('form15');
		$this->db->where('id_laporan', $id_laporan);

		return $this->db->get();
	}


	function select_all_form19($id_laporan) {
		$this->db->select('*');
		$this->db->from('form19');
		$this->db->where('id_laporan', $id_laporan);

		return $this->db->get();
	}

	function select_all_form39($id_laporan) {
		$this->db->select('*');
		$this->db->from('form39');
		$this->db->where('id_laporan', $id_laporan);

		return $this->db->get();
	}

	function select_all_form43($id_laporan) {
		$this->db->select('*');
		$this->db->from('form43');
		$this->db->where('id_laporan', $id_laporan);

		return $this->db->get();
	}

	function validasi_form03($id) {
		$disetujui = array('disetujui'=>TRUE);
		$this->db->where('id', $id);
		$this->db->update('form03', $disetujui);
	}

	function validasi_form15($id) {
		$disetujui = array('disetujui'=>TRUE);
		$this->db->where('id', $id);
		$this->db->update('form15', $disetujui);
	}

	function validasi_form19($id) {
		$disetujui = array('disetujui'=>TRUE);
		$this->db->where('id', $id);
		$this->db->update('form19', $disetujui);
	}

	function validasi_form39($id) {
		$disetujui = array('disetujui'=>TRUE);
		$this->db->where('id', $id);
		$this->db->update('form39', $disetujui);
	}

	function validasi_form43($id) {
		$disetujui = array('disetujui'=>TRUE);
		$this->db->where('id', $id);
		$this->db->update('form43', $disetujui);
	}

	/*function delete_form($id) {
		$deleted = array('deleted'=>TRUE);
		$this->db->where('id', $id);
		$this->db->update('laporan', $deleted);
	}*/
}

?>