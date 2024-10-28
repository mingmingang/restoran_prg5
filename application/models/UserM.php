<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserM extends CI_Model {

    public function register($data) {
        return $this->db->insert('user', $data); // Ganti 'user' dengan nama tabel Anda
    }

    public function login() {
        // Ambil username dan password dari input
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // Cek apakah pengguna ada di database
        $this->db->where('username', $username);
        $this->db->where('password', md5($password)); // Pastikan Anda menggunakan hashing yang sesuai
        $query = $this->db->get('user'); // Ganti 'users' dengan nama tabel Anda

        if ($query->num_rows() == 1) {
            // Jika pengguna ditemukan, simpan data pengguna ke session
            $user_data = $query->row();
            $this->session->set_userdata('logged_in', true);
            $this->session->set_userdata('user_id', $user_data->id);
            return true;
        } else {
            return false; // Jika tidak ada pengguna yang cocok
        }
    }

    public function getLastUserId() {
        $this->db->select('id_user');
        $this->db->order_by('id_user', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('user'); // Ganti 'makanan' dengan nama tabel yang sesuai
        if ($query->num_rows() > 0) {
            return $query->row()->id_user;
        }
        return 'USR000'; // ID default jika tidak ada record
    }    


    public function get_user($username) {
        $this->db->where('username', $username);
        $query = $this->db->get('user'); // Ganti 'users' dengan nama tabel Anda
        return $query->row(); // Mengembalikan satu baris data
    }

    public function get_user_by_username($username) {
        $this->db->where('username', $username);
        return $this->db->get('user')->row(); // Mengambil record pengguna
    }

    public function update_password_by_username($username, $new_password) {
        $data = array(
            'password' => $new_password // Simpan password dalam bentuk teks biasa
        );
    
        $this->db->where('username', $username); // Gunakan username dalam klausa WHERE
        return $this->db->update('user', $data); // 'user' adalah nama tabel Anda
    }

    public function get_all_user(){
        $this->db->where('status', 1); // Menambahkan kondisi untuk memilih status yang 1
        $query = $this->db->get('user');
        return $query->result_array();
    }


    public function get_by_id($id) {
        return $this->db->get_where('user', ['id_user' => $id])->row_array();
    }

    public function update_user($id, $data) {
        $this->db->where('id_user', $id);
        return $this->db->update('user', $data);
    }

    

    public function updateStatusUser($id, $status) {
        $this->db->where('id_user', $id); // Menentukan id_makanan yang akan diperbarui
        $this->db->update('user', array('status' => $status)); // Memperbarui status menjadi 0
        return $this->db->affected_rows(); // Mengembalikan jumlah baris yang terpengaruh
    }
    
}
?>