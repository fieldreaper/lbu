<?php

class Model_Akun extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function cek_akun($username, $password) {
		$this->db->select('*');
		$this->db->from('akun');
		$this->db->where('username', $username);
		$this->db->where('password', $password);

		return $this->db->get();
	}

	function get_akun($username) {
		$this->db->select('*');
		$this->db->from('akun');
		$this->db->where('username', $username);

		return $this->db->get();
	}
}

?>