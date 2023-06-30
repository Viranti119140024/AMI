<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    // method login 
    public function index()
    {
        // kunci akses auth ketika sdh login
        if ($this->session->userdata('role_name') == "Admin") {
            redirect('user/berandaadmin');
        }

        // verifikasi login
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        // skema login gagal
        if ($this->form_validation->run() == false) {
            // $data ['title'] = 'Halaman Masuk';
            $this->load->view('auth/login');
        } else {
            // skema login berhasil
            $this->_login();
        }
        // $this->_login();
    }

    // private method login berhasil
    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        // verifikasi user 

        // redirect('auth');
        if ($user) {
            // jika email user active
            // if ($user['is_active'] == 1) {
            // cek password
            if (password_verify($password, $user['password']) && $user['role_name'] == 'Admin') {
                $data = [
                    'email' => $user['email'],
                    'role_name' => $user['role_name']
                ];
                $this->session->set_userdata($data);
                redirect('user/berandaadmin');
            } else if (password_verify($password, $user['password']) && $user['role_name'] == 'Program Studi') {
                $data = [
                    'email' => $user['email'],
                    'role_name' => $user['role_name']
                ];
                $this->session->set_userdata($data);
                redirect('prodi/berandaprodi');
            } else if (password_verify($password, $user['password']) && $user['role_name'] == 'Jurusan') {
                $data = [
                    'email' => $user['email'],
                    'role_name' => $user['role_name']
                ];
                $this->session->set_userdata($data);
                redirect('jurusan_controller/berandajurusan');
            } else if (password_verify($password, $user['password']) && $user['role_name'] == 'Auditor Program Studi') {
                $data = [
                    'email' => $user['email'],
                    'role_name' => $user['role_name']
                ];
                $this->session->set_userdata($data);
                redirect('auditor/BERANDA');
            } else if (password_verify($password, $user['password']) && $user['role_name'] == 'Auditor Jurusan') {
                $data = [
                    'email' => $user['email'],
                    'role_name' => $user['role_name']
                ];
                $this->session->set_userdata($data);
                redirect('auditorjurusan/berandaauditorjurusan');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
                redirect('auth');
            }

            // } 
            // else {
            //     $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email sudah tidak aktif!</div>');
            //     redirect('auth');
            // }

        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email anda belum terdaftar!</div>');
            redirect('auth');
        }
    }


    // buat akun baru
    public function registrasi()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('role_name', 'Role Name', 'required');

        // skema buat akun gagal
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Buat Akun';
            $this->load->view('User/tambahuser');
        }
        // skema buat akun berhasil
        else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.png',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_name' => htmlspecialchars($this->input->post('role_name', true)),
            ];
            // var_dump($data);
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat, Akun anda telah terdaftar!</div>');
            redirect('user/user');
        }
    }

    // method logout
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda Telah Keluar Akun!</div>');
        redirect('auth');
    }
}
