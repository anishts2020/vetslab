<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roles_model extends CI_Model {
	
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
    public function get_all_roles()
    {
        $query = $this->db->select('*')
                          ->from('user_roles')
                          ->order_by('id', 'ASC')
                          ->get();
        return $query->result_array();
    }
    public function insert_role($data) {
		return $this->db->insert('user_roles', $data);
	}
    public function getRoleDatas($id) {
		$this->db->select('*');
		$this->db->where('id',$id);	
		$query  =  $this->db->get('user_roles');
		$result =   $query->result();
		return $result;
	}
    public function update_role($id,$data) { 
        $this->db->where('id', $id);
        return $this->db->update('user_roles', $data);
    }
}