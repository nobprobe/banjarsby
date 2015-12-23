<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajaxform extends CI_Controller {
    
    function __costruct()
    {
        parent::__construct();
        
    }
    
	public function index()
	{
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        }
	}
    
    public function formtambahdata()
    {
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        }
        else
		$this->load->view('database\ajax_form_tambah_data_mahasiswa');   
    }
    
    
}
