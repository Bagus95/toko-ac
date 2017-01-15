<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Order extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('order_m');
	}

	public function index()
	{
		$this->load->view('order_v');
	}

	public function save_order()
	{
		$customer = array(
			'name' 		=> $this->input->post('name'),
			'email' 	=> $this->input->post('email'),
			'address' 	=> $this->input->post('address'),
			'phone' 	=> $this->input->post('phone')
		);
		$cust_id = $this->order_m->insert_customer($customer);
		$order = array(
			'date' 			=> date('Y-m-d'),
			'customerid' 	=> $cust_id
		);
		$ord_id = $this->order_m->insert_order($order);

		if ($cart = $this->cart->contents()):
			foreach ($cart as $item):
				$order_detail = array(
					'productid' 	=> $item['id'],
					'productname'	=> $item['name'],
					'quantity' 		=> $item['qty'],
					'price' 		  => $item['price']
				);

				$cust_id = $this->order_m->insert_order_detail($order_detail);
			endforeach;
		endif;

		echo "Terima kasih telah mempercayai kami sebagai rekan bisnis Anda!<br />";
		echo "<a href=".base_url()."products>Silahkan Kembali</a>";
	}
}
