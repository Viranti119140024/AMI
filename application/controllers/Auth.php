<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Data_ami');
        $this->load->library('table');
    }

    // method login 
    public function index()
    {
        // kunci akses auth ketika sdh login

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

        if ($user) {
            // Verifikasi password
            if (password_verify($password, $user['password'])) {
                // Jika password benar, set session
                $data = [
                    'email' => $user['email'],
                    'role_name' => $user['role_name']
                ];
                $this->session->set_userdata($data);

                // Redirect sesuai role_name
                switch ($user['role_name']) {
                    case 'Admin':
                        redirect('user/berandaadmin');
                        break;
                    case 'Program Studi':
                        redirect('prodi/berandaprodi');
                        break;
                    case 'Jurusan':
                        redirect('jurusan_controller/berandajurusan');
                        break;
                    case 'Auditor Program Studi':
                        redirect('auditor/BERANDA');
                        break;
                    case 'Auditor Jurusan':
                        redirect('auditorjurusan/berandaauditorjurusan');
                        break;
                    default:
                        redirect('auth');
                        break;
                }
            } else {
                // Jika password salah
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
                redirect('auth');
            }
        } else {
            // Jika email tidak ditemukan
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email Anda belum terdaftar!</div>');
            redirect('auth');
        }
    }

    // buat akun baru
    public function registrasi()
    {
        // $this->form_validation->set_rules('name', 'Name', 'required');
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
                // 'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.png',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_name' => htmlspecialchars($this->input->post('role_name', true)),
                'id_audit' => htmlspecialchars($this->input->post('id_audit', true)),
            ];

            $users = $this->Data_ami->get_user();

            foreach ($users as $value) {
                // var_dump($value->name);
                // var_dump($data['id_audit']);

                if ($data['id_audit'] == $value->id) {
                    $data['unit'] = $value->name;
                    // var_dump($data['unit']);
                }
            }

            if ($data['role_name'] == "Admin") {
                $data['id_audit'] = 1;
            }


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
