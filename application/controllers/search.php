<?php

class search extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $keyword = $this->input->get('keyword');
        
        // Lakukan proses pencarian sesuai kebutuhan Anda
        // Contoh: Tampilkan hasil pencarian pada halaman view
        $data['keyword'] = $keyword;
        $data['results'] = $this->Search->searchData($keyword);
        $this->load->view('search_results', $data);
    }
}