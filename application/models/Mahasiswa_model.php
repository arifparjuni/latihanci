<?php

class Mahasiswa_model extends CI_model {

    public function getAllData() {
        return $this->db->get('mahasiswa')->result_array();
    }

}