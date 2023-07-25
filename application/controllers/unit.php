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

}
