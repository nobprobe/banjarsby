<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmahasiswa extends CI_Model {
	
    public function adddata($data)
    {
        /*
        Data structure:
        id_mahasiswa
        id_perguruan_tinggi
        Nama
        Email
        Fakultas
        Jurusan
        Tahun_angkatan
        Facebook
        Twitter
        */
        $this->db->insert('mahasiswa', $data);   
    }
    
    public function tambahperguruantinggi($data)
    {
           
    }
    public function getdata()
    {
        $res='';
        $sql=$this->db->get('mahasiswa');
        if($sql->num_rows() > 0)
        {
            foreach($sql->result() as $data)
            {
                $id_perguruan_tinggi = $data->id_perguruan_tinggi;
                $perguruan_tinggi=$this->db->query("SELECT Nama_perguruan FROM perguruan_tinggi WHERE id_perguruan_tinggi='$id_perguruan_tinggi'");
                
                $row=$perguruan_tinggi->row_array();
                $data->id_perguruan_tinggi=$row['Nama_perguruan'];
                $res[]=$data;
            }
        }
        
        return $res;
    }
}
