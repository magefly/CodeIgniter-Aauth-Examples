<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
		if($this->aauth->is_loggedin()){
			redirect('dashboard');
		}
		if($this->input->post()){
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$name = $this->input->post('name');

			if($this->aauth->create_user($email, $password, $name)){
				$this->aauth->info('Your account has been created successfully and is ready to use. You can use the Login form.');
				redirect('login');
			}else{
				$this->load->view('register');
			}
		}else{
			$this->load->view('register');
		}
	}
}
