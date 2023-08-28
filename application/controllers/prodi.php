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
        // $data['hasil_audit'] = $this->Data_ami->get_id_hasil_audit();

        $data['unit'] = $this->Data_ami->get_unit_by_id($data['user']['id_audit']);
        $data['hasilaudit'] = $this->Data_ami->get_id_hasil_audit();


        $this->load->view('partials/prodi/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/prodi/sidebar', $data);
        $this->load->view('templates/prodi/beranda', $data);
        $this->load->view('partials/prodi/footer', $data);
    }


    public function dokumenkebutuhan()
    {
        $data['title'] = 'Dokumen Kebutuhan Audit Prodi';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        // var_dump($data['user']['id']);

        $data['dokumen'] = $this->Data_ami->get_dokprodi($data['user']['id']);
        // $data['hasilaudit'] = $this->Data_ami->get_data_by_id_hasil_audit($id)
        $data['hasilaudit'] = $this->Data_ami->get_id_hasil_audit();;
        // $data['hasil_audit'] = $this->Data_ami->get_id_hasil_audit();

        $this->load->view('partials/prodi/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/prodi/sidebar', $data);
        $this->load->view('templates/prodi/dokumenkebutuhanprodi/dokumenAudit', $data);
        $this->load->view('partials/prodi/footer', $data);
    }



    // public function upload_dokumen($id)
    // {
    //     $data['title'] = 'Form Upload Dokumen';
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();
    //     $data['id'] = $id;

    //     // $data['hasil_audit'] = $this->Data_ami->get_id_hasil_audit();
    //     // var_dump($id);

    //     // $data['dokumen'] = $this->Data_ami->update_dokumen($data['user']['id']);

    //     // $this->form_validation->set_rules('nama', 'Nama Dokumen', 'required');
    //     $this->form_validation->set_rules('file_dokumen', 'File Dokumen', 'in_list');

    //     if ($this->form_validation->run() == FALSE) {
    //         $this->load->view('partials/prodi/header', $data);
    //         $this->load->view('templates/logo', $data);
    //         $this->load->view('partials/prodi/sidebar', $data);
    //         $this->load->view('templates/prodi/dokumenkebutuhanprodi/formupload', $data);
    //         $this->load->view('partials/prodi/footer', $data);
    //     } else {
    //         // var_dump($id);
    //         // var_dump($_FILES['file_dokumen']);

    //         if ($_FILES['file_dokumen']['name']) {
    //             $config['upload_path'] = './assets/dokumen';
    //             $config['allowed_types'] = 'pdf';
    //             $config['max_size'] = 2048; // 2MB

    //             $this->load->library('upload', $config);
    //             if (!$this->upload->do_upload('file_dokumen')) {
    //                 $error = array('error' => $this->upload->display_errors());
    //                 // var_dump($error);
    //             } else {
    //                 // var_dump("bisa diupload");
    //                 $upload_data = $this->upload->data();
    //                 // var_dump($upload_data);
    //                 $data['nama_file'] = $upload_data['file_name'];
    //                 $data['type'] = $upload_data['file_type'];
    //                 $data['ukuran'] = $upload_data['file_size'];
    //                 $this->Data_ami->update_dokumen($id, $data['nama_file'], $data['type'], $data['ukuran']);
    //                 redirect('prodi/dokumenkebutuhan');
    //             }
    //         }
    //         $this->session->set_flashdata('flash', 'ditambahkan');
    //     }
    // }

    // public function halamanawal()
    // {

    //     $data['title'] = 'Laporan Hasil Audit';
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();

    //     $this->load->view('partials/prodi/header', $data);
    //     $this->load->view('templates/logo', $data);
    //     $this->load->view('partials/prodi/sidebar', $data);
    //     $this->load->view('templates/prodi/hasilauditprodi/laporanaudit', $data);
    //     $this->load->view('partials/prodi/footer', $data);
    // }

    // public function katapengantarr()
    // {

    //     $data['title'] = 'Laporan Hasil Audit';
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();

    //     $this->load->view('partials/prodi/header', $data);
    //     $this->load->view('templates/logo', $data);
    //     $this->load->view('partials/prodi/sidebar', $data);
    //     $this->load->view('templates/prodi/hasilauditprodi/katapengantar1', $data);
    //     $this->load->view('partials/prodi/footer', $data);
    // }

    // public function BAB1()
    // {

    //     $data['title'] = 'Laporan Hasil Audit';
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();

    //     $this->load->view('partials/prodi/header', $data);
    //     $this->load->view('templates/logo', $data);
    //     $this->load->view('partials/prodi/sidebar', $data);
    //     $this->load->view('templates/prodi/hasilauditprodi/babsatu', $data);
    //     $this->load->view('partials/prodi/footer', $data);
    // }

    // public function BAB2()
    // {

    //     $data['title'] = 'Laporan Hasil Audit';
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();

    //     $this->load->view('partials/prodi/header', $data);
    //     $this->load->view('templates/logo', $data);
    //     $this->load->view('partials/prodi/sidebar', $data);
    //     $this->load->view('templates/prodi/hasilauditprodi/babdua', $data);
    //     $this->load->view('partials/prodi/footer', $data);
    // }

    // public function laporanhasilprodi()
    // {

    //     $data['title'] = 'Laporan Hasil Tindak Lanjut';
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();

    //     $this->load->view('partials/prodi/header', $data);
    //     $this->load->view('templates/logo', $data);
    //     $this->load->view('partials/prodi/sidebar', $data);
    //     $this->load->view('templates/prodi/laporanhasilprodi/halamansatu', $data);
    //     $this->load->view('partials/prodi/footer', $data);
    // }

    // public function kataP()
    // {

    //     $data['title'] = 'Laporan Hasil Tindak Lanjut';
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();

    //     $this->load->view('partials/prodi/header', $data);
    //     $this->load->view('templates/logo', $data);
    //     $this->load->view('partials/prodi/sidebar', $data);
    //     $this->load->view('templates/prodi/laporanhasilprodi/katapengantar2', $data);
    //     $this->load->view('partials/prodi/footer', $data);
    // }

    // public function BabSatu()
    // {

    //     $data['title'] = 'Laporan Hasil Tindak Lanjut';
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();

    //     $this->load->view('partials/prodi/header', $data);
    //     $this->load->view('templates/logo', $data);
    //     $this->load->view('partials/prodi/sidebar', $data);
    //     $this->load->view('templates/prodi/laporanhasilprodi/babsatuu', $data);
    //     $this->load->view('partials/prodi/footer', $data);
    // }

    // public function BabDua()
    // {

    //     $data['title'] = 'Laporan Hasil Tindak Lanjut';
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();

    //     $this->load->view('partials/prodi/header', $data);
    //     $this->load->view('templates/logo', $data);
    //     $this->load->view('partials/prodi/sidebar', $data);
    //     $this->load->view('templates/prodi/laporanhasilprodi/babduaa', $data);
    //     $this->load->view('partials/prodi/footer', $data);
    // }

    // public function BabTiga()
    // {

    //     $data['title'] = 'Laporan Hasil Tindak Lanjut';
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();

    //     $this->load->view('partials/prodi/header', $data);
    //     $this->load->view('templates/logo', $data);
    //     $this->load->view('partials/prodi/sidebar', $data);
    //     $this->load->view('templates/prodi/laporanhasilprodi/babtigaa', $data);
    //     $this->load->view('partials/prodi/footer', $data);
    // }

    public function laporanakhir()
    {

        $data['title'] = 'Laporan Hasil Tindak Lanjut';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['params'] = $this->uri->segment(3);;
        // var_dump($data['params']);

        $data['tindaklanjut'] = $this->Data_ami->get_data($data['params']);
        $data['bab2'] = $this->Data_ami->get_data2($data['params']);
        // $data['bab2_hasil_audit'] = $this->Data_ami->get_data2_hasil_audit($data['params']);
        $data['hasilaudit'] = $this->Data_ami->get_id_hasil_audit_baru($data['user']['id']);
        $data['bab2_hasil_audit'] = $this->Data_ami->get_data2_hasil_audit($data['hasilaudit']->id_hasilaudit);

        $this->load->view('partials/prodi/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/prodi/sidebar', $data);
        $this->load->view('templates/prodi/laporanhasilprodi/laporan', $data);
        $this->load->view('partials/prodi/footer', $data);
    }

    public function generate_pdf()
    {
        $data['title'] = 'Laporan Hasil Tindak Lanjut';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['params'] = $this->uri->segment(3);
        // var_dump($data['params']);


        $data['tindaklanjut'] = $this->Data_ami->get_data($data['params']);
        $data['bab2'] = $this->Data_ami->get_data2($data['params']);
        $this->load->view('partials/prodi/header', $data);
        $this->load->view('templates/prodi/laporanhasilprodi/generatepdf', $data);
        $this->load->view('partials/prodi/footer', $data);
    }


    //form untuk semua 

    public function isidata()
    {

        $data['title'] = ' Isi Data Laporan Hasil Tindak Lanjut';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['tindaklanjut'] = $this->Data_ami->get_tindaklanjut($data['user']['id']);
        $data['hasilaudit'] = $this->Data_ami->get_id_hasil_audit();

        // $this->form_validation->set_rules('nama_penyusunan', 'Nama', 'required');
        // $this->form_validation->set_rules('pemeriksa1', 'Nama', 'required');
        // $this->form_validation->set_rules('penetapan1', 'Nama', 'required');

        $this->form_validation->set_rules('file_dokumen', 'File Dokumen', 'in_list');
        $this->form_validation->set_rules('dokumentasi', 'File Dokumentasi', 'in_list');
        $this->form_validation->set_rules('daftarhadir', 'Daftar Hadir', 'in_list');
        $this->form_validation->set_rules('beritaacara', 'Berita Acara', 'in_list');
        $this->form_validation->set_rules('periode', 'Periode', 'required');
        $this->form_validation->set_rules('tahun', 'Tahun', 'required');
        $this->form_validation->set_rules('lembaga', 'Lembaga', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('nrk', 'NRK', 'required');
        $this->form_validation->set_rules('hari_tgl', 'Hari dan Tanggal', 'required');
        $this->form_validation->set_rules('waktu', 'waktu', 'required');
        $this->form_validation->set_rules('tempat', 'Tempat', 'required');
        $this->form_validation->set_rules('auditor', 'Auditor', 'required');
        $this->form_validation->set_rules('auditor2', 'Auditor', 'required');
        $this->form_validation->set_rules('auditee', 'Auditee', 'required');
        // $this->form_validation->set_rules('temuan', 'Temuan', 'required');
        $this->form_validation->set_rules('prodi', 'Prodi', 'required');
        // $this->form_validation->set_rules('ruanglingkup', 'Ruang Lingkup', 'required');
        $this->form_validation->set_rules('tanggalDE', 'Tanggal DE', 'required');
        // $this->form_validation->set_rules('dokumenacuan', 'Dokumen Acuan', 'required');
        // $this->form_validation->set_rules('a2', 'A2', 'required');
        $this->form_validation->set_rules('kesimpulan', 'Kesimpulan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('partials/prodi/header', $data);
            $this->load->view('templates/logo', $data);
            $this->load->view('partials/prodi/sidebar', $data);
            $this->load->view('templates/prodi/laporanhasilprodi/form', $data);
            $this->load->view('partials/prodi/footer', $data);
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
            $this->Data_ami->tambah_tindaklanjut($data['user']['id'], $data['nama_file_pengesahan'], $data['nama_file_dokumentasi'], $data['nama_file_daftarhadir'], $data['nama_file_beritaacara']);

            redirect('prodi/datatindaklanjut');
            // var_dump( $data['tindaklanjut']);
        }
    }

    public function isidata_post($id)
    {

        $this->Data_ami->tambah_tindaklanjut($id);
        $this->session->set_flashdata('flash', 'ditambahkan');
        redirect('prodi/laporanakhir/' . $id);
    }


    public function isidata2()
    {

        $data['title'] = ' Isi Data Laporan Hasil Tindak Lanjut';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['tindaklanjut'] = $this->Data_ami->get_tindaklanjut($data['user']['id']);
        $data['hasilaudit'] = $this->Data_ami->get_id_hasil_audit();

        $data['params'] = $this->uri->segment(3);;

        // var_dump($data['params']);
        $this->form_validation->set_rules('jenis_temuan', 'Jenis Temuan', 'required');
        $this->form_validation->set_rules('kode', 'Kode', 'required');
        $this->form_validation->set_rules('jangka_waktu', 'Jangka Waktu', 'required');
        $this->form_validation->set_rules('pj', 'Penanggung Jawab', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('partials/prodi/header', $data);
            $this->load->view('templates/logo', $data);
            $this->load->view('partials/prodi/sidebar', $data);
            $this->load->view('templates/prodi/laporanhasilprodi/form2', $data);
            $this->load->view('partials/prodi/footer', $data);
        }
    }

    public function isidata2_post($id)
    {

        $this->Data_ami->tambah_tindaklanjut2($id);
        $this->session->set_flashdata('flash', 'ditambahkan');
        redirect('prodi/laporanakhir/' . $id);
    }

    public function datatindaklanjut()
    {

        $data['title'] = 'Laporan Hasil Tindak Lanjut';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['tindaklanjut'] = $this->Data_ami->get_tindaklanjut($data['user']['id']);
        $data['hasilaudit'] = $this->Data_ami->get_id_hasil_audit();
        // var_dump($data['tindaklanjut']);

        $this->load->view('partials/prodi/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/prodi/sidebar', $data);
        $this->load->view('templates/prodi/laporanhasilprodi/tabel', $data);
        $this->load->view('partials/prodi/footer', $data);
    }

    public function datatindaklanjut2()
    {

        $data['title'] = 'Laporan Hasil Tindak Lanjut';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['bab2'] = $this->Data_ami->get_tindaklanjut2($data['user']['id']);
        // var_dump($data['tindaklanjut']);

        $this->load->view('partials/prodi/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/prodi/sidebar', $data);
        $this->load->view('templates/prodi/laporanhasilprodi/tabel', $data);
        $this->load->view('partials/prodi/footer', $data);
    }



    //edit

    public function edit_data($id)
    {
        $data['title'] = 'Edit Data';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['tindaklanjut'] = $this->Data_ami->get_data_by_id($data['user']['id'], $id);
        $data['hasilaudit'] = $this->Data_ami->get_data_by_id_hasil_audit($id);

        $data['unit'] = $this->Data_ami->get_unit_by_id($data['user']['id_audit']);
        $data['hasil_tindak_lanjut'] = $this->Data_ami->get_id_hasil_tindak_lanjut();

        $this->load->view('partials/prodi/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/prodi/sidebar', $data);
        $this->load->view('templates/prodi/laporanhasilprodi/editbab1', $data);
        $this->load->view('partials/prodi/footer', $data);

        // var_dump($data['tindaklanjut']);


        // $this->form_validation->set_rules('nama_penyusunan', 'Nama', 'required');
        // $this->form_validation->set_rules('pemeriksa1', 'Nama', 'required');
        // $this->form_validation->set_rules('penetapan1', 'Nama', 'required');
        // $this->form_validation->set_rules('periode', 'Periode', 'required');
        // $this->form_validation->set_rules('tahun', 'Tahun', 'required');
        // $this->form_validation->set_rules('lembaga', 'Lembaga', 'required');
        // $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        // $this->form_validation->set_rules('nrk', 'NRK', 'required');
        // $this->form_validation->set_rules('hari_tgl', 'Hari dan Tanggal', 'required');
        // $this->form_validation->set_rules('waktu', 'waktu', 'required');
        // $this->form_validation->set_rules('tempat', 'Tempat', 'required');
        // $this->form_validation->set_rules('auditor', 'Auditor', 'required');
        // $this->form_validation->set_rules('auditee', 'Auditee', 'required');
        // $this->form_validation->set_rules('temuan', 'Temuan', 'required');
        // $this->form_validation->set_rules('prodi', 'Prodi', 'required');
        // $this->form_validation->set_rules('ruanglingkup', 'Ruang Lingkup', 'required');
        // $this->form_validation->set_rules('tanggalDE', 'Tanggal DE', 'required');
        // $this->form_validation->set_rules('dokumenacuan', 'Dokumen Acuan', 'required');
        // $this->form_validation->set_rules('a2', 'A2', 'required');
        // $this->form_validation->set_rules('kesimpulan', 'Kesimpulan', 'required');


        // if ($this->form_validation->run() == FALSE) {

        // } else {
        //     // var_dump($id_auditor);
        //     $this->Data_ami->update_data();
        //     $this->session->set_flashdata('flash', 'diubah');

        //     // var_dump($data['bab2'][0]->id_tindaklanjut);
        //     // var_dump($data['bab2']);
        //     redirect('prodi/laporanakhir/' . $data['tindaklanjut'][0]->id_user);
    }

    public function edit_form_hasil_auditor($id)
    {

        $this->Data_ami->update_data_tindak_lanjut($id);
        $this->session->set_flashdata('flash', 'diubah');

        redirect('prodi/laporanakhir/' . $id);
    }


    public function edit_data2($id)
    {
        $data['title'] = 'Edit Data';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['bab2'] = $this->Data_ami->get_data2_by_id($id);
        // var_dump($data);


        // $this->form_validation->set_rules('prodi', 'Prodi', 'required');
        // // $this->form_validation->set_rules('file_dokumen', 'File Dokumen', 'in_list');
        // $this->form_validation->set_rules('ruanglingkup', 'Ruang Lingkup', 'required');
        // $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        // $this->form_validation->set_rules('dokumen_acuan', 'Dokumen Acuan', 'required');
        $this->form_validation->set_rules('jenis_temuan', 'Jenis Temuan', 'required');
        // $this->form_validation->set_rules('OB', 'Lembaga', 'required');
        // $this->form_validation->set_rules('KTS', 'Tanggal', 'required');
        $this->form_validation->set_rules('kode', 'Kode', 'required');
        $this->form_validation->set_rules('jangka_waktu', 'Jangka Waktu', 'required');
        $this->form_validation->set_rules('pj', 'Penanggung Jawab', 'required');
        // $this->form_validation->set_rules('temuan', 'Temuan', 'required');
        // $this->form_validation->set_rules('a2', 'A2', 'required');
        // $this->form_validation->set_rules('kesimpulan', 'Kesimpulan', 'required');
        // // $this->form_validation->set_rules('dokumentasi', 'Dokumentasi', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('partials/prodi/header', $data);
            $this->load->view('templates/logo', $data);
            $this->load->view('partials/prodi/sidebar', $data);
            $this->load->view('templates/prodi/laporanhasilprodi/editbab2', $data);
            $this->load->view('partials/prodi/footer', $data);
        } else {
            // var_dump($id_auditor);
            $this->Data_ami->update_data2();
            $this->session->set_flashdata('flash', 'diubah');

            // var_dump($data['bab2'][0]->id_tindaklanjut);
            // var_dump($data['bab2']);
            redirect('prodi/laporanakhir/' . $data['bab2'][0]->id_tindaklanjut);
        }
    }


    public function form_link_drive()
    {

        $data['title'] = 'Form Upload Link Drive';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $data['hasilaudit'] = $this->Data_ami->get_id_hasil_audit();
        $this->load->view('partials/prodi/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/prodi/sidebar', $data);
        $this->load->view('templates/prodi/dokumenkebutuhanprodi/form', $data);
        $this->load->view('partials/prodi/footer', $data);
    }



    public function terima_link_drive()
    {

        $atribut_data = [
            "id" => $this->input->post('id_user'),
            "link_drive" => $this->input->post('link_drive'),
        ];

        $this->session->set_flashdata('Sukses', 'Link berhasil diupload');

        $this->Data_ami->tambah_link_drive($atribut_data);

        redirect('prodi/form_link_drive');
    }

    public function profile()
    {
        $data['title'] = '';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();



        $this->load->view('partials/prodi/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/prodi/sidebar', $data);
        $this->load->view('partials/prodi/topbar', $data);
        $this->load->view('templates/prodi/profile', $data);
        $this->load->view('partials/prodi/footer', $data);
    }

    //generate pdf hasil audit dri auditor

    public function generate_pdf_hasil_audit()
    {
        $data['title'] = 'Laporan Hasil Audit';
        $data['title1'] = 'Hasil Desk Evaluation';
        $data['title2'] = 'Daftar Tilik ( Checklist )';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $id = $data['user']['id'];

        $data['hasilaudit'] = $this->Data_ami->get_id_hasil_audit();
        $data['bab2_hasil_audit'] = $this->Data_ami->get_data2_hasil_audit($data['hasilaudit']->id_hasilaudit);

        $data['tampil_hasil_desk_utama1'] = $this->Data_ami->tampil_hasil_desk_utama_auditor('1');
        $data['tampil_hasil_desk_tambahan1'] = $this->Data_ami->tampil_hasil_desk_tambahan_auditor('1');
        $data['total_checkbox1'] = $this->Data_ami->total_hasil_desk_baru('1');

        // var_dump($id);

        // daftar tilik
        $data['tampil_daftar_tilik_utama1'] = $this->Data_ami->tampil_daftar_tilik_utama_baru_auditor('1');
        $data['tampil_daftar_tilik_tambahan1'] = $this->Data_ami->tampil_daftar_tilik_tambahan_baru_auditor('1');
        $data['total_daftar_tilik1'] = $this->Data_ami->total_daftar_tilik_baru('1');
        // var_dump( $data['tampil_hasil_desk_utama1']);

        //2
        // hasil desk
        $data['tampil_hasil_desk_utama2'] = $this->Data_ami->tampil_hasil_desk_utama_auditor('2');
        $data['tampil_hasil_desk_tambahan2'] = $this->Data_ami->tampil_hasil_desk_tambahan_auditor('2');
        $data['total_checkbox2'] = $this->Data_ami->total_hasil_desk_baru('2');

        // daftar tilik
        $data['tampil_daftar_tilik_utama2'] = $this->Data_ami->tampil_daftar_tilik_utama_baru_auditor('2');
        $data['tampil_daftar_tilik_tambahan2'] = $this->Data_ami->tampil_daftar_tilik_tambahan_baru_auditor('2');
        $data['total_daftar_tilik2'] = $this->Data_ami->total_daftar_tilik_baru('2');

        //3
        // hasil desk
        $data['tampil_hasil_desk_utama3'] = $this->Data_ami->tampil_hasil_desk_utama_auditor('3');
        $data['tampil_hasil_desk_tambahan3'] = $this->Data_ami->tampil_hasil_desk_tambahan_auditor('3');
        $data['total_checkbox3'] = $this->Data_ami->total_hasil_desk_baru('3');

        // daftar tilik
        $data['tampil_daftar_tilik_utama3'] = $this->Data_ami->tampil_daftar_tilik_utama_baru_auditor('3');
        $data['tampil_daftar_tilik_tambahan3'] = $this->Data_ami->tampil_daftar_tilik_tambahan_baru_auditor('3');
        $data['total_daftar_tilik3'] = $this->Data_ami->total_daftar_tilik_baru('3');

        // 4
        $data['tampil_hasil_desk_utama4'] = $this->Data_ami->tampil_hasil_desk_utama_auditor('4');
        $data['tampil_hasil_desk_tambahan4'] = $this->Data_ami->tampil_hasil_desk_tambahan_auditor('4');
        $data['total_checkbox4'] = $this->Data_ami->total_hasil_desk_baru('4');

        // daftar tilik
        $data['tampil_daftar_tilik_utama4'] = $this->Data_ami->tampil_daftar_tilik_utama_baru_auditor('4');
        $data['tampil_daftar_tilik_tambahan4'] = $this->Data_ami->tampil_daftar_tilik_tambahan_baru_auditor('4');
        $data['total_daftar_tilik4'] = $this->Data_ami->total_daftar_tilik_baru('4');

        // 5
        $data['tampil_hasil_desk_utama5'] = $this->Data_ami->tampil_hasil_desk_utama_auditor('5');
        $data['tampil_hasil_desk_tambahan5'] = $this->Data_ami->tampil_hasil_desk_tambahan_auditor('5');
        $data['total_checkbox5'] = $this->Data_ami->total_hasil_desk_baru('5');

        // daftar tilik
        $data['tampil_daftar_tilik_utama5'] = $this->Data_ami->tampil_daftar_tilik_utama_baru_auditor('5');
        $data['tampil_daftar_tilik_tambahan5'] = $this->Data_ami->tampil_daftar_tilik_tambahan_baru_auditor('5');
        $data['total_daftar_tilik5'] = $this->Data_ami->total_daftar_tilik_baru('5');

        // 6
        $data['tampil_hasil_desk_utama6'] = $this->Data_ami->tampil_hasil_desk_utama_auditor('6');
        $data['tampil_hasil_desk_tambahan6'] = $this->Data_ami->tampil_hasil_desk_tambahan_auditor('6');
        $data['total_checkbox6'] = $this->Data_ami->total_hasil_desk_baru('6');

        // daftar tilik
        $data['tampil_daftar_tilik_utama6'] = $this->Data_ami->tampil_daftar_tilik_utama_baru_auditor('6');
        $data['tampil_daftar_tilik_tambahan6'] = $this->Data_ami->tampil_daftar_tilik_tambahan_baru_auditor('6');
        $data['total_daftar_tilik6'] = $this->Data_ami->total_daftar_tilik_baru('6');

        // 7
        $data['tampil_hasil_desk_utama7'] = $this->Data_ami->tampil_hasil_desk_utama_auditor('7');
        $data['tampil_hasil_desk_tambahan7'] = $this->Data_ami->tampil_hasil_desk_tambahan_auditor('7');
        $data['total_checkbox7'] = $this->Data_ami->total_hasil_desk_baru('7');

        // daftar tilik
        $data['tampil_daftar_tilik_utama7'] = $this->Data_ami->tampil_daftar_tilik_utama_baru_auditor('7');
        $data['tampil_daftar_tilik_tambahan7'] = $this->Data_ami->tampil_daftar_tilik_tambahan_baru_auditor('7');
        $data['total_daftar_tilik7'] = $this->Data_ami->total_daftar_tilik_baru('7');


        $this->load->view('partials/prodi/header', $data);
        $this->load->view('templates/prodi/generatehasilaudit', $data);
        $this->load->view('partials/prodi/footer', $data);
    }
}
