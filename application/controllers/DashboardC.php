<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardC extends CI_Controller {
    public function index(){
        $this->load->helper('url');
        $this->load->model('MakananModel');
		$data['makanan'] = $this->MakananModel->get_all_makanan();
		$this->load->view('restaurant', $data);
    }
}
?>