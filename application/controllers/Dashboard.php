<?php
/**
 *
 */
class Dashboard extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Dashboard');
	}

	public function index()
	{
		$data = array('title' => 'Sistem Informasi Warga',
					  'page' => 'Dashboard',
						'data_warga' => $this->M_Dashboard->data_warga()->result_array(),
						'data_balita' => $this->M_Dashboard->data_balita()->result_array());
		$this->template->load_admin('dashboard','dash_dashboard',$data);
	}

}
