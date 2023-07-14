<?php

use LDAP\Result;

defined('BASEPATH') or exit('No direct script access allowed');

class auditor extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Data_ami');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('table');

        if ($this->session->userdata('role_name') != "Auditor Program Studi") {
            redirect("auth");
        }
    }

    public function BERANDA()
    {
        $data['title'] = 'Beranda Auditor Prodi';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        // var_dump($data['user']['id_audit']);
        $data['unit'] = $this->Data_ami->get_unit_by_id($data['user']['id_audit']);

        $this->load->view('partials/auditor/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditor/sidebar', $data);
        $this->load->view('partials/auditor/topbar', $data);
        $this->load->view('templates/auditor/berandaauditor', $data);
        $this->load->view('partials/auditor/footer', $data);
    }

    public function input_status()
    {
    }

    public function DAFTARTILIK()
    {
        $data['title'] = 'Hasil Desk Evaluation';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['unit'] = $this->Data_ami->get_unit_by_id($data['user']['id_audit']);

        $this->load->view('partials/auditor/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditor/sidebar', $data);
        $this->load->view('partials/auditor/topbar', $data);
        $this->load->view('templates/auditor/DaftarTilik/daftartilik', $data);
        $this->load->view('partials/auditor/footer', $data);
    }

    public function dta2()
    {
        $data['title'] = 'DAFTAR TILIK (CHECKLIST)';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['unit'] = $this->Data_ami->get_unit_by_id($data['user']['id_audit']);


        $this->load->view('partials/auditor/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditor/sidebar', $data);
        $this->load->view('partials/auditor/topbar', $data);
        $this->load->view('templates/auditor/DaftarTilik/a2', $data);
        $this->load->view('partials/auditor/footer', $data);
    }

    public function dtb1()
    {
        $data['title'] = 'Hasil Desk Evaluation';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['unit'] = $this->Data_ami->get_unit_by_id($data['user']['id_audit']);


        $this->load->view('partials/auditor/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditor/sidebar', $data);
        $this->load->view('partials/auditor/topbar', $data);
        $this->load->view('templates/auditor/DaftarTilik/b1', $data);
        $this->load->view('partials/auditor/footer', $data);
    }

    public function dtb2()
    {
        $data['title'] = 'DAFTAR TILIK (CHECKLIST)';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->load->view('partials/auditor/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditor/sidebar', $data);
        $this->load->view('partials/auditor/topbar', $data);
        $this->load->view('templates/auditor/DaftarTilik/b2', $data);
        $this->load->view('partials/auditor/footer', $data);
    }

    public function dtc1()
    {
        $data['title'] = 'Hasil Desk Evaluation';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->load->view('partials/auditor/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditor/sidebar', $data);
        $this->load->view('partials/auditor/topbar', $data);
        $this->load->view('templates/auditor/DaftarTilik/c1', $data);
        $this->load->view('partials/auditor/footer', $data);
    }

    public function dtc2()
    {
        $data['title'] = 'DAFTAR TILIK (CHECKLIST)';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->load->view('partials/auditor/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditor/sidebar', $data);
        $this->load->view('partials/auditor/topbar', $data);
        $this->load->view('templates/auditor/DaftarTilik/c2', $data);
        $this->load->view('partials/auditor/footer', $data);
    }

    public function dtd1()
    {
        $data['title'] = 'Hasil Desk Evaluation';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->load->view('partials/auditor/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditor/sidebar', $data);
        $this->load->view('partials/auditor/topbar', $data);
        $this->load->view('templates/auditor/DaftarTilik/d1', $data);
        $this->load->view('partials/auditor/footer', $data);
    }

    public function dtd2()
    {
        $data['title'] = 'DAFTAR TILIK (CHECKLIST)';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->load->view('partials/auditor/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditor/sidebar', $data);
        $this->load->view('partials/auditor/topbar', $data);
        $this->load->view('templates/auditor/DaftarTilik/d2', $data);
        $this->load->view('partials/auditor/footer', $data);
    }

    public function dte1()
    {
        $data['title'] = 'Hasil Desk Evaluation';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->load->view('partials/auditor/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditor/sidebar', $data);
        $this->load->view('partials/auditor/topbar', $data);
        $this->load->view('templates/auditor/DaftarTilik/e1', $data);
        $this->load->view('partials/auditor/footer', $data);
    }

    public function dte2()
    {
        $data['title'] = 'DAFTAR TILIK (CHECKLIST)';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->load->view('partials/auditor/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditor/sidebar', $data);
        $this->load->view('partials/auditor/topbar', $data);
        $this->load->view('templates/auditor/DaftarTilik/e2', $data);
        $this->load->view('partials/auditor/footer', $data);
    }

    public function dtf1()
    {
        $data['title'] = 'Hasil Desk Evaluation';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->load->view('partials/auditor/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditor/sidebar', $data);
        $this->load->view('partials/auditor/topbar', $data);
        $this->load->view('templates/auditor/DaftarTilik/f1', $data);
        $this->load->view('partials/auditor/footer', $data);
    }

    public function dtf2()
    {
        $data['title'] = 'DAFTAR TILIK (CHECKLIST)';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->load->view('partials/auditor/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditor/sidebar', $data);
        $this->load->view('partials/auditor/topbar', $data);
        $this->load->view('templates/auditor/DaftarTilik/f2', $data);
        $this->load->view('partials/auditor/footer', $data);
    }

    public function dtg1()
    {
        $data['title'] = 'Hasil Desk Evaluation';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->load->view('partials/auditor/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditor/sidebar', $data);
        $this->load->view('partials/auditor/topbar', $data);
        $this->load->view('templates/auditor/DaftarTilik/g1', $data);
        $this->load->view('partials/auditor/footer', $data);
    }

    public function dtg2()
    {
        $data['title'] = 'DAFTAR TILIK (CHECKLIST)';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->load->view('partials/auditor/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditor/sidebar', $data);
        $this->load->view('partials/auditor/topbar', $data);
        $this->load->view('templates/auditor/DaftarTilik/g2', $data);
        $this->load->view('partials/auditor/footer', $data);
    }



    public function dokumenaudit()
    {
        $data['title'] = 'Dokumen Kebutuhan Audit';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->load->view('partials/auditor/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditor/sidebar', $data);
        $this->load->view('partials/auditor/topbar', $data);
        $this->load->view('templates/auditor/dokumenKA', $data);
        $this->load->view('partials/auditor/footer', $data);
    }

    public function pilihan()
    {
        $data['title'] = 'Daftar Tilik';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['unit'] = $this->Data_ami->get_unit_by_id($data['user']['id_audit']);

        $data['tampil_dokumen_acuan'] = $this->Data_ami->tampil_dok_acuan();



        $this->load->view('partials/auditor/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditor/sidebar', $data);
        $this->load->view('partials/auditor/topbar', $data);
        $this->load->view('templates/auditor/DaftarTilik/menuutama', $data);
        $this->load->view('partials/auditor/footer', $data);
    }

    public function pertanyaan_dok_acuan($id)
    {
        $data['title'] = 'Pengisian Daftar Tilik';
        $data['title1'] = 'Hasil Desk Evaluation';
        $data['title2'] = 'Daftar Tilik ( Checklist )';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['unit'] = $this->Data_ami->get_unit_by_id($data['user']['id_audit']);

        $data['tampil_hasil_desk'] = $this->Data_ami->tampil_hasil_desk_auditor($id);
        $data['tampil_daftar_tilik'] = $this->Data_ami->tampil_daftar_tilik_auditor($id);
        $data['tampil_tambahan_hasil_desk_auditor'] = $this->Data_ami->tampil_tambahan_hasil_desk_auditor($id);

        $this->load->view('partials/auditor/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditor/sidebar', $data);
        $this->load->view('partials/auditor/topbar', $data);
        $this->load->view('templates/auditor/DaftarTilik/hasil_desk', $data);
        $this->load->view('partials/auditor/footer', $data);
    }

    public function tambahan_hasil_desk_auditor()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['unit'] = $this->Data_ami->get_unit_by_id($data['user']['id_audit']);
        $id = $this->input->post('id_dokumen_acuan');

        $this->Data_ami->add_hasil_desk_auditor();
        $this->session->set_flashdata('flash', 'ditambahkan');
        redirect('auditor/pertanyaan_dok_acuan/' . $id);
    }
    
    public function add_nilai_hasil_desk_utama()
    {
        $id = $this->input->post('id_dokumen_acuan');
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['unit'] = $this->Data_ami->get_unit_by_id($data['user']['id_audit']);

        $this->Data_ami->add_nilai_hasil_desk_utama();

        var_dump($this->Data_ami->add_nilai_hasil_desk_utama());

        $this->session->set_flashdata('flash', 'ditambahkan');
        redirect('auditor/pertanyaan_dok_acuan/' . $id);
    }
}
