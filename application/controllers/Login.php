<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Common_model','common');
	}

	public function index()
	{
		$this->load->view('home/login');
	}
	
    public function login() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if($username!=='' && $password!=='') {
			$check = $this->common->admin_login($username,$password);
			if($check) {
				$role_name = $this->common->get_role_name($check['0']->role_id);
				$session_data = array('admin_auth'=>1,
				                      'id'=>$check['0']->id,
				                      'name'=>$check['0']->full_name,
				                      'email'=>$check['0']->email,
									  'role_id'=>$check['0']->role_id,
									  'role_name'=>$role_name
									  );
				$this->session->set_userdata($session_data);
				redirect('dashboard'); 
			}
			else {
				$this->session->set_flashdata('message', 'Username/Password is incorrect');
				redirect(base_url());
			}
		}
		else {
			$this->session->set_flashdata('message', 'Username/Password Cannot be null');
			redirect(base_url());
		}
	}
}
