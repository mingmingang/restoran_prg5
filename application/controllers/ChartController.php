<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChartController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('ChartModel');
    }

    public function index() {
        $data['topFoods'] = $this->ChartModel->getTopFoods();
        // Menampilkan halaman chart di view restaurant
        $this->load->view('restaurant');
    }

    public function getTransactionsByDate() {
        $data = $this->ChartModel->getTransactionsCountByDate();

        // Konversi data ke format JSON
        $chartData = [];
        foreach ($data as $item) {
            $chartData['labels'][] = $item->tgl; // Tanggal
            $chartData['data'][] = $item->jumlah; // Jumlah transaksi
        }

        header('Content-Type: application/json');
        echo json_encode($chartData);
    }

    public function getTransactionsByMonth() {
        $data = $this->ChartModel->getTransactionsCountByMonth();

        // Konversi data ke format JSON
        $chartData = [];
        foreach ($data as $item) {
            $chartData['labels'][] = $item->bulan . '/' . $item->tahun; // Bulan/Tahun
            $chartData['data'][] = $item->jumlah; // Jumlah transaksi
        }

        header('Content-Type: application/json');
        echo json_encode($chartData);
    }

    public function getFoodAndDrinkCount() {
        $data = $this->ChartModel->getFoodAndDrinkCount();

        // Menghitung total dan persentase
        $total = $data['makanan'] + $data['minuman'];
        $chartData = [
            'labels' => ['Makanan', 'Minuman'],
            'data' => [
                ($data['makanan'] / $total) * 100,
                ($data['minuman'] / $total) * 100,
            ]
        ];

        header('Content-Type: application/json');
        echo json_encode($chartData);
    }

    
}
?>
