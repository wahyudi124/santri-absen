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

    public function update_data($where,$data, $table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function get_ajx($where, $table){
       return $this->db->get_where($table,$where);
    }
}