<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TambahMakananC extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('MakananModel');
	}

	public function index() {
		$this->load->model('MakananModel');
		$data['makanan'] = $this->MakananModel->get_all_makanan();
		$this->load->view('addMakanan', $data);
	}

	public function save() {
		$data = [
			'id_makanan' => $this->input->post('foodID'),
			'nama_makanan' => $this->input->post('foodName'),
			'harga' => $this->input->post('foodPrice'),
			'kategori' => $this->input->post('foodCategory'),
			'deskripsi' => $this->input->post('foodDescription'),
			'gambar' => '',  // You can leave this as an empty string or remove it entirely if not needed
		];
	
		// Save the data to the database without any image upload
		$this->MakananModel->insert_makanan($data);
	
		// Redirect or load view after saving
		redirect('TambahMakananC');
	}
	
	
	public function add_food() {
		$this->load->model('MakananModel');
		$lastId = $this->MakananModel->get_last_id(); // Fetch the last ID from the database
	
		// Determine the next ID based on the last ID
		if ($lastId) {
			$number = intval(substr($lastId, 3)) + 1; // Extract number and increment
			$newId = 'MKN' . str_pad($number, 3, '0', STR_PAD_LEFT); // Pad with zeros
		} else {
			$newId = 'MKN001'; // Start with MKN001 if no records exist
		}
	
		$data['new_id'] = $newId; // Pass the new ID to the view
		$this->load->view('addMakanan', $data);
	}	
}
?>
