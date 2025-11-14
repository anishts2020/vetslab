<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registered_patients_model extends CI_Model {
	
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


    public function get_all_patients() {
        $query = $this->db->select('*')
                          ->from('registration_table')
                          ->order_by('reg_id', 'ASC')
                          ->get();
        return $query->result_array();
    }


    

    public function get_registration_by_id($reg_id)
{
    return $this->db->get_where('registration_table', ['reg_id' => $reg_id])->row_array();
}

public function get_lab_test_master_by_id($lab_test_id)
{
    return $this->db->get_where('lab_test_master', ['lab_test_id' => $lab_test_id])->row_array();
}

public function get_lab_test_details($lab_test_id)
{
    return $this->db->get_where('lab_test_details_master', ['lab_test_id' => $lab_test_id])->result_array();
}

public function get_lab_test_results($reg_id)
{
    return $this->db->get_where('lab_test_result', ['reg_id' => $reg_id])->result();
}




public function get_multiple_lab_test_master($ids)
{
    if (empty($ids)) return [];
    $this->db->where_in('lab_test_id', $ids);
    return $this->db->get('lab_test_master')->result_array();
}

public function get_multiple_lab_test_details($ids)
{
    if (empty($ids)) return [];
    $this->db->where_in('lab_test_id', $ids);
    return $this->db->get('lab_test_details_master')->result_array();
}




public function check_existing_result($reg_id, $lab_test_details_id)
{
    return $this->db->get_where('lab_test_result', [
        'reg_id' => $reg_id,
        'lab_test_details_id' => $lab_test_details_id
    ])->row_array();
}

public function insert_lab_result($data)
{
    return $this->db->insert('lab_test_result', $data);
}

public function update_lab_result($reg_id, $lab_test_details_id, $data)
{
    $this->db->where('reg_id', $reg_id);
    $this->db->where('lab_test_details_id', $lab_test_details_id);
    return $this->db->update('lab_test_result', $data);
}



}