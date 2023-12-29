<?php

class User_model extends CI_Model {
    private $table = 'tbuser';


    public function all(){
        return $this->db->get($this->table);
    }

    public function find($data){
        return $this->db->get_where($this->table, $data);
    }
}