<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_404 extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->output->set_status_header('404');
		$this->load->view('view_404');
	}
}

?>