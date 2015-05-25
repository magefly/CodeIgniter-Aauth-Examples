<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function index()
	{
		if(!$this->aauth->is_loggedin()){
			redirect('welcome');
		}
		$this->aauth->logout();
		redirect('welcome');
	}
}
