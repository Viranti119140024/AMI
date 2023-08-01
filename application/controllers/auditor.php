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

        // hasil desk
        $data['tampil_hasil_desk_utama'] = $this->Data_ami->tampil_hasil_desk_utama($id);
        $data['tampil_hasil_desk_tambahan'] = $this->Data_ami->tampil_hasil_desk_tambahan($id);
        $data['total_checkbox'] = $this->Data_ami->total_hasil_desk();

        // daftar tilik
        $data['tampil_daftar_tilik_utama'] = $this->Data_ami->tampil_daftar_tilik_utama($id);
        $data['tampil_daftar_tilik_tambahan'] = $this->Data_ami->tampil_daftar_tilik_tambahan($id);
        $data['total_daftar_tilik'] = $this->Data_ami->total_daftar_tilik();

        $data['hasil_tindak_lanjut'] = $this->Data_ami->get_id_hasil_tindak_lanjut();


        $this->load->view('partials/auditor/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditor/sidebar', $data);
        $this->load->view('partials/auditor/topbar', $data);
        $this->load->view('templates/auditor/DaftarTilik/hasil_desk', $data);
        $this->load->view('partials/auditor/footer', $data);
    }

    // SIMPAN NILAI HASIL DESK KEDALAM DB
    // nilai hasil_desk utama
    function add_nilai_hasil_desk_utama()
    {
        $id = $this->input->post('id_dokumen_acuan');
        $this->Data_ami->add_nilai_hasil_desk_utama();

        redirect('auditor/pertanyaan_dok_acuan/' . $id);
    }

    function add_hasil_desk_tambahan()
    {
        $id = $this->input->post('id_dokumen_acuan');
        $this->Data_ami->add_hasil_desk_tambahan();

        redirect('auditor/pertanyaan_dok_acuan/' . $id);
    }

    function add_nilai_hasil_desk_tambahan()
    {
        $id = $this->input->post('id_dokumen_acuan');
        $this->Data_ami->add_nilai_hasil_desk_tambahan();

        redirect('auditor/pertanyaan_dok_acuan/' . $id);
    }

    // nilai daftar_tilik utama
    function add_nilai_daftar_tilik_utama()
    {
        $id = $this->input->post('id_dokumen_acuan');
        $this->Data_ami->add_nilai_daftar_tilik_utama();

        redirect('auditor/pertanyaan_dok_acuan/' . $id);
    }

    function add_nilai_daftar_tilik_tambahan()
    {
        $id = $this->input->post('id_dokumen_acuan');
        $this->Data_ami->add_nilai_daftar_tilik_tambahan();

        redirect('auditor/pertanyaan_dok_acuan/' . $id);
    }

    function add_daftar_tilik_tambahan()
    {
        $id = $this->input->post('id_dokumen_acuan');
        $this->Data_ami->add_daftar_tilik_tambahan();

        redirect('auditor/pertanyaan_dok_acuan/' . $id);
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

    // public function generate_pdf($params)
    // {
    //     $data['title'] = 'Laporan Hasil Tindak Lanjut';
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();


    //     $data['tindaklanjut'] = $this->Data_ami->get_data($params);
    //     $data['bab2'] = $this->Data_ami->get_data2($params);
    //     $this->load->view('partials/prodi/header', $data);
    //     $this->load->view('templates/prodi/laporanhasilprodi/generatepdf', $data);
    //     $this->load->view('partials/prodi/footer', $data);
    // }

    public function generate_pdf_tindaklanjut()
    {
        $data['title'] = 'Laporan Hasil Tindak Lanjut';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['tindaklanjut'] = $this->Data_ami->get_id_hasil_tindak_lanjut();
        $this->load->view('partials/auditor/header', $data);
        $this->load->view('templates/auditor/generate_pdf_tindaklanjut', $data);
        $this->load->view('partials/auditor/footer', $data);
    }



    // laporan hasil audit

    public function datahasilaudit()
    {

        $data['title'] = 'Laporan Hasil Audit';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['hasilaudit'] = $this->Data_ami->get_hasilaudit($data['user']['id']);
        $data['unit'] = $this->Data_ami->get_unit_by_id($data['user']['id_audit']);

        $data['hasil_tindak_lanjut'] = $this->Data_ami->get_id_hasil_tindak_lanjut();

        // var_dump($data['tindaklanjut']);

        $this->load->view('partials/auditor/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditor/sidebar', $data);
        $this->load->view('templates/auditor/laporanhasil/tabel', $data);
        $this->load->view('partials/auditor/footer', $data);
    }

    public function datahasilaudit2()
    {

        $data['title'] = 'Laporan Hasil Audit';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['bab2'] = $this->Data_ami->get_hasilaudit2($data['user']['id']);

        // var_dump($data['tindaklanjut']);

        $this->load->view('partials/auditor/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditor/sidebar', $data);
        $this->load->view('templates/auditor/laporanhasil/tabel', $data);
        $this->load->view('partials/auditor/footer', $data);
    }


    //form untuk semua 

    public function isidata()
    {

        $data['title'] = ' Isi Data Laporan Hasil Audit';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['hasil_tindak_lanjut'] = $this->Data_ami->get_id_hasil_tindak_lanjut();
        $data['unit'] = $this->Data_ami->get_unit_by_id($data['user']['id_audit']);

        // $this->form_validation->set_rules('nama_penyusunan', 'Nama', 'required');
        // $this->form_validation->set_rules('pemeriksa1', 'Nama', 'required');
        // $this->form_validation->set_rules('penetapan1', 'Nama', 'required');

        $this->form_validation->set_rules('file_dokumen', 'File Dokumen', 'in_list');
        $this->form_validation->set_rules('dokumentasi', 'File Dokumentasi', 'in_list');
        $this->form_validation->set_rules('tahun', 'Tahun', 'required');
        $this->form_validation->set_rules('lembaga', 'Lembaga', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('NIP', 'NIP', 'required');
        $this->form_validation->set_rules('periode', 'Periode', 'required');
        $this->form_validation->set_rules('hari_tgl', 'Hari dan Tanggal', 'required');
        $this->form_validation->set_rules('waktu', 'waktu', 'required');
        $this->form_validation->set_rules('tempat', 'Tempat', 'required');
        $this->form_validation->set_rules('auditor', 'Auditor', 'required');
        $this->form_validation->set_rules('auditee', 'Auditee', 'required');
        $this->form_validation->set_rules('tanggalDE', 'Tanggal DE', 'required');
        $this->form_validation->set_rules('jangka_waktu', 'Jangka Waktu Perbaikan', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('partials/auditor/header', $data);
            $this->load->view('templates/logo', $data);
            $this->load->view('partials/auditor/sidebar', $data);
            $this->load->view('templates/auditor/laporanhasil/form', $data);
            $this->load->view('partials/auditor/footer', $data);
        } else {

            $this->session->set_flashdata('flash', 'ditambahkan');
            $data['nama_file_pengesahan'] = 'template1.png';
            // var_dump($_FILES['foto_pengesahan']['name']);

            if ($_FILES['foto_pengesahan']['name']) {
                $config['upload_path'] = './assets/dokumen';
                $config['allowed_types'] = array('jpg', 'jpeg', 'png');
                $config['max_size'] = 2048; // 2MB
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('foto_pengesahan')) {
                    $error = array('error' => $this->upload->display_errors());
                } else {
                    $upload_data = $this->upload->data();
                    $data['nama_file_pengesahan'] = $upload_data['file_name'];
                }
            }

            // var_dump($_FILES['dokumentasi']['name']);
            $data['nama_file_dokumentasi'] = 'template2.png';

            if ($_FILES['dokumentasi']['name']) {
                $config['upload_path'] = './assets/dokumen';
                $config['allowed_types'] = array('jpg', 'jpeg', 'png');
                $config['max_size'] = 2048; // 2MB
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('dokumentasi')) {
                    $error = array('error' => $this->upload->display_errors());
                } else {
                    $upload_data = $this->upload->data();
                    $data['nama_file_dokumentasi'] = $upload_data['file_name'];
                }
            }

            // var_dump($data['nama_file_pengesahan'], $data['nama_file_dokumentasi']);
            $this->Data_ami->tambah_hasilaudit($data['user']['id'], $data['nama_file_pengesahan'], $data['nama_file_dokumentasi']);
            redirect('auditor/datahasilaudit');
        }
    }

    public function isidata_post($id)
    {

        $this->Data_ami->tambah_hasilaudit($id);
        $this->session->set_flashdata('flash', 'ditambahkan');
        redirect('auditor/laporanakhir/' . $id);
    }


    public function isidata2()
    {

        $data['title'] = ' Isi Data Laporan Hasil Audit';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        // $data['id'] = $id;
        // var_dump($data['id']);

        $url = $_SERVER['REQUEST_URI'];
        $segments = explode('/', $url);

        // Find the index of the parameter name
        $param1Index = array_search('param1', $segments);
        // Retrieve the parameter values
        $data['params'] = $segments[$param1Index + 4];

        $data['unit'] = $this->Data_ami->get_unit_by_id($data['user']['id_audit']);
        $data['hasil_tindak_lanjut'] = $this->Data_ami->get_id_hasil_tindak_lanjut();

        // var_dump($data['params']);


        // $this->form_validation->set_rules('dokumen_acuan', 'Dokumen Acuan', 'required');
        $this->form_validation->set_rules('dokumen_acuan', 'Dokumen Acuan', 'required');
        $this->form_validation->set_rules('deskripsi_temuan', 'Deskripsi Temuan', 'required');
        $this->form_validation->set_rules('Permintaan_tindakan', 'Permintaan Tindakan Koreksi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('partials/auditor/header', $data);
            $this->load->view('templates/logo', $data);
            $this->load->view('partials/auditor/sidebar', $data);
            $this->load->view('templates/auditor/laporanhasil/form2', $data);
            $this->load->view('partials/auditor/footer', $data);
        }
    }

    public function isidata2_post($id)
    {

        $this->Data_ami->tambah_hasilaudit2($id);
        $this->session->set_flashdata('flash', 'ditambahkan');
        redirect('auditor/laporanakhir/' . $id);
    }

    public function edit_data($id)
    {
        $data['title'] = 'Edit Data';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['hasilaudit'] = $this->Data_ami->get_data_by_id_hasil_audit($id);

        $data['unit'] = $this->Data_ami->get_unit_by_id($data['user']['id_audit']);
        $data['hasil_tindak_lanjut'] = $this->Data_ami->get_id_hasil_tindak_lanjut();

        //  var_dump( $data['hasilaudit']);


        $this->form_validation->set_rules('file_dokumen', 'File Dokumen', 'in_list');
        $this->form_validation->set_rules('dokumentasi', 'File Dokumentasi', 'in_list');
        $this->form_validation->set_rules('tahun', 'Tahun', 'required');
        $this->form_validation->set_rules('lembaga', 'Lembaga', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('NIP', 'NIP', 'required');
        $this->form_validation->set_rules('periode', 'Periode', 'required');
        $this->form_validation->set_rules('hari_tgl', 'Hari dan Tanggal', 'required');
        $this->form_validation->set_rules('waktu', 'waktu', 'required');
        $this->form_validation->set_rules('tempat', 'Tempat', 'required');
        $this->form_validation->set_rules('auditor', 'Auditor', 'required');
        $this->form_validation->set_rules('auditee', 'Auditee', 'required');
        $this->form_validation->set_rules('tanggalDE', 'Tanggal DE', 'required');
        $this->form_validation->set_rules('jangka_waktu', 'Jangka Waktu Perbaikan', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('partials/auditor/header', $data);
            $this->load->view('templates/logo', $data);
            $this->load->view('partials/auditor/sidebar', $data);
            $this->load->view('templates/auditor/laporanhasil/edit', $data);
            $this->load->view('partials/auditor/footer', $data);
        } else {
            // var_dump($id_auditor);
            $this->Data_ami->update_data_hasil_audit($id);
            $this->session->set_flashdata('flash', 'diubah');

            // var_dump($data['bab2'][0]->id_tindaklanjut);
            // var_dump($data['bab2']);
            redirect('auditor/laporanakhir/' . $id);
        }
    }

    public function edit_form($id)
    {

        $this->Data_ami->update_data_hasil_audit($id);
        $this->session->set_flashdata('flash', 'diubah');

        // var_dump($data['bab2'][0]->id_tindaklanjut);
        // var_dump($data['bab2']);
        redirect('auditor/laporanakhir/' . $id);
    }

    public function edit_data2($id)
    {
        $data['title'] = 'Edit Data';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['bab2'] = $this->Data_ami->get_data2_hasil_audit($id);

        $data['unit'] = $this->Data_ami->get_unit_by_id($data['user']['id_audit']);
        $data['hasil_tindak_lanjut'] = $this->Data_ami->get_id_hasil_tindak_lanjut();
        // var_dump($data);

        $this->form_validation->set_rules('dokumen_acuan', 'Dokumen Acuan', 'required');
        $this->form_validation->set_rules('deskripsi_temuan', 'Deskripsi Temuan', 'required');
        $this->form_validation->set_rules('Permintaan_tindakan', 'Permintaan Tindakan Koreksi', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('partials/auditor/header', $data);
            $this->load->view('templates/logo', $data);
            $this->load->view('partials/auditor/sidebar', $data);
            $this->load->view('templates/auditor/laporanhasil/edit2', $data);
            $this->load->view('partials/auditor/footer', $data);
        } else {
            // var_dump($id_auditor);
            $this->Data_ami->update_data2_hasil_audit();
            $this->session->set_flashdata('flash', 'diubah');

            // var_dump($data['bab2'][0]->id_tindaklanjut);
            // var_dump($data['bab2']);
            redirect('auditor/laporanakhir/' . $id);
        }
    }


    public function laporanakhir()
    {

        $data['title'] = 'Laporan Hasil Audit';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $url = $_SERVER['REQUEST_URI'];
        $segments = explode('/', $url);

        // Find the index of the parameter name
        // $param1Index = array_search('param1', $segments);
        // Retrieve the parameter values
        // $data['params'] = $segments[$param1Index + 4];
        // var_dump($data['params']);

        $data['unit'] = $this->Data_ami->get_unit_by_id($data['user']['id_audit']);
        $data['hasilaudit'] = $this->Data_ami->get_data_hasil_audit();
        $data['bab2_hasil_audit'] = $this->Data_ami->get_data2_hasil_audit();
        $data['hasil_tindak_lanjut'] = $this->Data_ami->get_id_hasil_tindak_lanjut();

        // var_dump($data['tindaklanjut']);

        $this->load->view('partials/auditor/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditor/sidebar', $data);
        $this->load->view('templates/auditor/laporanhasil/laporanhasil', $data);
        $this->load->view('partials/auditor/footer', $data);
    }

    public function generate_pdf_hasil_audit()
    {
        $data['title'] = 'Laporan Hasil Audit';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $url = $_SERVER['REQUEST_URI'];
        $segments = explode('/', $url);

        // Find the index of the parameter name
        $param1Index = array_search('param1', $segments);
        // Retrieve the parameter values
        $data['params'] = $segments[$param1Index + 4];


        $data['hasilaudit'] = $this->Data_ami->get_data_hasil_audit($data['params']);
        $data['bab2_hasil_audit'] = $this->Data_ami->get_data2_hasil_audit($data['params']);
        $this->load->view('partials/auditor/header', $data);
        $this->load->view('templates/auditor/laporanhasil/generate', $data);
        $this->load->view('partials/auditor/footer', $data);
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

// generate pdf daftar tilik
public function generate_daftar_tilik()
    {
        $data['title'] = 'Generate Daftar Tilik';
        $data['title1'] = 'Hasil Desk Evaluation';
        $data['title2'] = 'Daftar Tilik ( Checklist )';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['unit'] = $this->Data_ami->get_unit_by_id($data['user']['id_audit']);

        
        $data['hasil_tindak_lanjut'] = $this->Data_ami->get_id_hasil_tindak_lanjut();

        // hasil desk
        $data['tampil_hasil_desk_utama1'] = $this->Data_ami->tampil_hasil_desk_utama_baru('1');
        $data['tampil_hasil_desk_tambahan1'] = $this->Data_ami->tampil_hasil_desk_tambahan_baru('1');
        $data['total_checkbox1'] = $this->Data_ami->total_hasil_desk_baru('1');

        // daftar tilik
        $data['tampil_daftar_tilik_utama1'] = $this->Data_ami->tampil_daftar_tilik_utama_baru('1');
        $data['tampil_daftar_tilik_tambahan1'] = $this->Data_ami->tampil_daftar_tilik_tambahan_baru('1');
        $data['total_daftar_tilik1'] = $this->Data_ami->total_daftar_tilik_baru('1');
        // var_dump( $data['tampil_hasil_desk_utama1']);

        //2
        // hasil desk
        $data['tampil_hasil_desk_utama2'] = $this->Data_ami->tampil_hasil_desk_utama_baru('2');
        $data['tampil_hasil_desk_tambahan2'] = $this->Data_ami->tampil_hasil_desk_tambahan_baru('2');
        $data['total_checkbox2'] = $this->Data_ami->total_hasil_desk_baru('2');

        // daftar tilik
        $data['tampil_daftar_tilik_utama2'] = $this->Data_ami->tampil_daftar_tilik_utama_baru('2');
        $data['tampil_daftar_tilik_tambahan2'] = $this->Data_ami->tampil_daftar_tilik_tambahan_baru('2');
        $data['total_daftar_tilik2'] = $this->Data_ami->total_daftar_tilik_baru('2');

         //3
        // hasil desk
        $data['tampil_hasil_desk_utama3'] = $this->Data_ami->tampil_hasil_desk_utama_baru('3');
        $data['tampil_hasil_desk_tambahan3'] = $this->Data_ami->tampil_hasil_desk_tambahan_baru('3');
        $data['total_checkbox3'] = $this->Data_ami->total_hasil_desk_baru('3');

        // daftar tilik
        $data['tampil_daftar_tilik_utama3'] = $this->Data_ami->tampil_daftar_tilik_utama_baru('3');
        $data['tampil_daftar_tilik_tambahan3'] = $this->Data_ami->tampil_daftar_tilik_tambahan_baru('3');
        $data['total_daftar_tilik3'] = $this->Data_ami->total_daftar_tilik_baru('3');

        // 4
        $data['tampil_hasil_desk_utama4'] = $this->Data_ami->tampil_hasil_desk_utama_baru('4');
        $data['tampil_hasil_desk_tambahan4'] = $this->Data_ami->tampil_hasil_desk_tambahan_baru('4');
        $data['total_checkbox4'] = $this->Data_ami->total_hasil_desk_baru('4');

        // daftar tilik
        $data['tampil_daftar_tilik_utama4'] = $this->Data_ami->tampil_daftar_tilik_utama_baru('4');
        $data['tampil_daftar_tilik_tambahan4'] = $this->Data_ami->tampil_daftar_tilik_tambahan_baru('4');
        $data['total_daftar_tilik4'] = $this->Data_ami->total_daftar_tilik_baru('4');

        // 5
        $data['tampil_hasil_desk_utama5'] = $this->Data_ami->tampil_hasil_desk_utama_baru('5');
        $data['tampil_hasil_desk_tambahan5'] = $this->Data_ami->tampil_hasil_desk_tambahan_baru('5');
        $data['total_checkbox5'] = $this->Data_ami->total_hasil_desk_baru('5');

        // daftar tilik
        $data['tampil_daftar_tilik_utama5'] = $this->Data_ami->tampil_daftar_tilik_utama_baru('5');
        $data['tampil_daftar_tilik_tambahan5'] = $this->Data_ami->tampil_daftar_tilik_tambahan_baru('5');
        $data['total_daftar_tilik5'] = $this->Data_ami->total_daftar_tilik_baru('5');

        // 6
        $data['tampil_hasil_desk_utama6'] = $this->Data_ami->tampil_hasil_desk_utama_baru('6');
        $data['tampil_hasil_desk_tambahan6'] = $this->Data_ami->tampil_hasil_desk_tambahan_baru('6');
        $data['total_checkbox6'] = $this->Data_ami->total_hasil_desk_baru('6');

        // daftar tilik
        $data['tampil_daftar_tilik_utama6'] = $this->Data_ami->tampil_daftar_tilik_utama_baru('6');
        $data['tampil_daftar_tilik_tambahan6'] = $this->Data_ami->tampil_daftar_tilik_tambahan_baru('6');
        $data['total_daftar_tilik6'] = $this->Data_ami->total_daftar_tilik_baru('6');

        // 7
        $data['tampil_hasil_desk_utama7'] = $this->Data_ami->tampil_hasil_desk_utama_baru('7');
        $data['tampil_hasil_desk_tambahan7'] = $this->Data_ami->tampil_hasil_desk_tambahan_baru('7');
        $data['total_checkbox7'] = $this->Data_ami->total_hasil_desk_baru('7');

        // daftar tilik
        $data['tampil_daftar_tilik_utama7'] = $this->Data_ami->tampil_daftar_tilik_utama_baru('7');
        $data['tampil_daftar_tilik_tambahan7'] = $this->Data_ami->tampil_daftar_tilik_tambahan_baru('7');
        $data['total_daftar_tilik7'] = $this->Data_ami->total_daftar_tilik_baru('7');

        $this->load->view('partials/auditor/header', $data);
        $this->load->view('templates/auditor/DaftarTilik/generatepdf', $data);
        $this->load->view('partials/auditor/footer', $data);
    }


}
