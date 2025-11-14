<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lab_test_master extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('labtest_model', 'test_m');
        if (!$this->session->userdata('admin_auth')) {
            redirect(base_url());
        }
    }

    public function index() {
        $data['main_menus'] = $this->test_m->get_main_menus();
        $data['sub_menus'] = $this->test_m->get_sub_menus();
        $data['all_rft_test'] = $this->test_m->get_all_rft_test(); // fetch all tests
        $this->load->view('home/labtest_mode', $data);
    }

    public function saveTest() {
        $edit_id = $this->input->post('edit_id');
        $lab_test_name = $this->input->post('lab_test_name');

        $data = array('lab_test_name' => $lab_test_name);

        if($edit_id > 0){
            $update = $this->test_m->update_rft_test($edit_id, $data);
            echo $update ? 3 : 0;
        } else {
            $insert = $this->test_m->insert_rft_test($data);
            echo $insert ? 1 : 0;
        }
    }

    public function getTestDatas() {
        $id = $this->input->post('id');
        $result = $this->test_m->getRftDatas($id);
        echo json_encode($result);
    }

    public function deleteTest() {
        $id = $this->input->post('id');
        if($id){
            $delete = $this->test_m->delete_rft_test($id);
            echo $delete ? 1 : 0;
        } else {
            echo 0;
        }
    }
}
