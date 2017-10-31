<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
class Client_model extends CI_Model
{	
	public function __construct()
	{
		parent::__construct();
	}	
	
    public function username()
	{
        $this->db->select('*');
        $this->db->where('username = '.username.'');
        $query = $this->db->get('users');
        
		if ($query->num_rows()>0){
			return $query->result();
		}else{
			return array();
		}
	}
    
}