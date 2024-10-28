<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserC extends CI_Controller {
    public function __construct(){
		parent::__construct();
        $this->load->library('session');
		$this->load->model('UserM');
	}
    
    public function index(){
        $this->load->helper('url');
        $this->load->view('login_view');
    }

    public function login() {
        $this->load->view('login_view');
    }

    public function register() {
        $this->load->view('register_view');
    }

    public function addUser() {
        $this->load->model('UserM');
		$data['user'] = $this->UserM->get_all_user();
		$this->load->view('adduser', $data);
    }

    public function register_user() {
        // Logic untuk menyimpan data pengguna baru
        $this->load->model('UserM');
        if ($this->UserM->register()) {
            // Redirect ke halaman login setelah berhasil mendaftar
            $this->session->set_flashdata('success', 'Registration successful! You can now log in.');
            redirect('UserC/login');
        } else {
            // Handle failure (e.g., show an error message)
            $this->session->set_flashdata('error', 'Registration failed! Please try again.');
            redirect('UserC/register'); // Redirect kembali ke halaman registrasi jika gagal
        }
    }

    public function login_user() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        // Mengambil data pengguna dari database
        $user = $this->UserM->get_user($username);
    
        // Memeriksa apakah pengguna ditemukan
        if ($user) {
            // Verifikasi password (tidak dienkripsi)
            if ($user->password === $password) {
                // Set session data jika login berhasil
                $this->session->set_userdata('logged_in', true);
                $this->session->set_userdata('id_user', $user->id_user);
                $this->session->set_userdata('username', $user->username);
                $this->session->set_userdata('role', $user->role); // Menyimpan role pengguna
                
                // Cek apakah pengguna adalah admin
                if ($user->role === 'admin' || $user->role === 'Admin') {
                    // Redirect ke halaman admin
                    redirect('DashboardC'); // Ganti 'AdminDashboard' dengan controller yang sesuai untuk admin
                } else {
                    // Redirect ke halaman pengguna biasa
                    redirect('DashboardC/user'); // Ganti 'UserDashboard' dengan controller yang sesuai untuk pengguna biasa
                }
            } else {
                // Set flashdata error jika password salah
                $this->session->set_flashdata('error', 'Login gagal! Username atau password salah.');
                redirect('UserC/login');
            }
        } else {
            // Set flashdata error jika pengguna tidak ditemukan
            $this->session->set_flashdata('error', 'Login gagal! Username atau password salah.');
            redirect('UserC/login');
        }
    }
    

    public function save() {
        $last_id = $this->UserM->getLastUserId();
		$new_id = 'USR' . str_pad((intval(substr($last_id, 3)) + 1), 3, '0', STR_PAD_LEFT);
        // Ambil data dari form
        $data = [
            'id_user' => $new_id,
            'nama_user' => $this->input->post('nama'), // Ambil nama dari form
            'username' => $this->input->post('username'), // Ambil username dari form
            'password' => $this->input->post('password'), // Ambil password dari form
            'role' => 'user', // Set role menjadi 'user'
            'status' => 1 // Set status menjadi 1 (aktif)
        ];
    
        // Simpan data ke database melalui model
        if ($this->UserM->register($data)) {
            redirect('UserC/login'); // Redirect ke halaman login setelah sukses
        } else {
            // Tangani kegagalan (misalnya, tampilkan pesan kesalahan)
            $this->session->set_flashdata('error', 'Registration failed. Please try again.');
            redirect('UserC/register'); // Redirect kembali ke halaman registrasi
        }
    }

    public function simpanUser() {
        $last_id = $this->UserM->getLastUserId();
        $new_id = 'USR' . str_pad((intval(substr($last_id, 3)) + 1), 3, '0', STR_PAD_LEFT);
    
        // Ambil data dari form
        $data = [
            'id_user' => $new_id,
            'nama_user' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'role' => $this->input->post('role'),
            'status' => 1
        ];
    
        // Simpan data ke database melalui model
        if ($this->UserM->register($data)) {
            $this->session->set_flashdata('success', 'Pengguna berhasil ditambahkan.');
            redirect('UserC/addUser');
        } else {
            $this->session->set_flashdata('error', 'Gagal menambahkan pengguna. Silakan coba lagi.');
            redirect('UserC/addUser');
        }
    }
    

    public function change_password() {
        // Load the view for changing password
        $this->load->view('change_password_view');
    }

    public function update_password() {
        $username = $this->input->post('username');
        $new_password = $this->input->post('new_password');
        $confirm_password = $this->input->post('confirm_password');
    
        // Periksa apakah username ada
        $user = $this->UserM->get_user_by_username($username);
        if ($user) {
            if ($new_password === $confirm_password) {
                // Update password tanpa enkripsi
                $this->UserM->update_password_by_username($username, $new_password); // Gunakan username untuk memperbarui password
                $this->session->set_flashdata('success', 'Password updated successfully!');
            } else {
                $this->session->set_flashdata('error', 'New passwords do not match.');
            }
        } else {
            $this->session->set_flashdata('error', 'Username does not exist.');
        }
    
        redirect('UserC/change_password'); // Redirect kembali ke halaman ubah password
    }    


    public function edit($id) {
		// Ambil detail makanan untuk ID yang ditentukan
		$data['user'] = $this->UserM->get_by_id($id);
		if (!$data['user']) {
			show_404(); // Tampilkan halaman 404 jika makanan tidak ditemukan
		}
		$this->load->view('edit_user', $data); // Muat tampilan form edit dengan data
	}
	
	public function update($id) {
		// Siapkan data untuk pembaruan
		$data = [
			'nama_user' => $this->input->post('nama_user'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'role' => $this->input->post('role'),
            'status' => 1,
		];

		// Panggil fungsi model untuk memperbarui catatan
		$this->UserM->update_user($id, $data);
		
		// Alihkan kembali ke daftar makanan setelah memperbarui
		redirect('UserC/addUser');
	}

    public function delete($id){
		$this->UserM->updateStatusUser($id, 0); // Mengubah status menjadi 0
		redirect('UserC/addUser'); // Mengarahkan kembali ke halaman setelah mengubah status
	}
    
}
?>