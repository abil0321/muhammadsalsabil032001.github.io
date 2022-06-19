<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Show_dbkampus extends CI_Controller {

	public function __construct() {
		parent:: __construct();
		if (!$this->session->userdata('email')) {
            redirect('praktikum/praktikum_12/auth/index');
        }
		$this->load->model('Mahasiswa_model');
		$this->load->model('Dosen_model');
		$this->load->model('Matakuliah_model');
	}
	
	public function mahasiswa()
	{
		$queryAllMahasiswa = $this->Mahasiswa_model->getDataMahasiswa();
		$data = array('queryAllMhs'=> $queryAllMahasiswa);

		// cek koneksi tabel database
		// echo "<pre>";
		// print_r($queryAllMahasiswa);
		// echo "</pre>";
		
		$this->load->view('praktikum/view_pertemuan10/tabel_db_mahasiswa', $data);
	}

	public function dosen()
	{
		$queryAllDosen = $this->Dosen_model->getDataDosen();
		$data = array('queryAllDsn'=> $queryAllDosen);

		// cek koneksi tabel database
		// echo "<pre>";
		// print_r($queryAllDosen);
		// echo "</pre>";
		
		$this->load->view('praktikum/view_pertemuan10/tabel_db_dosen', $data);
	}

	public function matakuliah()
	{
		$queryAllMatakuliah = $this->Matakuliah_model->getDataMatakuliah();
		$data = array('queryAllMtl'=> $queryAllMatakuliah);

		// cek koneksi tabel database
		// echo "<pre>";
		// print_r($queryAllMahasiswa);
		// echo "</pre>";
		
		$this->load->view('praktikum/view_pertemuan10/tabel_db_matakuliah', $data);
	}
}
