<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Matakuliah extends CI_Controller {
 public function index()
 {
    $this->load->model('matakuliah_model','mapel1');
    $this->mapel1->id=1;
    $this->mapel1->nama='Matematika Komputer';
    $this->mapel1->sks=4;
    $this->mapel1->kode='010001';

    $this->load->model('matakuliah_model','mapel2');
    $this->mapel2->id=2;
    $this->mapel2->nama='Pemrograman Web';
    $this->mapel2->sks=5;
    $this->mapel2->kode='010001';
    
    $list_mapel = [$this->mapel1, $this->mapel2];
    $data['list_mapel']=$list_mapel;
    
   //  $this->load->view('header');
   //  $this->load->view('footer');
    $this->load->view('matakuliah_view',$data);
 }

}

?>
