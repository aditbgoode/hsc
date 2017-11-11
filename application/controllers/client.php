<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
        $this->check_isvalidated();
		session_start();
	}
	
	public function index(){
        $data['username'] = $this->session->userdata('email');
        $data['nama'] = $this->session->userdata('id');
		$this->load->view('page/client');
	}
    
    private function check_isvalidated()
	{
        if(! $this->session->userdata('id'))
		{
            redirect('login','refresh');
        }
    }
}
