<?php

use LDAP\Result;

defined('BASEPATH') or exit('No direct script access allowed');

class unit extends CI_Controller
{
    // menarik data db models
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Data_ami');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('table');

        // $data['user'] = $this->db->get_where('user', ['email' =>
        // $this->session->userdata('email')])->row_array();

        // // cek sisa waktu deadline
        // $tgl_akhir = "2023-07-07"; // Tanggal selesai yang digunakan sebagai contoh
        // $tanggal_akhir = new DateTime($tgl_akhir);

        // $now = new DateTime();
        // $now->setTime(0, 0, 0); // Set waktu saat ini ke pukul 00:00:00

        // $selisih_hari = $now->diff($tanggal_akhir)->days;
        // $data['deadline'] = $selisih_hari;

        // $this->load->view('templates/logo', $data);

        if ($this->session->userdata('role_name') != "Unit") {
            redirect("auth");
        }
    }


    public function berandaunit()
    {

        $data['title'] = 'Beranda Unit';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // var_dump($data['user']);
        $this->load->view('partials/unit/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/unit/sidebar', $data);
        $this->load->view('templates/unit/beranda', $data);
        $this->load->view('partials/unit/footer', $data);
    }

    public function form_link_drive()
    {

        $data['title'] = 'Form Upload Link Drive';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('partials/unit/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/unit/sidebar', $data);
        $this->load->view('templates/unit/form', $data);
        $this->load->view('partials/unit/footer', $data);
    }



    public function terima_link_drive()
    {

        $atribut_data = [
            "id" => $this->input->post('id_user'),
            "link_drive" => $this->input->post('link_drive'),
        ];

        $this->session->set_flashdata('Sukses', 'Link berhasil diupload');

        $this->Data_ami->tambah_link_drive($atribut_data);

        redirect('unit/form_link_drive');
    }

    public function profile()
    {
        $data['title'] = '';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();



        $this->load->view('partials/unit/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/unit/sidebar', $data);
        $this->load->view('partials/unit/topbar', $data);
        $this->load->view('templates/unit/profile', $data);
        $this->load->view('partials/unit/footer', $data);

    }

    public function laporanakhir()
    {

        $data['title'] = 'Laporan Hasil Tindak Lanjut';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['tindaklanjut'] = $this->Data_ami->get_data($data['params']);

        $url = $_SERVER['REQUEST_URI'];
        $segments = explode('/', $url);

        // Find the index of the parameter name
        $param1Index = array_search('param1', $segments);
        // Retrieve the parameter values
        $data['params'] = $segments[$param1Index + 4];
        // var_dump($data['params']);


        $data['tindaklanjut'] = $this->Data_ami->get_data($data['params']);
        $data['bab2'] = $this->Data_ami->get_data2($data['params']);
        // var_dump($data['tindaklanjut']);

        $this->load->view('partials/unit/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/unit/sidebar', $data);
        $this->load->view('templates/unit/laporantindaklanjut/laporan', $data);
        $this->load->view('partials/unit/footer', $data);
    }

    public function generate_pdf()
    {
        $data['title'] = 'Laporan Hasil Tindak Lanjut';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $url = $_SERVER['REQUEST_URI'];
        $segments = explode('/', $url);

        // Find the index of the parameter name
        $param1Index = array_search('param1', $segments);
        // Retrieve the parameter values
        $data['params'] = $segments[$param1Index + 4];
        // var_dump($data['params']);


        $data['tindaklanjut'] = $this->Data_ami->get_data($data['params']);
        $data['bab2'] = $this->Data_ami->get_data2($data['params']);
        $this->load->view('partials/unit/header', $data);
        $this->load->view('templates/unit/laporantindaklanjut/generatepdf', $data);
        $this->load->view('partials/unit/footer', $data);
    }

    public function isidata()
    {

        $data['title'] = ' Isi Data Laporan Hasil Tindak Lanjut';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        // $this->form_validation->set_rules('nama_penyusunan', 'Nama', 'required');
        // $this->form_validation->set_rules('pemeriksa1', 'Nama', 'required');
        // $this->form_validation->set_rules('penetapan1', 'Nama', 'required');

        $this->form_validation->set_rules('file_dokumen', 'File Dokumen', 'in_list');
        $this->form_validation->set_rules('dokumentasi', 'File Dokumentasi', 'in_list');
        $this->form_validation->set_rules('periode', 'Periode', 'required');
        $this->form_validation->set_rules('tahun', 'Tahun', 'required');
        $this->form_validation->set_rules('lembaga', 'Lembaga', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('nrk', 'NRK', 'required');
        $this->form_validation->set_rules('hari_tgl', 'Hari dan Tanggal', 'required');
        $this->form_validation->set_rules('waktu', 'waktu', 'required');
        $this->form_validation->set_rules('tempat', 'Tempat', 'required');
        $this->form_validation->set_rules('auditor', 'Auditor', 'required');
        $this->form_validation->set_rules('auditee', 'Auditee', 'required');
        $this->form_validation->set_rules('temuan', 'Temuan', 'required');
        $this->form_validation->set_rules('prodi', 'Prodi', 'required');
        $this->form_validation->set_rules('ruanglingkup', 'Ruang Lingkup', 'required');
        $this->form_validation->set_rules('tanggalDE', 'Tanggal DE', 'required');
        $this->form_validation->set_rules('dokumenacuan', 'Dokumen Acuan', 'required');
        $this->form_validation->set_rules('a2', 'A2', 'required');
        $this->form_validation->set_rules('kesimpulan', 'Kesimpulan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('partials/unit/header', $data);
            $this->load->view('templates/logo', $data);
            $this->load->view('partials/unit/sidebar', $data);
            $this->load->view('templates/unit/laporantindaklanjut/form', $data);
            $this->load->view('partials/unit/footer', $data);
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
            $this->Data_ami->tambah_tindaklanjut($data['user']['id'], $data['nama_file_pengesahan'], $data['nama_file_dokumentasi']);
            redirect('unit/datatindaklanjut');
        }
    }

    public function isidata_post($id)
    {

        $this->Data_ami->tambah_tindaklanjut($id);
        $this->session->set_flashdata('flash', 'ditambahkan');
        redirect('unit/laporanakhir/' . $id);
    }


    public function isidata2()
    {

        $data['title'] = ' Isi Data Laporan Hasil Tindak Lanjut';
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
        // var_dump($data['params']);


        // $this->form_validation->set_rules('dokumen_acuan', 'Dokumen Acuan', 'required');
        $this->form_validation->set_rules('jenis_temuan', 'Jenis Temuan', 'required');
        // $this->form_validation->set_rules('OB', 'Lembaga', 'required');
        // $this->form_validation->set_rules('KTS', 'Tanggal', 'required');
        $this->form_validation->set_rules('kode', 'Kode', 'required');
        $this->form_validation->set_rules('jangka_waktu', 'Jangka Waktu', 'required');
        $this->form_validation->set_rules('pj', 'Penanggung Jawab', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('partials/unit/header', $data);
            $this->load->view('templates/logo', $data);
            $this->load->view('partials/unit/sidebar', $data);
            $this->load->view('templates/unit/laporantindaklanjut/form2', $data);
            $this->load->view('partials/unit/footer', $data);
        }
    }

    public function isidata2_post($id)
    {

        $this->Data_ami->tambah_tindaklanjut2($id);
        $this->session->set_flashdata('flash', 'ditambahkan');
        redirect('unit/laporanakhir/' . $id);
    }

    public function datatindaklanjut()
    {

        $data['title'] = 'Laporan Hasil Tindak Lanjut';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['tindaklanjut'] = $this->Data_ami->get_tindaklanjut($data['user']['id']);
        // var_dump($data['tindaklanjut']);

        $this->load->view('partials/unit/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/unit/sidebar', $data);
        $this->load->view('templates/unit/laporantindaklanjut/tabel', $data);
        $this->load->view('partials/unit/footer', $data);
    }

    public function datatindaklanjut2()
    {

        $data['title'] = 'Laporan Hasil Tindak Lanjut';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['bab2'] = $this->Data_ami->get_tindaklanjut2($data['user']['id']);
        // var_dump($data['tindaklanjut']);

        $this->load->view('partials/unit/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/unit/sidebar', $data);
        $this->load->view('templates/unit/laporantindaklanjut/tabel', $data);
        $this->load->view('partials/unit/footer', $data);
    }



    //edit

    public function edit_data($id)
    {
        $data['title'] = 'Edit Data';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['tindaklanjut'] = $this->Data_ami->get_data_by_id($id);
        // var_dump($data);


        // $this->form_validation->set_rules('nama_penyusunan', 'Nama', 'required');
        // $this->form_validation->set_rules('pemeriksa1', 'Nama', 'required');
        // $this->form_validation->set_rules('penetapan1', 'Nama', 'required');
        $this->form_validation->set_rules('periode', 'Periode', 'required');
        $this->form_validation->set_rules('tahun', 'Tahun', 'required');
        $this->form_validation->set_rules('lembaga', 'Lembaga', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('nrk', 'NRK', 'required');
        $this->form_validation->set_rules('hari_tgl', 'Hari dan Tanggal', 'required');
        $this->form_validation->set_rules('waktu', 'waktu', 'required');
        $this->form_validation->set_rules('tempat', 'Tempat', 'required');
        $this->form_validation->set_rules('auditor', 'Auditor', 'required');
        $this->form_validation->set_rules('auditee', 'Auditee', 'required');
        $this->form_validation->set_rules('temuan', 'Temuan', 'required');
        $this->form_validation->set_rules('prodi', 'Prodi', 'required');
        $this->form_validation->set_rules('ruanglingkup', 'Ruang Lingkup', 'required');
        $this->form_validation->set_rules('tanggalDE', 'Tanggal DE', 'required');
        $this->form_validation->set_rules('dokumenacuan', 'Dokumen Acuan', 'required');
        $this->form_validation->set_rules('a2', 'A2', 'required');
        $this->form_validation->set_rules('kesimpulan', 'Kesimpulan', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('partials/unit/header', $data);
            $this->load->view('templates/logo', $data);
            $this->load->view('partials/unit/sidebar', $data);
            $this->load->view('templates/unit/laporantindaklanjut/editbab1', $data);
            $this->load->view('partials/unit/footer', $data);
        } else {
            // var_dump($id_auditor);
            $this->Data_ami->update_data();
            $this->session->set_flashdata('flash', 'diubah');

            // var_dump($data['bab2'][0]->id_tindaklanjut);
            // var_dump($data['bab2']);
            redirect('unit/laporanakhir/' . $data['tindaklanjut'][0]->id_user);
        }
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
            $this->load->view('partials/unit/header', $data);
            $this->load->view('templates/logo', $data);
            $this->load->view('partials/unit/sidebar', $data);
            $this->load->view('templates/unit/laporantindaklanjut/editbab2', $data);
            $this->load->view('partials/unit/footer', $data);
        } else {
            // var_dump($id_auditor);
            $this->Data_ami->update_data2();
            $this->session->set_flashdata('flash', 'diubah');

            // var_dump($data['bab2'][0]->id_tindaklanjut);
            // var_dump($data['bab2']);
            redirect('unit/laporanakhir/' . $data['bab2'][0]->id_tindaklanjut);
        }
    }



}
