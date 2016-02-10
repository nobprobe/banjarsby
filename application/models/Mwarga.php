<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mwarga extends CI_Model {
    
    public tambahData($data)
    {
        $this->db->insert('datawarga', $data);
    }
    
    public function getdata()
    {
        $res='';
        $sql=$this->db->get('datawarga');
        if($sql->num_rows() > 0)
        {
            foreach($sql->result() as $data)
            {
                $res[]=$data;
            }
        }
        
        return $res;
    }
}