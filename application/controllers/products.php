<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('products_m');
	}

	public function index()
	{
		$this->data['products'] = $this->products_m->get_all();
		$this->load->view('products_v', $this->data);
	}
}
