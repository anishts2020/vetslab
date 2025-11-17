
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class todays_report_model extends CI_Model {
	public function get_todays_report()
{
    $today = date('Y-m-d');
    $this->db->where('DATE(created_time)', $today);
    return $this->db->get('registration_table')->result();
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
}