<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataperguruantinggi extends CI_Controller {

	
    private function loadview()
    {
        $this->load->view("database/head");
        $this->load->view("database/header");
        $this->load->view("database/sidebar");
        $this->load->view("database/data_perguruantinggi");
        $this->load->view("database/footer");
            
    }
    
	public function index()
	{
		$this->loadview();
	}
    
    
}
