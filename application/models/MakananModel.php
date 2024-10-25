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

	public function getLastFoodId() {
        $this->db->select('id_makanan');
        $this->db->order_by('id_makanan', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('makanan'); // Ganti 'makanan' dengan nama tabel yang sesuai
        if ($query->num_rows() > 0) {
            return $query->row()->id_makanan;
        }
        return 'MKN000'; // ID default jika tidak ada record
    }    

    public function get_by_id($id) {
        return $this->db->get_where('makanan', ['id_makanan' => $id])->row_array();
    }

    public function update_makanan($id, $data) {
        $this->db->where('id_makanan', $id);
        return $this->db->update('makanan', $data);
    }

    public function deleteMakanan($id){
        $this->db->where('id_makanan',$id);
        $this->db->delete('makanan');
    }
}
?>
