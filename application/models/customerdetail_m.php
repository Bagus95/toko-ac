<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customerdetail_m extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

	public function all()
	{
		$hasil = $this->db->get('customers');
		if ($hasil->num_rows() > 0) {
			return $hasil->result();
		} else {
			return array();
		}
	}
}
