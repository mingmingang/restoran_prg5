<?php 
    class OrderModel extends CI_Model {
        public function insertTransaksi($data) {
            $this->db->insert('transaksi_makanan', $data);
        }
    
        public function insertDetailTransaksi($id_trs, $pesanan) {
            $data = [
                'id_trs' => $id_trs,
                'id_makanan' => $pesanan['id_makanan'],
                'jumlah' => $pesanan['jumlah'],
                'harga_satuan' => $pesanan['harga_satuan'],
                'subtotal' => $pesanan['subtotal']
            ];
            $this->db->insert('detail_transaksi_makanan', $data);
        }
    
        public function getLastTransactionId() {
            $this->db->select('id_trs');
            $this->db->order_by('id_trs', 'DESC');
            $this->db->limit(1);
            $query = $this->db->get('transaksi_makanan');
    
            if ($query->num_rows() > 0) {
                return $query->row()->id_trs;
            }
    
            return 'TRS000'; // Default starting ID if no transactions exist
        }

        public function get_all_my_transaction($id_user) {
         // Get all transactions for the specified user
    $this->db->select('*');
    $this->db->from('transaksi_makanan');
    $this->db->where('id_user', $id_user); // Filter by id_user
    $query = $this->db->get();

    // Debugging: Check the query result
    log_message('debug', 'SQL Query: ' . $this->db->last_query());

    // Return the result as an array
    return $query->result_array(); // Returns an array of transactions
        }

        public function getDetailTransaksi($id_trs) {
                // Joining 'detail_transaksi_makanan' with 'makanan' to get the food name
                $this->db->select('dt.id_trs, dt.jumlah, dt.harga_satuan, dt.subtotal, m.nama_makanan');
                $this->db->from('detail_transaksi_makanan dt');
                $this->db->join('makanan m', 'dt.id_makanan = m.id_makanan');
                $this->db->where('dt.id_trs', $id_trs);
                $query = $this->db->get();
                return $query->result_array(); // Return as an array
        }
    
    }
    

?>