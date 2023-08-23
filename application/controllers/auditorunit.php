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
        $data['hasil_tindak_lanjut'] = $this->Data_ami->get_id_hasil_tindak_lanjut();
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
        $data['hasil_tindak_lanjut'] = $this->Data_ami->get_id_hasil_tindak_lanjut();

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



        $this->load->view('partials/auditorunit/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditorunit/sidebar', $data);
        $this->load->view('partials/auditorunit/topbar', $data);
        $this->load->view('templates/auditorunit/profile', $data);
        $this->load->view('partials/auditorunit/footer', $data);
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

        $this->load->view('partials/auditorunit/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditorunit/sidebar', $data);
        $this->load->view('templates/auditorunit/laporantindaklanjut/tabel', $data);
        $this->load->view('partials/auditorunit/footer', $data);
    }

    public function datahasilaudit2()
    {

        $data['title'] = 'Laporan Hasil Audit';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['bab2'] = $this->Data_ami->get_hasilaudit2($data['user']['id']);

        // var_dump($data['tindaklanjut']);

        $this->load->view('partials/auditorunit/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditorunit/sidebar', $data);
        $this->load->view('templates/auditorunit/laporantindaklanjut/tabel', $data);
        $this->load->view('partials/auditorunit/footer', $data);
    }


    //form untuk semua 

    public function isidata()
    {

        $data['title'] = ' Isi Data Laporan Hasil Audit';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['hasil_tindak_lanjut'] = $this->Data_ami->get_id_hasil_tindak_lanjut();
        $data['unit'] = $this->Data_ami->get_unit_by_id($data['user']['id_audit']);

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
            $this->load->view('partials/auditorunit/header', $data);
            $this->load->view('templates/logo', $data);
            $this->load->view('partials/auditorunit/sidebar', $data);
            $this->load->view('templates/auditorunit/laporantindaklanjut/form', $data);
            $this->load->view('partials/auditorunit/footer', $data);
        } else {

            $this->session->set_flashdata('flash', 'ditambahkan');

            $data['nama_file_pengesahan'] = 'template1.png';

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

            $this->Data_ami->tambah_hasilaudit($data['user']['id'], $data['nama_file_pengesahan'], $data['nama_file_dokumentasi'], $data['nama_file_daftarhadir'], $data['nama_file_beritaacara']);
            redirect('auditorunit/datahasilaudit');
        }
    }

    public function isidata_post($id)
    {

        $this->Data_ami->tambah_hasilaudit($id);
        $this->session->set_flashdata('flash', 'ditambahkan');
        redirect('auditorunit/laporanakhir/' . $id);
    }


    public function isidata2()
    {

        $data['title'] = ' Isi Data Laporan Hasil Audit';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['params'] = $this->uri->segment(3);;

        $data['unit'] = $this->Data_ami->get_unit_by_id($data['user']['id_audit']);
        $data['hasil_tindak_lanjut'] = $this->Data_ami->get_id_hasil_tindak_lanjut();
        // $data['tampil_daftar_temuan'] = $this->Data_ami->get_data_temuan_auditunit();

        // $this->form_validation->set_rules('dokumen_acuan', 'Dokumen Acuan', 'required');
        $this->form_validation->set_rules('dokumen_acuan', 'Dokumen Acuan', 'required');
        $this->form_validation->set_rules('deskripsi_temuan', 'Deskripsi Temuan', 'required');
        $this->form_validation->set_rules('Permintaan_tindakan', 'Permintaan Tindakan Koreksi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('partials/auditorunit/header', $data);
            $this->load->view('templates/logo', $data);
            $this->load->view('partials/auditorunit/sidebar', $data);
            $this->load->view('templates/auditorunit/laporantindaklanjut/form2', $data);
            $this->load->view('partials/auditorunit/footer', $data);
        }
    }

    public function isidata2_post($id)
    {

        $this->Data_ami->tambah_hasilaudit2($id);
        $this->session->set_flashdata('flash', 'ditambahkan');
        redirect('auditorunit/laporanakhir/' . $id);
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
            $this->load->view('partials/auditorunit/header', $data);
            $this->load->view('templates/logo', $data);
            $this->load->view('partials/auditorunit/sidebar', $data);
            $this->load->view('templates/auditorunit/laporantindaklanjut/edit', $data);
            $this->load->view('partials/auditorunit/footer', $data);
        } else {
            // var_dump($id_auditor);
            $this->Data_ami->update_data_hasil_audit($id);
            $this->session->set_flashdata('flash', 'diubah');

            // var_dump($data['bab2'][0]->id_tindaklanjut);
            // var_dump($data['bab2']);
            redirect('auditorunit/laporanakhir/' . $id);
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
            $this->load->view('partials/auditorunit/header', $data);
            $this->load->view('templates/logo', $data);
            $this->load->view('partials/auditorunit/sidebar', $data);
            $this->load->view('templates/auditorunit/laporantindaklanjut/edit2', $data);
            $this->load->view('partials/auditorunit/footer', $data);
        } else {
            // var_dump($id_auditor);
            $this->Data_ami->update_data2_hasil_audit();
            $this->session->set_flashdata('flash', 'diubah');

            // var_dump($data['bab2'][0]->id_tindaklanjut);
            // var_dump($data['bab2']);
            redirect('auditorunit/laporanakhir/' . $id);
        }
    }


    public function laporanakhir()
    {

        $data['title'] = 'Laporan Hasil Audit';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['params'] = $this->uri->segment(3);

        $data['unit'] = $this->Data_ami->get_unit_by_id($data['user']['id_audit']);
        $data['hasilaudit'] = $this->Data_ami->get_data_hasil_audit($data['params']);
        $data['bab2_hasil_audit'] = $this->Data_ami->get_data2_hasil_audit($data['params']);
        $data['hasil_tindak_lanjut'] = $this->Data_ami->get_id_hasil_tindak_lanjut();

        // var_dump($data['bab2_hasil_audit']);

        $this->load->view('partials/auditorunit/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditorunit/sidebar', $data);
        $this->load->view('templates/auditorunit/laporantindaklanjut/laporanhasil', $data);
        $this->load->view('partials/auditorunit/footer', $data);
    }

    public function generate_pdf_hasil_audit()
    {
        $data['title'] = 'Laporan Hasil Audit';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['params'] = $this->uri->segment(3);

        $data['hasilaudit'] = $this->Data_ami->get_data_hasil_audit($data['params']);
        $data['bab2_hasil_audit'] = $this->Data_ami->get_data2_hasil_audit($data['params']);
        $this->load->view('partials/auditorunit/header', $data);
        $this->load->view('templates/auditorunit/laporantindaklanjut/generate', $data);
        $this->load->view('partials/auditorunit/footer', $data);
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
        $this->load->view('partials/unit/header', $data);
        $this->load->view('templates/unit/laporantindaklanjut/generate', $data);
        $this->load->view('partials/unit/footer', $data);
    }

    public function generate_daftar_tilik_unit()
    {
        $data['title'] = 'Generate Daftar Tilik';
        $data['title1'] = 'Hasil Desk Evaluation';
        $data['title2'] = 'Daftar Tilik ( Checklist )';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['unit'] = $this->Data_ami->get_unit_by_id($data['user']['id_audit']);


        $data['hasil_tindak_lanjut'] = $this->Data_ami->get_id_hasil_tindak_lanjut();

        // hasil desk
        $data['tampil_hasil_desk_tambahan_unit'] = $this->Data_ami->tampil_hasil_desk_tambahan_unit();
        $data['total_checkbox'] = $this->Data_ami->total_hasil_desk_unit();

        // daftar tilik
        $data['tampil_daftar_tilik_tambahan_unit'] = $this->Data_ami->tampil_daftar_tilik_tambahan_unit();
        $data['total_daftar_tilik'] = $this->Data_ami->total_daftar_tilik_unit();

        $this->load->view('partials/auditorunit/header', $data);
        $this->load->view('templates/auditorunit/daftartilik/generate', $data);
        $this->load->view('partials/auditorunit/footer', $data);
    }
}
