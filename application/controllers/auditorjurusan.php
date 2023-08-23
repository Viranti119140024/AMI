<?php

use LDAP\Result;

defined('BASEPATH') or exit('No direct script access allowed');

class auditorjurusan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Data_ami');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('table');


        if ($this->session->userdata('role_name') != "Auditor Jurusan") {
            redirect("auth");
        }
    }

    public function berandaauditorjurusan()
    {
        $data['title'] = 'Beranda Auditor Jurusan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['hasil_tindak_lanjut'] = $this->Data_ami->get_id_hasil_tindak_lanjut();

        $data['unit'] = $this->Data_ami->get_unit_by_id($data['user']['id_audit']);


        $this->load->view('partials/auditorjurusan/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditorjurusan/sidebar', $data);
        $this->load->view('partials/auditorjurusan/topbar', $data);
        $this->load->view('templates/auditorjurusan/beranda_auditor', $data);
        $this->load->view('partials/auditorjurusan/footer', $data);
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
        $this->load->view('partials/auditorjurusan/footer', $data);
    }

    public function DaftarHadir()
    {
        $data['title'] = '';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['unit'] = $this->Data_ami->get_unit_by_id($data['user']['id_audit']);

        $data['hasil_tindak_lanjut'] = $this->Data_ami->get_id_hasil_tindak_lanjut();


        $this->load->view('partials/auditorjurusan/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditorjurusan/sidebar', $data);
        $this->load->view('partials/auditorjurusan/topbar', $data);
        $this->load->view('templates/auditorjurusan/daftartilik/daftarhadir', $data);
        $this->load->view('partials/auditorjurusan/footer', $data);
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
        $this->load->view('partials/auditorjurusan/footer', $data);
    }
    public function datahasilaudit()
    {

        $data['title'] = 'Laporan Hasil Audit';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['hasilaudit'] = $this->Data_ami->get_hasilaudit($data['user']['id']);
        $data['unit'] = $this->Data_ami->get_unit_by_id($data['user']['id_audit']);

        $data['hasil_tindak_lanjut'] = $this->Data_ami->get_id_hasil_tindak_lanjut();

        // var_dump($data['tindaklanjut']);

        $this->load->view('partials/auditorjurusan/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditorjurusan/sidebar', $data);
        $this->load->view('templates/auditorjurusan/laporanhasiljurusan/tabel', $data);
        $this->load->view('partials/auditorjurusan/footer', $data);
    }

    public function datahasilaudit2()
    {

        $data['title'] = 'Laporan Hasil Audit';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['bab2'] = $this->Data_ami->get_hasilaudit2($data['user']['id']);

        // var_dump($data['tindaklanjut']);

        $this->load->view('partials/auditorjurusan/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditorjurusan/sidebar', $data);
        $this->load->view('templates/auditorjurusan/laporanhasiljurusan/tabel', $data);
        $this->load->view('partials/auditorjurusan/footer', $data);
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
        $this->form_validation->set_rules('daftarhadir', 'Daftar Hadir', 'in_list');
        $this->form_validation->set_rules('beritaacara', 'Berita Acara', 'in_list');
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
        $this->form_validation->set_rules('auditor2', 'Auditor2', 'required');
        $this->form_validation->set_rules('auditee', 'Auditee', 'required');
        $this->form_validation->set_rules('tanggalDE', 'Tanggal DE', 'required');
        $this->form_validation->set_rules('jangka_waktu', 'Jangka Waktu Perbaikan', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('partials/auditorjurusan/header', $data);
            $this->load->view('templates/logo', $data);
            $this->load->view('partials/auditorjurusan/sidebar', $data);
            $this->load->view('templates/auditorjurusan/laporanhasiljurusan/form', $data);
            $this->load->view('partials/auditorjurusan/footer', $data);
        } else {

            $this->session->set_flashdata('flash', 'ditambahkan');

            $data['nama_file_pengesahan'] = 'template1.png';
            // var_dump($_FILES['foto_pengesahan']['name']);

            if ($_FILES['foto_pengesahan']['name']) {
                $config['upload_path'] = './assets/dokumen';
                $config['allowed_types'] = array('jpg', 'jpeg', 'png');
                $config['max_size'] = 10000; // 10MB
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
                $config['max_size'] = 10000; // 10MB
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('dokumentasi')) {
                    $error = array('error' => $this->upload->display_errors());
                } else {
                    $upload_data = $this->upload->data();
                    $data['nama_file_dokumentasi'] = $upload_data['file_name'];
                }
            }
            $data['nama_file_daftarhadir'] = 'template3.png';
            // var_dump($_FILES['foto_pengesahan']['name']);

            if ($_FILES['daftarhadir']['name']) {
                $config['upload_path'] = './assets/dokumen';
                $config['allowed_types'] = array('jpg', 'jpeg', 'png');
                $config['max_size'] = 10000; // 10MB
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('daftarhadir')) {
                    $error = array('error' => $this->upload->display_errors());
                } else {
                    $upload_data = $this->upload->data();
                    $data['nama_file_daftarhadir'] = $upload_data['file_name'];
                }
            }
            $data['nama_file_beritaacara'] = 'template4.png';
            // var_dump($_FILES['foto_pengesahan']['name']);

            if ($_FILES['beritaacara']['name']) {
                $config['upload_path'] = './assets/dokumen';
                $config['allowed_types'] = array('jpg', 'jpeg', 'png');
                $config['max_size'] = 10000; // 10MB
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('beritaacara')) {
                    $error = array('error' => $this->upload->display_errors());
                } else {
                    $upload_data = $this->upload->data();
                    $data['nama_file_beritaacara'] = $upload_data['file_name'];
                }
            }


            // var_dump($data['nama_file_pengesahan'], $data['nama_file_dokumentasi']);
            $this->Data_ami->tambah_hasilaudit($data['user']['id'], $data['nama_file_pengesahan'], $data['nama_file_dokumentasi'], $data['nama_file_daftarhadir'], $data['nama_file_beritaacara']);
            redirect('auditorjurusan/datahasilaudit');
        }
    }

    public function isidata_post($id)
    {

        $this->Data_ami->tambah_hasilaudit($id);
        $this->session->set_flashdata('flash', 'ditambahkan');
        redirect('auditorjurusan/laporanakhir/' . $id);
    }


    public function isidata2()
    {

        $data['title'] = ' Isi Data Laporan Hasil Audit';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        // $data['id'] = $id;
        // var_dump($data['id']);

        // $url = $_SERVER['REQUEST_URI'];
        // $segments = explode('/', $url);

        // Find the index of the parameter name
        $data['params'] = $this->uri->segment(3);

        $data['unit'] = $this->Data_ami->get_unit_by_id($data['user']['id_audit']);
        $data['hasil_tindak_lanjut'] = $this->Data_ami->get_id_hasil_tindak_lanjut();

        // var_dump($data['params']);


        // $this->form_validation->set_rules('dokumen_acuan', 'Dokumen Acuan', 'required');
        $this->form_validation->set_rules('dokumen_acuan', 'Dokumen Acuan', 'required');
        $this->form_validation->set_rules('deskripsi_temuan', 'Deskripsi Temuan', 'required');
        $this->form_validation->set_rules('Permintaan_tindakan', 'Permintaan Tindakan Koreksi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('partials/auditorjurusan/header', $data);
            $this->load->view('templates/logo', $data);
            $this->load->view('partials/auditorjurusan/sidebar', $data);
            $this->load->view('templates/auditorjurusan/laporanhasiljurusan/form2', $data);
            $this->load->view('partials/auditorjurusan/footer', $data);
        }
    }

    public function isidata2_post($id)
    {

        $this->Data_ami->tambah_hasilaudit2($id);
        $this->session->set_flashdata('flash', 'ditambahkan');
        redirect('auditorjurusan/laporanakhir/' . $id);
    }

    public function profile()
    {
        $data['title'] = '';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['unit'] = $this->Data_ami->get_unit_by_id($data['user']['id_audit']);

        // var_dump(
        //     $data['user']
        // );

        $this->load->view('partials/auditorjurusan/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditorjurusan/sidebar', $data);
        $this->load->view('partials/auditorjurusan/topbar', $data);
        $this->load->view('templates/auditorjurusan/profile', $data);
        $this->load->view('partials/auditorjurusan/footer', $data);
    }

    public function laporanakhir()
    {

        $data['title'] = 'Laporan Hasil Audit';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        // $url = $_SERVER['REQUEST_URI'];
        // $segments = explode('/', $url);

        $data['params'] = $this->uri->segment(3);

        $data['unit'] = $this->Data_ami->get_unit_by_id($data['user']['id_audit']);
        $data['hasilaudit'] = $this->Data_ami->get_data_hasil_audit($data['params']);
        $data['bab2_hasil_audit'] = $this->Data_ami->get_data2_hasil_audit($data['params']);
        $data['hasil_tindak_lanjut'] = $this->Data_ami->get_id_hasil_tindak_lanjut();

        // var_dump($data['tindaklanjut']);

        $this->load->view('partials/auditorjurusan/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditorjurusan/sidebar', $data);
        $this->load->view('templates/auditorjurusan/laporanhasiljurusan/laporanhasil', $data);
        $this->load->view('partials/auditorjurusan/footer', $data);
    }

    public function generate_pdf_hasil_audit()
    {
        $data['title'] = 'Laporan Hasil Audit';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        // $url = $_SERVER['REQUEST_URI'];
        // $segments = explode('/', $url);

        $data['params'] = $this->uri->segment(3);


        $data['hasilaudit'] = $this->Data_ami->get_data_hasil_audit($data['params']);
        $data['bab2_hasil_audit'] = $this->Data_ami->get_data2_hasil_audit($data['params']);
        $this->load->view('partials/auditorjurusan/header', $data);
        $this->load->view('templates/auditorjurusan/laporanhasiljurusan/generate', $data);
        $this->load->view('partials/auditorjurusan/footer', $data);
    }


    public function generate_pdf($params)
    {
        $data['title'] = 'Laporan Hasil Tindak Lanjut';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['hasil_tindak_lanjut'] = $this->Data_ami->get_id_hasil_tindak_lanjut();

        $data['unit'] = $this->Data_ami->get_unit_by_id($data['user']['id_audit']);


        $data['tindaklanjut'] = $this->Data_ami->get_data($params);
        $data['bab2'] = $this->Data_ami->get_data2($params);
        $this->load->view('partials/auditorjurusan/header', $data);
        // $this->load->view('templates/logo', $data);
        // $this->load->view('partials/auditorjurusan/sidebar', $data);
        $this->load->view('templates/jurusan/laporanhasiltindaklanjut/generatepdf', $data);
        $this->load->view('partials/auditorjurusan/footer', $data);
    }


    public function pilihan()
    {
        $data['title'] = 'Daftar Tilik';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['unit'] = $this->Data_ami->get_unit_by_id($data['user']['id_audit']);

        // harus ditaruh disemua tempat
        $data['hasil_tindak_lanjut'] = $this->Data_ami->get_id_hasil_tindak_lanjut();

        $data['tampil_dokumen_acuan_jurusan'] = $this->Data_ami->tampil_dok_acuan_jurusan();


        $data['unit'] = $this->Data_ami->get_unit_by_id($data['user']['id_audit']);



        $this->load->view('partials/auditorjurusan/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditorjurusan/sidebar', $data);
        $this->load->view('templates/auditorjurusan/daftartilik/menuutama', $data);
        $this->load->view('partials/auditorjurusan/footer', $data);
    }


    public function pertanyaan_dok_acuan($id)
    {
        $data['title'] = 'Pengisian Daftar Tilik';
        $data['title1'] = 'Hasil Desk Evaluation';
        $data['title2'] = 'Daftar Tilik ( Checklist )';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['unit'] = $this->Data_ami->get_unit_by_id($data['user']['id_audit']);

        // hasil desk
        $data['tampil_hasil_desk_utama_jurusan'] = $this->Data_ami->tampil_hasil_desk_utama_jurusan($id);
        $data['tampil_hasil_desk_tambahan_jurusan'] = $this->Data_ami->tampil_hasil_desk_tambahan_jurusan($id);
        $data['total_checkbox'] = $this->Data_ami->total_hasil_desk_jurusan();

        // daftar tilik
        $data['tampil_daftar_tilik_utama_jurusan'] = $this->Data_ami->tampil_daftar_tilik_utama_jurusan($id);
        $data['tampil_daftar_tilik_tambahan_jurusan'] = $this->Data_ami->tampil_daftar_tilik_tambahan_jurusan($id);
        $data['total_daftar_tilik'] = $this->Data_ami->total_daftar_tilik_jurusan();

        $data['hasil_tindak_lanjut'] = $this->Data_ami->get_id_hasil_tindak_lanjut();
        // $data['jumlah'] = $this->Data_ami->jumlah_nilai($id);

        $this->load->view('partials/auditorjurusan/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditorjurusan/sidebar', $data);
        $this->load->view('partials/auditorjurusan/topbar', $data);
        $this->load->view('templates/auditorjurusan/daftartilik/hasil_desk', $data);
        $this->load->view('partials/auditorjurusan/footer', $data);
    }

    // DAFTAR TILIK

    function add_nilai_hasil_desk_utama()
    {
        $id = $this->input->post('id_dokumen_acuan');
        $this->Data_ami->add_nilai_hasil_desk_utama_jurusan();

        redirect('auditorjurusan/pertanyaan_dok_acuan/' . $id);
    }

    function add_hasil_desk_tambahan()
    {
        $id = $this->input->post('id_dokumen_acuan');
        $this->Data_ami->add_hasil_desk_tambahan_jurusan();

        redirect('auditorjurusan/pertanyaan_dok_acuan/' . $id);
    }

    function add_nilai_hasil_desk_tambahan()
    {
        $id = $this->input->post('id_dokumen_acuan');
        $this->Data_ami->add_nilai_hasil_desk_tambahan_jurusan();

        redirect('auditorjurusan/pertanyaan_dok_acuan/' . $id);
    }

    // nilai daftar_tilik utama
    function add_nilai_daftar_tilik_utama()
    {
        $id = $this->input->post('id_dokumen_acuan');
        $this->Data_ami->add_nilai_daftar_tilik_utama_jurusan();

        redirect('auditorjurusan/pertanyaan_dok_acuan/' . $id);
    }

    function add_nilai_daftar_tilik_tambahan()
    {
        $id = $this->input->post('id_dokumen_acuan');
        $this->Data_ami->add_nilai_daftar_tilik_tambahan_jurusan();

        redirect('auditorjurusan/pertanyaan_dok_acuan/' . $id);
    }

    function add_daftar_tilik_tambahan()
    {
        $id = $this->input->post('id_dokumen_acuan');
        $this->Data_ami->add_daftar_tilik_tambahan_jurusan();

        redirect('auditorjurusan/pertanyaan_dok_acuan/' . $id);
    }


    public function generate_daftar_tilik_jurusan()
    {
        $data['title'] = 'Generate Daftar Tilik';
        $data['title1'] = 'Hasil Desk Evaluation';
        $data['title2'] = 'Daftar Tilik ( Checklist )';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['unit'] = $this->Data_ami->get_unit_by_id($data['user']['id_audit']);

        $data['hasil_tindak_lanjut'] = $this->Data_ami->get_id_hasil_tindak_lanjut();

            // hasil desk
        $data['tampil_hasil_desk_utama_jurusan1'] = $this->Data_ami->tampil_hasil_desk_utama_jurusan_baru('1');
        $data['tampil_hasil_desk_tambahan_jurusan1'] = $this->Data_ami->tampil_hasil_desk_tambahan_jurusan_baru('1');
        $data['total_checkbox1'] = $this->Data_ami->total_hasil_desk_jurusan_baru('1');

        // daftar tilik
        $data['tampil_daftar_tilik_utama_jurusan1'] = $this->Data_ami->tampil_daftar_tilik_utama_jurusan_baru('1');
        $data['tampil_daftar_tilik_tambahan_jurusan1'] = $this->Data_ami->tampil_daftar_tilik_tambahan_jurusan_baru('1');
        $data['total_daftar_tilik1'] = $this->Data_ami->total_daftar_tilik_jurusan_baru('1');
        // var_dump( $data['tampil_hasil_desk_utama1']);

        //2
        // hasil desk
        $data['tampil_hasil_desk_utama_jurusan2'] = $this->Data_ami->tampil_hasil_desk_utama_jurusan_baru('2');
        $data['tampil_hasil_desk_tambahan_jurusan2'] = $this->Data_ami->tampil_hasil_desk_tambahan_jurusan_baru('2');
        $data['total_checkbox2'] = $this->Data_ami->total_hasil_desk_jurusan_baru('2');

        // daftar tilik
        $data['tampil_daftar_tilik_utama_jurusan2'] = $this->Data_ami->tampil_daftar_tilik_utama_jurusan_baru('2');
        $data['tampil_daftar_tilik_tambahan_jurusan2'] = $this->Data_ami->tampil_daftar_tilik_tambahan_jurusan_baru('2');
        $data['total_daftar_tilik2'] = $this->Data_ami->total_daftar_tilik_jurusan_baru('2');

        //3
        // hasil desk
        $data['tampil_hasil_desk_utama_jurusan3'] = $this->Data_ami->tampil_hasil_desk_utama_jurusan_baru('3');
        $data['tampil_hasil_desk_tambahan_jurusan3'] = $this->Data_ami->tampil_hasil_desk_tambahan_jurusan_baru('3');
        $data['total_checkbox3'] = $this->Data_ami->total_hasil_desk_jurusan_baru('3');

        // daftar tilik
        $data['tampil_daftar_tilik_utama_jurusan3'] = $this->Data_ami->tampil_daftar_tilik_utama_jurusan_baru('3');
        $data['tampil_daftar_tilik_tambahan_jurusan3'] = $this->Data_ami->tampil_daftar_tilik_tambahan_jurusan_baru('3');
        $data['total_daftar_tilik3'] = $this->Data_ami->total_daftar_tilik_jurusan_baru('3');

        // 4
        $data['tampil_hasil_desk_utama_jurusan4'] = $this->Data_ami->tampil_hasil_desk_utama_jurusan_baru('4');
        $data['tampil_hasil_desk_tambahan_jurusan4'] = $this->Data_ami->tampil_hasil_desk_tambahan_jurusan_baru('4');
        $data['total_checkbox4'] = $this->Data_ami->total_hasil_desk_jurusan_baru('4');

        // daftar tilik
        $data['tampil_daftar_tilik_utama_jurusan4'] = $this->Data_ami->tampil_daftar_tilik_utama_jurusan_baru('4');
        $data['tampil_daftar_tilik_tambahan_jurusan4'] = $this->Data_ami->tampil_daftar_tilik_tambahan_jurusan_baru('4');
        $data['total_daftar_tilik4'] = $this->Data_ami->total_daftar_tilik_jurusan_baru('4');

         // 8
         $data['tampil_hasil_desk_utama_jurusan8'] = $this->Data_ami->tampil_hasil_desk_utama_jurusan_baru('8');
         $data['tampil_hasil_desk_tambahan_jurusan8'] = $this->Data_ami->tampil_hasil_desk_tambahan_jurusan_baru('8');
         $data['total_checkbox8'] = $this->Data_ami->total_hasil_desk_jurusan_baru('8');
 
         // daftar tilik
         $data['tampil_daftar_tilik_utama_jurusan8'] = $this->Data_ami->tampil_daftar_tilik_utama_jurusan_baru('8');
         $data['tampil_daftar_tilik_tambahan_jurusan8'] = $this->Data_ami->tampil_daftar_tilik_tambahan_jurusan_baru('8');
         $data['total_daftar_tilik8'] = $this->Data_ami->total_daftar_tilik_jurusan_baru('8');

          // 9
        $data['tampil_hasil_desk_utama_jurusan9'] = $this->Data_ami->tampil_hasil_desk_utama_jurusan_baru('9');
        $data['tampil_hasil_desk_tambahan_jurusan9'] = $this->Data_ami->tampil_hasil_desk_tambahan_jurusan_baru('9');
        $data['total_checkbox9'] = $this->Data_ami->total_hasil_desk_jurusan_baru('9');

        // daftar tilik
        $data['tampil_daftar_tilik_utama_jurusan9'] = $this->Data_ami->tampil_daftar_tilik_utama_jurusan_baru('9');
        $data['tampil_daftar_tilik_tambahan_jurusan9'] = $this->Data_ami->tampil_daftar_tilik_tambahan_jurusan_baru('9');
        $data['total_daftar_tilik9'] = $this->Data_ami->total_daftar_tilik_jurusan_baru('9');

         // 10
         $data['tampil_hasil_desk_utama_jurusan10'] = $this->Data_ami->tampil_hasil_desk_utama_jurusan_baru('10');
         $data['tampil_hasil_desk_tambahan_jurusan10'] = $this->Data_ami->tampil_hasil_desk_tambahan_jurusan_baru('10');
         $data['total_checkbox10'] = $this->Data_ami->total_hasil_desk_jurusan_baru('10');
 
         // daftar tilik
         $data['tampil_daftar_tilik_utama_jurusan10'] = $this->Data_ami->tampil_daftar_tilik_utama_jurusan_baru('10');
         $data['tampil_daftar_tilik_tambahan_jurusan10'] = $this->Data_ami->tampil_daftar_tilik_tambahan_jurusan_baru('10');
         $data['total_daftar_tilik10'] = $this->Data_ami->total_daftar_tilik_jurusan_baru('10');

          // 11
        $data['tampil_hasil_desk_utama_jurusan11'] = $this->Data_ami->tampil_hasil_desk_utama_jurusan_baru('11');
        $data['tampil_hasil_desk_tambahan_jurusan11'] = $this->Data_ami->tampil_hasil_desk_tambahan_jurusan_baru('11');
        $data['total_checkbox11'] = $this->Data_ami->total_hasil_desk_jurusan_baru('11');

        // daftar tilik
        $data['tampil_daftar_tilik_utama_jurusan11'] = $this->Data_ami->tampil_daftar_tilik_utama_jurusan_baru('11');
        $data['tampil_daftar_tilik_tambahan_jurusan11'] = $this->Data_ami->tampil_daftar_tilik_tambahan_jurusan_baru('11');
        $data['total_daftar_tilik11'] = $this->Data_ami->total_daftar_tilik_jurusan_baru('11');

        $this->load->view('partials/auditorjurusan/header', $data);
        $this->load->view('templates/auditorjurusan/daftartilik/generatepdf', $data);
        $this->load->view('partials/auditorjurusan/footer', $data);
    }

}
