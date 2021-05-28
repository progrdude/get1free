<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper(array('url'));
		$this->load->library('user_agent');
		$this->load->model('admin/Company_model', 'CModel');
	}
	public function index()
	{
		$data = [
			'title' => 'Get1free',
		];

		$this->load->view('admin/login', $data);

	}
	public function login_admin(){
		$pass = $this->input->post('password');
		$email = $this->input->post('email');

		if ($email == 'get1free@gmail.com' and $pass == 'K9iv2nR3C8') {
			$this->session->set_userdata(
				'ses_admin_data', [
					'user_id' => '1',

				]
			);
			redirect(base_url('admin/'), 'location', 301);

		}else{
			redirect(base_url('admin/login'), 'location', 301);
		}
	}

}
