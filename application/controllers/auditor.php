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
        $data['hasil_tindak_lanjut'] = $this->Data_ami->get_id_hasil_tindak_lanjut();

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

    // public function DAFTARTILIK()
    // {
    //     $data['title'] = 'Hasil Desk Evaluation';
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();
    //     $data['unit'] = $this->Data_ami->get_unit_by_id($data['user']['id_audit']);

    //     $this->load->view('partials/auditor/header', $data);
    //     $this->load->view('templates/logo', $data);
    //     $this->load->view('partials/auditor/sidebar', $data);
    //     $this->load->view('partials/auditor/topbar', $data);
    //     $this->load->view('templates/auditor/DaftarTilik/daftartilik', $data);
    //     $this->load->view('partials/auditor/footer', $data);
    // }

    // public function dta2()
    // {
    //     $data['title'] = 'DAFTAR TILIK (CHECKLIST)';
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();
    //     $data['unit'] = $this->Data_ami->get_unit_by_id($data['user']['id_audit']);


    //     $this->load->view('partials/auditor/header', $data);
    //     $this->load->view('templates/logo', $data);
    //     $this->load->view('partials/auditor/sidebar', $data);
    //     $this->load->view('partials/auditor/topbar', $data);
    //     $this->load->view('templates/auditor/DaftarTilik/a2', $data);
    //     $this->load->view('partials/auditor/footer', $data);
    // }

    // public function dtb1()
    // {
    //     $data['title'] = 'Hasil Desk Evaluation';
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();
    //     $data['unit'] = $this->Data_ami->get_unit_by_id($data['user']['id_audit']);


    //     $this->load->view('partials/auditor/header', $data);
    //     $this->load->view('templates/logo', $data);
    //     $this->load->view('partials/auditor/sidebar', $data);
    //     $this->load->view('partials/auditor/topbar', $data);
    //     $this->load->view('templates/auditor/DaftarTilik/b1', $data);
    //     $this->load->view('partials/auditor/footer', $data);
    // }

    // public function dtb2()
    // {
    //     $data['title'] = 'DAFTAR TILIK (CHECKLIST)';
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();


    //     $this->load->view('partials/auditor/header', $data);
    //     $this->load->view('templates/logo', $data);
    //     $this->load->view('partials/auditor/sidebar', $data);
    //     $this->load->view('partials/auditor/topbar', $data);
    //     $this->load->view('templates/auditor/DaftarTilik/b2', $data);
    //     $this->load->view('partials/auditor/footer', $data);
    // }

    // public function dtc1()
    // {
    //     $data['title'] = 'Hasil Desk Evaluation';
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();


    //     $this->load->view('partials/auditor/header', $data);
    //     $this->load->view('templates/logo', $data);
    //     $this->load->view('partials/auditor/sidebar', $data);
    //     $this->load->view('partials/auditor/topbar', $data);
    //     $this->load->view('templates/auditor/DaftarTilik/c1', $data);
    //     $this->load->view('partials/auditor/footer', $data);
    // }

    // public function dtc2()
    // {
    //     $data['title'] = 'DAFTAR TILIK (CHECKLIST)';
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();


    //     $this->load->view('partials/auditor/header', $data);
    //     $this->load->view('templates/logo', $data);
    //     $this->load->view('partials/auditor/sidebar', $data);
    //     $this->load->view('partials/auditor/topbar', $data);
    //     $this->load->view('templates/auditor/DaftarTilik/c2', $data);
    //     $this->load->view('partials/auditor/footer', $data);
    // }

    // public function dtd1()
    // {
    //     $data['title'] = 'Hasil Desk Evaluation';
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();


    //     $this->load->view('partials/auditor/header', $data);
    //     $this->load->view('templates/logo', $data);
    //     $this->load->view('partials/auditor/sidebar', $data);
    //     $this->load->view('partials/auditor/topbar', $data);
    //     $this->load->view('templates/auditor/DaftarTilik/d1', $data);
    //     $this->load->view('partials/auditor/footer', $data);
    // }

    // public function dtd2()
    // {
    //     $data['title'] = 'DAFTAR TILIK (CHECKLIST)';
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();


    //     $this->load->view('partials/auditor/header', $data);
    //     $this->load->view('templates/logo', $data);
    //     $this->load->view('partials/auditor/sidebar', $data);
    //     $this->load->view('partials/auditor/topbar', $data);
    //     $this->load->view('templates/auditor/DaftarTilik/d2', $data);
    //     $this->load->view('partials/auditor/footer', $data);
    // }

    // public function dte1()
    // {
    //     $data['title'] = 'Hasil Desk Evaluation';
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();


    //     $this->load->view('partials/auditor/header', $data);
    //     $this->load->view('templates/logo', $data);
    //     $this->load->view('partials/auditor/sidebar', $data);
    //     $this->load->view('partials/auditor/topbar', $data);
    //     $this->load->view('templates/auditor/DaftarTilik/e1', $data);
    //     $this->load->view('partials/auditor/footer', $data);
    // }

    // public function dte2()
    // {
    //     $data['title'] = 'DAFTAR TILIK (CHECKLIST)';
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();


    //     $this->load->view('partials/auditor/header', $data);
    //     $this->load->view('templates/logo', $data);
    //     $this->load->view('partials/auditor/sidebar', $data);
    //     $this->load->view('partials/auditor/topbar', $data);
    //     $this->load->view('templates/auditor/DaftarTilik/e2', $data);
    //     $this->load->view('partials/auditor/footer', $data);
    // }

    // public function dtf1()
    // {
    //     $data['title'] = 'Hasil Desk Evaluation';
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();


    //     $this->load->view('partials/auditor/header', $data);
    //     $this->load->view('templates/logo', $data);
    //     $this->load->view('partials/auditor/sidebar', $data);
    //     $this->load->view('partials/auditor/topbar', $data);
    //     $this->load->view('templates/auditor/DaftarTilik/f1', $data);
    //     $this->load->view('partials/auditor/footer', $data);
    // }

    // public function dtf2()
    // {
    //     $data['title'] = 'DAFTAR TILIK (CHECKLIST)';
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();


    //     $this->load->view('partials/auditor/header', $data);
    //     $this->load->view('templates/logo', $data);
    //     $this->load->view('partials/auditor/sidebar', $data);
    //     $this->load->view('partials/auditor/topbar', $data);
    //     $this->load->view('templates/auditor/DaftarTilik/f2', $data);
    //     $this->load->view('partials/auditor/footer', $data);
    // }

    // public function dtg1()
    // {
    //     $data['title'] = 'Hasil Desk Evaluation';
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();


    //     $this->load->view('partials/auditor/header', $data);
    //     $this->load->view('templates/logo', $data);
    //     $this->load->view('partials/auditor/sidebar', $data);
    //     $this->load->view('partials/auditor/topbar', $data);
    //     $this->load->view('templates/auditor/DaftarTilik/g1', $data);
    //     $this->load->view('partials/auditor/footer', $data);
    // }

    // public function dtg2()
    // {
    //     $data['title'] = 'DAFTAR TILIK (CHECKLIST)';
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();


    //     $this->load->view('partials/auditor/header', $data);
    //     $this->load->view('templates/logo', $data);
    //     $this->load->view('partials/auditor/sidebar', $data);
    //     $this->load->view('partials/auditor/topbar', $data);
    //     $this->load->view('templates/auditor/DaftarTilik/g2', $data);
    //     $this->load->view('partials/auditor/footer', $data);
    // }



    // public function dokumenaudit()
    // {
    //     $data['title'] = 'Dokumen Kebutuhan Audit';
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();


    //     $this->load->view('partials/auditor/header', $data);
    //     $this->load->view('templates/logo', $data);
    //     $this->load->view('partials/auditor/sidebar', $data);
    //     $this->load->view('partials/auditor/topbar', $data);
    //     $this->load->view('templates/auditor/dokumenKA', $data);
    //     $this->load->view('partials/auditor/footer', $data);
    // }

    public function pilihan()
    {
        $data['title'] = 'Daftar Tilik';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['unit'] = $this->Data_ami->get_unit_by_id($data['user']['id_audit']);

        // harus ditaruh disemua tempat
        $data['hasil_tindak_lanjut'] = $this->Data_ami->get_id_hasil_tindak_lanjut();

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
        $data['tampil_tambahan_daftar_tilik'] = $this->Data_ami->tampil_tambahan_daftar_tilik_auditor($id);
        $data['hasil_tindak_lanjut'] = $this->Data_ami->get_id_hasil_tindak_lanjut();
        

        // var_dump($data['tampil_tambahan_hasil_desk_auditor']);

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

    public function refresh_nilai_hasil_desk_utama()
    {
        $id = $this->input->post('id_dokumen_acuan');
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['unit'] = $this->Data_ami->get_unit_by_id($data['user']['id_audit']);

        $data['list_nilai'] = $this->Data_ami->get_nilai_hasil_desk_utama($data['user']['id_audit']);

        // $this->Data_ami->delete_nilai_hasil_desk_utama();

        // $this->Data_ami->add_nilai_hasil_desk_utama();
        // var_dump("DATA REFRESH");

        // var_dump($this->Data_ami->add_nilai_hasil_desk_utama());

        $this->session->set_flashdata('flash', 'ditambahkan');
        // redirect('auditor/pertanyaan_dok_acuan/' . $id);
    }

    public function update_nilai_hasil_desk_utama()
    {
        $id = $this->input->post('id_dokumen_acuan');
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['unit'] = $this->Data_ami->get_unit_by_id($data['user']['id_audit']);

        // $this->Data_ami->add_nilai_hasil_desk_utama();
        // var_dump("DATA UPDATE");

        // var_dump($this->Data_ami->add_nilai_hasil_desk_utama());

        $this->session->set_flashdata('flash', 'ditambahkan');
        // redirect('auditor/pertanyaan_dok_acuan/' . $id);
    }

    public function tambahan_daftar_tilik_auditor()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['unit'] = $this->Data_ami->get_unit_by_id($data['user']['id_audit']);
        $id = $this->input->post('id_dokumen_acuan');

        $this->Data_ami->add_daftar_tilik_auditor();
        $this->session->set_flashdata('flash', 'ditambahkan');
        redirect('auditor/pertanyaan_dok_acuan/' . $id);
    }

    public function refresh_nilai_daftar_tilik_utama()
    {
        $id = $this->input->post('id_dokumen_acuan');
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['unit'] = $this->Data_ami->get_unit_by_id($data['user']['id_audit']);

        $data['list_nilai'] = $this->Data_ami->get_nilai_daftar_tilik_utama($data['user']['id_audit']);

        // $this->Data_ami->delete_nilai_hasil_desk_utama();

        // $this->Data_ami->add_nilai_hasil_desk_utama();
        // var_dump("DATA REFRESH");

        // var_dump($this->Data_ami->add_nilai_hasil_desk_utama());

        $this->session->set_flashdata('flash', 'ditambahkan');
        // redirect('auditor/pertanyaan_dok_acuan/' . $id);
    }

    public function update_nilai_daftar_tilik_utama()
    {
        $id = $this->input->post('id_dokumen_acuan');
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['unit'] = $this->Data_ami->get_unit_by_id($data['user']['id_audit']);

        // $this->Data_ami->add_nilai_hasil_desk_utama();
        // var_dump("DATA UPDATE");

        // var_dump($this->Data_ami->add_nilai_hasil_desk_utama());

        $this->session->set_flashdata('flash', 'ditambahkan');
        // redirect('auditor/pertanyaan_dok_acuan/' . $id);
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
            $this->load->view('partials/auditor/header', $data);
            $this->load->view('templates/logo', $data);
            $this->load->view('partials/auditor/sidebar', $data);
            $this->load->view('partials/auditor/topbar', $data);
            $this->load->view('templates/auditor/DaftarTilik/menuutama', $data);
            $this->load->view('partials/auditor/footer', $data);
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
                    redirect('auditor/pilihan');
                }
            }
            $this->session->set_flashdata('flash', 'ditambahkan');
        }
    }

    public function generate_pdf($params)
    {
        $data['title'] = 'Laporan Hasil Tindak Lanjut';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        // $url = $_SERVER['REQUEST_URI'];
        // $segments = explode('/', $url);

        // Find the index of the parameter name
        // $param1Index = array_search('param1', $segments);
        // Retrieve the parameter values
        // $data['params'] = $segments[$param1Index + 4];
        // var_dump($data['params']);


        $data['tindaklanjut'] = $this->Data_ami->get_data($params);
        $data['bab2'] = $this->Data_ami->get_data2($params);
        $this->load->view('partials/prodi/header', $data);
        $this->load->view('templates/prodi/laporanhasilprodi/generatepdf', $data);
        $this->load->view('partials/prodi/footer', $data);
    }
}
