<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Products_m extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function get_all()
	{
		$query = $this->db->get('products');
		return $query->result_array();
	}
}
