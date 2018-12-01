<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
        $this->check_isvalidated();
		session_start();
	}
	
	public function index(){
        $data['username'] = $this->session->userdata('username');
        $data['nama'] = $this->session->userdata('name');
        $data['data'] = json_encode($this->RESTGetAllData());
        $data['data2'] = json_encode($this->RESTGetAllData());
		$this->load->view('page/client', $data);
		// echo json_encode($this->session->userdata('name'));
	}
    
    private function check_isvalidated()
	{
        if(! $this->session->userdata('id'))
		{
            redirect('login','refresh');
        }
    }

    public function RESTGetAllData(){
        $url = 'http://happyscope.co:3002/users/' . $this->session->userdata('id');
        $opts = array('http' =>
            array(
                'method'  => 'GET',
                'header'  => 'Content-Type: application/json'
            )
        );
        $context  = stream_context_create($opts);
        $result = @file_get_contents($url, false, $context);
        if (strpos($http_response_header[0], '200') === false) {
            return false;
        }
        $data = json_decode($result);
        return $data;
    }
}
