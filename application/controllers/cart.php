<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('cart_m');
	}

	public function index()
	{
		if (!$this->cart->contents()){
			$this->data['message'] = '<p>Daftar Cart Anda kosong!</p>';
		}else{
			$this->data['message'] = $this->session->flashdata('message');
		}

		$this->load->view('cart_v', $this->data);
	}

	public function add()
	{
		$this->load->model('cart_m');
		$insert_room = array(
			'id' => $this->input->post('id'),
			'name' => $this->input->post('name'),
			'price' => $this->input->post('price'),
			'qty' => 1
		);

		$this->cart->insert($insert_room);
		redirect('cart');
	}

	function remove($rowid) {
		if ($rowid=="all"){
			$this->cart->destroy();
		}else{
			$data = array(
				'rowid'   => $rowid,
				'qty'     => 0
			);
			$this->cart->update($data);
		}
		redirect('cart');
	}

	function update_cart(){
 		foreach($_POST['cart'] as $id => $cart)
		{
			$price = $cart['price'];
			$amount = $price * $cart['qty'];
			$this->cart_m->update_cart($cart['rowid'], $cart['qty'], $price, $amount);
		}
		redirect('cart');
	}

}
