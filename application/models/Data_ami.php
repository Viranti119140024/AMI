<?php

use LDAP\Result;

defined('BASEPATH') or exit('No direct script access allowed');

class Data_ami extends CI_Model
{
    // tambah prodi di dokumen kebutuhan audit
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
        // $query = $this->db->query("SELECT * FROM prodi");

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('role_name', 'Program Studi');
        $query = $this->db->get();


        return $query->result();
        // var_dump($query->result());
    }

    // public function hapus_prodi($id_prodi)
    // {
    //     $this->db->delete('prodi', ['id_prodi' => $id_prodi]);
    // }

    // tambah auditor di menu auditor
    public function tambah_auditor()
    {

        $data = [
            'nama_lembaga' => $this->input->post('nama_lembaga', true),
            'nama_auditor' => $this->input->post('nama_auditor', true),
            'nip_nrk' => $this->input->post('nip_nrk', true),
        ];
        // var_dump($data);

        $this->db->insert('auditor', $data);
    }

    public function get_auditor()
    {
        $query = $this->db->query("SELECT * FROM auditor");

        return $query->result();
        // var_dump($query->result());
    }

    public function get_auditor_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('auditor');
        $this->db->where('id_auditor', $id);
        $query = $this->db->get();

        return $query->result();
    }

    // public function hapus_auditor($id_auditor)
    // {
    //     $this->db->delete('auditor', ['id_auditor' => $id_auditor]);
    // }

    public function update_auditor()
    {

        $data = [
            'nama_lembaga' => $this->input->post('nama_lembaga', true),
            'nama_auditor' => $this->input->post('nama_auditor', true),
            'nip_nrk' => $this->input->post('nip_nrk', true),
        ];

        $this->db->where('id_auditor', $this->input->post('id_auditor'));
        $this->db->update('auditor', $data);

        // $this->db->where('id_auditor', $id);
        // $this->db->update('auditor', $data);
    }

    // tambah jurusan di dokumen kebutuhan audit
    public function tambah_jurusan()
    {

        $data = [
            'nama_jurusan' => $this->input->post('nama_jurusan', true),
        ];
        // var_dump($data);

        $this->db->insert('jurusan', $data);
    }

    public function get_jurusan()
    {
        // $query = $this->db->query("SELECT * FROM prodi");

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('role_name', 'Jurusan');
        $query = $this->db->get();


        return $query->result();
        // var_dump($query->result());
    }

    // public function hapus_jurusan($id_jurusan)
    // {
    //     $this->db->delete('jurusan', ['id_jurusan' => $id_jurusan]);
    // }

    public function get_user()
    {
        $query = $this->db->query("SELECT * FROM user");

        return $query->result();
        // var_dump($query->result());
    }

    public function get_dokprodi($id)
    {

        $this->db->select('*');
        $this->db->from('dokumen');
        $this->db->where('id_user', $id);
        $query = $this->db->get();

        return $query->result();

        // $query = $this->db->query("SELECT * FROM dokumen");
        // var_dump($query->result());
    }

    public function get_dokjurusan($id)
    {

        $this->db->select('*');
        $this->db->from('dokumen');
        $this->db->where('id_user', $id);
        $query = $this->db->get();

        return $query->result();

        // $query = $this->db->query("SELECT * FROM dokumen");
        // var_dump($query->result());
    }

    public function tambah_dokumen($id)
    {
        $data = [
            'id_user' => $id,
            'nama_dokumen' => $this->input->post('nama_dokumen', true),
        ];
        // var_dump($data);

        $this->db->insert('dokumen', $data);
    }
}
