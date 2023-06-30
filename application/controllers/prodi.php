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
            $this->load->view('partials/prodi/header', $data);
            $this->load->view('templates/logo', $data);
            $this->load->view('partials/prodi/sidebar', $data);
            $this->load->view('templates/prodi/dokumenkebutuhanprodi/formupload', $data);
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
                    redirect('prodi/dokumenkebutuhan');
                }
            }
            $this->session->set_flashdata('flash', 'ditambahkan');
            
        }
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

    // public function update($id)
    // {
    //     $data['gambar'] = array(
    //         'nama_file' => $this->input->post('nama_file'),
    //         'type' => $this->input->post('type'),
    //         'ukuran' => $this->input->post('ukuran'),
    //     );

    //     if ($_FILES['image']['nama_file']) {
    //         $config['upload_path'] = './uploads/';
    //         $config['allowed_types'] = 'pdf';
    //         $config['max_size'] = 2048; // 2MB

    //         $this->upload->initialize($config);

    //         if (!$this->upload->do_upload('image')) {
    //             $error = array('error' => $this->upload->display_errors());
    //             $this->load->view('dokumen', $error);
    //         } else {
    //             var_dump($data['gambar']);
    //             // $upload_data = $this->upload->data();
    //             // $data['nama_file'] = $upload_data['nama_file'];
    //             // $data['type'] = $upload_data['type'];
    //             // $data['ukuran'] = $upload_data['ukuran'];
    //         }
    //     }

    //     // $this->Data_ami->update_dokumen($id, $data);
    //     // redirect('prodi/show/' . $id);
    // }
}
