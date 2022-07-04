<?php
class Matakuliah_model extends CI_Model {
    public $id;
    public $nama;
    public $sks;
    public $kode;

    function getDataMatakuliah(){
        $query = $this->db->get('tbl_matakuliah'); 
        return $query->result();
    }

    public function insertDataMatakuliah($data)
   {
       $this->db->insert('tbl_matakuliah', $data);
   }

   public function getDataMatakuliahDetail($id)
   {
       $this->db->where('id', $id);
       $query = $this->db->get('tbl_matakuliah');
       return $query->row(); 
   }

   public function updateDataMatakuliah($id, $data)
   {
       $this->db->where('id', $id);
       $this->db->update('tbl_Matakuliah', $data);
   }

   public function deleteDataMatakuliah($id)
   {
       $this->db->where('id', $id);
       $this->db->delete('tbl_matakuliah');
   }
   }

   
?>
