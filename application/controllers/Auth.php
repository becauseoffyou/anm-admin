<?php

class Auth extends CI_Controller
{
	public function index()
	{
		show_404();
	}

	public function login()
	{
		$this->load->model('M_auth');
		$this->load->library('form_validation');

		$rules = $this->M_auth->rules();
		$this->form_validation->set_rules($rules);

		if($this->form_validation->run() == FALSE){
			return $this->load->view('login');
		}

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if($this->M_auth->login($username, $password)){
			redirect('Dashboard');
		} else {
			$this->session->set_flashdata('message_login_error', 'Login Gagal, pastikan username dan password benar!');
		}

		$this->load->view('login');
	}

	public function logout()
	{
		$this->load->model('M_auth');
		$this->M_auth->logout();
		redirect(site_url());
	}
}