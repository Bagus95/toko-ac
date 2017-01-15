<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Customerdetail extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('group') !='1'){
			$this->session->set_flashdata('sorry kamu belum login!');
			redirect('login');
		}
    $this->load->model('customerdetail_m');
	}

  public function index()
  {
    $data['customers'] = $this->customerdetail_m->all();
		$this->load->view('backend/v_customer', $data);
  }

}
