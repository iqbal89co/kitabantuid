<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Site extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Urun Dana Investasi Bisnis UKM | kitabantu.id';
		$this->view->getDefault($data, 'main/index');
	}

	public function listBisnis()
	{
		$data['title'] = 'List Bisnis';
		$this->view->getDefault($data, 'main/listBisnis');
	}
	public function caraInvest()
	{
		$data['title'] = 'Cara Investasi';
		$this->view->getDefault($data, 'main/caraInvest');
	}
	public function pertanyaan()
	{
		$data['title'] = 'Pertanyaan';
		$this->view->getDefault($data, 'main/pertanyaan');
	}
	public function tentangKami()
	{
		$data['title'] = 'Tentang Kami';
		$this->view->getDefault($data, 'main/tentangKami');
	}
	public function daftarBisnis()
	{
		$data['title'] = 'Daftarkan Bisnis';
		$this->view->getDefault($data, 'main/daftarBisnis');
	}
	public function detailBisnis()
	{
		$data['title'] = 'Detail Bisnis';
		$this->view->getDefault($data, 'main/detailBisnis');
	}
}
