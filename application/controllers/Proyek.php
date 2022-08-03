<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Proyek extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Proyek');
	}

	public function index()
	{
		$data['proyek'] = $this->M_Proyek->getAll();

		$this->load->view('index', $data);
	}

	public function tambah()
	{
		$data['proyek'] = $this->M_Proyek->getAll();

		$this->form_validation->set_rules('name', 'Name', 'required|regex_match[/^([a-z ])+$/i]|is_unique[tb_user.name]');
		$this->form_validation->set_rules('age', 'Age', 'required|regex_match[/\d\d\s\w+|\d\s\w+/]');
		$this->form_validation->set_rules('city', 'City', 'required|regex_match[/^([a-z ])+$/i]');

		if ($this->form_validation->run() == false) {
			$this->load->view('index', $data);
		} else {
			$this->M_Proyek->tambahData();
			redirect('proyek');
		}
	}
}
