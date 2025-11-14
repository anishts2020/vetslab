<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sample_type extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Sample_type_model','sample_type_m');
		if (!$this->session->userdata('admin_auth')) {
			redirect(base_url());
		}
	}

	public function index()
	{
		$main_menus = $this->sample_type_m->get_main_menus();
		$data['main_menus'] = $main_menus;
		$sub_menus = $this->sample_type_m->get_sub_menus();
		$data['sub_menus'] = $sub_menus;
		$all_sample_type = $this->sample_type_m->get_all_sample_type();
		$data['all_sample_type'] = $all_sample_type;
		$this->load->view('home/sample_type', $data);
	}
public function saveSample_type() {
		$edit_id = $this->input->post('edit_id');
		$datas = array(
			'sample_type_name' => $this->input->post('sample_type_name'),
			//'description' => $this->input->post('description')							
		);	
		if($edit_id > 0){
			$update = $this->sample_type_m->update_sample_type($edit_id,$datas);
			if($update)
			{
				echo 3;
			}
			else
			{
				echo 0;
			}
		}
		else{  
			$this->db->where('sample_type_name',$this->input->post('sample_type_name'));
			$q = $this->db->get('sample_type_table');
			if ( $q->num_rows() > 0 ) 
			{	
				echo 2; 
			}
			else
			{	
		$insert = $this->sample_type_m->insert_sample_type($datas);
			if($insert)
			{
				echo 1;
			}
			else
			{
				echo 0;
			}
		}
	}}
	public function getsample_typeDatas()
    {  
        $id = $this->input->post('sample_type_id');
        $sample_type_details = $this->sample_type_m->getsample_typeDatas($id);
        echo json_encode($sample_type_details);
    }
	public function deleteSample_type() {
    $id = $this->input->post('sample_type_id');

    if (!empty($id)) {
        $this->load->model('Sample_type_model'); // if not already loaded
        $result = $this->Sample_type_model->delete_sample_type($id);

        if ($result) {
            echo json_encode(1);
        } else {
            echo json_encode(0);
        }
    } else {
        echo json_encode(0);
    }
}
}
