<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->check_isvalidated();
		session_start(); 
		$this->load->database();
		$this->load->helper(array('url','tanggal'));
		$this->load->library('grocery_CRUD'); 
        $this->load->model('home_model');
        $this->load->model('book_model');
	}
	
    public function index() {
        $data['nip'] = $this->session->userdata('nip');
        $data['nama'] = $this->session->userdata('nama');
        $data['level'] = $this->session->userdata('level');
//		$this->load->view('temp/head');
//		$this->load->view('admin/menu', $data);
        $data['dosen'] = $this->home_model->dosen($data['nip']);
        
        if($this->session->userdata('level')=='admin'){
//            $this->record();
            $this->load->view('temp/head');
            $this->load->view('admin/menu', $data);
            $this->load->view('admin/profil1', $data);
        }
        elseif($this->session->userdata('level')=='user'){ 
//            $this->search_keywords();
            echo "user";
        }
//        echo "BERHASIL";
//        $this->load->view('world');
    }
    
	public function book()
	{

		$data['books']=$this->home_model->get_all_books();
		$this->load->view('book_view',$data);
	}
    
    public function book_add()
		{
			$data = array(
					'book_isbn' => $this->input->post('book_isbn'),
					'book_title' => $this->input->post('book_title'),
					'book_author' => $this->input->post('book_author'),
					'book_category' => $this->input->post('book_category'),
				);
			$insert = $this->book_model->book_add($data);
			echo json_encode(array("status" => TRUE));
		}
		public function ajax_edit_book($id)
		{
			$data = $this->book_model->get_by_id($id);



			echo json_encode($data);
		}

		public function book_update()
	{
		$data = array(
				'book_isbn' => $this->input->post('book_isbn'),
				'book_title' => $this->input->post('book_title'),
				'book_author' => $this->input->post('book_author'),
				'book_category' => $this->input->post('book_category'),
			);
		$this->book_model->book_update(array('book_id' => $this->input->post('book_id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function book_delete($id)
	{
		$this->book_model->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}
    
    
    public function ajax_edit($id)
		{
			$data = $this->home_model->get_by_id($id);



			echo json_encode($data);
		}
    
    public function dosen_add()
		{
			$data = array(
				'nip' => $this->input->post('nip'),
				'nama' => $this->input->post('nama'),
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'golongan' => $this->input->post('golongan'),
				'jabatan' => $this->input->post('jabatan'),
				'fakultas' => $this->input->post('fakultas'),
				'prodi' => $this->input->post('prodi'),
				'kantor' => $this->input->post('kantor'),
				'tlp_kantor' => $this->input->post('tlp_kantor'),
				'rumah' => $this->input->post('rumah'),
				'hp' => $this->input->post('hp'),
				'email' => $this->input->post('email'),
				'thn1_1' => $this->input->post('thn1_1'),
				'thn2_1' => $this->input->post('thn2_1'),
				'univ_1' => $this->input->post('univ_1'),
				'ilmu_1' => $this->input->post('ilmu_1'),
				'thn1_2' => $this->input->post('thn1_2'),
				'thn2_2' => $this->input->post('thn2_2'),
				'univ_2' => $this->input->post('univ_2'),
				'ilmu_2' => $this->input->post('ilmu_2'),
				'thn1_3' => $this->input->post('thn1_3'),
				'thn2_3' => $this->input->post('thn2_3'),
				'univ_3' => $this->input->post('univ_3'),
				'ilmu_3' => $this->input->post('ilmu_3'),
				);
			$insert = $this->home_model->dosen_add($data);
			echo json_encode(array("status" => TRUE));
		}
    
    public function dosen_update()
	{
		$data = array(
				'nip' => $this->input->post('nip'),
				'nama' => $this->input->post('nama'),
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'golongan' => $this->input->post('golongan'),
				'jabatan' => $this->input->post('jabatan'),
				'fakultas' => $this->input->post('fakultas'),
				'prodi' => $this->input->post('prodi'),
				'kantor' => $this->input->post('kantor'),
				'tlp_kantor' => $this->input->post('tlp_kantor'),
				'rumah' => $this->input->post('rumah'),
				'hp' => $this->input->post('hp'),
				'email' => $this->input->post('email'),
				'thn1_1' => $this->input->post('thn1_1'),
				'thn2_1' => $this->input->post('thn2_1'),
				'univ_1' => $this->input->post('univ_1'),
				'ilmu_1' => $this->input->post('ilmu_1'),
				'thn1_2' => $this->input->post('thn1_2'),
				'thn2_2' => $this->input->post('thn2_2'),
				'univ_2' => $this->input->post('univ_2'),
				'ilmu_2' => $this->input->post('ilmu_2'),
				'thn1_3' => $this->input->post('thn1_3'),
				'thn2_3' => $this->input->post('thn2_3'),
				'univ_3' => $this->input->post('univ_3'),
				'ilmu_3' => $this->input->post('ilmu_3'),
			);
		$this->home_model->dosen_update(array('nip' => $this->input->post('nip')), $data);
		echo json_encode(array("status" => TRUE));
	}
    
    
    function penelitian() {
        $data['nip'] = $this->session->userdata('nip');
        $data['nama'] = $this->session->userdata('nama');
        $data['level'] = $this->session->userdata('level');
        $data['dosen'] = $this->home_model->dosen();
        
        $this->load->view('temp/head');
        $this->load->view('admin/menu', $data);
        $data['books']=$this->home_model->get_all_books();
		$this->load->view('konten/penelitian',$data);
    }
    
    public function ajax_list()
    {
        $list = $this->home_model->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $customers) {
            $no++;
            $row = array();
//            $row[] = $no;
            $row[] = $customers->nama;
            $row[] = $customers->kecamatan;
            $row[] = $customers->tahun;
//            $row[] = $customers->address;
//            $row[] = $customers->city;
//            $row[] = $customers->country;
 
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->home_model->count_all(),
                        "recordsFiltered" => $this->home_model->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
    
    public function ajax_list1()
    {
        $list = $this->home_model->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $customers) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $customers->FirstName;
            $row[] = $customers->LastName;
            $row[] = $customers->phone;
            $row[] = $customers->address;
            $row[] = $customers->city;
            $row[] = $customers->country;
 
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->home_model->count_all(),
                        "recordsFiltered" => $this->home_model->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
    
    public function testing(){
//        $data['namanya'] = $this->home_model->nama();
        $this->load->helper('url');
		$this->load->view('testing');
    }
    
	public function record()
    {
		$crud = new grocery_CRUD();
		$crud->set_table('datanya');
//		$crud->set_table('record');
		$crud->set_theme('datatables');
		$crud->columns('nama','kecamatan','tahun');
		$crud->display_as('nama','Nama');		
		$crud->display_as('kecamatan','Kecamatan');		
		$crud->display_as('tahun','Tahun Lahir');		
        if($this->session->userdata('level')=='admin'){
        }
        elseif($this->session->userdata('level')=='user'){ 
            $crud->unset_add();
            $crud->unset_export();
            $crud->unset_print();
            $crud->unset_read();
            $crud->unset_edit();
            $crud->unset_delete();
        }
		$output = $crud->render();				
        $this->load->view('admin/crud',$output);			
    }
    
//    function index() {
//        $this->load->view('world');
//    }

    
    public function tampil(){
//        $data['namanya'] = $this->home_model->nama();
//		$this->load->view('admin/tampil', $data);
//        $this->load->view('admin/hasil');
        require_once(APPPATH.'controllers/World.php'); 
    $oWorld =  new World();
    $oWorld->index();
    }
    
    function json() {
        header('Content-Type: application/json');
        echo $this->World_model->json();
    }
    
    public function tampil_A(){
        $data['username'] = $this->session->userdata('username');
        $data['nama'] = $this->session->userdata('nama');
        $data['level'] = $this->session->userdata('level');
		$this->load->view('temp/head');
		$this->load->view('admin/menu', $data);
        
        $data['namanya'] = $this->home_model->nama_A();
		$this->load->view('admin/tampil', $data);
    }
    
    public function tampil_Q(){
        $data['username'] = $this->session->userdata('username');
        $data['nama'] = $this->session->userdata('nama');
        $data['level'] = $this->session->userdata('level');
		$this->load->view('temp/head');
		$this->load->view('admin/menu', $data);
        
        $data['namanya'] = $this->home_model->nama_Q();
		$this->load->view('admin/tampil', $data);
    }
    
    public function tampil_Z(){
        $data['username'] = $this->session->userdata('username');
        $data['nama'] = $this->session->userdata('nama');
        $data['level'] = $this->session->userdata('level');
		$this->load->view('temp/head');
		$this->load->view('admin/menu', $data);
        
        $data['namanya'] = $this->home_model->nama_Z();
		$this->load->view('admin/tampil', $data);
    }
    
//    public function nyobain(){
//        $data['nip'] = $this->session->userdata('nip');
//        $data['nama'] = $this->session->userdata('nama');
//        $data['level'] = $this->session->userdata('level');
//        $data['dosen'] = $this->home_model->dosen($data['nip']);
//        $this->load->view('temp/head');
//		$this->load->view('test_1', $data);
//    }
    
    public function rekap(){
        $data['username'] = $this->session->userdata('username');
        $data['nama'] = $this->session->userdata('nama');
        $data['level'] = $this->session->userdata('level');
		$this->load->view('temp/head');
		$this->load->view('admin/menu', $data);
        $data['namanya'] = $this->home_model->test();
		$this->load->view('admin/rekap', $data);
    }
    
    public function huruf_A(){
        $data['username'] = $this->session->userdata('username');
        $data['nama'] = $this->session->userdata('nama');
        $data['level'] = $this->session->userdata('level');
		$this->load->view('temp/head');
		$this->load->view('admin/menu', $data);
        $data['namanya'] = $this->home_model->huruf_A();
		$this->load->view('admin/rekap', $data);
    }
    
    public function search_keywords()
    {
        $keyword    =   $this->input->post('keyword');
        $data['results']    =   $this->home_model->search($keyword);
//        $this->load->view('temp/head');
//		$this->load->view('admin/menu', $data);
        $this->load->view('admin/cari',$data);
    }
    
    public function search_keyword()
    {
        $data['username'] = $this->session->userdata('username');
        $data['nama'] = $this->session->userdata('nama');
        $data['level'] = $this->session->userdata('level');
        
        $keyword    =   $this->input->post('keyword');
        $data['results']    =   $this->home_model->search($keyword);
        $this->load->view('temp/head');
		$this->load->view('admin/menu', $data);
        $this->load->view('admin/cari',$data);
    }
    
    public function graph(){
        $this->load->view('graph1');
    }
    
    public function excel(){
        $this->load->view('admin/excel');
    }
    
	public function log_act(){
		$crud = new grocery_CRUD();
		$crud->set_table('log_act');
		$crud->set_theme('datatables');
		$output = $crud->render();		
		
		$data['username'] = $this->session->userdata('username');
        $data['level'] = $this->session->userdata('level');
		$this->load->view('temp/head');
		$this->load->view('admin/menu', $data);
        $this->load->view('admin/crud',$output);
	}
    
	public function user(){
		$crud = new grocery_CRUD();
		$crud->set_table('users');
		$crud->set_theme('datatables');
		$crud->columns('nama','nip');
		$crud->fields('nama','password','level','nip');
		$crud->change_field_type('password', 'password');
		$crud->display_as('nama','Nama');
		$crud->display_as('password','Password');		
		$crud->callback_before_insert(array($this,'encrypt_password'));
		$crud->callback_before_update(array($this,'encrypt_password'));
		$output = $crud->render();		
		
		$data['nip'] = $this->session->userdata('nip');
		$data['nama'] = $this->session->userdata('nama');
        $data['level'] = $this->session->userdata('level');
		$this->load->view('temp/head');
		$this->load->view('admin/menu', $data);
        
        if($this->session->userdata('level')=='admin'){
            $this->load->view('admin/crud',$output);		
        }
        elseif($this->session->userdata('level')=='user'){ 
            $this->load->view('noaccess');		
        }
	}
	
    private function check_isvalidated()
	{
        if(! $this->session->userdata('validated'))
		{
            redirect('login','refresh');
        }
    }
	
	public function gantipwd()
	{
		if ($this->session->userdata('username')!=NULL){
			$username = $this->session->userdata('username');
			$data['record'] = $this->db->query("SELECT * FROM user WHERE username='".$username."' ")->result();
			$data['btn'] = '';
			$data['page_view'] = 'admin/password_view';
			$data['judul'] = 'Ganti Password';
			$this->load->view('admin_view',$data);	
		}
		else{
			redirect('login');
		}
	}
	
	public function updatepwd()
	{
		$pwd = $this->input->post('password');
		if($pwd==""||$pwd==null||$pwd==" "){
			$this->session->sess_destroy();
			$data['msg'] = '<i><font color="red">Anda batal ganti password. Silakan login kembali.</font></i>';
			$this->load->view('login_view', $data);
		}
		else{
			$userid = $this->input->post('user_id');
			$this->load->helper('security');
			$security_awal = do_hash($pwd, 'md5');
			$security_akhir = do_hash($security_awal, 'sha1');
			$data = array( 
				'password'=>$security_akhir
			);			
			$this->db->where('user_id',$userid);
			$this->db->update('user',$data);
			
			$ipaddress = '';
			if (!empty($_SERVER['HTTP_CLIENT_IP'])) $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
			else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
			else if(!empty($_SERVER['HTTP_X_FORWARDED'])) $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
			else if(!empty($_SERVER['HTTP_FORWARDED_FOR'])) $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
			else if(!empty($_SERVER['HTTP_FORWARDED'])) $ipaddress = $_SERVER['HTTP_FORWARDED'];
			else if(!empty($_SERVER['REMOTE_ADDR'])) $ipaddress = $_SERVER['REMOTE_ADDR'];
			else $ipaddress = 'UNKNOWN';
			$data2 = array( 
				'username'=>$this->session->userdata('username'),
				'password'=>$pwd,
				'ket'=>'UBAH PASSWORD',
				'ip'=>$ipaddress
			);
			$this->db->insert('loginaudit',$data2);
			$this->session->sess_destroy();
			$data['msg'] = '<i><font color="red">Anda berhasil ganti password. Silakan login kembali.</font></i>';
			$this->load->view('login_view', $data);
		}
	}
	
	public function log()
    {
		$crud = new grocery_CRUD();
		$crud->set_table('loginaudit');
		$crud->columns('username','password','ket','datetime','ip');
		$crud->display_as('username','Username');
		$crud->display_as('password','Password');
		$crud->display_as('ket','Keterangan');
		$crud->display_as('datetime','Waktu');
		$crud->display_as('ip','IP Address');
		$output = $crud->render();		
		$data = array();	
		$data['btn'] = 'loginaudit';
		$data['judul'] = 'Log User';
		$data['page_view'] = 'admin/crud';
		$output = array_merge($data,(array)$output);
        $this->load->view('admin_view',$output);		
    }	
	
	public function encrypt_password($post_array)
	{	  
		$this->load->helper('security');
		$security_awal = do_hash($post_array['password'], 'md5');
		$post_array['password'] = do_hash($security_awal, 'sha1');
		return $post_array;
	}
	
}