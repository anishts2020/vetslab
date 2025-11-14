<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lab_tests extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Lab_tests_model','lab_test_m');
		if (!$this->session->userdata('admin_auth')) {
			redirect(base_url());
		}
	}

	public function index()
	{
		$main_menus = $this->lab_test_m->get_main_menus();
		$data['main_menus'] = $main_menus;
		$sub_menus = $this->lab_test_m->get_sub_menus();
		$data['sub_menus'] = $sub_menus;
	   
		$this->load->view('home/lab_tests', $data);
	} public function save_selected_tests() {
        $selected_tests = $this->input->post('lab_tests'); // array from checkboxes

        if (!empty($selected_tests)) {
            foreach ($selected_tests as $test_name) {
                // Check if test already exists to avoid duplicates
                $exists = $this->lab_test_m->check_test_exists($test_name);
                if (!$exists) {
                    $data = ['lab_test_name' => $test_name];
                    $this->lab_test_m->insert_test($data);
                }
            }

            $this->session->set_flashdata('success', 'Selected lab tests saved successfully.');
        } else {
            $this->session->set_flashdata('error', 'No tests selected.');
        }

        redirect('Lab_tests');
    }
}
     
