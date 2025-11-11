<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rft_test extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('Rft_test_model', 'rft_m');
        if (!$this->session->userdata('admin_auth')) {
            redirect(base_url());
        }
    }

	public function index()
	{
		$main_menus = $this->rft_m->get_main_menus();
		$data['main_menus'] = $main_menus;
		$sub_menus = $this->rft_m->get_sub_menus();
		$data['sub_menus'] = $sub_menus;

		 //  Get all data from rft_test table
		 $all_rft_test = $this->rft_m->get_all_rft_test();
		 $data['all_rft_test'] = $all_rft_test;
 
		 // Load view and send data
		 $this->load->view('home/Rft_test', $data);
	}


	// to save rft datas
	public function saveRftTest() {
		$edit_id = $this->input->post('edit_id');

		$data = array(
			'b_urea'     => $this->input->post('b_urea'),
			's_creatini' => $this->input->post('s_creatini'),
			's_uric_aci' => $this->input->post('s_uric_aci')
		);

		if ($edit_id > 0) {
			$update = $this->rft_m->update_rft_test($edit_id, $data);
			echo $update ? 3 : 0;
		} else {
			$insert = $this->rft_m->insert_rft_test($data);
			echo $insert ? 1 : 0;
		}
	}
	public function getRftDatas()
    {  
        $id = $this->input->post('id');
        $rft_details = $this->rft_m->getRftDatas($id);
        echo json_encode($rft_details);
    }


	public function deleteRftTest() {
		$id = $this->input->post('id');
		if ($id) {
			$delete = $this->rft_m->delete_rft_test($id);
			echo $delete ? 1 : 0;
		} else {
			echo 0;
		}
	}
	
	
}
