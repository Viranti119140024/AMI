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
        // $data['tindaklanjut'] = $this->Data_ami->get_data($data['params']);




        // var_dump($data['user']);

        $this->load->view('partials/jurusan/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/jurusan/sidebar', $data);
        $this->load->view('templates/jurusan/beranda', $data);
        $this->load->view('partials/jurusan/footer', $data);
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
        $this->load->view('partials/jurusan/footer', $data);
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
            $this->load->view('partials/jurusan/footer', $data);
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
        $this->load->view('partials/jurusan/footer', $data);
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
        $this->load->view('partials/jurusan/footer', $data);
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
        $this->load->view('partials/jurusan/footer', $data);
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
        $this->load->view('partials/jurusan/footer', $data);
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
        $this->load->view('partials/jurusan/footer', $data);
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
        $this->load->view('partials/jurusan/footer', $data);
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
        $this->load->view('partials/jurusan/footer', $data);
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
        $this->load->view('partials/jurusan/footer', $data);
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
        $this->load->view('partials/jurusan/footer', $data);
    }


    public function form_link_drive()
    {

        $data['title'] = 'Form Upload Link Drive';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // $data['tindaklanjut'] = $this->Data_ami->get_data($data['params']);
        // // $data['users'] = $this->Data_ami->get_user();

        // $data['link_drive'] = $this->db->get_where('link_drive', ['id_user' => $data['user']['id']])->row_array();

        // var_dump($data['link_drive']);
        // $this->session->set_flashdata('Sukses', 'Link berhasil diupload');
        // // var_dump($this->session->flashdata('success'));
        // var_dump($this->session->flashdata('Sukses'));

        $this->load->view('partials/jurusan/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/jurusan/sidebar', $data);
        $this->load->view('templates/jurusan/dokumenkebutuhan/form', $data);
        $this->load->view('partials/jurusan/footer', $data);
    }

    // public function set_flash_message($type, $message)
    // {
    //     $CI = &get_instance();
    //     $CI->load->library('session');
    //     $CI->session->set_flashdata('flash_message', ['type' => $type, 'message' => $message]);
    // }


    public function terima_link_drive()
    {

        // $data['title'] = 'Form Upload Link Drive';
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // // // $data['users'] = $this->Data_ami->get_user();
        // $data['tindaklanjut'] = $this->Data_ami->get_data($data['params']);

        $atribut_data = [
            "id" => $this->input->post('id_user'),
            "link_drive" => $this->input->post('link_drive'),
        ];

        $this->session->set_flashdata('Sukses', 'Link berhasil diupload');
        // var_dump($this->session->flashdata('success'));
        // var_dump($this->session->flashdata('Sukses'));

        // var_dump($this->input->post('link_drive'), $this->input->post('id_user'));

        $this->Data_ami->tambah_link_drive($atribut_data);

        redirect('jurusan_controller/form_link_drive');

        // $this->load->view('partials/prodi/header', $data);
        // $this->load->view('templates/logo', $data);
        // $this->load->view('partials/prodi/sidebar', $data);
        // $this->load->view('templates/prodi/dokumenkebutuhanprodi/form', $data);
        // $this->load->view('partials/prodi/footer', $data);
    }

    public function isidata()
    {

        $data['title'] = ' Isi Data Laporan Hasil Tindak Lanjut';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['tindaklanjut'] = $this->Data_ami->get_data($data['params']);

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
            $this->load->view('partials/jurusan/header', $data);
            $this->load->view('templates/logo', $data);
            $this->load->view('partials/jurusan/sidebar', $data);
            $this->load->view('templates/jurusan/laporanhasiltindaklanjut/form', $data);
            $this->load->view('partials/jurusan/footer', $data);
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
            redirect('jurusan_controller/datatindaklanjut');
        }
    }

    public function isidata_post($id)
    {

        $this->Data_ami->tambah_tindaklanjut($id);
        $this->session->set_flashdata('flash', 'ditambahkan');
        redirect('jurusan_controller/laporanakhir/' . $id);
    }



    public function isidata2()
    {

        $data['title'] = ' Isi Data Laporan Hasil Tindak Lanjut';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['tindaklanjut'] = $this->Data_ami->get_data($data['params']);
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
            $this->load->view('partials/jurusan/header', $data);
            $this->load->view('templates/logo', $data);
            $this->load->view('partials/jurusan/sidebar', $data);
            $this->load->view('templates/jurusan/laporanhasiltindaklanjut/form2', $data);
            $this->load->view('partials/jurusan/footer', $data);
        }
    }

    public function isidata2_post($id)
    {

        $this->Data_ami->tambah_tindaklanjut2($id);
        $this->session->set_flashdata('flash', 'ditambahkan');
        redirect('jurusan_controller/laporanakhir/' . $id);
    }

    public function datatindaklanjut()
    {

        $data['title'] = 'Laporan Hasil Tindak Lanjut';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['tindaklanjut'] = $this->Data_ami->get_tindaklanjut($data['user']['id']);
        // $data['tindaklanjut'] = $this->Data_ami->get_data($data['params']);
        // var_dump($data['tindaklanjut']);

        $this->load->view('partials/jurusan/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/jurusan/sidebar', $data);
        $this->load->view('templates/jurusan/laporanhasiltindaklanjut/tabel', $data);
        $this->load->view('partials/jurusan/footer', $data);
    }

    public function datatindaklanjut2()
    {

        $data['title'] = 'Laporan Hasil Tindak Lanjut';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['bab2'] = $this->Data_ami->get_tindaklanjut2($data['user']['id']);
        $data['tindaklanjut'] = $this->Data_ami->get_data($data['params']);
        // var_dump($data['tindaklanjut']);

        $this->load->view('partials/jurusan/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/jurusan/sidebar', $data);
        $this->load->view('templates/jurusan/laporanhasiltindaklanjut/tabel', $data);
        $this->load->view('partials/jurusan/footer', $data);
    }

    public function laporanakhir()
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
        // var_dump($data['tindaklanjut']);

        $this->load->view('partials/jurusan/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/jurusan/sidebar', $data);
        $this->load->view('templates/jurusan/laporanhasiltindaklanjut/laporan', $data);
        $this->load->view('partials/jurusan/footer', $data);
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
        $this->load->view('partials/jurusan/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/jurusan/sidebar', $data);
        $this->load->view('templates/jurusan/laporanhasiltindaklanjut/generatepdf', $data);
        $this->load->view('partials/jurusan/footer', $data);
    }

    public function profile()
    {
        $data['title'] = '';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();



        $this->load->view('partials/jurusan/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/jurusan/sidebar', $data);
        $this->load->view('partials/jurusan/topbar', $data);
        $this->load->view('templates/jurusan/profile', $data);
        $this->load->view('partials/jurusan/footer', $data);
    }



}
