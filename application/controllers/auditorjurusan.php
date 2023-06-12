<?php

use LDAP\Result;

defined('BASEPATH') or exit('No direct script access allowed');

class auditorjurusan extends CI_Controller
{

    public function berandaauditorjurusan()
    {
        $data['title'] = 'Beranda Auditor Jurusan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->load->view('partials/auditorjurusan/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditorjurusan/sidebar', $data);
        $this->load->view('partials/auditorjurusan/topbar', $data);
        $this->load->view('templates/auditorjurusan/beranda_auditor', $data);
    }

    public function kebutuhanauditt()
    {
        $data['title'] = 'Dokumen Kebutuhan Audit';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->load->view('partials/auditorjurusan/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditorjurusan/sidebar', $data);
        $this->load->view('partials/auditorjurusan/topbar', $data);
        $this->load->view('templates/auditorjurusan/kebutuhanaudit', $data);
    }

    public function DaftarHadir()
    {
        $data['title'] = '';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->load->view('partials/auditorjurusan/header', $data); 
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditorjurusan/sidebar', $data);
        $this->load->view('partials/auditorjurusan/topbar', $data);
        $this->load->view('templates/auditorjurusan/daftartilik/daftarhadir', $data);
    }

    public function TambahDaftarHadir()
    {
        $data['title'] = '';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->load->view('partials/auditorjurusan/header', $data); 
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditorjurusan/sidebar', $data);
        $this->load->view('partials/auditorjurusan/topbar', $data);
        $this->load->view('templates/auditorjurusan/daftartilik/tambahdaftarhadir', $data);
    }

    public function DaftarTilik()
    {
        $data['title'] = 'Hasil Desk Evaluation';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->load->view('partials/auditorjurusan/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditorjurusan/sidebar', $data);
        $this->load->view('partials/auditorjurusan/topbar', $data);
        $this->load->view('templates/auditorjurusan/daftartilik/DAFTARTILIK', $data);
    }

    public function dth2()
    {
        $data['title'] = 'DAFTAR TILIK (CHECKLIST)';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->load->view('partials/auditorjurusan/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditorjurusan/sidebar', $data);
        $this->load->view('partials/auditorjurusan/topbar', $data);
        $this->load->view('templates/auditorjurusan/daftartilik/h2', $data);
    }

    public function dtg1()
    {
        $data['title'] = 'Hasil Desk Evaluation';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->load->view('partials/auditorjurusan/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditorjurusan/sidebar', $data);
        $this->load->view('partials/auditorjurusan/topbar', $data);
        $this->load->view('templates/auditorjurusan/daftartilik/g1', $data);
    }

    public function dtg2()
    {
        $data['title'] = 'DAFTAR TILIK (CHECKLIST)';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->load->view('partials/auditorjurusan/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditorjurusan/sidebar', $data);
        $this->load->view('partials/auditorjurusan/topbar', $data);
        $this->load->view('templates/auditorjurusan/daftartilik/g2', $data);
    }

    public function dt_h1()
    {
        $data['title'] = 'Hasil Desk Evaluation';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->load->view('partials/auditorjurusan/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditorjurusan/sidebar', $data);
        $this->load->view('partials/auditorjurusan/topbar', $data);
        $this->load->view('templates/auditorjurusan/daftartilik/h_1', $data);
    }

    public function dt_h2()
    {
        $data['title'] = 'DAFTAR TILIK (CHECKLIST)';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->load->view('partials/auditorjurusan/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditorjurusan/sidebar', $data);
        $this->load->view('partials/auditorjurusan/topbar', $data);
        $this->load->view('templates/auditorjurusan/daftartilik/h_2', $data);
    }

    public function profile()
    {
        $data['title'] = '';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->load->view('partials/auditorjurusan/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditorjurusan/sidebar', $data);
        $this->load->view('partials/auditorjurusan/topbar', $data);
        $this->load->view('templates/auditorjurusan/profile', $data);
    }


}
