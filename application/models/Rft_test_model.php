<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rft_test_model extends CI_Model {
	
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
    public function get_all_rft_test()
    {
        $query = $this->db->select('*')
                          ->from('rft_test')
                          ->order_by('id', 'ASC')
                          ->get();
        return $query->result_array();
    }
    public function insert_rft_test($data) {
		return $this->db->insert('rft_test', $data);
	}
    public function getRftDatas($id) {
		$this->db->select('*');
		$this->db->where('id',$id);	
		$query  =  $this->db->get('rft_test');
		$result =   $query->result();
		return $result;
	}
    public function update_rft_test($id, $data) { 
		$this->db->where('id', $id);
		return $this->db->update('rft_test', $data);
	}

    public function delete_rft_test($id) {
        $this->db->where('id', $id);
        return $this->db->delete('rft_test');
    }
    
    
}