<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Species_report_model extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}
	public function get_main_menus()
    {
        $query = $this->db->select('*')
                          ->from('menus')
						  ->where('parent_id',0)
                          ->order_by('id', 'ASC')
                          ->get();
        return $query->result_array();
    }
     public function get_all_species()
    {
        $query = $this->db->select('*')
                          ->from('species_table')
                          ->order_by('species_id', 'ASC')
                          ->get();
        return $query->result_array();
    }
	public function get_sub_menus()
    {
        $query = $this->db->select('*')
                          ->from('menus')
						  ->where('parent_id >',0)
                          ->order_by('id', 'ASC')
                          ->get();
        return $query->result_array();
    }
   public function getSpeciesDatas($id) {
        
		$this->db->select('*');
		$this->db->where('species_id',$id);	
		$query  =  $this->db->get('species_table');
		$result =   $query->result();
		return $result;
	}
    
   
}