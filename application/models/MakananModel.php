<?php

class MakananModel extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function get_all_makanan(){
        $query = $this->db->get('makanan');
        return $query->result_array();
    }

    public function insert_makanan($data){
        return $this->db->insert('makanan',$data);
    }
}


?>