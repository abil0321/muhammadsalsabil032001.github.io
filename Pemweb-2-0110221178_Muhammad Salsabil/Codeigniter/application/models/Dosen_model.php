<?php
class Dosen_model extends CI_Model {
    public $id;
    public $nama;
    public $gender;
    public $tmp_lahir;
    public $tgl_lahir;
    public $nidn;
    public $pendidikan;

    function getDataDosen(){
        $query = $this->db->get('tbl_dosen'); 
        return $query->result();
    }

    public function insertDataDosen($data)
   {
       $this->db->insert('tbl_dosen', $data);
   }

   public function getDataDosenDetail($id)
   {
       $this->db->where('id', $id);
       $query = $this->db->get('tbl_dosen');
       return $query->row(); 
   }

   public function updateDataDosen($nidn, $data)
   {
       $this->db->where('nidn', $nidn);
       $this->db->update('tbl_dosen', $data);
   }

   public function deleteDataDosen($id)
   {
       $this->db->where('id', $id);
       $this->db->delete('tbl_dosen');
   }

   }
?>
