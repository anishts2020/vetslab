<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Labtest_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_main_menus() {
        return $this->db->where('parent_id',0)->order_by('id','ASC')->get('menus')->result_array();
    }

    public function get_sub_menus() {
        return $this->db->where('parent_id >',0)->order_by('id','ASC')->get('menus')->result_array();
    }

    public function get_all_rft_test() {
        return $this->db->order_by('lab_test_id','ASC')->get('lab_test_master')->result_array();
    }

    public function insert_rft_test($data){
        return $this->db->insert('lab_test_master', $data);
    }

    public function getRftDatas($id){
        return $this->db->where('lab_test_id', $id)->get('lab_test_master')->result();
    }

    public function update_rft_test($id, $data){
        return $this->db->where('lab_test_id', $id)->update('lab_test_master', $data);
    }

    public function delete_rft_test($id){
        return $this->db->where('lab_test_id', $id)->delete('lab_test_master');
    }
}
