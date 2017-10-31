<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ind extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$this->load->view('page/head');
		$this->load->view('page/ind');
		$this->load->view('page/footer');
	}
    
}
