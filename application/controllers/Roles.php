<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roles extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Roles_model','roles_m');
		if (!$this->session->userdata('admin_auth')) {
			redirect(base_url());
		}
	}

	public function index()
	{
		$main_menus = $this->roles_m->get_main_menus();
		$data['main_menus'] = $main_menus;
		$sub_menus = $this->roles_m->get_sub_menus();
		$data['sub_menus'] = $sub_menus;
		$all_roles = $this->roles_m->get_all_roles();
		$data['all_roles'] = $all_roles;
		$this->load->view('home/roles', $data);
	}
	public function saveRole() {
		$edit_id = $this->input->post('edit_id');
		$datas = array(
			'role_name' => $this->input->post('role_name'),
			'description' => $this->input->post('description')							
		);	
		if($edit_id > 0){
			$update = $this->roles_m->update_role($edit_id,$datas);
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
			$this->db->where('role_name',$this->input->post('role_name'));
			$q = $this->db->get('user_roles');
			if ( $q->num_rows() > 0 ) 
			{	
				echo 2; 
			}
			else
			{					   
				$insert = $this->roles_m->insert_role($datas);
				if($insert)
				{
					echo 1;
				}
				else
				{
					echo 0;
				}
			
			}
		}
	}
	public function getRoleDatas()
    {  
        $id = $this->input->post('id');
        $role_details = $this->roles_m->getRoleDatas($id);
        echo json_encode($role_details);
    }
}
