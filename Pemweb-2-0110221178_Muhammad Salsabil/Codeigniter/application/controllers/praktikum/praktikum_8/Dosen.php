<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dosen extends CI_Controller {
 public function index()
 {

    $this->load->model('dosen_model','dsn1');
    $this->dsn1->id=1;
    $this->dsn1->nama='Ahmad Budiman';
    $this->dsn1->gender='L';
    $this->dsn1->nidn='010001';
    $this->dsn1->pendidikan="S2 TEKNIK INFORMATIKA";

    $this->load->model('dosen_model','dsn2');
    $this->dsn2->id=2;
    $this->dsn2->nama='Fitriani Saleh';
    $this->dsn2->gender='P';
    $this->dsn2->nidn='010001';
    $this->dsn2->pendidikan="S2 Matematika";
    
    $list_dsn = [$this->dsn1, $this->dsn2];
    $data['list_dsn']=$list_dsn;
    
   //  $this->load->view('header');
   //  $this->load->view('footer');
    $this->load->view('dosen_view',$data);
 }

   function detail($id){
    echo "ini adalah detail $id";
 }

 public function create()
 {
     $this->load->view('header');
     $this->load->view('mahasiswa/create');
     $this->load->view('footer');
 }
}

?>
