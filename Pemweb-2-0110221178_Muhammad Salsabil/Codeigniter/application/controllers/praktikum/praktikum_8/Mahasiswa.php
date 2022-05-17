<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mahasiswa extends CI_Controller {
 public function index()
 {
    $this->load->model('mahasiswa_model','mhs1');
    $this->mhs1->id=1;
    $this->mhs1->nim='010001';
    $this->mhs1->nama='Faiz Fikri';
    $this->mhs1->gender='L';
    $this->mhs1->ipk=3.85;
    $this->load->model('mahasiswa_model','mhs2');
    $this->mhs2->id=2;
    $this->mhs2->nim='020001';
    $this->mhs2->nama='Pandan Wangi';
    $this->mhs2->gender='P';
    $this->mhs2->ipk=3.35;
    
    $list_mhs = [$this->mhs1, $this->mhs2];
    $data['list_mhs']=$list_mhs;
    
   //  $this->load->view('header');
   //  $this->load->view('footer');
    $this->load->view('mahasiswa_view',$data);
 }

   function detail($id){
    echo "ini adalah detail $id";
 }

 public function create()
    {
      //   $this->load->view('header');
        $this->load->view('praktikum/view_pertemuan9/mahasiswa/view_FormCreateMahasiswa');
      //   $this->load->view('footer');
    }

 public function save()
    {
        $this->load->model('mahasiswa_model', 'mhs3');

        $this->mhs3->nim = $this->input->post('nim');
        $this->mhs3->nama = $this->input->post('nama');
        $this->mhs3->gender = $this->input->post('gender');
        $this->mhs3->tmp_lahir = $this->input->post('tmp_lahir');
        $this->mhs3->tgl_lahir = $this->input->post('tgl_lahir');
        $this->mhs3->ipk = $this->input->post('ipk');
        $this->mhs3->prodi = $this->input->post('prodi');
        $data['mhs3'] = $this->mhs3;
      //   $this->load->view('header');
        $this->load->view('praktikum/view_pertemuan9/mahasiswa/view_FormMahasiswa', $data);
      //   $this->load->view('footer');

        // redirect('mahasiswa/view/', $this->mhs3->nim);
    }
}

?>
