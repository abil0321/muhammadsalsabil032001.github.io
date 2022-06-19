<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pertemuan8 extends CI_Controller {

	public function __construct() {
         
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('praktikum/praktikum_12/auth/index');
        }
         
    }

	public function index()
	{
		$this->load->view('praktikum/view_pertemuan8/view_praktikum8');
	}

	public function dashboard()
	{
		$this->load->view('backend/dashboard/index');
	}
	
}
