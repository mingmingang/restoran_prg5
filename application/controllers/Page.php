<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

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
	public function index()
	{
		$this->load->view('restaurant');
	}

	public function about(){
		$this->load->view('about');
	}
	
	public function contact(){
		$this->load->view('contact');
	}

	public function iphone() {
        $this->load->helper('url'); // Memuat URL helper
        $this->load->view('iphone');
    }

	public function product() {
        $this->load->view('product');
    }

	public function aboutus() {
        $this->load->view('aboutus');
    }
	
}
