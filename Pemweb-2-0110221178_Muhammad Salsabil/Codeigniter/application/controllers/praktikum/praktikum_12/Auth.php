<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
    }

	public function index()
	{
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            
            $this->load->view('praktikum/view_pertemuan12/auth/login');
        }else {
            // _ = penanda private
            $this->_login();
        }
	}
    
    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('tbl_user', ['email' => $email])->row_array();

        // jika usernya ada
        if ($user) {
            if ($user['is_active'] == 1) {
                if ($user['password'] == $password) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];

                    $this->session->set_userdata($data);
                if ($user['role_id'] != 1) {
                    redirect('praktikum/praktikum_13/page_user/index');
                }else {
                    redirect('praktikum/praktikum_8/pertemuan8/dashboard');
                }
                }else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
           Password-nya salah, coba di-ingat lagi!
          </div>');
          redirect('praktikum/praktikum_12/auth/index');
                }


            }else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
           Password atau akunnya belum teraktivasi!
          </div>');
            
            redirect('praktikum/praktikum_12/auth/index');
            }

        }else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
           Password atau akunnya belum terdaftar !!
          </div>');
            
            redirect('praktikum/praktikum_12/auth/index');
        }

        // cek data login
        // var_dump($user);
        // die;
    }

    public function registration()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tbl_user.email]', [
            'is_unique' => 'email ini sudah terdaftar!!'
        ]);

        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
            'matches' => 'password-nya tidak sama!!',
            'min_length' => 'password-nya terlalu pendek'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            
            $this->load->library('form_validation');
            $this->load->view('praktikum/view_pertemuan12/auth/registration');
        }else {
            $data = [
                'username' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash( $this->input->post('password1'),PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1

            ];

            $this->db->insert('tbl_user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
           Selamat, akun-mu telah terdaftar!!
          </div>');
            
            redirect('praktikum/praktikum_12/auth/index');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Anda telah log-out
       </div>');
         
         redirect('praktikum/praktikum_12/auth/index');
        
    }
}
