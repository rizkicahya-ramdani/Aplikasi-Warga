<?php
/**
 *
 */
class User extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_User');
	}

	public function index()
	{
		$data = array('title' => 'Aplikasi Data Warga',
					  'subtitle' => '');
		$this->load->view('login2',$data);
	}

	public function auth()
	{
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Username','required');
		if ($this->form_validation->run() != false) {
		    $username = htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
		    $password = md5(htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES));
		    $cek_user = $this->M_User->cek_login_user($username, $password);
		    // echo $cek_user->num_rows();
		    if ($cek_user->num_rows() > 0) {
		    	$data = $cek_user->row_array();
		    	$this->session->set_userdata('username',$data['username']);
		    	$this->session->set_userdata('nama',$data['nama']);
		    	$this->session->set_userdata('level',$data['level']);
		    	redirect('dashboard');
		    }else{
		    	redirect('user');
		    }
		}else{
			redirect('user');
		}

	}

	public function logout()
	{
	    $this->session->sess_destroy();
	    redirect('user');
	}
}
