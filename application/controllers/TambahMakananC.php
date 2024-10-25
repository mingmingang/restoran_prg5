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
		$last_id = $this->MakananModel->getLastFoodId();
		$new_id = 'MKN' . str_pad((intval(substr($last_id, 3)) + 1), 3, '0', STR_PAD_LEFT);
		// Ambil data dari form
		$foodName = $this->input->post('foodName');
		$foodPrice = $this->input->post('foodPrice');
		$foodCategory = $this->input->post('foodCategory');
		$foodDescription = $this->input->post('foodDescription');
	
		// Proses upload gambar
		$image = $this->input->post('foodImage');
		$image = file_get_contents($_FILES['foodImage']['tmp_name']); // Ambil isi file gambar
	
		// Siapkan data untuk disimpan
		$data = [
			'id_makanan' => $new_id,  // Gunakan ID baru yang sudah dibuat
			'nama_makanan' => $foodName,
			'harga' => $foodPrice,
			'kategori' => $foodCategory,
			'deskripsi' => $foodDescription,
			'gambar' => $image,  // Simpan gambar sebagai BLOB
		];
	
		// Simpan data ke database
		$this->MakananModel->insert_makanan($data);
	
		// Redirect setelah menyimpan
		redirect('TambahMakananC');
	}


	public function delete($id){
		$this->MakananModel->deleteMakanan($id);
		redirect('TambahMakananC');
	}

	public function edit($id) {
		// Ambil detail makanan untuk ID yang ditentukan
		$data['makanan'] = $this->MakananModel->get_by_id($id);
		if (!$data['makanan']) {
			show_404(); // Tampilkan halaman 404 jika makanan tidak ditemukan
		}
		$this->load->view('edit_makanan', $data); // Muat tampilan form edit dengan data
	}
	
	public function update($id) {
		// Siapkan data untuk pembaruan
		$data = [
			'nama_makanan' => $this->input->post('nama_makanan'),
			'kategori' => $this->input->post('kategori'),
			'harga' => $this->input->post('harga'),
			'deskripsi' => $this->input->post('deskripsi'),
		];
	
		// Jika ada upload gambar, proses upload dan simpan sebagai BLOB
		if (!empty($_FILES['gambar']['name'])) {
			// Ambil isi file gambar
			$image = file_get_contents($_FILES['gambar']['tmp_name']); // Membaca konten file gambar
			$data['gambar'] = $image; // Simpan gambar sebagai BLOB
		}
	
		// Panggil fungsi model untuk memperbarui catatan
		$this->MakananModel->update_makanan($id, $data);
		
		// Alihkan kembali ke daftar makanan setelah memperbarui
		redirect('TambahMakananC');
	}
	
	
	
	
	public function add_food() {
		$this->load->model('MakananModel');
		$lastId = $this->MakananModel->get_last_id();
	

		if ($lastId) {
			$number = intval(substr($lastId, 3)) + 1;
			$newId = 'MKN' . str_pad($number, 3, '0', STR_PAD_LEFT);
		} else {
			$newId = 'MKN001';
		}
	
		// Pass the new ID to the view
		$data['new_id'] = $newId;
		$this->load->view('addMakanan', $data);
	}
		
}
?>
