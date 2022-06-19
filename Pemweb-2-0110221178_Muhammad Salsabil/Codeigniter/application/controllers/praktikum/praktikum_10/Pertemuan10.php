<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pertemuan10 extends CI_Controller {

	public function __construct() {
         
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('praktikum/praktikum_12/auth/index');
        }
         
    }

	public function index()
	{
		$this->load->view('praktikum/view_pertemuan10/view_praktikum10');
	}

	public function dosen()
	{
		$this->load->view('praktikum/view_pertemuan10/tabel_db_dosen');
	}

	public function matakuliah()
	{
		$this->load->view('praktikum/view_pertemuan10/tabel_db_matakuliah');
	}
}
