<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lab_test_details extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Labtestdetails_model', 'details_m');

        if (!$this->session->userdata('admin_auth')) {
            redirect(base_url());
        }
    }

    // Load the page
    public function index()
    {
        $main_menus = $this->details_m->get_main_menus();
		$data['main_menus'] = $main_menus;
		$sub_menus = $this->details_m->get_sub_menus();
		$data['sub_menus'] = $sub_menus;
        $data['all_lab_tests'] = $this->details_m->get_all_lab_tests();
        $this->load->view('home/labtest_detail', $data);
    }

    // Save or update via AJAX
    public function saveLabTestDetail()
    {
        $edit_id = $this->input->post('edit_id');
        $data = [
            'lab_test_id' => $this->input->post('lab_test_id'),
            'label_name'  => $this->input->post('label_name'),
            'data_type'   => $this->input->post('data_type'),
            'data_value'  => $this->input->post('data_value'),
            'is_active'   => 1
        ];

        // Check for duplicate label
        $existing = $this->db->where('lab_test_id', $data['lab_test_id'])
            ->where('label_name', $data['label_name'])
            ->get('lab_test_details_master')
            ->row_array();

        if($edit_id == 0 && $existing){
            echo json_encode(['status'=>2]); // duplicate
            return;
        }

        // Insert or update
        if($edit_id == 0){
            $insert = $this->details_m->insert_lab_test_detail($data);
            $status = $insert ? 1 : 0; // Inserted
        } else {
            $update = $this->details_m->update_lab_test_detail($edit_id, $data);
            $status = $update ? 3 : 0; // Updated
        }

        // Fetch lab_test_name for JSON response
        $lab_test = $this->db->get_where('lab_test_master', ['lab_test_id'=>$data['lab_test_id']])->row_array();
        $lab_test_name = $lab_test ? $lab_test['lab_test_name'] : '';

        echo json_encode([
            'status' => $status,
            'data' => [
                'lab_test_name' => $lab_test_name,
                'label_name'    => $data['label_name'],
                'data_type'     => $data['data_type'],
                'data_value'    => $data['data_value'],
                'is_active'     => $data['is_active']
            ]
        ]);
    }
}
