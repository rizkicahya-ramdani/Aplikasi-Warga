<?php
/**
 *
 */
class Warga extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Warga');
	}

	public function index()
	{
		$data = array('title' => 'Sistem Informasi Warga',
					  'page' => 'Data Warga',
					  'tabel_title' => 'Tabel Data Warga',
					  'data_warga' => $this->M_Warga->tampil()->result_array());
		$this->template->load_admin('dashboard','dash_data_warga',$data);
	}
}
