<?php

use LDAP\Result;

defined('BASEPATH') or exit('No direct script access allowed');

class Data_ami extends CI_Model
{
    public function tambah_prodi()
    {

        $data = [
            'nama_prodi' => $this->input->post('nama_prodi', true),
        ];
        // var_dump($data);

        $this->db->insert('prodi', $data);
    }

    public function get_prodi()
    {
        $query = $this->db->query("SELECT * FROM prodi");

        return $query->result();
        // var_dump($query->result());
    }

    public function hapus_prodi($id_prodi)
    {
        $this->db->delete('prodi', ['id_prodi' => $id_prodi]);
    }

    public function tambah_auditor()
    {

        $data = [
            'nama_lembaga' => $this->input->post('nama_lembaga', true),
            'nama_auditor' => $this->input->post('nama_auditor', true),
            'nip_nrk' => $this->input->post('nip_nrk', true),
        ];
        var_dump($data);

        $this->db->insert('auditor', $data);
    }

    public function get_auditor()
    {
        $query = $this->db->query("SELECT * FROM auditor");

        return $query->result();
        // var_dump($query->result());
    }

    public function hapus_auditor($id_auditor)
    {
        $this->db->delete('auditor', ['id_auditor' => $id_auditor]);
    }
}
