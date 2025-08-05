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
}