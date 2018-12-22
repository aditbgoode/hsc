<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Static_client extends CI_Controller {
	
	public function index(){
		$this->load->view('page/hs.html');
	}
}
