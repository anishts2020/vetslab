<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Today_consultation_model extends CI_Model {
	
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




    



public function get_today_patients()
{
    $today = date('Y-m-d');
    
    return $this->db->select('*')
                    ->from('registration_table')
                    ->group_start()
                        ->where('DATE(created_time)', $today)
                        ->or_where('DATE(updated_time)', $today)
                    ->group_end()    
                    ->order_by('reg_id', 'ASC')
                    ->get()
                    ->result_array();
}




}