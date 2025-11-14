<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registered_patients extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Registered_patients_model','registered_m');
		if (!$this->session->userdata('admin_auth')) {
			redirect(base_url());
		}
	}

	public function index()
	{
		$main_menus = $this->registered_m->get_main_menus();
		$data['main_menus'] = $main_menus;
		$sub_menus = $this->registered_m->get_sub_menus();
		$data['sub_menus'] = $sub_menus;

		$data['all_patients'] = $this->registered_m->get_all_patients();

		$this->load->view('home/registered_patients', $data);
	}

	
	


	public function view_lab_test($reg_id)
	{
		// Load menus
		$data['main_menus'] = $this->registered_m->get_main_menus();
		$data['sub_menus'] = $this->registered_m->get_sub_menus();

		// Fetch registration details
		$data['registration'] = $this->registered_m->get_registration_by_id($reg_id);

		// Decode lab_test JSON (may contain multiple test IDs)
		$lab_test_ids = json_decode($data['registration']['lab_test'], true);

		if (!is_array($lab_test_ids)) {
			$lab_test_ids = [$data['registration']['lab_test']];
		}

		// Fetch all lab test master records
		$data['lab_test_master'] = $this->registered_m->get_multiple_lab_test_master($lab_test_ids);

		// Fetch all lab test details
		$data['lab_test_details'] = $this->registered_m->get_multiple_lab_test_details($lab_test_ids);

		// Fetch test results for that registration
		$data['lab_test_results'] = $this->registered_m->get_lab_test_results($reg_id);

		// Load the view
		$data['main_menus'] = $this->registered_m->get_main_menus();
		$data['sub_menus'] = $this->registered_m->get_sub_menus();


		$this->load->view('home/view_lab_test', $data);
	}


	public function save_lab_results($reg_id)
{
    $results = $this->input->post('result');
    
    if (!empty($results)) {
        foreach ($results as $lab_test_id => $details) {
            foreach ($details as $lab_test_details_id => $value) {
                $data = [
                    'reg_id' => $reg_id,
                    'lab_test_id' => $lab_test_id,
                    'lab_test_details_id' => $lab_test_details_id,
                    'result_value' => $value
                ];

                // Check if record already exists
                $existing = $this->registered_m->check_existing_result($reg_id, $lab_test_details_id);
                
                if ($existing) {
                    $this->registered_m->update_lab_result($reg_id, $lab_test_details_id, $data);
                } else {
                    $this->registered_m->insert_lab_result($data);
                }
            }
        }
    }

    $this->session->set_flashdata('success', 'Lab test results saved successfully!');
    redirect('Registered_patients/view_lab_test/'.$reg_id);
}


}
