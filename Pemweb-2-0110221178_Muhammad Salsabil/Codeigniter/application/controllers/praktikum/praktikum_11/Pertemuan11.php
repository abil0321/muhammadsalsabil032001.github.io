<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pertemuan11 extends CI_Controller {

	public function __construct() {
		parent:: __construct();
		if (!$this->session->userdata('email')) {
            redirect('praktikum/praktikum_12/auth/index');
        }
		$this->load->model('Mahasiswa_model');
		$this->load->model('Dosen_model');
		$this->load->model('Matakuliah_model');
	}
	

	public function index()
	{
		$this->load->view('praktikum/view_pertemuan11/view_praktikum11');
	}

	// <--CRUD Mahasiswa ------------------------------------------------------------------------------------------>
	public function mahasiswa()
	{
		$queryAllMahasiswa = $this->Mahasiswa_model->getDataMahasiswa();
		$data = array('queryAllMhs'=> $queryAllMahasiswa);

		// cek koneksi tabel database
		// echo "<pre>";
		// print_r($queryAllMahasiswa);
		// echo "</pre>";
		
		$this->load->view('praktikum/view_pertemuan11/mahasiswa/crud_mahasiswa',$data);
	}

	public function create_mahasiswa()
	{
		$this->load->view('praktikum/view_pertemuan11/mahasiswa/create_db_mahasiswa');
	}

	public function fungsi_create_mahasiswa()
	{
		$nama = $this->input->post('nama');
		$nim = $this->input->post('nim');
		$gender = $this->input->post('gender');
		$tmp_lahir = $this->input->post('tmp_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$ipk = $this->input->post('ipk');
		$predikat = $this->input->post('predikat');

		$foto = $_FILES['foto'];
		if ($foto = '') {
			# code...
		} else {
			$config['upload_path']		= 'assets/images/foto_mahasiswa';
			$config['allowed_types']	= 'jpg|png|gif';

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('foto')) {
				echo 'Upload GAGAL' ;
				die();
			} else {
				$foto = $this->upload->data('file_name');
			}
			
		}

		$ArrayInsert = array(
			'nama' => $nama,
			'nim' => $nim,
			'gender' => $gender,
			'tmp_lahir' => $tmp_lahir,
			'tgl_lahir' => $tgl_lahir,
			'ipk' => $ipk,
			'predikat' => $predikat,
			'foto' => $foto,
		);

		// echo "<pre>";
		// print_r($ArrayInsert);
		// echo "</pre>";

		$this->Mahasiswa_model->insertDataMahasiswa($ArrayInsert);
		redirect(base_url('praktikum/praktikum_11/pertemuan11/mahasiswa'));
	}

	public function edit_mahasiswa($id)
	{
		$queryMahasiswaDetail = $this->Mahasiswa_model->getDataMahasiswaDetail($id);

		// echo "<pre>";
		// print_r($queryMahasiswaDetail);
		// echo "</pre>";

		$data = array('queryDetailMhs'=> $queryMahasiswaDetail);

		$this->load->view('praktikum/view_pertemuan11/mahasiswa/edit_db_mahasiswa', $data);
	}

	public function fungsi_edit_mahasiswa()
	{
		// $id = $this->Mahasiswa_model->getDataMahasiswaDetail($id);

		$nama = $this->input->post('nama');
		$nim = $this->input->post('nim');
		$gender = $this->input->post('gender');
		$tmp_lahir = $this->input->post('tmp_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$ipk = $this->input->post('ipk');
		$predikat = $this->input->post('predikat');
		$id = $this->input->post('id');

		$ArrayUpdate = array(
			'nama' => $nama,
			'id' => $id,
			'nim' => $nim,
			'gender' => $gender,
			'tmp_lahir' => $tmp_lahir,
			'tgl_lahir' => $tgl_lahir,
			'ipk' => $ipk,
			'predikat' => $predikat
		);

		// echo "<pre>";
		// print_r($ArrayUpdate);
		// echo "</pre>";

		$this->Mahasiswa_model->updateDataMahasiswa($id, $ArrayUpdate);
		redirect(base_url('praktikum/praktikum_11/pertemuan11/mahasiswa'));
	}

	public function delete_db_mahasiswa($id)
	{
		$this->Mahasiswa_model->deleteDataMahasiswa($id);
		redirect(base_url('praktikum/praktikum_11/pertemuan11/mahasiswa'));
	}
	//<--End Mahasiswa --------------------------------------------------------------------------------------------------> 

	// <-- CRUD Dosen --------------------------------------------------------------------------------------------------->
	public function dosen()
	{
		$queryAllDosen = $this->Dosen_model->getDataDosen();
		$data = array('queryAllDsn'=> $queryAllDosen);
		$this->load->view('praktikum/view_pertemuan11/dosen/crud_db_dosen', $data);
	}

	public function create_dosen()
	{
		$this->load->view('praktikum/view_pertemuan11/dosen/create_db_dosen');
	}

	public function fungsi_create_dosen()
	{
		$nama = $this->input->post('nama');
		$gender = $this->input->post('gender');
		$tmp_lahir = $this->input->post('tmp_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$nidn = $this->input->post('nidn');
		$pendidikan = $this->input->post('pendidikan');
		
		$foto = $_FILES['foto'];
		if ($foto = '') {
			# code...
		} else {
			$config['upload_path']		= 'assets/images/foto_dosen';
			$config['allowed_types']	= 'jpg|png|gif';

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('foto')) {
				echo 'Upload GAGAL' ;
				die();
			} else {
				$foto = $this->upload->data('file_name');
			}
			
		}

		$ArrayInsert = array(
			'nama' => $nama,
			'gender' => $gender,
			'tmp_lahir' => $tmp_lahir,
			'tgl_lahir' => $tgl_lahir,
			'nidn' => $nidn,
			'pendidikan' => $pendidikan,
			'foto' => $foto
		);

		// echo "<pre>";
		// print_r($ArrayInsert);
		// echo "</pre>";
		$this->Dosen_model->insertDataDosen($ArrayInsert);
		redirect(base_url('praktikum/praktikum_11/pertemuan11/dosen'));

	}

	public function edit_db_dosen($id)
	{
		$queryDosenDetail = $this->Dosen_model->getDataDosenDetail($id);

		// echo "<pre>";
		// print_r($queryMahasiswaDetail);
		// echo "</pre>";

		$data = array('queryDetailDsn'=> $queryDosenDetail);

		$this->load->view('praktikum/view_pertemuan11/dosen/edit_db_dosen', $data);
	}

	public function fungsi_edit_dosen()
	{
		$nama = $this->input->post('nama');
		$id = $this->input->post('id');
		$gender = $this->input->post('gender');
		$tmp_lahir = $this->input->post('tmp_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$nidn = $this->input->post('nidn');
		$pendidikan = $this->input->post('pendidikan');

		$ArrayUpdate = array(
			'nama' => $nama,
			'id' => $id,
			'gender' => $gender,
			'tmp_lahir' => $tmp_lahir,
			'tgl_lahir' => $tgl_lahir,
			'nidn' => $nidn,
			'pendidikan' => $pendidikan
		);

		// echo "<pre>";
		// print_r($ArrayInsert);
		// echo "</pre>";
		
		$this->Dosen_model->updateDataDosen($id, $ArrayUpdate);
		redirect(base_url('praktikum/praktikum_11/pertemuan11/dosen'));
	}

	public function delete_db_dosen($id)
	{
		$this->Dosen_model->deleteDataDosen($id);
		redirect(base_url('praktikum/praktikum_11/pertemuan11/dosen'));
	}
	// <-- End Dosen ------------------------------------------------------------------------------------------->

	// <--CRUD Matakuliah --------------------------------------------------------------------------------------->
	public function matakuliah()
	{
		$queryAllMatakuliah = $this->Matakuliah_model->getDataMatakuliah();
		$data = array('queryAllMtl'=> $queryAllMatakuliah);
		$this->load->view('praktikum/view_pertemuan11/matakuliah/crud_matakuliah', $data);
	}

	public function create_matakuliah()
	{
		$this->load->view('praktikum/view_pertemuan11/matakuliah/create_db_matakuliah');
	}

	public function fungsi_create_matakuliah()
	{
		$nama = $this->input->post('nama');
		$sks = $this->input->post('sks');
		$kode = $this->input->post('kode');
		

		$ArrayInsert = array(
			'nama' => $nama,
			'sks' => $sks,
			'kode' => $kode
		);

		// echo "<pre>";
		// print_r($ArrayInsert);
		// echo "</pre>";

		$this->Matakuliah_model->insertDataMatakuliah($ArrayInsert);
		redirect(base_url('praktikum/praktikum_11/pertemuan11/matakuliah'));
	}

	public function edit_db_matakuliah($id)
	{
		$queryMatakuliahDetail = $this->Matakuliah_model->getDataMatakuliahDetail($id);

		// echo "<pre>";
		// print_r($queryMahasiswaDetail);
		// echo "</pre>";

		$data = array('queryDetailMtl'=> $queryMatakuliahDetail);
		$this->load->view('praktikum/view_pertemuan11/matakuliah/edit_db_matakuliah', $data);
	}

	public function fungsi_edit_matakuliah()
	{
		$nama = $this->input->post('nama');
		$id = $this->input->post('id');
		$sks = $this->input->post('sks');
		$kode = $this->input->post('kode');
		

		$ArrayUpdate = array(
			'id' => $id,
			'nama' => $nama,
			'sks' => $sks,
			'kode' => $kode
		);

		// echo "<pre>";
		// print_r($ArrayInsert);
		// echo "</pre>";

		$this->Matakuliah_model->updateDataMatakuliah($id, $ArrayUpdate);
		redirect(base_url('praktikum/praktikum_11/pertemuan11/matakuliah'));
	}

	public function delete_db_matakuliah($id)
	{
		$this->Matakuliah_model->deleteDataMatakuliah($id);
		redirect(base_url('praktikum/praktikum_11/pertemuan11/matakuliah'));
	}
	// <--End Matakuliah --------------------------------------------------------------------------------------------->

}
