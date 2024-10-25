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
		return $this->db->insert('makanan', $data);
	}

	public function get_last_id() {
        $this->db->select('id_makanan');
        $this->db->from('makanan');
        $this->db->order_by('id_makanan', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get();
    
        if ($query->num_rows() > 0) {
            return $query->row()->id_makanan;
        } else {
            return null; // Return null if no rows are found
        }
    }
    
    
    
}
?>
