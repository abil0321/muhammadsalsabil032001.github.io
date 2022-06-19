<?php
class User_model extends CI_Model {

    function getDataUser(){
        $query = $this->db->get('tbl_user'); 
        return $query->result();
    }

}
