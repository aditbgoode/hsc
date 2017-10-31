<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Eng extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$this->load->view('page/head');
		$this->load->view('page/eng');
		$this->load->view('page/footer');
	}
    
}
