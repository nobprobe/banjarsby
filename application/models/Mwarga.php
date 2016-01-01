<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mwarga extends CI_Model {
    
    public tambahData($data)
    {
        $this->db->insert('mahasiswa', $data);
    }
}