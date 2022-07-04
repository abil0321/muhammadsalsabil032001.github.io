<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('backend/dashboard/index');
	}

	public function bukti_praktikum1()
	{
		$this->load->view('praktikum/view_pertemuan1/view_praktikum1');
	}	

	public function bukti_praktikum2()
	{
		$this->load->view('praktikum/view_pertemuan2/view_praktikum2');
	}	

	public function bukti_praktikum3()
	{
		$this->load->view('praktikum/view_pertemuan3/view_praktikum3');
	}	

	public function bukti_praktikum4()
	{
		$this->load->view('praktikum/view_pertemuan4/view_praktikum4');
	}
	
	public function bukti_praktikum5()
	{
		$this->load->view('praktikum/view_pertemuan5/view_praktikum5');
	}

	public function bukti_praktikum6()
	{
		$this->load->view('praktikum/view_pertemuan6/view_praktikum6');
	}

	public function bukti_praktikum7()
	{
		$this->load->view('praktikum/view_pertemuan7/view_praktikum7');
	}	
	
}
