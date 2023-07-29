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

        // $data['user'] = $this->db->get_where('user', ['email' =>
        // $this->session->userdata('email')])->row_array();

        // // cek sisa waktu deadline
        // $tgl_akhir = "2023-07-07"; // Tanggal selesai yang digunakan sebagai contoh
        // $tanggal_akhir = new DateTime($tgl_akhir);

        // $now = new DateTime();
        // $now->setTime(0, 0, 0); // Set waktu saat ini ke pukul 00:00:00

        // $selisih_hari = $now->diff($tanggal_akhir)->days;
        // $data['deadline'] = $selisih_hari;

        // $this->load->view('templates/logo', $data);

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
        $this->load->view('partials/admin/footer', $data);
    }

    public function auditor1()
    {
        $data['title'] = 'Auditor';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['auditor'] = $this->Data_ami->get_auditor();
        $data['auditorbaru'] = $this->Data_ami->get_auditor_baru();
        // var_dump(  $data['auditorbaru']);

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/auditor/dataauditor', $data);
        $this->load->view('partials/admin/footer', $data);
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
        $this->load->view('partials/admin/footer', $data);
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
        $this->load->view('partials/admin/footer', $data);
    }


    public function DHA()
    {

        $data['title'] = 'Dokumen Hasil Audit';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['prodi'] = $this->Data_ami->get_prodi();


        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/dokumenhasilaudit/daftar', $data);
        $this->load->view('partials/admin/footer', $data);
    }

    public function generate_pdf_hasil_audit($id)
    {
        $data['title'] = 'Laporan Hasil Audit';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        // $data['hasil_tindak_lanjut'] = $this->Data_ami->get_id_hasil_tindak_lanjut();

        $data['hasilaudit'] = $this->Data_ami->get_id_hasil_audit_baru($id);

        // var_dump( $data['hasilaudit']);

        if (!is_null($data['hasilaudit'])) {
            $data['bab2_hasil_audit'] = $this->Data_ami->get_data2_hasil_audit($data['hasilaudit']->id_hasilaudit);
            $this->load->view('partials/admin/header', $data);
            $this->load->view('templates/admin/generatehasilaudit', $data);
            $this->load->view('partials/admin/footer', $data);
        } else {
            redirect('user/DHA');
        }


        // $data['tindaklanjut'] = $this->Data_ami->get_data($params);
        // $data['bab2'] = $this->Data_ami->get_data2($params);

        // $this->load->view('partials/admin/header', $data);
        // $this->load->view('templates/admin/generatehasilaudit', $data);
        // $this->load->view('partials/admin/footer', $data);
    }


    public function generate_daftar_tilik($id)
    {
        $data['title'] = 'Generate Daftar Tilik';
        $data['title1'] = 'Hasil Desk Evaluation';
        $data['title2'] = 'Daftar Tilik ( Checklist )';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['unit'] = $this->Data_ami->get_unit_by_id($data['user']['id_audit']);


        // $data['hasil_tindak_lanjut'] = $this->Data_ami->get_id_hasil_tindak_lanjut();
    
        
        $id_user =$this->Data_ami->get_auditor_admin($id);
        // var_dump($id_user);

            // hasil desk
        $data['tampil_hasil_desk_utama1'] = $this->Data_ami->tampil_hasil_desk_utama_admin('1', $id_user);
        $data['tampil_hasil_desk_tambahan1'] = $this->Data_ami->tampil_hasil_desk_tambahan_admin('1', $id_user);
        $data['total_checkbox1'] = $this->Data_ami->total_hasil_desk_admin('1', $id_user);

        // daftar tilik
        $data['tampil_daftar_tilik_utama1'] = $this->Data_ami->tampil_daftar_tilik_utama_admin('1', $id_user);
        $data['tampil_daftar_tilik_tambahan1'] = $this->Data_ami->tampil_daftar_tilik_tambahan_admin('1', $id_user);
        $data['total_daftar_tilik1'] = $this->Data_ami->total_daftar_tilik_admin('1', $id_user);
        // var_dump( $data['tampil_hasil_desk_utama1']);

        //2
        // hasil desk
        $data['tampil_hasil_desk_utama2'] = $this->Data_ami->tampil_hasil_desk_utama_admin('2', $id_user);
        $data['tampil_hasil_desk_tambahan2'] = $this->Data_ami->tampil_hasil_desk_tambahan_admin('2', $id_user);
        $data['total_checkbox2'] = $this->Data_ami->total_hasil_desk_admin('2', $id_user);

        // daftar tilik
        $data['tampil_daftar_tilik_utama2'] = $this->Data_ami->tampil_daftar_tilik_utama_admin('2', $id_user);
        $data['tampil_daftar_tilik_tambahan2'] = $this->Data_ami->tampil_daftar_tilik_tambahan_admin('2', $id_user);
        $data['total_daftar_tilik2'] = $this->Data_ami->total_daftar_tilik_admin('2', $id_user);

        //3
        // hasil desk
        $data['tampil_hasil_desk_utama3'] = $this->Data_ami->tampil_hasil_desk_utama_admin('3', $id_user);
        $data['tampil_hasil_desk_tambahan3'] = $this->Data_ami->tampil_hasil_desk_tambahan_admin('3', $id_user);
        $data['total_checkbox3'] = $this->Data_ami->total_hasil_desk_admin('3', $id_user);

        // daftar tilik
        $data['tampil_daftar_tilik_utama3'] = $this->Data_ami->tampil_daftar_tilik_utama_admin('3', $id_user);
        $data['tampil_daftar_tilik_tambahan3'] = $this->Data_ami->tampil_daftar_tilik_tambahan_admin('3', $id_user);
        $data['total_daftar_tilik3'] = $this->Data_ami->total_daftar_tilik_admin('3', $id_user);

        // 4
        $data['tampil_hasil_desk_utama4'] = $this->Data_ami->tampil_hasil_desk_utama_admin('4', $id_user);
        $data['tampil_hasil_desk_tambahan4'] = $this->Data_ami->tampil_hasil_desk_tambahan_admin('4', $id_user);
        $data['total_checkbox4'] = $this->Data_ami->total_hasil_desk_admin('4', $id_user);

        // daftar tilik
        $data['tampil_daftar_tilik_utama4'] = $this->Data_ami->tampil_daftar_tilik_utama_admin('4', $id_user);
        $data['tampil_daftar_tilik_tambahan4'] = $this->Data_ami->tampil_daftar_tilik_tambahan_admin('4', $id_user);
        $data['total_daftar_tilik4'] = $this->Data_ami->total_daftar_tilik_admin('4', $id_user);

        // 5
        $data['tampil_hasil_desk_utama5'] = $this->Data_ami->tampil_hasil_desk_utama_admin('5', $id_user);
        $data['tampil_hasil_desk_tambahan5'] = $this->Data_ami->tampil_hasil_desk_tambahan_admin('5', $id_user);
        $data['total_checkbox5'] = $this->Data_ami->total_hasil_desk_admin('5', $id_user);

        // daftar tilik
        $data['tampil_daftar_tilik_utama5'] = $this->Data_ami->tampil_daftar_tilik_utama_admin('5', $id_user);
        $data['tampil_daftar_tilik_tambahan5'] = $this->Data_ami->tampil_daftar_tilik_tambahan_admin('5', $id_user);
        $data['total_daftar_tilik5'] = $this->Data_ami->total_daftar_tilik_admin('5', $id_user);

        // 6
        $data['tampil_hasil_desk_utama6'] = $this->Data_ami->tampil_hasil_desk_utama_admin('6', $id_user);
        $data['tampil_hasil_desk_tambahan6'] = $this->Data_ami->tampil_hasil_desk_tambahan_admin('6', $id_user);
        $data['total_checkbox6'] = $this->Data_ami->total_hasil_desk_admin('6', $id_user);

        // daftar tilik
        $data['tampil_daftar_tilik_utama6'] = $this->Data_ami->tampil_daftar_tilik_utama_admin('6', $id_user);
        $data['tampil_daftar_tilik_tambahan6'] = $this->Data_ami->tampil_daftar_tilik_tambahan_admin('6', $id_user);
        $data['total_daftar_tilik6'] = $this->Data_ami->total_daftar_tilik_admin('6', $id_user);

        // 7
        $data['tampil_hasil_desk_utama7'] = $this->Data_ami->tampil_hasil_desk_utama_admin('7', $id_user);
        $data['tampil_hasil_desk_tambahan7'] = $this->Data_ami->tampil_hasil_desk_tambahan_admin('7', $id_user);
        $data['total_checkbox7'] = $this->Data_ami->total_hasil_desk_admin('7', $id_user);

        // daftar tilik
        $data['tampil_daftar_tilik_utama7'] = $this->Data_ami->tampil_daftar_tilik_utama_admin('7', $id_user);
        $data['tampil_daftar_tilik_tambahan7'] = $this->Data_ami->tampil_daftar_tilik_tambahan_admin('7', $id_user);
        $data['total_daftar_tilik7'] = $this->Data_ami->total_daftar_tilik_admin('7', $id_user);

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/admin/generatepdf_daftartilik', $data);
        $this->load->view('partials/admin/footer', $data);
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
        $this->load->view('partials/admin/footer', $data);
    }

    public function laporanhasil()
    {

        $data['title'] = 'Laporan Hasil Tindak Lanjut';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['jurusan'] = $this->Data_ami->get_jurusan();

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/laporanhasiltindaklanjut/daftarlaporan', $data);
        $this->load->view('partials/admin/footer', $data);
    }

    public function laporantlprodi()
    {

        $data['title'] = 'Laporan Hasil Tindak Lanjut';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['prodi'] = $this->Data_ami->get_prodi();
        $data['hasil_tindak_lanjut'] = $this->Data_ami->get_hasil_tindak_lanjut();

        // $data['dokumen'] = $this->Data_ami->get_dokprodi($data['params']);

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/laporanhasiltindaklanjut/daftarprodi', $data);
        $this->load->view('partials/admin/footer', $data);
    }

    public function ltlunit()
    {

        $data['title'] = 'Laporan Tindak Lanjut';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['unit'] = $this->Data_ami->get_unit_baru();

        // $data['dokumen'] = $this->Data_ami->get_dokprodi($data['params']);

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/laporanhasiltindaklanjut/daftarunit', $data);
        $this->load->view('partials/admin/footer', $data);
    }

    public function berandaadmin()
    {

        $data['title'] = 'Beranda Admin';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // var_dump($data['user']);
        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/beranda', $data);
        $this->load->view('partials/admin/footer', $data);
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
        $this->load->view('partials/admin/footer', $data);
    }

    public function dokunit()
    {

        $data['title'] = 'Dokumen Kebutuhan Audit';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['unit'] = $this->Data_ami->get_unit_baru();

        // var_dump($data['get_jurusan']);

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/dokumen/dokunit', $data);
        $this->load->view('partials/admin/footer', $data);
    }

    public function dokprodi()
    {

        $data['title'] = 'Dokumen Kebutuhan Audit';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['prodi'] = $this->Data_ami->get_prodi();

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/dokumen/dokprodi', $data);
        $this->load->view('partials/admin/footer', $data);
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
        $this->load->view('partials/admin/footer', $data);
    }

    public function daftarjurusan()
    {

        $data['title'] = 'Dokumen Hasil Audit';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['jurusan'] = $this->Data_ami->get_jurusan();


        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/dokumenhasilaudit/daftarjurusan', $data);
        $this->load->view('partials/admin/footer', $data);
    }

    public function daftarunit()
    {

        $data['title'] = 'Dokumen Hasil Audit';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['unit'] = $this->Data_ami->get_unit_baru();


        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/dokumenhasilaudit/daftarunit', $data);
        $this->load->view('partials/admin/footer', $data);
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
        $this->load->view('partials/admin/footer', $data);
    }

    public function menudaftartilik()
    {

        $data['title'] = 'Hasil Desk Evaluation';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['admin_dokumen_acuan'] = $this->Data_ami->get_acuan();

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/daftartilik/menuutama', $data);
        $this->load->view('partials/admin/footer', $data);
    }

    public function menudaftartilikjurusan()
    {

        $data['title'] = 'Hasil Desk Evaluation';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['admin_dokumen_acuan_jurusan'] = $this->Data_ami->get_acuan_jurusan();

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/daftartilik/menuutama_2', $data);
        $this->load->view('partials/admin/footer', $data);
    }

    public function isidokumenacuan($id)
    {

        $data['title'] = 'Hasil Desk Evaluation';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['admin_hasil_desk'] = $this->Data_ami->get_hasil_desk($id);
        $data['admin_daftar_tilik'] = $this->Data_ami->get_daftar_tilik($id);

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/daftartilik/isidokumen', $data);
        $this->load->view('partials/admin/footer', $data);
    }

    public function isidokumenacuanjurusan($id)
    {

        $data['title'] = 'Hasil Desk Evaluation';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['admin_hasil_desk_jurusan'] = $this->Data_ami->get_hasil_desk_jurusan($id);
        $data['admin_daftar_tilik_jurusan'] = $this->Data_ami->get_daftar_tilik_jurusan($id);

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/daftartilik/isidokumenjurusan', $data);
        $this->load->view('partials/admin/footer', $data);
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
        $this->load->view('partials/admin/footer', $data);
    }

    // public function daftartilik1()
    // {

    //     $data['title'] = 'DAFTAR TILIK (CHECKLIST)';
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();

    //     $this->load->view('partials/admin/header', $data);
    //     $this->load->view('templates/logo', $data);
    //     $this->load->view('partials/admin/sidebar', $data);
    //     $this->load->view('templates/admin/daftartilik/daftartilika2', $data);
    //     $this->load->view('partials/admin/footer', $data);
    // }

    // public function daftartilik2()
    // {

    //     $data['title'] = 'Hasil Desk Evaluation';
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();

    //     $this->load->view('partials/admin/header', $data);
    //     $this->load->view('templates/logo', $data);
    //     $this->load->view('partials/admin/sidebar', $data);
    //     $this->load->view('templates/admin/daftartilik/daftartilikb1', $data);
    //     $this->load->view('partials/admin/footer', $data);
    // }

    // public function daftartilik3()
    // {

    //     $data['title'] = 'DAFTAR TILIK (CHECKLIST)';
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();

    //     $this->load->view('partials/admin/header', $data);
    //     $this->load->view('templates/logo', $data);
    //     $this->load->view('partials/admin/sidebar', $data);
    //     $this->load->view('templates/admin/daftartilik/daftartilikb2', $data);
    //     $this->load->view('partials/admin/footer', $data);
    // }

    // public function daftartilik4()
    // {

    //     $data['title'] = 'Hasil Desk Evaluation';
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();

    //     $this->load->view('partials/admin/header', $data);
    //     $this->load->view('templates/logo', $data);
    //     $this->load->view('partials/admin/sidebar', $data);
    //     $this->load->view('templates/admin/daftartilik/daftartilikc1', $data);
    //     $this->load->view('partials/admin/footer', $data);
    // }
    // public function daftartilik5()
    // {

    //     $data['title'] = 'DAFTAR TILIK (CHECKLIST)';
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();

    //     $this->load->view('partials/admin/header', $data);
    //     $this->load->view('templates/logo', $data);
    //     $this->load->view('partials/admin/sidebar', $data);
    //     $this->load->view('templates/admin/daftartilik/daftartilikc2', $data);
    //     $this->load->view('partials/admin/footer', $data);
    // }

    // public function daftartilik6()
    // {

    //     $data['title'] = 'Hasil Desk Evaluation';
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();

    //     $this->load->view('partials/admin/header', $data);
    //     $this->load->view('templates/logo', $data);
    //     $this->load->view('partials/admin/sidebar', $data);
    //     $this->load->view('templates/admin/daftartilik/daftartilikd1', $data);
    //     $this->load->view('partials/admin/footer', $data);
    // }

    // public function daftartilik7()
    // {

    //     $data['title'] = 'DAFTAR TILIK (CHECKLIST)';
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();

    //     $this->load->view('partials/admin/header', $data);
    //     $this->load->view('templates/logo', $data);
    //     $this->load->view('partials/admin/sidebar', $data);
    //     $this->load->view('templates/admin/daftartilik/daftartilikd2', $data);
    //     $this->load->view('partials/admin/footer', $data);
    // }

    // public function daftartilik8()
    // {

    //     $data['title'] = 'Hasil Desk Evaluation';
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();

    //     $this->load->view('partials/admin/header', $data);
    //     $this->load->view('templates/logo', $data);
    //     $this->load->view('partials/admin/sidebar', $data);
    //     $this->load->view('templates/admin/daftartilik/daftartilike1', $data);
    //     $this->load->view('partials/admin/footer', $data);
    // }

    // public function daftartilik9()
    // {

    //     $data['title'] = 'DAFTAR TILIK (CHECKLIST)';
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();

    //     $this->load->view('partials/admin/header', $data);
    //     $this->load->view('templates/logo', $data);
    //     $this->load->view('partials/admin/sidebar', $data);
    //     $this->load->view('templates/admin/daftartilik/daftartilike2', $data);
    //     $this->load->view('partials/admin/footer', $data);
    // }

    // public function daftartilik10()
    // {

    //     $data['title'] = 'Hasil Desk Evaluation';
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();

    //     $this->load->view('partials/admin/header', $data);
    //     $this->load->view('templates/logo', $data);
    //     $this->load->view('partials/admin/sidebar', $data);
    //     $this->load->view('templates/admin/daftartilik/daftartilikf1', $data);
    //     $this->load->view('partials/admin/footer', $data);
    // }

    // public function daftartilik11()
    // {

    //     $data['title'] = 'DAFTAR TILIK (CHECKLIST)';
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();

    //     $this->load->view('partials/admin/header', $data);
    //     $this->load->view('templates/logo', $data);
    //     $this->load->view('partials/admin/sidebar', $data);
    //     $this->load->view('templates/admin/daftartilik/daftartilikf2', $data);
    //     $this->load->view('partials/admin/footer', $data);
    // }

    // public function daftartilik12()
    // {

    //     $data['title'] = 'Hasil Desk Evaluation';
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();

    //     $this->load->view('partials/admin/header', $data);
    //     $this->load->view('templates/logo', $data);
    //     $this->load->view('partials/admin/sidebar', $data);
    //     $this->load->view('templates/admin/daftartilik/daftartilikg1', $data);
    //     $this->load->view('partials/admin/footer', $data);
    // }

    // public function daftartilik13()
    // {

    //     $data['title'] = 'DAFTAR TILIK (CHECKLIST)';
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();

    //     $this->load->view('partials/admin/header', $data);
    //     $this->load->view('templates/logo', $data);
    //     $this->load->view('partials/admin/sidebar', $data);
    //     $this->load->view('templates/admin/daftartilik/daftartilikg2', $data);
    //     $this->load->view('partials/admin/footer', $data);
    // }

    public function TambahData()
    {

        $data['title'] = 'Hasil Desk Evaluation';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/daftartilik/tambahdata', $data);
        $this->load->view('partials/admin/footer', $data);
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
            $this->load->view('partials/admin/footer', $data);
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
            $this->load->view('partials/admin/footer', $data);
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
        $this->load->view('partials/admin/footer', $data);
    }

    public function user()
    {

        $data['title'] = 'Daftar User';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['users'] = $this->Data_ami->get_user();

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/user/daftaruser', $data);
        $this->load->view('partials/admin/footer', $data);
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
            $this->load->view('partials/admin/footer', $data);
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
            $this->load->view('partials/admin/footer', $data);
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
            $this->load->view('partials/admin/footer', $data);
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
        $data['unit'] = $this->Data_ami->get_unit();
        $data['unit_baru'] = $this->Data_ami->get_unit_baru();

        // var_dump( $data['unit_baru']);


        // $this->form_validation->set_rules('nama_lembaga', 'Nama Lembaga', 'required');
        // $this->form_validation->set_rules('nama_auditor', 'Nama Auditor', 'required');
        // $this->form_validation->set_rules('nip_nrk', 'NIP_NRK', 'required');
        // var_dump($data['unit']);
        // if ($this->form_validation->run() == FALSE) {
        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/user/tambahuser', $data);
        $this->load->view('partials/admin/footer', $data);
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

        // var_dump($today);

        // $tgl_akhir = "2023-07-07"; // Tanggal selesai yang digunakan sebagai contoh
        // $tanggal_akhir = new DateTime($tgl_akhir);

        // $now = new DateTime();
        // $now->setTime(0, 0, 0); // Set waktu saat ini ke pukul 00:00:00

        // $selisih_hari = $now->diff($tanggal_akhir)->days;
        // // var_dump($selisih_hari);


        // if ($selisih_hari <= 7 && $selisih_hari > 3) {
        //     $ket = "7hari";
        // } elseif ($selisih_hari <= 3) {
        //     $ket = "3hari";
        // }
        // var_dump($ket);



        // Kirim data selisih hari ke view
        // $data['days_remaining'] = ceil($days_remaining);

        // Load view notification_badge.php dengan data yang telah dikirim
        // $this->load->view('user/notifikasi', $data);
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


        $this->form_validation->set_rules('unit', 'Unit', 'required');
        $this->form_validation->set_rules('name', 'name', 'required');
        // $this->form_validation->set_rules('nip_nrk', 'NIP_NRK', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('partials/admin/header', $data);
            $this->load->view('templates/logo', $data);
            $this->load->view('partials/admin/sidebar', $data);
            $this->load->view('templates/admin/auditor/editauditor', $data);
            $this->load->view('partials/admin/footer', $data);
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
        // var_dump($data['dokumen']);
        // var_dump(base_url('assets/dokumen/KP2-Form-Presensi-dan-Log-Sheet-KP-IF-REV.pdf'));
        $data['pdfFilePath'] = $data['dokumen'][0]->nama_file;

        // $this->load->view('lihatdokumen', ['pdfFilePath' => $pdfFilePath]);

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('templates/admin/dokumen/lihatdokumen', $data);
        $this->load->view('partials/admin/footer', $data);
    }


    public function download($id)
    {
        $data['title'] = '';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        // $data['pdfFilePath'] = 'dokumen/';

        $data['dokumen'] = $this->Data_ami->get_dokumen_link($id);
        // var_dump($data['dokumen']);
        // var_dump(base_url('assets/dokumen/KP2-Form-Presensi-dan-Log-Sheet-KP-IF-REV.pdf'));
        $data['pdfFilePath'] = $data['dokumen'][0]->nama_file;
        var_dump($data['pdfFilePath']);

        // $this->load->view('lihatdokumen', ['pdfFilePath' => $pdfFilePath]);
    }

    public function tambah_hasil_desk()
    {

        $id = $this->input->post('id_dokumen_acuan');

        $this->Data_ami->tambah_hasil_desk();
        $this->session->set_flashdata('flash', 'ditambahkan');
        redirect('user/isidokumenacuan/' . $id);
    }

    public function tambah_daftar_tilik()
    {

        $id = $this->input->post('id_dokumen_acuan');

        $this->Data_ami->tambah_daftar_tilik();
        $this->session->set_flashdata('flash', 'ditambahkan');
        redirect('user/isidokumenacuan/' . $id);
    }

    public function tambah_hasil_desk_jurusan()
    {

        $id = $this->input->post('id_dokumen_acuan');

        $this->Data_ami->tambah_hasil_desk_jurusan();
        $this->session->set_flashdata('flash', 'ditambahkan');
        redirect('user/isidokumenacuanjurusan/' . $id);
    }

    public function tambah_daftar_tilik_jurusan()
    {

        $id = $this->input->post('id_dokumen_acuan');

        $this->Data_ami->tambah_daftar_tilik_jurusan();
        $this->session->set_flashdata('flash', 'ditambahkan');
        redirect('user/isidokumenacuanjurusan/' . $id);
    }



    public function profile()
    {
        $data['title'] = '';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // var_dump(
        //     $data['user']
        // );

        $this->load->view('partials/admin/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/admin/sidebar', $data);
        $this->load->view('partials/admin/topbar', $data);
        $this->load->view('templates/admin/profile', $data);
        $this->load->view('partials/admin/footer', $data);
    }


    //lihat dokumen tindak lanjut msing msing unit 
    public function generate_pdf($params)
    {
        $data['title'] = 'Laporan Hasil Tindak Lanjut';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        // $data['hasil_tindak_lanjut'] = $this->Data_ami->get_id_hasil_tindak_lanjut();


        $data['tindaklanjut'] = $this->Data_ami->get_data($params);
        $data['bab2'] = $this->Data_ami->get_data2($params);
        $this->load->view('partials/prodi/header', $data);
        $this->load->view('templates/prodi/laporanhasilprodi/generatepdf', $data);
        $this->load->view('partials/prodi/footer', $data);
    }

    public function verifikasi()
    {

        $data['title'] = ' Verifikasi Hasil Audit';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['hasil_tindak_lanjut'] = $this->Data_ami->get_id_hasil_tindak_lanjut();
        $data['unit'] = $this->Data_ami->get_unit_by_id($data['user']['id_audit']);

        // $data['hasilaudit'] = $this->Data_ami->get_id_hasil_audit_baru($id);


        // $this->form_validation->set_rules('nama_penyusunan', 'Nama', 'required');
        // $this->form_validation->set_rules('pemeriksa1', 'Nama', 'required');
        // $this->form_validation->set_rules('penetapan1', 'Nama', 'required');

        // $this->form_validation->set_rules('file_dokumen', 'File Dokumen', 'in_list');
        // $this->form_validation->set_rules('dokumentasi', 'File Dokumentasi', 'in_list');
        // $this->form_validation->set_rules('tahun', 'Tahun', 'required');
        // $this->form_validation->set_rules('lembaga', 'Lembaga', 'required');
        // $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        // $this->form_validation->set_rules('NIP', 'NIP', 'required');
        // $this->form_validation->set_rules('periode', 'Periode', 'required');
        // $this->form_validation->set_rules('hari_tgl', 'Hari dan Tanggal', 'required');
        // $this->form_validation->set_rules('waktu', 'waktu', 'required');
        // $this->form_validation->set_rules('tempat', 'Tempat', 'required');
        // $this->form_validation->set_rules('auditor', 'Auditor', 'required');
        // $this->form_validation->set_rules('auditee', 'Auditee', 'required');
        // $this->form_validation->set_rules('tanggalDE', 'Tanggal DE', 'required');
        // $this->form_validation->set_rules('jangka_waktu', 'Jangka Waktu Perbaikan', 'required');

        $this->form_validation->set_rules('verifikasi', 'Verifikasi', 'in_list');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('partials/admin/header', $data);
            $this->load->view('templates/logo', $data);
            $this->load->view('partials/admin/sidebar', $data);
            $this->load->view('templates/admin/verifikasi', $data);
            $this->load->view('partials/admin/footer', $data);
        } else {

            $this->session->set_flashdata('flash', 'ditambahkan');
            $data['nama_verifikasi'] = 'template1.png';
            // var_dump($_FILES['foto_pengesahan']['name']);

            if ($_FILES['verifikasi']['name']) {
                $config['upload_path'] = './assets/dokumen';
                $config['allowed_types'] = array('jpg', 'jpeg', 'png');
                $config['max_size'] = 2048; // 2MB
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('verifikasi')) {
                    $error = array('error' => $this->upload->display_errors());
                } else {
                    $upload_data = $this->upload->data();
                    $data['nama_verifikasi'] = $upload_data['file_name'];
                }
            }

            // var_dump($data['nama_file_pengesahan'], $data['nama_file_dokumentasi']);
            $this->Data_ami->tambah_hasilaudit($data['user']['id'], $data['nama_verifikasi'], $data['nama_verifikasi']);
            redirect('user/generate_pdf_hasil_audit');
        }
    }

}
