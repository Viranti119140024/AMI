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


        // if ($this->session->userdata('role_name') != "admin") {
        //     redirect("auth");
        // }
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

        $data['title'] = 'Hasil Desk Evaluation';
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

        $data['title'] = 'Tambah Prodi';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/dokumen/tambahdokumenprodi', $data);
    }

    public function TDJ()
    {

        $data['title'] = 'Tambah Jurusan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/dokumen/tambahdokumenjurusan', $data);
    }

    //WILAYAH TAMBAH TAMBAH
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


    //WILAYAH HAPUS HAPUS
    public function deleteprodi($id_prodi)
    {
        $this->Data_ami->hapus_prodi($id_prodi);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('user/dokprodi');
    }

    public function deletejurusan($id_jurusan)
    {
        $this->Data_ami->hapus_jurusan($id_jurusan);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('user/dok');
    }

    public function deleteauditor($id_auditor)
    {
        $this->Data_ami->hapus_auditor($id_auditor);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('user/auditor1');
    }
}
