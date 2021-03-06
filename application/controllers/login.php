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
		session_start();
    }
	
	public function process()
	{    
        $result = $this->RESTLogin($this->input->post('email'), $this->input->post('password'));

		if(property_exists($result, "error"))
		{
		    $this->index($result->message);
		}
		else
		{
			$user_array = array(
				'id' => $result->id,
				'name' => $result->name,
				'username' => $result->username,
				'email' => $result->email
			);

			$this->session->set_userdata($user_array);

			// $user_data = $this->session->userdata('userdata');

            redirect('client');
		}
    }
    
    public function do_logout()
	{
        $this->session->sess_destroy();
        redirect('login','refresh');
    }

    public function RESTLogin($email, $password){
        $url = 'http://happyscope.co:3002/login';
        $opts = array('http' =>
            array(
                'method'  => 'POST',
                'header'  => 'Content-Type: application/json',
                'content' => json_encode([
                	'email' 	=> $email,
                	'password' 	=> $password
                ])
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