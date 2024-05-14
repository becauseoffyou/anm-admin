<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LandingPage extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		// $this->load->model('M_auth');
		// if(!$this->M_auth->current_user()){
		// 	redirect('auth/login');
		// }
	}


    public function index()
    {
      
        $this->load->view('landingpage/component/header');
		$this->load->view('landingpage/page/home');
        $this->load->view('landingpage/component/footer');
    }
}
