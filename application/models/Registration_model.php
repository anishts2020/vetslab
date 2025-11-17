<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_main_menus() {
        return $this->db->select('*')
                        ->from('menus')
                        ->where('parent_id', 0)
                        ->order_by('id', 'ASC')
                        ->get()
                        ->result_array();
    }

    public function get_sub_menus() {
        return $this->db->select('*')
                        ->from('menus')
                        ->where('parent_id >', 0)
                        ->order_by('id', 'ASC')
                        ->get()
                        ->result_array();
    }

  

    // ✅ Auto-generate next registration ID 
    public function get_next_reg_id() {
        $this->db->select('reg_id');
        $this->db->order_by('reg_id', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('registration_table');
        $row = $query->row();

        if ($row && preg_match('/(\d+)$/', $row->reg_id, $matches)) {
            $next_num = (int)$matches[1] + 1;
        } else {
            $next_num = 1;
        }

        return 'VL-AD' . str_pad($next_num, 3, '0', STR_PAD_LEFT);
    }

    // ✅ Insert new registration
    
    public function save_registration($data) {
        return $this->db->insert('registration_table', $data);
    }

    // ✅ Update existing registration
    public function update_registration($reg_id, $data) {
        return $this->db->where('reg_id', $reg_id)
                        ->update('registration_table', $data);
    }

    // ✅ Fetch lab tests from another table
    public function get_lab_tests() {
        return $this->db->select('lab_test_id, lab_test_name')
                        ->from('lab_test_master')
                        ->get()
                        ->result_array();
    }

    public function get_sample_types() {
        return $this->db->get('sample_type_table')->result_array();
    }

    public function get_species() {
        return $this->db->get('species_table')->result_array();
    }

    public function get_breeds() {
        return $this->db->get('breeds_table')->result_array();
    }

    // ✅ Get all registrations
    public function get_all_registrations() {
        return $this->db->order_by('reg_id', 'DESC')
                        ->get('registration_table')
                        ->result_array();
    }

    // ✅ Get single registration by ID
    public function get_registration_by_id($id) {
        return $this->db->where('reg_id', $id)
                        ->get('registration_table')
                        ->row_array();
    }

    // ✅ Get all patient records
    public function get_all_patients() {
    // Fetch all registrations
    $registrations = $this->db->order_by('reg_id', 'DESC')
                              ->get('registration_table')
                              ->result_array();

    // Fetch all lab tests once for reference
    $lab_tests = $this->db->select('lab_test_id, lab_test_name')
                          ->from('lab_test_master')
                          ->get()
                          ->result_array();

    // Convert to ID => Name mapping
    $test_map = [];
    foreach ($lab_tests as $test) {
        $test_map[$test['lab_test_id']] = $test['lab_test_name'];
    }

    // Replace lab test IDs with names
    foreach ($registrations as &$reg) {
        $lab_ids = json_decode($reg['lab_test'], true);
        if (is_array($lab_ids)) {
            $names = [];
            foreach ($lab_ids as $id) {
                if (isset($test_map[$id])) {
                    $names[] = $test_map[$id];
                }
            }
            $reg['lab_test_names'] = implode(', ', $names);
        } else {
            $reg['lab_test_names'] = '';
        }
    }

    return $registrations;
}


    public function exists($reg_id)
{
    return $this->db->where('reg_id', $reg_id)
                    ->from('registration_table')
                    ->count_all_results() > 0;
}

}