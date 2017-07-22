<?php

class Form_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function select_all_form13($id_laporan) {
		$this->db->select('*');
		$this->db->from('form13');
		$this->db->where('id_laporan', $id_laporan);

		return $this->db->get();
	}


	function select_all_form19($id_laporan) {
		$this->db->select('*');
		$this->db->from('form19');
		$this->db->where('id_laporan', $id_laporan);

		return $this->db->get();
	}

	/*function update_form($id, $data) {
		$this->db->where('id', $id);
		$this->db->update('laporan', $data);
	}

	function delete_form($id) {
		$deleted = array('deleted'=>TRUE);
		$this->db->where('id', $id);
		$this->db->update('laporan', $deleted);
	}*/
}

?>