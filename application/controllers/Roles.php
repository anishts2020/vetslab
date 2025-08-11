<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roles extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Roles_model','roles_m');
		if (!$this->session->userdata('admin_auth')) {
			redirect(base_url());
		}
	}

	public function index()
	{
		$main_menus = $this->roles_m->get_main_menus();
		$data['main_menus'] = $main_menus;
		$sub_menus = $this->roles_m->get_sub_menus();
		$data['sub_menus'] = $sub_menus;
		$this->load->view('home/roles', $data);
	}
}
