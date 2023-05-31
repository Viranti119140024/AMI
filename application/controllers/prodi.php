<?php

use LDAP\Result;

defined('BASEPATH') or exit('No direct script access allowed');

class prodi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('table');


        // if ($this->session->userdata('role_name') != "prodi") {
        //     redirect("auth");
        // }
    }

    public function dokumenkebutuhan()
    {
        $data['title'] = 'Dokumen Kebutuhan Audit Prodi';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/prodi/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/prodi/sidebar', $data);
        $this->load->view('templates/prodi/dokumenkebutuhanprodi/dokumenAudit', $data);
    }

    public function halamanawal()
    {

        $data['title'] = 'Laporan Hasil Audit';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/prodi/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/prodi/sidebar', $data);
        $this->load->view('templates/prodi/hasilauditprodi/laporanaudit', $data);
    }

    public function katapengantarr()
    {

        $data['title'] = 'Laporan Hasil Audit';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/prodi/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/prodi/sidebar', $data);
        $this->load->view('templates/prodi/hasilauditprodi/katapengantar1', $data);
    }

    public function BAB1()
    {

        $data['title'] = 'Laporan Hasil Audit';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/prodi/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/prodi/sidebar', $data);
        $this->load->view('templates/prodi/hasilauditprodi/babsatu', $data);
    }

    public function BAB2()
    {

        $data['title'] = 'Laporan Hasil Audit';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/prodi/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/prodi/sidebar', $data);
        $this->load->view('templates/prodi/hasilauditprodi/babdua', $data);
    }

    public function laporanhasilprodi()
    {

        $data['title'] = 'Laporan Hasil Tindak Lanjut';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/prodi/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/prodi/sidebar', $data);
        $this->load->view('templates/prodi/laporanhasilprodi/halamansatu', $data);
    }

    public function kataP()
    {

        $data['title'] = 'Laporan Hasil Tindak Lanjut';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/prodi/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/prodi/sidebar', $data);
        $this->load->view('templates/prodi/laporanhasilprodi/katapengantar2', $data);
    }

    public function BabSatu()
    {

        $data['title'] = 'Laporan Hasil Tindak Lanjut';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/prodi/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/prodi/sidebar', $data);
        $this->load->view('templates/prodi/laporanhasilprodi/babsatuu', $data);
    }

    public function BabDua()
    {

        $data['title'] = 'Laporan Hasil Tindak Lanjut';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/prodi/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/prodi/sidebar', $data);
        $this->load->view('templates/prodi/laporanhasilprodi/babduaa', $data);
    }

    public function BabTiga()
    {

        $data['title'] = 'Laporan Hasil Tindak Lanjut';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/prodi/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/prodi/sidebar', $data);
        $this->load->view('templates/prodi/laporanhasilprodi/babtigaa', $data);
    }
}
