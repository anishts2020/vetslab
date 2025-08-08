<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common_model extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function admin_login($username,$password) {
		$this->db->select('*');
		$this->db->where('username',$username);
		$this->db->where('password',md5($password));		
		$query  =  $this->db->get('users');
		return  $query->result();
	}
	public function get_role_name($role_id) {
        $this->db->select('role_name');
        $this->db->from('user_roles'); 
        $this->db->where('id', $role_id);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row()->role_name;
        } else {
            return null;
        }
    }
}