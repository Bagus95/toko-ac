<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Order_m extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function insert_customer($data)
	{
		$this->db->insert('customers', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;
	}

	public function insert_order($data)
	{
		$this->db->insert('orders', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;
	}

	public function insert_order_detail($data)
	{
		$this->db->insert('order_detail', $data);
	}
}
