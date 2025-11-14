<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lab_tests_model extends CI_Model {
	
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
    
	public function get_sub_menus()
    {
        $query = $this->db->select('*')
                          ->from('menus')
						  ->where('parent_id >',0)
                          ->order_by('id', 'ASC')
                          ->get();
        return $query->result_array();
    }    // ✅ NEW: Insert test into lab_test_table
	public function insert_test($data) {
		return $this->db->insert('lab_test_table', $data);
	}

	// ✅ NEW: Check if test already exists
	public function check_test_exists($test_name) {
		$this->db->where('lab_test_name', $test_name);
		$query = $this->db->get('lab_test_table');
		return $query->num_rows() > 0;
	}
    

   
}
   
