<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class todays_consultation extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Today_consultation_model','consultation_m');
		if (!$this->session->userdata('admin_auth')) {
			redirect(base_url());
		}
	}

	
		public function index()
{
    $data['main_menus'] = $this->consultation_m->get_main_menus();
    $data['sub_menus'] = $this->consultation_m->get_sub_menus();
     $data['all_patients'] = $this->consultation_m->get_today_patients();
    // No all_patients passed (datatable loads via AJAX)
    $this->load->view('home/todays_consultation', $data);
}


	

	
	


	
	

}