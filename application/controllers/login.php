<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|alpha_numeric');
		$this->form_validation->set_rules('password', 'Password', 'required|alpha_numeric');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login_v');
		} else {
			$this->load->model('users_m');
			$valid_user = $this->users_m->check_credential();

			if($valid_user == FALSE)
			{
				$this->session->set_flashdata('error','Username atau Password anda salah');
				redirect('login');
			} else {
				$this->session->set_flashdata('username', $valid_user->username);
				$this->session->set_flashdata('group', $valid_user->group);

				switch ($valid_user->group) {
					case 1 :
								redirect('admin/products');
								break;
					case 2 :
								redirect(base_url());
								break;
					default: break;
				}
			}
		}

	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}

}
