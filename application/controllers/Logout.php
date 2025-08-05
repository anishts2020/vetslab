<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
	
	
	public function __construct() {
		parent::__construct();
	}
	public function index() {
		if ($this->session->userdata('admin_auth')) {
			$array = array('admin_auth','id','name', 'email', 'role_id');
			$this->session->unset_userdata($array);
			$this->session->sess_destroy();
			$this->session->set_flashdata('message', 'You have been successfully logged out!'); 
			redirect(base_url());
		}
	}
}