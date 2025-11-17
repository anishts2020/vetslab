<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Breeds_report extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Breeds_report_model','breeds_report_m');
		if (!$this->session->userdata('admin_auth')) {
			redirect(base_url());
		}
	}

	public function index()
	{
		$main_menus = $this->breeds_report_m->get_main_menus();
		$data['main_menus'] = $main_menus;
		$sub_menus = $this->breeds_report_m->get_sub_menus();
		$data['sub_menus'] = $sub_menus;
		$all_breeds = $this->breeds_report_m->get_all_breeds();
		$data['all_breeds'] = $all_breeds;
		$this->load->view('home/breeds_report', $data);
	}

// public function SaveBreeds() {
// 		$edit_id = $this->input->post('edit_id');
// 		$datas = array(
// 			'breeds_name' => $this->input->post('breeds_name'),
// 			//'description' => $this->input->post('description')							
// 		);	
// 		if($edit_id > 0){
// 			$update = $this->breeds_m->update_breeds($edit_id,$datas);
// 			if($update)
// 			{
// 				echo 3;
// 			}
// 			else
// 			{
// 				echo 0;
// 			}
// 		}
// 		else{  
// 			$this->db->where('breeds_name',$this->input->post('breeds_name'));
// 			$q = $this->db->get('breeds_table');
// 			if ( $q->num_rows() > 0 ) 
// 			{	
// 				echo 2; 
// 			}
// 			else
// 			{		
// 		$insert = $this->breeds_m->insert_breeds($datas);
// 			if($insert)
// 			{
// 				echo 1;
// 			}
// 			else
// 			{
// 				echo 0;
// 			}
// 		}
// 	}
// 	}
// 		public function getBreedsDatas()
//     {  
//         $id = $this->input->post('breeds_id');
//         $breeds_details = $this->breeds_m->getBreedsDatas($id);
//         echo json_encode($breeds_details);
//     }
// 	public function deleteBreeds() {
//     $id = $this->input->post('breeds_id');

//     if (!empty($id)) {
//         $this->load->model('Breeds_model'); // if not already loaded
//         $result = $this->Breeds_model->delete_breed($id);

//         if ($result) {
//             echo json_encode(1);
//         } else {
//             echo json_encode(0);
//         }
//     } else {
//         echo json_encode(0);
//     }
// }
	}