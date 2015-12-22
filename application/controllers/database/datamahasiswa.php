<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datamahasiswa extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('mmahasiswa');
    }
    
    private function loadview($data)
    {
        $this->load->view("database/head");
        $this->load->view("database/header");
        $this->load->view("database/sidebar");
        $this->load->view("database/data_mahasiswa", $data);
        $this->load->view("database/footer");
            
    }
    
	public function index()
	{
        $getmahasiswa=$this->mmahasiswa->getdata();
        $data['data_mahasiswa']=NULL;
        
        
        if(!empty($getmahasiswa))
        {
            $data['data_mahasiswa']=$getmahasiswa;   
        }
		$this->loadview($data);
	}
    
    public function tambahdata()
    {
        if($this->input->post("submit"))
        {
            $nama=$this->input->post("nama");
            $id_perguruan_tinggi=$this->input->post("univ");
            $email=$this->input->post("email");
            $fakultas=$this->input->post("fakultas");
            $jurusan=$this->input->post("jurusan");
            $tahun_angkatan=$this->input->post("angkatan");
            $facebook=$this->input->post("facebook");
            $twitter=$this->input->post("twitter");
            
            $data=array(
                        'id_perguruan_tinggi'=>$id_perguruan_tinggi,
                        'Nama'=>$nama,
                        'Email'=>$email,
                        'Fakultas'=>$fakultas,
                        'Jurusan'=>$jurusan,
                        'Tahun_angkatan' => $tahun_angkatan,
                        'Facebook' => $facebook,
                        'Twitter' => $twitter
                    );
                $this->mmahasiswa->adddata($data);
        }
        
        redirect("database\datamahasiswa");
    }
    
    public function uploadcsv()
    {
        $config['upload_path'] = '.\\uploads';
        $config['allowed_types'] = 'text/plain|text/csv|csv';
        $config['max_size'] = '5000';
        $config['file_name'] = 'upload' . time();
        
        $this->load->library('upload', $config);
        
        if(!$this->upload->do_upload()) echo $this->upload->display_errors();
        else
        {
            $file = fopen('.\\uploads\\'.'upload' . time().'.csv',"r");
            fgetcsv($file);
            while(! feof($file))
            {
                $arrdata=fgetcsv($file);
                
                //menghindari null
                if($arrdata[0]==NULL)
                {
                    continue;
                }
                $data=array(
                        'id_perguruan_tinggi'=>$arrdata['1'],
                        'Nama'=>$arrdata['0'],
                        'Email'=>$arrdata['2'],
                        'Fakultas'=>$arrdata['3'],
                        'Jurusan'=>$arrdata['4'],
                        'Tahun_angkatan' => $arrdata['5'],
                        'Facebook' => $arrdata['6'],
                        'Twitter' => $arrdata['7']
                    );
                $this->mmahasiswa->adddata($data);
            }

            fclose($file);   
        }
        
        redirect("database\datamahasiswa");
    }
    
}
