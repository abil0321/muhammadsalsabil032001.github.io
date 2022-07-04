<?php
class Mahasiswa_model extends CI_Model {
    public $id;
    public $nama;
    public $nim;
    public $gender;
    public $tmp_lahir;
    public $tgl_lahir;
    public $ipk;
    public $predikat;

   public function predikat(){
    $predikat = ($this->ipk >= 3.75)?"Cumlaude" : "Baik";
   return $predikat;
   }
   
   function getDataMahasiswa(){
       $query = $this->db->get('tbl_mahasiswa'); 
       return $query->result();
   }

   public function insertDataMahasiswa($data)
   {
       $this->db->insert('tbl_mahasiswa', $data);
   }

   public function getDataMahasiswaDetail($id)
   {
       $this->db->where('id', $id);
       $query = $this->db->get('tbl_mahasiswa');
       return $query->row(); 
   }

   public function updateDataMahasiswa($id, $data)
   {
       $this->db->where('id', $id);
       $this->db->update('tbl_mahasiswa', $data);
   }

   public function deleteDataMahasiswa($id)
   {
       $this->db->where('id', $id);
       $this->db->delete('tbl_mahasiswa');
   }
   }
?>
