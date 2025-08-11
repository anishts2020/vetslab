<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menus extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Menus_model','menus_m');
		if (!$this->session->userdata('admin_auth')) {
			redirect(base_url());
		}
	}

	public function index()
	{
		$main_menus = $this->menus_m->get_main_menus();
		$data['main_menus'] = $main_menus;
		$sub_menus = $this->menus_m->get_sub_menus();
		$data['sub_menus'] = $sub_menus;
		$all_roles = $this->menus_m->get_all_roles();
		$data['all_roles'] = $all_roles;
		$this->load->view('home/menus', $data);
	}
}
