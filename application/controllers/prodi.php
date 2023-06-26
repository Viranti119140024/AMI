<?php

use LDAP\Result;

defined('BASEPATH') or exit('No direct script access allowed');

class prodi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Data_ami');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('table');


        if ($this->session->userdata('role_name') != "Program Studi") {
            redirect("auth");
        }
    }

    public function berandaprodi()
    {
        $data['title'] = 'Beranda Prodi';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('partials/prodi/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/prodi/sidebar', $data);
        $this->load->view('templates/prodi/beranda', $data);
    }


    public function dokumenkebutuhan()
    {
        $data['title'] = 'Dokumen Kebutuhan Audit Prodi';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        // var_dump($data['user']['id']);

        $data['dokumen'] = $this->Data_ami->get_dokprodi($data['user']['id']);

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


    //upload dokumen

    public function update($id)
    {
        $data = array(
            'nama_file' => $this->input->post('nama_file'),
            'type' => $this->input->post('type'),
            'ukuran' => $this->input->post('ukuran'),
        );

        if ($_FILES['image']['name']) {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'pdf';
            $config['max_size'] = 2048; // 2MB

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('image')) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('dokumen', $error);
            } else {
                $upload_data = $this->upload->data();
                $data['image'] = $upload_data['nama_file'];
            }
        }

        $this->Data_ami->update_dokumen($id, $data);
        redirect('prodi/show/' . $id);
    }
}
