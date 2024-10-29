<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChartModel extends CI_Model {

    public function getTransactionsCountByDate() {
        // Mengambil jumlah transaksi berdasarkan tanggal
        $this->db->select('DATE(tgl_trs) as tgl, COUNT(*) as jumlah');
        $this->db->from('transaksi_makanan');
        $this->db->group_by('DATE(tgl_trs)');
        $this->db->order_by('tgl', 'ASC'); // Mengurutkan berdasarkan tanggal
        $query = $this->db->get();
        
        return $query->result();
    }

    public function getTransactionsCountByMonth() {
        // Mengambil jumlah transaksi berdasarkan bulan
        $this->db->select('MONTH(tgl_trs) as bulan, YEAR(tgl_trs) as tahun, COUNT(*) as jumlah');
        $this->db->from('transaksi_makanan');
        $this->db->group_by('MONTH(tgl_trs), YEAR(tgl_trs)');
        $this->db->order_by('tahun, bulan', 'ASC'); // Mengurutkan berdasarkan tahun dan bulan
        $query = $this->db->get();
        
        return $query->result();
    }

    public function getFoodAndDrinkCount() {
        // Mengambil total jumlah makanan
        $this->db->where('kategori', 'makanan');
        $this->db->from('makanan');
        $jumlahMakanan = $this->db->count_all_results();

        // Mengambil total jumlah minuman
        $this->db->where('kategori', 'minuman');
        $this->db->from('makanan');
        $jumlahMinuman = $this->db->count_all_results();

        return [
            'makanan' => $jumlahMakanan,
            'minuman' => $jumlahMinuman,
        ];
    }

    public function getTopFoods() {
        // Ambil data dari tabel detail_transaksi_makanan, gabung dengan tabel makanan
        $query = "SELECT m.nama_makanan, SUM(dtm.jumlah) AS total_terjual 
                  FROM detail_transaksi_makanan dtm
                  JOIN makanan m ON dtm.id_makanan = m.id_makanan
                  GROUP BY dtm.id_makanan
                  ORDER BY total_terjual DESC
                  LIMIT 10"; // Menampilkan 10 makanan yang paling sering dibeli

        return $this->db->query($query)->result_array();
    }

    
}
?>
