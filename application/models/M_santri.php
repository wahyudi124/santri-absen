<?php

class M_santri extends CI_Model{
    public function getalldata(){
        return $this->db->get('tbsantri');
    }
    public function input_data($data,$table){
        $this->db->insert($table,$data);
    }

    public function delete_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }
}