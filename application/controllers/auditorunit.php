<?php

use LDAP\Result;

defined('BASEPATH') or exit('No direct script access allowed');

class auditorunit extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Data_ami');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('table');

        if ($this->session->userdata('role_name') != "Auditor Unit") {
            redirect("auth");
        }
    }

    public function berandaauditorunit()
    {
        $data['title'] = 'Beranda Auditor Unit';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        // var_dump($data['user']['id_audit']);
        $data['unit'] = $this->Data_ami->get_unit_by_id($data['user']['id_audit']);
        // $data['hasil_tindak_lanjut'] = $this->Data_ami->get_id_hasil_tindak_lanjut();

        $this->load->view('partials/auditorunit/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditorunit/sidebar', $data);
        $this->load->view('partials/auditorunit/topbar', $data);
        $this->load->view('templates/auditorunit/beranda', $data);
        $this->load->view('partials/auditorunit/footer', $data);
    }

    public function pilihan()
    {
        $data['title'] = 'Daftar Tilik';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['unit'] = $this->Data_ami->get_unit_by_id($data['user']['id_audit']);

        // harus ditaruh disemua tempat
        // $data['hasil_tindak_lanjut'] = $this->Data_ami->get_id_hasil_tindak_lanjut();


        $this->load->view('partials/auditorunit/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditorunit/sidebar', $data);
        $this->load->view('partials/auditorunit/topbar', $data);
        $this->load->view('templates/auditorunit/daftartilik/menuutama', $data);
        $this->load->view('partials/auditorunit/footer', $data);
    }

    public function pertanyaan_dok_acuan()
    {
        $data['title'] = 'Pengisian Daftar Tilik';
        $data['title1'] = 'Hasil Desk Evaluation';
        $data['title2'] = 'Daftar Tilik ( Checklist )';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['unit'] = $this->Data_ami->get_unit_by_id($data['user']['id_audit']);

        // hasil desk
        $data['tampil_hasil_desk_tambahan_unit'] = $this->Data_ami->tampil_hasil_desk_tambahan_unit();
        $data['total_checkbox'] = $this->Data_ami->total_hasil_desk_unit();

        // daftar tilik
        $data['tampil_daftar_tilik_tambahan_unit'] = $this->Data_ami->tampil_daftar_tilik_tambahan_unit();
        $data['total_daftar_tilik'] = $this->Data_ami->total_daftar_tilik_unit();

        $data['hasil_tindak_lanjut'] = $this->Data_ami->get_id_hasil_tindak_lanjut();
        // $data['jumlah'] = $this->Data_ami->jumlah_nilai($id);

        $this->load->view('partials/auditorunit/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditorunit/sidebar', $data);
        $this->load->view('partials/auditorunit/topbar', $data);
        $this->load->view('templates/auditorunit/daftartilik/hasildesk', $data);
        $this->load->view('partials/auditorunit/footer', $data);
    }

    // DAFTAR TILIK

    function add_hasil_desk_tambahan()
    {
        // $id = $this->input->post('id_dokumen_acuan');
        $this->Data_ami->add_hasil_desk_tambahan_unit();

        redirect('auditorunit/pertanyaan_dok_acuan');
    }

    function add_nilai_hasil_desk_tambahan()
    {
        // $id = $this->input->post('id_dokumen_acuan');
        $this->Data_ami->add_nilai_hasil_desk_tambahan_unit();

        redirect('auditorunit/pertanyaan_dok_acuan');
    }

    // nilai daftar_tilik utama
    function add_nilai_daftar_tilik_utama()
    {
        // $id = $this->input->post('id_dokumen_acuan');
        $this->Data_ami->add_nilai_daftar_tilik_utama_unit();

        redirect('auditorunit/pertanyaan_dok_acuan');
    }

    function add_nilai_daftar_tilik_tambahan()
    {
        // $id = $this->input->post('id_dokumen_acuan');
        $this->Data_ami->add_nilai_daftar_tilik_tambahan_unit();

        redirect('auditorunit/pertanyaan_dok_acuan');
    }

    function add_daftar_tilik_tambahan()
    {
        // $id = $this->input->post('id_dokumen_acuan');
        $this->Data_ami->add_daftar_tilik_tambahan_unit();

        redirect('auditorunit/pertanyaan_dok_acuan');
    }


    public function profile()
    {
        $data['title'] = '';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();



        $this->load->view('partials/auditor/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditor/sidebar', $data);
        $this->load->view('partials/auditor/topbar', $data);
        $this->load->view('templates/auditor/profile', $data);
        $this->load->view('partials/auditor/footer', $data);
    }
}
