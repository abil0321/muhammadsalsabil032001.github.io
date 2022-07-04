<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_user extends CI_Controller
{

    public function __construct() {
         
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('praktikum/praktikum_12/auth/index');
        }
         
    }

    public function index()
    {
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();

        // echo "Selamat Datang User " . $data['tbl_user']['username'];

        $this->load->view('praktikum/view_pertemuan13/halaman_website', $data);
    }

    public function bukti()
    {
        $this->load->view('praktikum/view_pertemuan13/view_praktikum13');
    }
}
