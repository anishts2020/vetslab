<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Species_report extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Species_report_model','report_m');
		if (!$this->session->userdata('admin_auth')) {
			redirect(base_url());
		}
	}

	public function index()
	{
		$main_menus = $this->report_m->get_main_menus();
		$data['main_menus'] = $main_menus;
		$sub_menus = $this->report_m->get_sub_menus();
		$data['sub_menus'] = $sub_menus;
		$all_species = $this->report_m->get_all_species();
		$data['all_species'] = $all_species;
		$this->load->view('home/species_report', $data);
	}
	
	
}
