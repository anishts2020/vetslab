<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Registration_model', 'registration_m');
        if (!$this->session->userdata('admin_auth')) {
            redirect(base_url());
        }
    }

    // Load registration form
    public function index()
    {
        $data['main_menus']    = $this->registration_m->get_main_menus();
        $data['sub_menus']     = $this->registration_m->get_sub_menus();
        $data['next_reg_id']   = $this->registration_m->get_next_reg_id();
        $data['lab_test']      = $this->registration_m->get_lab_tests();
        $data['sample_types']  = $this->registration_m->get_sample_types();
        $data['species']       = $this->registration_m->get_species();
        $data['breeds']        = $this->registration_m->get_breeds();
        $data['all_patients']  = $this->registration_m->get_all_patients();
        $this->load->view('home/registration', $data);
    }

    // ✅ Fetch single record for editing
    public function getRegistrationById($reg_id)
    {
        $data = $this->registration_m->get_registration_by_id($reg_id);
        if ($data) {
            $data['lab_test'] = json_decode($data['lab_test']); // Decode JSON for multi-select
            echo json_encode(['status' => 'success', 'data' => $data]);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Record not found']);
        }
    }

    // ✅ Save or update registration via AJAX
    public function saveRegistration() 
    {
        $mob_no = $this->input->post('mob_no');

        // SERVER-SIDE VALIDATION
        if (!preg_match('/^[0-9]{10}$/', $mob_no)) {
            echo json_encode(['status' => 'error', 'message' => 'Mobile number must be exactly 10 digits']);
            return;
        }

    $required_fields = [
    'con_fee' => 'Consultation Fee',
    'patient_name' => 'Patient Name',
    'age' => 'Age',
    'y_m_d' => 'Years/Months/Days',
    'sex' => 'Sex'
];
foreach ($required_fields as $field => $label) {
    if (empty(trim($this->input->post($field)))) {
        echo json_encode(['status' => 'error', 'message' => "$label is required"]);
        return;
    }
}

 $reg_id = trim($this->input->post('reg_id')); 
        $age      = $this->input->post('age');
        $y_m_d    = $this->input->post('y_m_d');
        $lab_test = $this->input->post('lab_test');

        // Prepare data array
        $data = [ 
            'con_fee'            => $this->input->post('con_fee'),
            'patient_name'       => $this->input->post('patient_name'),
            'age'                => $age,
            'y_m_d'              => $y_m_d,
            'sex'                => $this->input->post('sex'),
            'select_sample_type' => $this->input->post('select_sample_type'),
            'select_species'     => $this->input->post('select_species'),
            'select_breed'       => $this->input->post('select_breed'),
            'owners_name'        => $this->input->post('owners_name'),
            'ref_by'             => $this->input->post('ref_by'),
            'mob_no'             => $mob_no,
            'place'              => $this->input->post('place'),
            'email'              => $this->input->post('email'),
            'lab_test' => json_encode($this->input->post('lab_test')),
            'updated_time'       => date('Y-m-d H:i:s'),
            'created_by'         => $this->session->userdata('id')
        ];

        // ✅ If reg_id exists → update, else insert
    if (!empty($reg_id) && $this->registration_m->exists($reg_id)) {
        // --- Update record ---
        $this->db->where('reg_id', $reg_id);
        if ($this->db->update('registration_table', $data)) {
            echo json_encode(['status' => 'success', 'message' => 'Record updated successfully']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to update record']);
        }
    } else {
        // --- Insert new record ---
        $data['reg_id']       = $this->registration_m->get_next_reg_id();
        $data['patient_id']   = 'VL-' . date('YmdHis');
        $data['created_time'] = date('Y-m-d H:i:s');

        if ($this->registration_m->save_registration($data)) {
            echo json_encode(['status' => 'success', 'message' => 'New record saved']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to save registration']);
        }
    }
}
}