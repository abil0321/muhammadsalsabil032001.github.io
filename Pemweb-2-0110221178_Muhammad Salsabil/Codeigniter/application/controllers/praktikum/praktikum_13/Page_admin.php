<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_admin extends CI_Controller
{
    public function __construct() {
         
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('praktikum/praktikum_12/auth/index');
        }
         
    }
    public function index()
    {
        echo "Selamat Datang Admin !!";
    }
}
