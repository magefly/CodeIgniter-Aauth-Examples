<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aauth_controller extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome');
	}

	public function dashboard()
	{
		$this->load->view('dashboard');
	}

	public function logout()
	{
		if(!$this->aauth->is_loggedin()){
			redirect('welcome');
		}
		$this->aauth->logout();
		redirect('welcome');
	}

	public function login()
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

	public function register()
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
