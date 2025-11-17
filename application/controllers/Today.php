<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Today extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('todays_report_model','reports_m');

        if (!$this->session->userdata('admin_auth')) {
            redirect(base_url());
        }
    }

    public function index()
    {
		$main_menus = $this->reports_m->get_main_menus();
		$data['main_menus'] = $main_menus;
		$sub_menus = $this->reports_m->get_sub_menus();
		$data['sub_menus'] = $sub_menus;
        $data['reports'] = $this->reports_m->get_todays_report(); 
        $this->load->view('home/today_report', $data);
    }
}
