<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sample_type_report extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Sample_type_report_model','sample_type_report_m');
		if (!$this->session->userdata('admin_auth')) {
			redirect(base_url());
		}
	}

	public function index()
	{
		$main_menus = $this->sample_type_report_m->get_main_menus();
		$data['main_menus'] = $main_menus;
		$sub_menus = $this->sample_type_report_m->get_sub_menus();
		$data['sub_menus'] = $sub_menus;
		$all_sample_type = $this->sample_type_report_m->get_all_sample_type();
		$data['all_sample_type'] = $all_sample_type;
		$this->load->view('home/sample_type_report', $data);
	}


	
}