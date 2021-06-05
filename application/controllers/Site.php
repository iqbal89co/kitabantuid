<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Site extends CI_Controller
{
	public function index()
	{
		$data['user'] = $this->user->getUser($this->session->userdata('email'));
		$data['title'] = 'Urun Dana Investasi Bisnis UKM | kitabantu.id';
		$this->view->getDefault($data, 'main/index');
	}

	public function listBisnis()
	{
		$data['user'] = $this->user->getUser($this->session->userdata('email'));
		$data['title'] = 'List Bisnis';
		$this->view->getDefault($data, 'main/listBisnis');
	}
	public function caraInvest()
	{
		$data['user'] = $this->user->getUser($this->session->userdata('email'));
		$data['title'] = 'Cara Investasi';
		$this->view->getDefault($data, 'main/caraInvest');
	}
	public function pertanyaan()
	{
		$data['user'] = $this->user->getUser($this->session->userdata('email'));
		$data['title'] = 'Pertanyaan';
		$this->view->getDefault($data, 'main/pertanyaan');
	}
	public function tentangKami()
	{
		$data['user'] = $this->user->getUser($this->session->userdata('email'));
		$data['title'] = 'Tentang Kami';
		$this->view->getDefault($data, 'main/tentangKami');
	}
	public function daftarBisnis()
	{
		$data['user'] = $this->user->getUser($this->session->userdata('email'));
		$data['title'] = 'Daftarkan Bisnis';
		$this->view->getDefault($data, 'main/daftarBisnis');
	}
	public function detailBisnis()
	{
		$data['user'] = $this->user->getUser($this->session->userdata('email'));
		$data['title'] = 'Detail Bisnis';
		$this->view->getDefault($data, 'main/detailBisnis');
	}
}
