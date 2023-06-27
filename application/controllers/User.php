<?php

use LDAP\Result;

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    // menarik data db models
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Data_ami');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('table');


        if ($this->session->userdata('role_name') != "Admin") {
            redirect("auth");
        }
    }


    public function index()
    {

        $data['title'] = 'Dokumen Kebutuhan Audit';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        // $data['user'] = $this->Data_user->user();

        // if data.user = role_id=1 (admin)  {
        //     $this->load->view('templates/admin/header');
        //     $this->load->view('templates/admin/sidebar', $data);
        //     $this->load->view('templates/admin/topbar', $data);
        //     $this->load->view('user/admin/index', $data);
        //     $this->load->view('templates/admin/footer');
        // }
        // else if (data user role id 2) {
        //     $this->load->view('templates/prodi/header');
        //     $this->load->view('templates/admin/sidebar', $data);
        //     $this->load->view('templates/admin/topbar', $data);
        //     $this->load->view('user/prodi/index', $data);
        //     $this->load->view('templates/admin/footer');
        // }

        // $data['url'] = $this->uri->segment(3);

        $url = $_SERVER['REQUEST_URI'];
        $segments = explode('/', $url);

        // Find the index of the parameter name
        $param1Index = array_search('param1', $segments);
        // Retrieve the parameter values
        $data['params'] = $segments[$param1Index + 4];
        // var_dump($data['params']);


        $data['dokumen'] = $this->Data_ami->get_dokjurusan($data['params']);

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/dokumen/dokumenjurusan', $data);
    }

    public function auditor1()
    {
        $data['title'] = 'Auditor';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['auditor'] = $this->Data_ami->get_auditor();
        // var_dump($data['get_auditor']);

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/auditor/dataauditor', $data);
    }

    public function dokumen0()
    {
        $data['title'] = 'Dokumen Kebutuhan Audit';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/dokumen/pilihawaldokumen', $data);
    }

    public function dokumen1()
    {

        $data['title'] = 'Dokumen Kebutuhan Audit';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        // $data['url'] = $this->uri->segment(3);

        $url = $_SERVER['REQUEST_URI'];
        $segments = explode('/', $url);

        // Find the index of the parameter name
        $param1Index = array_search('param1', $segments);
        // Retrieve the parameter values
        $data['params'] = $segments[$param1Index + 4];
        // var_dump($data['params']);


        $data['dokumen'] = $this->Data_ami->get_dokprodi($data['params']);

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/dokumen/dokumenprodi', $data);
    }


    public function DHA()
    {

        $data['title'] = 'Dokumen Hasil Audit';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/dokumenhasilaudit/daftar', $data);
    }

    public function pilihJdanP()
    {

        $data['title'] = 'Laporan Hasil Tindak Lanjut';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/laporanhasiltindaklanjut/pilihjurusandanprodi', $data);
    }

    public function laporanhasil()
    {

        $data['title'] = 'Laporan Hasil Tindak Lanjut';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/laporanhasiltindaklanjut/daftarlaporan', $data);
    }

    public function laporantlprodi()
    {

        $data['title'] = 'Laporan Hasil Tindak Lanjut';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/laporanhasiltindaklanjut/daftarprodi', $data);
    }

    public function berandaadmin()
    {

        $data['title'] = 'Beranda Admin';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/beranda', $data);
    }

    public function dok()
    {

        $data['title'] = 'Dokumen Kebutuhan Audit';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['jurusan'] = $this->Data_ami->get_jurusan();
        // var_dump($data['get_jurusan']);

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/dokumen/dok', $data);
    }

    public function dokprodi()
    {

        $data['title'] = 'Dokumen Kebutuhan Audit';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['prodi'] = $this->Data_ami->get_prodi();
        // var_dump($data['get_prodi']);

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/dokumen/dokprodi', $data);
    }

    public function pilihan()
    {

        $data['title'] = 'Dokumen Hasil Audit';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/dokumenhasilaudit/pilihan', $data);
    }

    public function daftarjurusan()
    {

        $data['title'] = 'Dokumen Hasil Audit';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/dokumenhasilaudit/daftarjurusan', $data);
    }

    public function pilihdaftartilik()
    {

        $data['title'] = 'Hasil Desk Evaluation';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/daftartilik/pilihan', $data);
    }

    public function menudaftartilik()
    {

        $data['title'] = 'Hasil Desk Evaluation';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/daftartilik/menuutama', $data);
    }

    public function daftartilik0()
    {

        $data['title'] = 'Hasil Desk Evaluation';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/daftartilik/daftartilikk', $data);
    }

    public function daftartilik1()
    {

        $data['title'] = 'DAFTAR TILIK (CHECKLIST)';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/daftartilik/daftartilika2', $data);
    }

    public function daftartilik2()
    {

        $data['title'] = 'Hasil Desk Evaluation';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/daftartilik/daftartilikb1', $data);
    }

    public function daftartilik3()
    {

        $data['title'] = 'DAFTAR TILIK (CHECKLIST)';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/daftartilik/daftartilikb2', $data);
    }

    public function daftartilik4()
    {

        $data['title'] = 'Hasil Desk Evaluation';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/daftartilik/daftartilikc1', $data);
    }
    public function daftartilik5()
    {

        $data['title'] = 'DAFTAR TILIK (CHECKLIST)';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/daftartilik/daftartilikc2', $data);
    }

    public function daftartilik6()
    {

        $data['title'] = 'Hasil Desk Evaluation';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/daftartilik/daftartilikd1', $data);
    }

    public function daftartilik7()
    {

        $data['title'] = 'DAFTAR TILIK (CHECKLIST)';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/daftartilik/daftartilikd2', $data);
    }

    public function daftartilik8()
    {

        $data['title'] = 'Hasil Desk Evaluation';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/daftartilik/daftartilike1', $data);
    }

    public function daftartilik9()
    {

        $data['title'] = 'DAFTAR TILIK (CHECKLIST)';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/daftartilik/daftartilike2', $data);
    }

    public function daftartilik10()
    {

        $data['title'] = 'Hasil Desk Evaluation';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/daftartilik/daftartilikf1', $data);
    }

    public function daftartilik11()
    {

        $data['title'] = 'DAFTAR TILIK (CHECKLIST)';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/daftartilik/daftartilikf2', $data);
    }

    public function daftartilik12()
    {

        $data['title'] = 'Hasil Desk Evaluation';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/daftartilik/daftartilikg1', $data);
    }

    public function daftartilik13()
    {

        $data['title'] = 'DAFTAR TILIK (CHECKLIST)';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/daftartilik/daftartilikg2', $data);
    }

    public function TambahData()
    {

        $data['title'] = 'Hasil Desk Evaluation';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/daftartilik/tambahdata', $data);
    }


    public function TDP()
    {

        $data['title'] = 'Tambah Dokumen Prodi';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $url = $_SERVER['REQUEST_URI'];
        $segments = explode('/', $url);

        // Find the index of the parameter name
        $param1Index = array_search('param1', $segments);
        // Retrieve the parameter values
        $data['params'] = $segments[$param1Index + 4];
        // var_dump($data['params']);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('partials/admin/header', $data);
            $this->load->view('templates/logo', $data);
            $this->load->view('partials/admin/sidebar', $data);
            $this->load->view('templates/admin/dokumen/tambahdokumenprodi', $data);
        } else {
            // var_dump($data['params']);
            $this->Data_ami->tambah_dokumen();
            // $this->session->set_flashdata('flash', 'ditambahkan');
            // redirect('user/dokumen1/' . $data->params);
        }
    }

    public function TDP_post($id)
    {
        // var_dump($id);
        $this->Data_ami->tambah_dokumen($id);
        $this->session->set_flashdata('flash', 'ditambahkan');
        redirect('user/dokumen1/' . $id);
    }

    public function TDJ()
    {

        $data['title'] = 'Tambah Dokumen Jurusan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $url = $_SERVER['REQUEST_URI'];
        $segments = explode('/', $url);

        // Find the index of the parameter name
        $param1Index = array_search('param1', $segments);
        // Retrieve the parameter values
        $data['params'] = $segments[$param1Index + 4];
        // var_dump($data['params']);
        // var_dump($segments);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('partials/admin/header', $data);
            $this->load->view('templates/logo', $data);
            $this->load->view('partials/admin/sidebar', $data);
            $this->load->view('templates/admin/dokumen/tambahdokumenjurusan', $data);
        } else {
            // var_dump($data['params']);
            $this->Data_ami->tambah_dokumen();
            // $this->session->set_flashdata('flash', 'ditambahkan');
            // redirect('user/dokumen1/' . $data->params);
        }
    }

    public function TDJ_post($id)
    {
        // var_dump($id);
        $this->Data_ami->tambah_dokumen($id);
        $this->session->set_flashdata('flash', 'ditambahkan');
        redirect('user/index/' . $id);
    }

    public function formdaftartilik()
    {

        $data['title'] = 'Form Daftar Tilik';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/daftartilik/tambah', $data);
    }

    public function user()
    {

        $data['title'] = 'Daftar User';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['user'] = $this->Data_ami->get_user();

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/user/daftaruser', $data);
    }

    public function HaMi()
    {

        $data['title'] = 'Daftar User';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/hasil/hasilami', $data);
    }

    //WILAYAH TAMBAH TAMBAH

    //tambah prodi
    public function tambahprodi()
    {

        $data['title'] = 'Tambah Prodi';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama_prodi', 'Nama Prodi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('partials/admin/header', $data);
            $this->load->view('templates/logo', $data);
            $this->load->view('partials/admin/sidebar', $data);
            $this->load->view('templates/admin/dokumen/tambahprogramstudi', $data);
        } else {
            $this->Data_ami->tambah_prodi();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('user/dokprodi');
        }
    }

    //tambah jurusan
    public function tambahjurusan()
    {

        $data['title'] = 'Tambah Jurusan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama_jurusan', 'Nama Jurusan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('partials/admin/header', $data);
            $this->load->view('templates/logo', $data);
            $this->load->view('partials/admin/sidebar', $data);
            $this->load->view('templates/admin/dokumen/tambahjurusan', $data);
        } else {
            $this->Data_ami->tambah_jurusan();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('user/dok');
        }
    }

    //tambah auditor
    public function auditor()
    {
        $data['title'] = 'Tambah Auditor';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama_lembaga', 'Nama Lembaga', 'required');
        $this->form_validation->set_rules('nama_auditor', 'Nama Auditor', 'required');
        $this->form_validation->set_rules('nip_nrk', 'NIP_NRK', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('partials/admin/header', $data);
            $this->load->view('templates/logo', $data);
            $this->load->view('partials/admin/sidebar', $data);
            $this->load->view('templates/admin/auditor/tambahauditor', $data);
        } else {
            $this->Data_ami->tambah_auditor();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('user/auditor1');
        }
    }

    public function TambahUser()
    {
        $data['title'] = 'Tambah Daftar Pengguna';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        // $this->form_validation->set_rules('nama_lembaga', 'Nama Lembaga', 'required');
        // $this->form_validation->set_rules('nama_auditor', 'Nama Auditor', 'required');
        // $this->form_validation->set_rules('nip_nrk', 'NIP_NRK', 'required');

        // if ($this->form_validation->run() == FALSE) {
        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/user/tambahuser', $data);
        // } else {
        //     $this->Data_ami->tambah_auditor();
        //     $this->session->set_flashdata('flash', 'ditambahkan');
        //     redirect('user/auditor1');
        // }
    }

    // ONTROLLER NOTIFIKASI
    public function notifikasi()
    {
        // Menghitung selisih hari antara $tgl_selesai dan tanggal saat ini
        $tgl_selesai = "2023-06-30"; // Tanggal selesai yang digunakan sebagai contoh
        $days_remaining = (strtotime($tgl_selesai) - time()) / (60 * 60 * 24);

        // Kirim data selisih hari ke view
        $data['days_remaining'] = ceil($days_remaining);

        // Load view notification_badge.php dengan data yang telah dikirim
        $this->load->view('user/notifikasi', $data);
    }


    //WILAYAH HAPUS HAPUS
    // public function deleteprodi($id_prodi)
    // {
    //     $this->Data_ami->hapus_prodi($id_prodi);
    //     $this->session->set_flashdata('flash', 'dihapus');
    //     redirect('user/dokprodi');
    // }

    // public function deletejurusan($id_jurusan)
    // {
    //     $this->Data_ami->hapus_jurusan($id_jurusan);
    //     $this->session->set_flashdata('flash', 'dihapus');
    //     redirect('user/dok');
    // }

    // public function deleteauditor($id_auditor)
    // {
    //     $this->Data_ami->hapus_auditor($id_auditor);
    //     $this->session->set_flashdata('flash', 'dihapus');
    //     redirect('user/auditor1');
    // }

    //WILAYAH EDIT EDIT
    // edit auditor
    public function edit_auditor($id_auditor)
    {
        $data['title'] = 'Edit Auditor';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['auditor'] = $this->Data_ami->get_auditor_by_id($id_auditor);
        // var_dump($data);


        $this->form_validation->set_rules('nama_lembaga', 'Nama Lembaga', 'required');
        $this->form_validation->set_rules('nama_auditor', 'Nama Auditor', 'required');
        $this->form_validation->set_rules('nip_nrk', 'NIP_NRK', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('partials/admin/header', $data);
            $this->load->view('templates/logo', $data);
            $this->load->view('partials/admin/sidebar', $data);
            $this->load->view('templates/admin/auditor/editauditor', $data);
        } else {
            // var_dump($id_auditor);
            $this->Data_ami->update_auditor();
            $this->session->set_flashdata('flash', 'diubah');
            redirect('user/auditor1');
        }
    }

    //lihat dokumen
    public function lihatdokumen($id)
    {
        $data['title'] = 'Dokumen Preview';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        // $data['pdfFilePath'] = 'dokumen/';

        $data['dokumen'] = $this->Data_ami->get_dokumen_link($id);
        // var_dump($data['dokumen'][0]->nama_file);
        $data['pdfFilePath'] = $data['dokumen'][0]->nama_file;

        // $this->load->view('lihatdokumen', ['pdfFilePath' => $pdfFilePath]);

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/dokumen/lihatdokumen', $data);
    }
}
