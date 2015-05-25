<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		if($this->aauth->is_loggedin()){
			redirect('dashboard');
		}
		if($this->input->post()){
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			if($this->input->post('remember') == 'TRUE'){
				$remember = TRUE;
			}else{
				$remember = FALSE;
			}
			if($this->aauth->login($email, $password, $remember)){
				redirect('dashboard');
			}else{
				$this->load->view('login');
			}
		}else{
			$this->load->view('login');
		}
	}
}
