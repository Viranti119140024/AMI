<?php

use LDAP\Result;

defined('BASEPATH') or exit('No direct script access allowed');

class jurusan_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Data_ami');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('table');


        if ($this->session->userdata('role_name') != "Jurusan") {
            redirect("auth");
        }
    }

    public function berandajurusan()
    {
        $data['title'] = 'Beranda Jurusan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        var_dump($data['user']);

        $this->load->view('partials/jurusan/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/jurusan/sidebar', $data);
        $this->load->view('templates/jurusan/beranda', $data);
    }

    public function dokumen()
    {
        $data['title'] = 'Dokumen Kebutuhan Audit';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        // var_dump((int)$data['user']['id']);

        $data['dokumen'] = $this->Data_ami->get_dokjurusan($data['user']['id']);

        // var_dump($this->Data_ami->get_dokjurusan( (int)$data['user']['id']));

        $this->load->view('partials/jurusan/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/jurusan/sidebar', $data);
        $this->load->view('templates/jurusan/dokumenkebutuhan/dokumen', $data);
    }

    //upload dokumen

    public function upload_dokumen($id)
    {
        $data['title'] = 'Form Upload Dokumen';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['id'] = $id;
        // var_dump($id);

        // $data['dokumen'] = $this->Data_ami->update_dokumen($data['user']['id']);

        // $this->form_validation->set_rules('nama', 'Nama Dokumen', 'required');
        $this->form_validation->set_rules('file_dokumen', 'File Dokumen', 'in_list');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('partials/jurusan/header', $data);
            $this->load->view('templates/logo', $data);
            $this->load->view('partials/jurusan/sidebar', $data);
            $this->load->view('templates/jurusan/dokumenkebutuhan/upload', $data);
        } else {
            // var_dump($id);
            // var_dump($_FILES['file_dokumen']);

            if ($_FILES['file_dokumen']['name']) {
                $config['upload_path'] = './assets/dokumen';
                $config['allowed_types'] = 'pdf';
                $config['max_size'] = 2048; // 2MB

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('file_dokumen')) {
                    $error = array('error' => $this->upload->display_errors());
                    // var_dump($error);
                } else {
                    // var_dump("bisa diupload");
                    $upload_data = $this->upload->data();
                    // var_dump($upload_data);
                    $data['nama_file'] = $upload_data['file_name'];
                    $data['type'] = $upload_data['file_type'];
                    $data['ukuran'] = $upload_data['file_size'];
                    $this->Data_ami->update_dokumen($id, $data['nama_file'], $data['type'], $data['ukuran']);
                    redirect('jurusan_controller/dokumen');
                }
            }
            $this->session->set_flashdata('flash', 'ditambahkan');
        }
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
