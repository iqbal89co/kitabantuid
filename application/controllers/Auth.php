<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Login page';
		$this->view->getDefault($data, 'auth/login');
	}

	public function register()
	{
		$data['title'] = 'Login page';
		$this->view->getDefault($data, 'auth/register');
	}
}
