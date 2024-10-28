<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainmenuC extends CI_Controller {
    public function __construct(){
		parent::__construct();
		$this->load->model('MainmenuM');
	}
    
    public function index(){
        $this->load->helper('url');
        $this->load->model('MakananModel');
		$data['makanan'] = $this->MakananModel->get_all_makanan();
		$this->load->view('mainmenu', $data);
    }
    
}
?>