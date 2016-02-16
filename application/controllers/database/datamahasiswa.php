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
       // $this->load->view("database/sidebar");
        $this->load->view("database/data_mahasiswa", $data);
        $this->load->view("database/footer");
            
    }
    
    public function tampilkanPageDataMahasiswa()
    {
        $getmahasiswa=$this->mmahasiswa->getdata();
        $getptn=$this->mmahasiswa->getptn();
            
        $data['data_mahasiswa']=NULL;
        $data['ptn']=NULL;
        
        if(!empty($getmahasiswa))
        {
            $data['data_mahasiswa']=$getmahasiswa;   
        }
        
        if(!empty($getptn))
        {
            $data['ptn']=$getptn;
        }
		$this->loadview($data);
    }
    
	public function index()
	{
        $this->tampilkanPageDataMahasiswa();
	}
    
    public function tampilkanInputError()
    {
        $getptn=$this->mmahasiswa->getptn();
        $data['ptn']=NULL;
        
        if(!empty($getptn))
        {
            $data['ptn']=$getptn;
        }
        
	
        $this->load->view("database/head");
        $this->load->view("database/header");
        //$this->load->view("database/sidebar");
        $this->load->view("database/data_mahasiswa_error",$data);
        $this->load->view("database/footer");
    }
    
    public function tambahdata()
    {
        if($this->input->post("submit"))
        {
            //Validation
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('nama','Nama Lengkap','trim|required|max_length[30]|xss_clean');
            $this->form_validation->set_rules('univ','Perguruan Tinggi','trim|required|max_length[50]|xss_clean');
            $this->form_validation->set_rules('email','Email','trim|required|valid_email');
            $this->form_validation->set_rules('fakultas','Fakultas','trim|required|max_length[50]|xss_clean');
            $this->form_validation->set_rules('jurusan','Jurusan','trim|required|max_length[50]|xss_clean');
            $this->form_validation->set_rules('angkatan','Tahun Angkatan','trim|required|xss_clean|numeric');
            $this->form_validation->set_rules('facebook','Facebook','trim|required|max_length[50]|xss_clean');
            $this->form_validation->set_rules('twitter','Twitter','trim|required|max_length[50]|xss_clean');
            
            if($this->form_validation->run()==FALSE)
            {
                $this->tampilkanInputError();
            }
            else
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
                
                redirect("database\datamahasiswa");
            }                      
        }      
    }
    
    public function uploadcsv()
    {
        $filename='upload' . time();
        
        $config['upload_path'] = '.\\uploads';
        $config['allowed_types'] = 'text/plain|text/csv|csv';
        $config['max_size'] = '5000';
        $config['file_name'] = $filename;
        
        $this->load->library('upload', $config);
        
        if(!$this->upload->do_upload()) echo $this->upload->display_errors();
        else
        {
            $file = fopen('.\\uploads\\'.$filename.'.csv',"r");
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
