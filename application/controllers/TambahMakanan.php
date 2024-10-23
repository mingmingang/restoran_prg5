<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TambahMakanan extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function construct(){
		parent::__construct();
		$this->laod->model('MakananModel');
	}

	public function index()
	{
		$this->load->model('MakananModel');
		$data['makanan'] = $this->MakananModel->get_all_makanan();
		$this->load->view('TambahMakanan',$data);

	}

	public function save() {
		$data = [
			'id_makanan' => $this->input->post('foodID'),
			'nama_makanan' => $this->input->post('foodName'),
			'harga' => $this->input->post('foodPrice'),
			'kategori' => $this->input->post('foodCategory'),
			'deskripsi' => $this->input->post('foodDescription'),
			'gambar' => '', // Gambar akan diupload dan disimpan di sini
		];
	
		// Proses upload gambar
		if ($_FILES['foodImage']['name']) {
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['file_name'] = $data['id_makanan']; // Menggunakan ID Makanan sebagai nama file
	
			$this->load->library('upload', $config);
	
			if ($this->upload->do_upload('foodImage')) {
				$uploadData = $this->upload->data();
				$data['gambar'] = $uploadData['file_name']; // Menyimpan nama file gambar
			} else {
				// Handle error jika upload gagal
				$error = $this->upload->display_errors();
				// Tambahkan logika penanganan kesalahan jika diperlukan
			}
		}
	
		$this->MakananModel->insert_makanan($data);
		$this->load->view('tambahmakanan');
	}

	public function add_food() {
		$lastFood = $this->MakananM->get_last_food_id(); // Ambil ID terakhir
		$data['last_id'] = $lastFood ? $lastFood['id_makanan'] : 'MKN000'; // Set default ID jika tidak ada
		$this->load->view('add_food_view', $data);
	}
	
	
	
}

?>