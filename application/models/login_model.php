<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login_model extends CI_Model 
{
	public function __construct()
	{
        parent::__construct();
    }
    
    public function validate()
	{
        $email = $this->security->xss_clean($this->input->post('email'));
        $password = $this->security->xss_clean($this->input->post('password'));

        $this->db->where('email', $email);
        $this->db->where('password', sha1(md5($password)));
        
        $query = $this->db->get('users');
        if($query->num_rows == 1)
        {
            $row = $query->row();
            $data = array(
                    'password' => $row->password,
                    'email' => $row->email,
                    'nama' => $row->nama,
                    'level' => $row->level,
                    'validated' => true
                    );
            $this->session->set_userdata($data);
            return true;
        }
		
        return false;
    }
}