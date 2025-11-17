<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class monthly_report extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Monthly_model', 'report_m');
        $this->load->model('Registration_model', 'registration_m');
    }

    public function index()
    {
        // Load menus for header + sidebar
        $data['main_menus'] = $this->registration_m->get_main_menus();
        $data['sub_menus']  = $this->registration_m->get_sub_menus();

        // Load report view
        $this->load->view('home/monthly', $data);
    }

    public function get_reports(){
        $result = $this->report_m->get_datatables_reports();
        echo json_encode($result);
    }
}