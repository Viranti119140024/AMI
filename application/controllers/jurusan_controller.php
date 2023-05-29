<?php

use LDAP\Result;

defined('BASEPATH') or exit('No direct script access allowed');

class jurusan_controller extends CI_Controller
{

    public function dokumen()
    {
        $data['title'] = 'Dokumen Kebutuhan Audit';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/jurusan/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/jurusan/sidebar', $data);
        $this->load->view('templates/jurusan/dokumenkebutuhan/dokumen', $data);

    } 

    public function laporanhasil1()
    {

        $data['title'] = 'Laporan Hasil Tindak Lanjut';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/jurusan/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/jurusan/sidebar', $data);
        $this->load->view('templates/jurusan/laporanhasiltindaklanjut/hal2', $data);
    }

    public function kp()
    {

        $data['title'] = 'Laporan Hasil Tindak Lanjut';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/jurusan/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/jurusan/sidebar', $data);
        $this->load->view('templates/jurusan/laporanhasiltindaklanjut/katapengantar', $data);
    }

    public function pendahuluan()
    {

        $data['title'] = 'Laporan Hasil Tindak Lanjut';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/jurusan/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/jurusan/sidebar', $data);
        $this->load->view('templates/jurusan/laporanhasiltindaklanjut/bab1', $data);
    }

    public function tindaklanjut()
    {

        $data['title'] = 'Laporan Hasil Tindak Lanjut';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/jurusan/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/jurusan/sidebar', $data);
        $this->load->view('templates/jurusan/laporanhasiltindaklanjut/bab2', $data);
    }

    public function kesimpulan()
    {

        $data['title'] = 'Laporan Hasil Tindak Lanjut';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/jurusan/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/jurusan/sidebar', $data);
        $this->load->view('templates/jurusan/laporanhasiltindaklanjut/bab3', $data);
    }

    public function awalaudit()
    {

        $data['title'] = 'Laporan Hasil Tindak Lanjut';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/jurusan/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/jurusan/sidebar', $data);
        $this->load->view('templates/jurusan/hasilaudit/laporanjurusan', $data);
    }

    public function kp1()
    {

        $data['title'] = 'Laporan Hasil Tindak Lanjut';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/jurusan/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/jurusan/sidebar', $data);
        $this->load->view('templates/jurusan/hasilaudit/kata_p', $data);
    }

    public function babpendahuluan()
    {

        $data['title'] = 'Laporan Hasil Tindak Lanjut';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/jurusan/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/jurusan/sidebar', $data);
        $this->load->view('templates/jurusan/hasilaudit/bab_1', $data);
    }

    public function daftartemuan()
    {

        $data['title'] = 'Laporan Hasil Tindak Lanjut';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/jurusan/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/jurusan/sidebar', $data);
        $this->load->view('templates/jurusan/hasilaudit/bab_2', $data);
    }
}