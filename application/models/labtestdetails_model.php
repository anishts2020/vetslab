<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Labtestdetails_model extends CI_Model
{
    public function __construct()
    {
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
    }

    // Fetch all lab tests for dropdown

    public function get_all_lab_tests()
    {
        return $this->db->select('lab_test_id, lab_test_name')
            ->from('lab_test_master')
            ->get()
            ->result_array();
    }

    // Insert
    public function insert_lab_test_detail($data)
    {
        return $this->db->insert('lab_test_details_master', $data);
    }

    // Update
    public function update_lab_test_detail($id, $data)
    {
        $this->db->where('lab_test_details_id', $id);
        return $this->db->update('lab_test_details_master', $data);
    }
}
