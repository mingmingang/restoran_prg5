<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TransaksiC extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session'); // Load the session library
        $this->load->model('OrderModel'); // Load the OrderModel here to avoid loading it multiple times
        if (!$this->session->userdata('logged_in')) {
            // Redirect to login page if not logged in
            redirect('UserC/login');
        }
    }

    public function submitOrder() {

        if (!$this->session->userdata('logged_in')) {
            echo json_encode(['success' => false, 'message' => 'User not logged in.']);
            return;
        }

        // Retrieve user ID from session
        $id_user = $this->session->userdata('id_user');
        // Get the posted data
        $data = json_decode($this->input->raw_input_stream, true);

        // Fetch the last transaction ID
        $lastTransactionId = $this->OrderModel->getLastTransactionId();
        $newTransactionId = $this->generateNewTransactionId($lastTransactionId);

        // Prepare the transaction data
        $transactionData = [
            'id_trs' => $newTransactionId,
            'id_user' =>  $id_user,  // Adjust this to your session management
            'tgl_trs' => date('Y-m-d H:i:s'), // Get current date and time
            'total_harga' => $data['total_harga']
        ];

        // Insert into 'transaksi' table
        $this->OrderModel->insertTransaksi($transactionData);

        // Insert into 'detail_transaksi'
        foreach ($data['detailPesanan'] as $pesanan) {
            $this->OrderModel->insertDetailTransaksi($newTransactionId, $pesanan);
        }

        // Return success response
        echo json_encode(['success' => true]);
    }

    private function generateNewTransactionId($lastTransactionId) {
        // Extract the numeric part from the last transaction ID
        $number = (int) substr($lastTransactionId, 3); // Assuming 'TRS' is 3 characters
        $number++; // Increment the number
        return 'TRS' . str_pad($number, 3, '0', STR_PAD_LEFT); // Format as TRS001, TRS002, etc.
    }

    public function riwayat_transaksi(){
        $id_user = $this->session->userdata('id_user');

        // Check if the user is logged in
        if (!$id_user) {
            redirect('UserC/login'); // Redirect to login if not logged in
        }
    
        // Debugging: Check if the session user ID is being retrieved
        log_message('debug', 'User ID from session: ' . $id_user); // This will log the user ID
    
        // Fetch transactions for the user
        $this->load->model('OrderModel'); // Load your model
        $transactions = $this->OrderModel->get_all_my_transaction($id_user);
    
        // Debugging: Check if transactions are fetched
        log_message('debug', 'Fetched transactions: ' . json_encode($transactions)); // Log fetched transactions
    
        // Load the view with transactions data
        $this->load->view('riwayattransaksi', ['transaksi_makanan' => $transactions]);

    }

    public function data_transaksi(){
        // Fetch transactions for the user
        $this->load->model('OrderModel'); // Load your model
        $transactions = $this->OrderModel->get_all_transaction();
    
        // Debugging: Check if transactions are fetched
        log_message('debug', 'Fetched transactions: ' . json_encode($transactions)); // Log fetched transactions
    
        // Load the view with transactions data
        $this->load->view('dataTransaksi', ['transaksi_makanan' => $transactions]);

    }

    public function getDetailTransaksi($id_trs) {
        // Fetch the detail for the specified transaction
        $detail_transaksi = $this->OrderModel->getDetailTransaksi($id_trs);

        // Return the details as JSON for modal
        echo json_encode($detail_transaksi);
    }

}
