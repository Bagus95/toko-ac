<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Detailorder extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('group') !='1'){
			$this->session->set_flashdata('sorry kamu belum login!');
			redirect('login');
		}
    $this->load->model('detailorder_m');
	}

  public function index()
  {
    $data['order_detail'] = $this->detailorder_m->all();
		$this->load->view('backend/v_order', $data);
  }

}
