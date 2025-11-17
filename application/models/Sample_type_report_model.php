<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sample_type_report_model extends CI_Model {
	
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
    }
     public function get_all_sample_type()
    {
        $query = $this->db->select('*')
                          ->from('sample_type_table')
                          ->order_by('sample_type_id', 'ASC')
                          ->get();
        return $query->result_array();
    }
    
    
}