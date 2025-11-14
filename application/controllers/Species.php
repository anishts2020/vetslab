<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Species extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Species_model','species_m');
		if (!$this->session->userdata('admin_auth')) {
			redirect(base_url());
		}
	}

	public function index()
	{
		$main_menus = $this->species_m->get_main_menus();
		$data['main_menus'] = $main_menus;
		$sub_menus = $this->species_m->get_sub_menus();
		$data['sub_menus'] = $sub_menus;
		$all_species = $this->species_m->get_all_species();
		$data['all_species'] = $all_species;
		$this->load->view('home/species', $data);
	}

public function saveSpecies() {
		$edit_id = $this->input->post('edit_id');
		$datas = array(
			'species_name' => $this->input->post('species_name'),
			//'description' => $this->input->post('description')							
		);
		if($edit_id > 0){
			$update = $this->species_m->update_species($edit_id,$datas);
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
			$this->db->where('species_name',$this->input->post('species_name'));
			$q = $this->db->get('species_table');
			if ( $q->num_rows() > 0 ) 
			{	
				echo 2; 
			}
			else
			{		
		$insert = $this->species_m->insert_species($datas);
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
	public function getSpeciesDatas()
    {  
        $id = $this->input->post('species_id');
        $species_details = $this->species_m->getSpeciesDatas($id);
        echo json_encode($species_details);
    }
	public function deleteSpecies() {
    $id = $this->input->post('species_id');

    if (!empty($id)) {
        $this->load->model('Species_model'); // if not already loaded
        $result = $this->Species_model->delete_species($id);

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