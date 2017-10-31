<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function index($msg = NULL){
		$this->load->view('temp/head');
        $data['msg'] = $msg;
        $this->load->view('login_view', $data);
    }
	
	public function process()
	{        
		$this->load->model('login_model');
        $result = $this->login_model->validate();
        if(! $result)
		{
            $msg = '<br/><i>Invalid email and/or password.</i><br />';
            $this->index($msg);
        }
		else
		{
//            echo "masuk";
            redirect('client');
        }        
    }	
    
    public function do_logout()
	{
        $this->session->sess_destroy();
        redirect('login','refresh');
    }
}