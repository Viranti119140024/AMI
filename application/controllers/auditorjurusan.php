<?php

use LDAP\Result;

defined('BASEPATH') or exit('No direct script access allowed');

class auditorjurusan extends CI_Controller
{
    public function kebutuhanauditt()
    {
        $data['title'] = '';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->load->view('partials/auditorjurusan/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditorjurusan/sidebar', $data);
        $this->load->view('partials/auditorjurusan/topbar', $data);
        $this->load->view('templates/auditorjurusan/kebutuhanaudit', $data);
    }

    public function DaftarTilik()
    {
        $data['title'] = '';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->load->view('partials/auditorjurusan/header', $data);
        $this->load->view('templates/logo', $data);
        $this->load->view('partials/auditorjurusan/sidebar', $data);
        $this->load->view('partials/auditorjurusan/topbar', $data);
        $this->load->view('templates/auditorjurusan/DAFTARTILIK', $data);
    }
}
