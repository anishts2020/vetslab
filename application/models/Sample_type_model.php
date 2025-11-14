<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sample_type_model extends CI_Model {
	
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
    public function insert_sample_type($data) {
		return $this->db->insert('sample_type_table', $data);
	}
     public function getsample_typeDatas($id) {
        
		$this->db->select('*');
		$this->db->where('sample_type_id',$id);	
		$query  =  $this->db->get('sample_type_table');
		$result =   $query->result();
		return $result;
	}
    public function update_sample_type($id,$data) { 
        $this->db->where('sample_type_id', $id);
        return $this->db->update('sample_type_table', $data);
    }
    public function delete_sample_type($id) {
    return $this->db->delete('sample_type_table', array('sample_type_id' => $id));
}
}