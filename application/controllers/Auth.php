<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		if ($this->session->userdata('email')) {
			redirect('site');
		}
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Jenius Login Page';
			$this->view->getDefault($data, 'auth/login');
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->user->getUser($email);

		//jika user ada
		if ($user) {
			//cek password
			if (password_verify($password, $user['password'])) {
				$data = [
					'email' => $user['email']
				];

				$this->session->set_userdata($data);
				//cek role
				redirect('site');
			} else {
				$this->view->flash('danger', 'Wrong password', 'auth');
			}
		} else {
			$this->view->flash('danger', 'Email is not registered', 'auth');
		}
	}

	public function registration()
	{
		if ($this->session->userdata('email')) {
			redirect('user');
		}
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('no_telp', 'Phone number', 'required|trim|max_length[15]');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
			'is_unique' => 'this email already taken'
		]);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
			'matches' => 'Password dont match',
			'min_length' => 'Password too short'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[8]|matches[password1]');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Registration Page';
			$this->view->getDefault($data, 'auth/register');
		} else {
			$name = $this->input->post('name', true);
			$email = $this->input->post('email', true);
			$no_telp = $this->input->post('no_telp', true);
			$password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
			//query
			$this->db->query("INSERT INTO `user` VALUES (NULL, '$name', '$no_telp', '$email', '$password')");
			$this->view->flash('success', 'Congratulations! Your account has been created', 'auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->view->flash('success', 'You are logged out', 'site');
	}
}
