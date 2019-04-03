<?php
class Mahasiswa_Model extends CI_Model{
    // public function getAll(){
    //     return $this->db->get('mhs');
    // }
    function tambah_mhs($data){
        if($this->db->insert('mhs', $data)){
            return true;
        } else {
            return false;
        }
    }
}