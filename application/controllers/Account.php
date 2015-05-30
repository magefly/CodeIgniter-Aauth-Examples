<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	public function dashboard()
	{
		$this->load->view('dashboard');
	}

	public function sign_out()
	{
		if(!$this->aauth->is_loggedin()){
			redirect('welcome');
		}
		$this->aauth->logout();
		redirect('welcome');
	}

	public function sign_in()
	{
		if($this->aauth->is_loggedin()){
			redirect('account/dashboard');
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
				redirect('account/dashboard');
			}else{
				$this->load->view('sign_in');
			}
		}else{
			$this->load->view('sign_in');
		}
	}

	public function sign_up()
	{
		if($this->aauth->is_loggedin()){
			redirect('account/dashboard');
		}
		if($this->input->post()){
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$name = $this->input->post('name');

			if($this->aauth->create_user($email, $password, $name)){
				$this->aauth->info('Your account has been created successfully and is ready to use. You can use the Login form.');
				redirect('login');
			}else{
				$this->load->view('sign_up');
			}
		}else{
			$this->load->view('sign_up');
		}
	}

	public function remind_password()
	{
		if($this->aauth->is_loggedin()){
			redirect('account/dashboard');
		}
		if($this->input->post()){
			$email = $this->input->post('email');

			$this->aauth->remind_password($email);
			$this->aauth->info('The Account Verification mail will be sent to your email address.');

			$this->load->view('remind_password');
		}else{
			$this->load->view('remind_password');
		}
	}

	public function reset_password()
	{
		if($this->aauth->is_loggedin()){
			redirect('account/dashboard');
		}
		if($this->input->post()){
			$user_id = $this->input->post('user_id');
			$ver_code = $this->input->post('verification_code');

			if($this->aauth->reset_password($user_id, $ver_code)){
				$this->aauth->info('A new password will be sent to your email address.');
			}else{
				$this->aauth->error('E-mail Address and Verification Code do not match.');
			}
			$this->load->view('reset_password');
		}else{
			$this->load->view('reset_password');
		}
	}

}
