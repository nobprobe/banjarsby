<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->loadview();
	}
    
    private function loadview()
    {
        $this->load->view("database/head");
        $this->load->view("database/header");
        //$this->load->view("database/sidebar");
        $this->load->view("database/dashboard");
        $this->load->view("database/footer");
            
    }
}
