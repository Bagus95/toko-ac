<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_m extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

	public function tampil()
	{
		$hasil = $this->db->get('products');
		if ($hasil->num_rows() > 0) {
			return $hasil->result();
		} else {
			return array();
		}

	}

	public function find($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('products')->row();
	}

	public function tambah($data_product)
	{
		$this->db->insert('products', $data_product);
	}

	public function update($id, $data_product)
	{
		$this->db->where('id',$id)
				 ->update('products', $data_product);
	}

	public function delete($id)
	{
		$this->db->where('id', $id)
				 ->delete('products');
	}
}
