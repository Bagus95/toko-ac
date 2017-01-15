<?php
defined('BASEPATH') OR exit('No direct script access tampilowed');

class Products extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if($this->session->userdata('group') !='1'){
			$this->session->set_flashdata('sorry kamu belum login!');
			redirect('login');
		}
		$this->load->helper(array('url','form'));
		$this->load->library(array('form_validation'));
		$this->load->model('product_m');
	}

	public function index()
	{
		$data['products'] = $this->product_m->tampil();
		$this->load->view('backend/v_product', $data);
	}

	public function tambah()
	{
		$this->form_validation->set_rules('name', 'name Produk', 'required');
		$this->form_validation->set_rules('description', 'description', 'required');
		$this->form_validation->set_rules('price', 'price', 'required|integer');
		//$this->form_validation->set_rules('userfile', 'Gambar Produk', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('backend/form_tambah');
		} else {
			$config['upload_path'] = './images/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size'] = '300';
			$config['max_width'] = '2000';
			$config['max_height'] = '2000';

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload()) {
				$this->load->view('backend/form_tambah');
			} else {
				$gambar = $this->upload->data();
				$data_product = array(
					'name'			=>set_value('name'),
					'description'		=>set_value('description'),
					'price'			=>set_value('price'),
					'picture'			=>$gambar['file_name']
				);
				$this->product_m->update($id, $data_product);
				redirect('admin/products');
			}

		}

	}

	public function update($id)
	{
		$this->form_validation->set_rules('name', 'name Produk', 'required');
		$this->form_validation->set_rules('description', 'description', 'required');
		$this->form_validation->set_rules('price', 'price', 'required|integer');
		//$this->form_validation->set_rules('userfile', 'Gambar Produk', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$data['products'] = $this->product_m->find($id);
			$this->load->view('backend/form_edit', $data);
		} else {
			if($_FILES['userfile']['name'] != ''){
			$config['upload_path'] = './images/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size'] = '300';
			$config['max_width'] = '2000';
			$config['max_height'] = '2000';

			$this->load->library('upload', $config);

				if ( ! $this->upload->do_upload()) {
					$data['product'] = $this->product_m->find($id);
					$this->load->view('backend/form_edit', $data);
				} else {
					$gambar = $this->upload->data();
					$data_product = array(
						'name'			=>set_value('name'),
						'description'		=>set_value('description'),
						'price'			=>set_value('price'),
						'picture'			=>$gambar['file_name']
					);
					$this->product_m->update($id, $data_product);
					redirect('admin/products');
				}
			} else {
				$data_product = array(
					'name'			=>set_value('name'),
					'description'		=>set_value('description'),
					'price'			=>set_value('price')
				);
				$this->product_m->update($id, $data_product);
				redirect('admin/products');
			}

		}

	}

	public function delete($id)
	{
		$this->product_m->delete($id);
		redirect('admin/products');

	}
}
