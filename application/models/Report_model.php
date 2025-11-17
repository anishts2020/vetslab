<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report_model extends CI_Model {

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

    private $table = 'registration_table';
    private $species_table = 'species_table';
    private $breeds_table = 'breeds_table';
    private $sample_table = 'sample_type_table';

    private $column_order = [
        'reg_id',
        'patient_name',
        'breed_name',
        'sample_type_name',
        'species_name',
        'mob_no',
        'owners_name'
    ];

    private $column_search = ['patient_name','owners_name','mob_no'];
    private $order_default  = ['reg_id' => 'DESC'];

    public function get_datatables_reports(){

        $post = $this->input->post();

        $from = !empty($post['from_date']) ? $post['from_date'] : null;
        $to   = !empty($post['to_date']) ? $post['to_date'] : null;

        // MAIN Query
        $this->_main_query($from, $to);

        // Filter Count
        $filtered = clone $this->db;
        $recordsFiltered = $filtered->get()->num_rows();

        // Sorting
        if(isset($post['order'])){
            $colIdx = $post['order'][0]['column'];
            $dir    = $post['order'][0]['dir'];

            $column = $this->column_order[$colIdx];

            if($column == 'breed_name')        $column = 'b.breeds_name';
            if($column == 'species_name')      $column = 's.species_name';
            if($column == 'sample_type_name')  $column = 'st.sample_type_name';

            $this->db->order_by($column, $dir);
        } else {
            $this->db->order_by(key($this->order_default), $this->order_default[key($this->order_default)]);
        }

        // Pagination
        if($post['length'] != -1){
            $this->db->limit($post['length'], $post['start']);
        }

        $query = $this->db->get();

        $data = [];
        foreach($query->result() as $r){
            $data[] = [
                'reg_id'            => $r->reg_id,
                'patient_name'      => $r->patient_name,
                'breed_name'        => $r->breed_name,
                'sample_type_name'  => $r->sample_type_name,
                'species_name'      => $r->species_name,
                'mob_no'            => $r->mob_no,
                'owners_name'       => $r->owners_name
            ];
        }

        // Total records
        $recordsTotal = $this->db->count_all($this->table);

        return [
            "draw"              => intval($post['draw']),
            "recordsTotal"      => $recordsTotal,
            "recordsFiltered"   => $recordsFiltered,
            "data"              => $data
        ];
    }

    private function _main_query($from, $to){

        $post = $this->input->post();

        $this->db->select("
            r.reg_id,
            r.patient_name,
            r.mob_no,
            r.owners_name,
            b.breeds_name AS breed_name,
            s.species_name AS species_name,
            st.sample_type_name AS sample_type_name
        ");
        $this->db->from("$this->table r");
        $this->db->join("$this->breeds_table b", "b.breeds_id = r.select_breed", "left");
        $this->db->join("$this->species_table s", "s.species_id = r.select_species", "left");
        $this->db->join("$this->sample_table st", "st.sample_type_id = r.select_sample_type", "left");

        // Date filter (created_time)
        if($from && $to){
            $this->db->where("DATE(r.created_time) >=", $from);
            $this->db->where("DATE(r.created_time) <=", $to);
        }

        // Search
        if(!empty($post['search']['value'])){
            $search = $post['search']['value'];

            $this->db->group_start();
            foreach($this->column_search as $item){
                $this->db->or_like("r.$item", $search);
            }
            $this->db->group_end();
        }
    }
}


