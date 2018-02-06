<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contract extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
        $this->check_isvalidated();
		session_start();
	}
	
	public function index(){
        $data['username'] = $this->session->userdata('username');
        $data['nama'] = $this->session->userdata('nama');
		$this->load->view('page/head');
		$this->load->view('page/contract');
	}
    
    private function check_isvalidated()
	{
        if(! $this->session->userdata('validated'))
		{
            redirect('login','refresh');
        }
    }
}
