<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Breeds_report_model extends CI_Model {
	
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
     public function get_all_breeds()
    {
        $query = $this->db->select('*')
                          ->from('breeds_table')
                          ->order_by('breeds_id', 'ASC')
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
    //  public function insert_breeds($data) {
	// 	return $this->db->insert('breeds_table', $data);
	// }
    //     public function getBreedsDatas($id) {
        
	// 	$this->db->select('*');
	// 	$this->db->where('breeds_id',$id);	
	// 	$query  =  $this->db->get('breeds_table');
	// 	$result =   $query->result();
	// 	return $result;
	// }
//     public function update_breeds($id,$data) { 
//         $this->db->where('breeds_id', $id);
//         return $this->db->update('breeds_table', $data);
//     }
//     public function delete_breed($id) {
//     return $this->db->delete('breeds_table', array('breeds_id' => $id));
// }
}
