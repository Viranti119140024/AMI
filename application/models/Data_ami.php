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

    public function get_unit()
    {
        // $query = $this->db->query("SELECT * FROM prodi");

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id_audit', 0);
        $query = $this->db->get();

        // var_dump($query->result());
        return $query->result();
        // var_dump($query->result());
    }

    public function get_unit_baru()
    {
        // $query = $this->db->query("SELECT * FROM prodi");

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('role_name', 'Unit');
        $query = $this->db->get();

        // var_dump($query->result());
        return $query->result();
        // var_dump($query->result());
    }

    public function get_unit_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id', $id);
        $query = $this->db->get();

        // var_dump($query->result());
        return $query->result();
        // var_dump($query->result());
    }

    // public function get_data_temuan_auditunit()
    // {
    //     $data = [
    //         'dokumen_acuan' => $this->input->post('dokumen_acuan', true),
    //         'deskripsi_temuan' => $this->input->post('deskripsi_temuan', true),
    //         'open' => $this->input->post('open', true),
    //         'close' => $this->input->post('close', true),
    //         'permintaan_tindakan' => $this->input->post('permintaan_tindakan', true),
    //     ];

    //     $this->db->insert();
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
        $this->db->select('*');
        $this->db->from('user');

        $this->db->where('id_audit !=', 0);
        $this->db->where('id_audit !=', 1);
        $query = $this->db->get();

        return $query->result();
        // var_dump($query->result());
    }
    public function get_auditor_baru()
    {
        // $query = $this->db->query("SELECT * FROM prodi");

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('role_name', 'Unit');
        $query = $this->db->get();

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

    public function get_auditor_admin($id)
    {
        $query = $this->db->select('*')
            ->from('user')
            ->where('id_audit', $id)
            ->limit(1)
            ->get()
            ->row()
            ->id;
        // $query = $this->db->get();

        return $query;
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
        $this->db->select('*');
        $this->db->from('user');
        // $this->db->where('id_audit', 0);
        // $this->db->or_where('id_audit ', 1);
        $query = $this->db->get();

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

        // var_dump($query->result());
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

    public function update_dokumen($id, $nama, $tipe, $ukuran)
    {
        $data['nama_file'] = $nama;
        $data['type'] = $tipe;
        $data['ukuran'] = $ukuran;

        $this->db->where('id_dokumen', $id);
        $this->db->update('dokumen', $data);
    }

    public function get_dokumen_link($id)
    {
        // $query = $this->db->query("SELECT * FROM prodi");
        // $id = (int)$id;
        $this->db->select('*');
        $this->db->from('dokumen');
        $this->db->where('id_dokumen', $id);
        $query = $this->db->get();

        // var_dump($query->result());
        // var_dump($id);
        return $query->result();
    }

    public function get_tindaklanjut($id)
    {
        // $query = $this->db->query("SELECT * FROM prodi");
        // $id = (int)$id;
        $this->db->select('*');
        $this->db->from('tindaklanjut');
        $this->db->where('id_user', $id);
        $query = $this->db->get();

        // var_dump($query->result());
        // var_dump($id);
        return $query->result();
    }

    public function get_tindaklanjut2($id)
    {
        // $query = $this->db->query("SELECT * FROM prodi");
        // $id = (int)$id;
        $this->db->select('*');
        $this->db->from('bab2');
        $this->db->where('id_tindaklanjut', $id);
        $query = $this->db->get();

        // var_dump($query->result());
        // var_dump($id);
        return $query->result();
    }

    public function tambah_tindaklanjut($id, $foto1, $foto2, $foto3, $foto4)
    {
        $data = [
            'id_user' => $id,
            // 'nama_penyusunan' => $this->input->post('nama_penyusunan', true),
            // 'pemeriksa1' => $this->input->post('pemeriksa1', true),
            // 'pemeriksa2' => $this->input->post('pemeriksa2', true),
            // 'penetapan1' => $this->input->post('penetapan1', true),
            // 'penetapan2' => $this->input->post('penetapan2', true),
            'foto_pengesahan' => $foto1,
            'dokumentasi' => $foto2,
            'daftarhadir' => $foto3,
            'beritaacara' => $foto4,
            'periode' => $this->input->post('periode', true),
            'tahun' => $this->input->post('tahun', true),
            'lembaga' => $this->input->post('lembaga', true),
            'tanggal' => $this->input->post('tanggal', true),
            'nrk' => $this->input->post('nrk', true),
            'hari_tgl' => $this->input->post('hari_tgl', true),
            'waktu' => $this->input->post('waktu', true),
            'tempat' => $this->input->post('tempat', true),
            'auditor' => $this->input->post('auditor', true),
            'auditor2' => $this->input->post('auditor2', true),
            'auditee' => $this->input->post('auditee', true),
            // 'temuan' => $this->input->post('temuan', true),
            'prodi' => $this->input->post('prodi', true),
            // 'ruanglingkup' => $this->input->post('ruanglingkup', true),
            'tanggalDE' => $this->input->post('tanggalDE', true),
            // 'dokumenacuan' => $this->input->post('dokumenacuan', true),
            // 'a2' => $this->input->post('a2', true),
            'kesimpulan' => $this->input->post('kesimpulan', true),
            // 'dokumentasi' => $this->input->post('dokumentasi', true),
        ];
        // var_dump($data);
        $this->db->insert('tindaklanjut', $data);
    }

    public function tambah_tindaklanjut2($id)
    {
        $data = [
            'id_tindaklanjut' => $id,
            // 'prodi' => $this->input->post('prodi', true),
            // 'ruanglingkup' => $this->input->post('ruanglingkup', true),
            // 'tanggal' => $this->input->post('tanggal', true),
            // 'dokumen_acuan' => $this->input->post('dokumen_acuan', true),
            'jenis_temuan' => $this->input->post('jenis_temuan', true),
            'OB' => $this->input->post('OB', true),
            'KTS' => $this->input->post('KTS', true),
            'kode' => $this->input->post('kode', true),
            'jangka_waktu' => $this->input->post('jangka_waktu', true),
            'pj' => $this->input->post('pj', true),
            // 'temuan' => $this->input->post('temuan', true),
            // 'a2' => $this->input->post('a2', true),
            // 'kesimpulan' => $this->input->post('kesimpulan', true),
        ];

        // $data['nama_file'] = $nama;
        // $data['type'] = $tipe;
        // $data['ukuran'] = $ukuran; 

        // var_dump($data);

        $this->db->insert('bab2', $data,);
    }

    public function get_data($id)
    {
        // $query = $this->db->query("SELECT * FROM prodi");
        // $id = (int)$id;
        $this->db->select('*');
        $this->db->from('tindaklanjut');
        $this->db->where('id_tindaklanjut', $id);
        $query = $this->db->get();

        // var_dump($query->result());
        // var_dump($id);
        return $query->result();
    }

    function get_id_tindak_lanjut_baru($id)
    {


        $result = $this->db->select('*')
            ->from('tindaklanjut')
            ->where('id_user', $id)
            ->limit(1)
            ->get()
            ->row();

        return $result;
    }

    public function get_data_by_id($id)
    {
        // $query = $this->db->query("SELECT * FROM prodi");
        // $id = (int)$id;
        $this->db->select('*');
        $this->db->from('tindaklanjut');
        $this->db->where('id_user', $id);
        $query = $this->db->get();

        // var_dump($query->result());
        // var_dump($id);
        return $query->result();
    }

    public function get_data2($id)
    {
        // $query = $this->db->query("SELECT * FROM prodi");
        // $id = (int)$id;
        $this->db->select('*');
        $this->db->from('bab2');
        $this->db->where('id_tindaklanjut', $id);
        $query = $this->db->get();

        // var_dump($query->result());
        // var_dump($id);
        return $query->result();
    }


    public function get_data2_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('bab2');
        $this->db->where('id_tindaklanjut', $id);
        $query = $this->db->get();

        return $query->result();
    }


    public function update_data($id)
    {

        $data = [
            'id_user' => $id,
            // 'nama_penyusunan' => $this->input->post('nama_penyusunan', true),
            // 'pemeriksa1' => $this->input->post('pemeriksa1', true),
            // 'pemeriksa2' => $this->input->post('pemeriksa2', true),
            // 'penetapan1' => $this->input->post('penetapan1', true),
            // 'penetapan2' => $this->input->post('penetapan2', true),
            'periode' => $this->input->post('periode', true),
            'tahun' => $this->input->post('tahun', true),
            'lembaga' => $this->input->post('lembaga', true),
            'tanggal' => $this->input->post('tanggal', true),
            'nrk' => $this->input->post('nrk', true),
            'hari_tgl' => $this->input->post('hari_tgl', true),
            'waktu' => $this->input->post('waktu', true),
            'tempat' => $this->input->post('tempat', true),
            'auditor' => $this->input->post('auditor', true),
            'auditee' => $this->input->post('auditee', true),
            'temuan' => $this->input->post('temuan', true),
            'prodi' => $this->input->post('prodi', true),
            'ruanglingkup' => $this->input->post('ruanglingkup', true),
            'tanggalDE' => $this->input->post('tanggalDE', true),
            'dokumenacuan' => $this->input->post('dokumenacuan', true),
            'a2' => $this->input->post('a2', true),
            'kesimpulan' => $this->input->post('kesimpulan', true),
            // 'dokumentasi' => $this->input->post('dokumentasi', true),
        ];
        $this->db->where('id_tindaklanjut', $this->input->post('id_user'));
        $this->db->update('tindaklanjut', $data);

        // $this->db->where('id_auditor', $id);
        // $this->db->update('auditor', $data);
    }

    public function update_data2()
    {

        $data = [
            'id_tindaklanjut' => $this->input->post('id_tindaklanjut', true),
            // 'prodi' => $this->input->post('prodi', true),
            // 'ruanglingkup' => $this->input->post('ruanglingkup', true),
            // 'tanggal' => $this->input->post('tanggal', true),
            // 'dokumen_acuan' => $this->input->post('dokumen_acuan', true),
            'jenis_temuan' => $this->input->post('jenis_temuan', true),
            'OB' => $this->input->post('OB', true),
            'KTS' => $this->input->post('KTS', true),
            'kode' => $this->input->post('kode', true),
            'jangka_waktu' => $this->input->post('jangka_waktu', true),
            'pj' => $this->input->post('pj', true),
            'temuan' => $this->input->post('temuan', true),
            // 'a2' => $this->input->post('a2', true),
            // 'kesimpulan' => $this->input->post('kesimpulan', true),
        ];

        $this->db->where('id_tindaklanjut', $this->input->post('id_tindaklanjut'));
        $this->db->update('bab2', $data);

        // $this->db->where('id_auditor', $id);
        // $this->db->update('auditor', $data);
    }

    public function get_acuan()
    {
        // $query = $this->db->query("SELECT * FROM prodi");
        // $id = (int)$id;
        $this->db->select('*');
        $this->db->from('admin_dokumen_acuan');
        $query = $this->db->get();

        // var_dump($query->result());
        // var_dump($id);
        return $query->result();
    }

    public function get_acuan_jurusan()
    {
        // $query = $this->db->query("SELECT * FROM prodi");
        // $id = (int)$id;
        $this->db->select('*');
        $this->db->from('admin_dokumen_acuan_jurusan');
        $query = $this->db->get();

        // var_dump($query->result());
        // var_dump($id);
        return $query->result();
    }

    public function get_hasil_desk($id)
    {
        // $query = $this->db->query("SELECT * FROM prodi");
        // $id = (int)$id;
        $this->db->select('*');
        $this->db->from('admin_hasil_desk');
        $this->db->where('id_dokumen_acuan', $id);
        $query = $this->db->get();

        // var_dump($query->result());
        // var_dump($id);
        return $query->result();
    }

    public function get_daftar_tilik($id)
    {
        // $query = $this->db->query("SELECT * FROM prodi");
        // $id = (int)$id;
        $this->db->select('*');
        $this->db->from('admin_daftar_tilik');
        $this->db->where('id_dokumen_acuan', $id);
        $query = $this->db->get();

        // var_dump($query->result());
        // var_dump($id);
        return $query->result();
    }

    public function get_hasil_desk_jurusan($id)
    {
        // $query = $this->db->query("SELECT * FROM prodi");
        // $id = (int)$id;
        $this->db->select('*');
        $this->db->from('admin_hasil_desk_jurusan');
        $this->db->where('id_dokumen_acuan', $id);
        $query = $this->db->get();

        // var_dump($query->result());
        // var_dump($id);
        return $query->result();
    }

    public function get_daftar_tilik_jurusan($id)
    {
        // $query = $this->db->query("SELECT * FROM prodi");
        // $id = (int)$id;
        $this->db->select('*');
        $this->db->from('admin_daftar_tilik_jurusan');
        $this->db->where('id_dokumen_acuan', $id);
        $query = $this->db->get();

        // var_dump($query->result());
        // var_dump($id);
        return $query->result();
    }

    public function tambah_hasil_desk()
    {

        $data = [
            'id_dokumen_acuan' => $this->input->post('id_dokumen_acuan', true),
            'nama_dokumen_terkait' => $this->input->post('nama_dokumen_terkait', true),
        ];

        $data['id_hasil_desk'] = generate_custom_id('A', 'id_hasil_desk', 'admin_hasil_desk');
        $this->db->insert('admin_hasil_desk', $data);
    }

    public function tambah_daftar_tilik()
    {

        $data = [
            'id_dokumen_acuan' => $this->input->post('id_dokumen_acuan', true),
            'pertanyaan' => $this->input->post('pertanyaan', true),
        ];
        // var_dump($data);
        $data['id_daftar_tilik'] = generate_custom_id('C', 'id_daftar_tilik', 'admin_daftar_tilik');
        $this->db->insert('admin_daftar_tilik', $data);
    }

    public function tambah_hasil_desk_jurusan()
    {

        $data = [
            'id_dokumen_acuan' => $this->input->post('id_dokumen_acuan', true),
            'nama_dokumen_terkait' => $this->input->post('nama_dokumen_terkait', true),
        ];

        $data['id_hasil_desk'] = generate_custom_id('Z', 'id_hasil_desk', 'admin_hasil_desk_jurusan');
        // var_dump($data);

        $this->db->insert('admin_hasil_desk_jurusan', $data);
    }

    public function tambah_daftar_tilik_jurusan()
    {

        $data = [
            'id_dokumen_acuan' => $this->input->post('id_dokumen_acuan', true),
            'pertanyaan' => $this->input->post('pertanyaan', true),
        ];
        // var_dump($data);
        $data['id_daftar_tilik'] = generate_custom_id('Y', 'id_daftar_tilik', 'admin_daftar_tilik_jurusan');
        $this->db->insert('admin_daftar_tilik_jurusan', $data);
    }

    public function tambah_link_drive($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('user', $data);
    }

    // DAFTAR TILIK AUDITOR

    // tampil daftar tilik
    function tampil_dok_acuan()
    {
        $this->db->select('*');
        $this->db->from('admin_dokumen_acuan');
        $query = $this->db->get();

        return $query->result();
    }

    function tampil_dok_acuan_jurusan()
    {
        $this->db->select('*');
        $this->db->from('admin_dokumen_acuan_jurusan');
        $query = $this->db->get();

        return $query->result();
    }

    function tampil_hasil_desk_utama($id)
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $id_dokumen_acuan = $this->uri->segment(3);

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $userLogin['id'])
            ->get()
            ->row()
            ->id_audit;

        $nilai = $this->db->select('admin_hasil_desk.*, nilai_ami.id_nilai, nilai_ami.my, nilai_ami.mb, nilai_ami.m, nilai_ami.mp, nilai_ami.ob, nilai_ami.kts, nilai_ami.open, nilai_ami.close, nilai_ami.catatan, nilai_ami.penanggungjawab')
            ->from('admin_hasil_desk')
            ->join('nilai_ami', 'admin_hasil_desk.id_hasil_desk = nilai_ami.id_hasil_desk AND nilai_ami.id_audit = ' . $id_audit, 'left')
            ->where('admin_hasil_desk.id_dokumen_acuan', $id_dokumen_acuan)
            ->order_by('admin_hasil_desk.id_hasil_desk', 'ASC')
            ->get()
            ->result();

        $total = $this->db->where('my', 1)
            ->where('id_audit', $id_audit)
            ->where('id_dokumen_acuan', $id_dokumen_acuan)
            ->from('nilai_ami')
            ->get()
            ->result();


        // var_dump($total);

        return $nilai;
    }

    function tampil_hasil_desk_utama_baru($id)
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $userLogin['id'])
            ->get()
            ->row()
            ->id_audit;

        // var_dump($id_audit);

        $nilai = $this->db->select('admin_hasil_desk.*, nilai_ami.id_nilai, nilai_ami.my, nilai_ami.mb, nilai_ami.m, nilai_ami.mp, nilai_ami.ob, nilai_ami.kts, nilai_ami.open, nilai_ami.close, nilai_ami.catatan, nilai_ami.penanggungjawab')
            ->from('admin_hasil_desk')
            ->join('nilai_ami', 'admin_hasil_desk.id_hasil_desk = nilai_ami.id_hasil_desk AND nilai_ami.id_audit = ' . $id_audit, 'left')
            ->where('admin_hasil_desk.id_dokumen_acuan', $id)
            ->order_by('admin_hasil_desk.id_hasil_desk', 'ASC')
            ->get()
            ->result();
        // var_dump($nilai);

        $total = $this->db->where('my', 1)
            ->where('id_audit', $id_audit)
            ->where('id_dokumen_acuan', $id)
            ->from('nilai_ami')
            ->get()
            ->result();

        return $nilai;
    }

    function tampil_hasil_desk_utama_auditor($id)
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();



        $id_audit = $userLogin['id'];

        // var_dump($id_audit);

        $nilai = $this->db->select('admin_hasil_desk.*, nilai_ami.id_nilai, nilai_ami.my, nilai_ami.mb, nilai_ami.m, nilai_ami.mp, nilai_ami.ob, nilai_ami.kts, nilai_ami.open, nilai_ami.close, nilai_ami.catatan, nilai_ami.penanggungjawab')
            ->from('admin_hasil_desk')
            ->join('nilai_ami', 'admin_hasil_desk.id_hasil_desk = nilai_ami.id_hasil_desk AND nilai_ami.id_audit = ' . $id_audit, 'left')
            ->where('admin_hasil_desk.id_dokumen_acuan', $id)
            ->order_by('admin_hasil_desk.id_hasil_desk', 'ASC')
            ->get()
            ->result();


        return $nilai;
    }

    function tampil_hasil_desk_utama_auditor_jurusan($id)
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();



        $id_audit = $userLogin['id'];

        // var_dump($id_audit);

        $nilai = $this->db->select('admin_hasil_desk_jurusan.*, nilai_ami_jurusan.id_nilai, nilai_ami_jurusan.my, nilai_ami_jurusan.mb, nilai_ami_jurusan.m, nilai_ami_jurusan.mp, nilai_ami_jurusan.ob, nilai_ami_jurusan.kts, nilai_ami_jurusan.open, nilai_ami_jurusan.close, nilai_ami_jurusan.catatan, nilai_ami_jurusan.penanggungjawab')
            ->from('admin_hasil_desk_jurusan')
            ->join('nilai_ami_jurusan', 'admin_hasil_desk_jurusan.id_hasil_desk = nilai_ami_jurusan.id_hasil_desk AND nilai_ami_jurusan.id_audit = ' . $id_audit, 'left')
            ->where('admin_hasil_desk_jurusan.id_dokumen_acuan', $id)
            ->order_by('admin_hasil_desk_jurusan.id_hasil_desk', 'ASC')
            ->get()
            ->result();

        return $nilai;
    }


    function tampil_hasil_desk_utama_admin($id, $id_user)
    {

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $id_user)
            ->get()
            ->row()
            ->id_audit;

        $nilai = $this->db->select('admin_hasil_desk.*, nilai_ami.id_nilai, nilai_ami.my, nilai_ami.mb, nilai_ami.m, nilai_ami.mp, nilai_ami.ob, nilai_ami.kts, nilai_ami.open, nilai_ami.close, nilai_ami.catatan, nilai_ami.penanggungjawab')
            ->from('admin_hasil_desk')
            ->join('nilai_ami', 'admin_hasil_desk.id_hasil_desk = nilai_ami.id_hasil_desk AND nilai_ami.id_audit = ' . $id_audit, 'left')
            ->where('admin_hasil_desk.id_dokumen_acuan', $id)
            ->order_by('admin_hasil_desk.id_hasil_desk', 'ASC')
            ->get()
            ->result();

        $total = $this->db->where('my', 1)
            ->where('id_audit', $id_audit)
            ->where('id_dokumen_acuan', $id)
            ->from('nilai_ami')
            ->get()
            ->result();

        return $nilai;
    }


    function tampil_hasil_desk_utama_admin_jurusan($id, $id_user)
    {
        // $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $id_dokumen_acuan = $this->uri->segment(3);

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $id_user)
            ->get()
            ->row()
            ->id_audit;

        $nilai = $this->db->select('admin_hasil_desk_jurusan.*, nilai_ami_jurusan.id_nilai, nilai_ami_jurusan.my, nilai_ami_jurusan.mb, nilai_ami_jurusan.m, nilai_ami_jurusan.mp, nilai_ami_jurusan.ob, nilai_ami_jurusan.kts, nilai_ami_jurusan.open, nilai_ami_jurusan.close, nilai_ami_jurusan.catatan, nilai_ami_jurusan.penanggungjawab')
            ->from('admin_hasil_desk_jurusan')
            ->join('nilai_ami_jurusan', 'admin_hasil_desk_jurusan.id_hasil_desk = nilai_ami_jurusan.id_hasil_desk AND nilai_ami_jurusan.id_audit = ' . $id_audit, 'left')
            ->where('admin_hasil_desk_jurusan.id_dokumen_acuan', $id)
            ->order_by('admin_hasil_desk_jurusan.id_hasil_desk', 'ASC')
            ->get()
            ->result();

        $total = $this->db->where('my', 1)
            ->where('id_audit', $id_audit)
            ->where('id_dokumen_acuan', $id)
            ->from('nilai_ami_jurusan')
            ->get()
            ->result();


        // var_dump($total);

        return $nilai;
    }

    function tampil_daftar_tilik_utama($id)
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $id_dokumen_acuan = $this->uri->segment(3);

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $userLogin['id'])
            ->get()
            ->row()
            ->id_audit;

        $nilai = $this->db->select('admin_daftar_tilik.*, nilai_ami2.dokumen_terkait, nilai_ami2.hasil_observasi, nilai_ami2.m, nilai_ami2.mp, nilai_ami2.mb, nilai_ami2.my, nilai_ami2.rekomendasi')
            ->from('admin_daftar_tilik')
            ->join('nilai_ami2', 'admin_daftar_tilik.id_daftar_tilik = nilai_ami2.id_daftar_tilik AND nilai_ami2.id_audit = ' . $id_audit, 'left')
            ->where('admin_daftar_tilik.id_dokumen_acuan', $id_dokumen_acuan)
            ->order_by('admin_daftar_tilik.id_daftar_tilik', 'ASC')
            ->get()
            ->result();

        return $nilai;
    }

    function tampil_daftar_tilik_utama_baru($id)
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $id_dokumen_acuan = $this->uri->segment(3);

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $userLogin['id'])
            ->get()
            ->row()
            ->id_audit;

        $nilai = $this->db->select('admin_daftar_tilik.*, nilai_ami2.dokumen_terkait, nilai_ami2.hasil_observasi, nilai_ami2.m, nilai_ami2.mp, nilai_ami2.mb, nilai_ami2.my, nilai_ami2.rekomendasi')
            ->from('admin_daftar_tilik')
            ->join('nilai_ami2', 'admin_daftar_tilik.id_daftar_tilik = nilai_ami2.id_daftar_tilik AND nilai_ami2.id_audit = ' . $id_audit, 'left')
            ->where('admin_daftar_tilik.id_dokumen_acuan', $id)
            ->order_by('admin_daftar_tilik.id_daftar_tilik', 'ASC')
            ->get()
            ->result();

        return $nilai;
    }

    function tampil_daftar_tilik_utama_baru_auditor($id)
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $id_audit = $userLogin['id'];

        $nilai = $this->db->select('admin_daftar_tilik.*, nilai_ami2.dokumen_terkait, nilai_ami2.hasil_observasi, nilai_ami2.m, nilai_ami2.mp, nilai_ami2.mb, nilai_ami2.my, nilai_ami2.rekomendasi')
            ->from('admin_daftar_tilik')
            ->join('nilai_ami2', 'admin_daftar_tilik.id_daftar_tilik = nilai_ami2.id_daftar_tilik AND nilai_ami2.id_audit = ' . $id_audit, 'left')
            ->where('admin_daftar_tilik.id_dokumen_acuan', $id)
            ->order_by('admin_daftar_tilik.id_daftar_tilik', 'ASC')
            ->get()
            ->result();

        return $nilai;
    }

    function tampil_daftar_tilik_utama_baru_auditor_jurusan($id)
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $id_audit = $userLogin['id'];

        $nilai = $this->db->select('admin_daftar_tilik_jurusan.*, nilai_ami2_jurusan.dokumen_terkait, nilai_ami2_jurusan.hasil_observasi, nilai_ami2_jurusan.m, nilai_ami2_jurusan.mp, nilai_ami2_jurusan.mb, nilai_ami2_jurusan.my, nilai_ami2_jurusan.rekomendasi')
            ->from('admin_daftar_tilik_jurusan')
            ->join('nilai_ami2_jurusan', 'admin_daftar_tilik_jurusan.id_daftar_tilik = nilai_ami2_jurusan.id_daftar_tilik AND nilai_ami2_jurusan.id_audit = ' . $id_audit, 'left')
            ->where('admin_daftar_tilik_jurusan.id_dokumen_acuan', $id)
            ->order_by('admin_daftar_tilik_jurusan.id_daftar_tilik', 'ASC')
            ->get()
            ->result();

        return $nilai;
    }

    function tampil_daftar_tilik_utama_admin($id, $id_user)
    {
        // $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $id_dokumen_acuan = $this->uri->segment(3);

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $id_user)
            ->get()
            ->row()
            ->id_audit;

        $nilai = $this->db->select('admin_daftar_tilik.*, nilai_ami2.dokumen_terkait, nilai_ami2.hasil_observasi, nilai_ami2.m, nilai_ami2.mp, nilai_ami2.mb, nilai_ami2.my, nilai_ami2.rekomendasi')
            ->from('admin_daftar_tilik')
            ->join('nilai_ami2', 'admin_daftar_tilik.id_daftar_tilik = nilai_ami2.id_daftar_tilik AND nilai_ami2.id_audit = ' . $id_audit, 'left')
            ->where('admin_daftar_tilik.id_dokumen_acuan', $id)
            ->order_by('admin_daftar_tilik.id_daftar_tilik', 'ASC')
            ->get()
            ->result();

        return $nilai;
    }


    function tampil_daftar_tilik_tambahan($id)
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $id_dokumen_acuan = $this->uri->segment(3);

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $userLogin['id'])
            ->get()
            ->row()
            ->id_audit;

        $nilai = $this->db->select('auditor_daftar_tilik.*, nilai_ami2.dokumen_terkait, nilai_ami2.hasil_observasi, nilai_ami2.m, nilai_ami2.mp, nilai_ami2.mb, nilai_ami2.my, nilai_ami2.rekomendasi')
            ->from('auditor_daftar_tilik')
            ->join('nilai_ami2', 'auditor_daftar_tilik.id_auditor_daftar_tilik = nilai_ami2.id_daftar_tilik AND nilai_ami2.id_audit = ' . $id_audit, 'left')
            ->where('auditor_daftar_tilik.id_dokumen_acuan', $id_dokumen_acuan)
            ->where('auditor_daftar_tilik.id_user', $userLogin['id'])
            ->order_by('auditor_daftar_tilik.id_auditor_daftar_tilik', 'ASC')
            ->get()
            ->result();

        return $nilai;
    }

    function tampil_daftar_tilik_tambahan_baru($id)
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $id = $this->uri->segment(3);

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $userLogin['id'])
            ->get()
            ->row()
            ->id_audit;

        $nilai = $this->db->select('auditor_daftar_tilik.*, nilai_ami2.dokumen_terkait, nilai_ami2.hasil_observasi, nilai_ami2.m, nilai_ami2.mp, nilai_ami2.mb, nilai_ami2.my, nilai_ami2.rekomendasi')
            ->from('auditor_daftar_tilik')
            ->join('nilai_ami2', 'auditor_daftar_tilik.id_auditor_daftar_tilik = nilai_ami2.id_daftar_tilik AND nilai_ami2.id_audit = ' . $id_audit, 'left')
            ->where('auditor_daftar_tilik.id_dokumen_acuan', $id)
            ->where('auditor_daftar_tilik.id_user', $userLogin['id'])
            ->order_by('auditor_daftar_tilik.id_auditor_daftar_tilik', 'ASC')
            ->get()
            ->result();

        return $nilai;
    }

    function tampil_daftar_tilik_tambahan_baru_auditor($id)
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $id_audit = $userLogin['id'];

        $nilai = $this->db->select('auditor_daftar_tilik.*, nilai_ami2.dokumen_terkait, nilai_ami2.hasil_observasi, nilai_ami2.m, nilai_ami2.mp, nilai_ami2.mb, nilai_ami2.my, nilai_ami2.rekomendasi')
            ->from('auditor_daftar_tilik')
            ->join('nilai_ami2', 'auditor_daftar_tilik.id_auditor_daftar_tilik = nilai_ami2.id_daftar_tilik AND nilai_ami2.id_audit = ' . $id_audit, 'left')
            ->where('auditor_daftar_tilik.id_dokumen_acuan', $id)
            ->where('auditor_daftar_tilik.id_audit', $id_audit)
            ->order_by('auditor_daftar_tilik.id_auditor_daftar_tilik', 'ASC')
            ->get()
            ->result();

        return $nilai;
    }

    function tampil_daftar_tilik_tambahan_baru_auditor_jurusan($id)
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $id_audit = $userLogin['id'];

        $nilai = $this->db->select('auditor_daftar_tilik_jurusan.*, nilai_ami2_jurusan.dokumen_terkait, nilai_ami2_jurusan.hasil_observasi, nilai_ami2_jurusan.m, nilai_ami2_jurusan.mp, nilai_ami2_jurusan.mb, nilai_ami2_jurusan.my, nilai_ami2_jurusan.rekomendasi')
            ->from('auditor_daftar_tilik_jurusan')
            ->join('nilai_ami2_jurusan', 'auditor_daftar_tilik_jurusan.id_auditor_daftar_tilik = nilai_ami2_jurusan.id_daftar_tilik AND nilai_ami2_jurusan.id_audit = ' . $id_audit, 'left')
            ->where('auditor_daftar_tilik_jurusan.id_dokumen_acuan', $id)
            ->where('auditor_daftar_tilik_jurusan.id_audit', $id_audit)
            ->order_by('auditor_daftar_tilik_jurusan.id_auditor_daftar_tilik', 'ASC')
            ->get()
            ->result();

        return $nilai;
    }






    function tampil_daftar_tilik_tambahan_admin($id, $id_user)
    {
        // $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $id = $this->uri->segment(3);

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $id_user)
            ->get()
            ->row()
            ->id_audit;

        $nilai = $this->db->select('auditor_daftar_tilik.*, nilai_ami2.dokumen_terkait, nilai_ami2.hasil_observasi, nilai_ami2.m, nilai_ami2.mp, nilai_ami2.mb, nilai_ami2.my, nilai_ami2.rekomendasi')
            ->from('auditor_daftar_tilik')
            ->join('nilai_ami2', 'auditor_daftar_tilik.id_auditor_daftar_tilik = nilai_ami2.id_daftar_tilik AND nilai_ami2.id_audit = ' . $id_audit, 'left')
            ->where('auditor_daftar_tilik.id_dokumen_acuan', $id)
            ->where('auditor_daftar_tilik.id_user', $id_user)
            ->order_by('auditor_daftar_tilik.id_auditor_daftar_tilik', 'ASC')
            ->get()
            ->result();

        return $nilai;
    }

    function tampil_hasil_desk_tambahan($id)
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $id_dokumen_acuan = $this->uri->segment(3);

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $userLogin['id'])
            ->get()
            ->row()
            ->id_audit;

        $nilai = $this->db->select('auditor_hasil_desk.*, nilai_ami.id_nilai, nilai_ami.my, nilai_ami.mb, nilai_ami.m, nilai_ami.mp, nilai_ami.ob, nilai_ami.kts, nilai_ami.open, nilai_ami.close, nilai_ami.catatan, nilai_ami.penanggungjawab')
            ->from('auditor_hasil_desk')
            ->join('nilai_ami', 'auditor_hasil_desk.id_auditor_hasil_desk = nilai_ami.id_hasil_desk AND nilai_ami.id_audit = ' . $id_audit, 'left')
            ->where('auditor_hasil_desk.id_dokumen_acuan', $id_dokumen_acuan)
            ->where('auditor_hasil_desk.id_user', $userLogin['id'])
            ->order_by('auditor_hasil_desk.id_auditor_hasil_desk', 'ASC')
            ->get()
            ->result();

        return $nilai;
    }

    function tampil_hasil_desk_tambahan_baru($id)
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $id_dokumen_acuan = $this->uri->segment(3);

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $userLogin['id'])
            ->get()
            ->row()
            ->id_audit;

        $nilai = $this->db->select('auditor_hasil_desk.*, nilai_ami.id_nilai, nilai_ami.my, nilai_ami.mb, nilai_ami.m, nilai_ami.mp, nilai_ami.ob, nilai_ami.kts, nilai_ami.open, nilai_ami.close, nilai_ami.catatan, nilai_ami.penanggungjawab')
            ->from('auditor_hasil_desk')
            ->join('nilai_ami', 'auditor_hasil_desk.id_auditor_hasil_desk = nilai_ami.id_hasil_desk AND nilai_ami.id_audit = ' . $id_audit, 'left')
            ->where('auditor_hasil_desk.id_dokumen_acuan', $id)
            ->where('auditor_hasil_desk.id_user', $userLogin['id'])
            ->order_by('auditor_hasil_desk.id_auditor_hasil_desk', 'ASC')
            ->get()
            ->result();

        return $nilai;
    }

    function tampil_hasil_desk_tambahan_auditor($id)
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $id_audit = $userLogin['id'];


        $nilai = $this->db->select('auditor_hasil_desk.*, nilai_ami.id_nilai, nilai_ami.my, nilai_ami.mb, nilai_ami.m, nilai_ami.mp, nilai_ami.ob, nilai_ami.kts, nilai_ami.open, nilai_ami.close, nilai_ami.catatan, nilai_ami.penanggungjawab')
            ->from('auditor_hasil_desk')
            ->join('nilai_ami', 'auditor_hasil_desk.id_auditor_hasil_desk = nilai_ami.id_hasil_desk AND nilai_ami.id_audit = ' . $id_audit, 'left')
            ->where('auditor_hasil_desk.id_dokumen_acuan', $id)
            ->where('auditor_hasil_desk.id_audit', $id_audit)
            ->order_by('auditor_hasil_desk.id_auditor_hasil_desk', 'ASC')
            ->get()
            ->result();

        return $nilai;
    }

    function tampil_hasil_desk_tambahan_auditor_jurusan($id)
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $id_audit = $userLogin['id'];


        $nilai = $this->db->select('auditor_hasil_desk_jurusan.*, nilai_ami_jurusan.id_nilai, nilai_ami_jurusan.my, nilai_ami_jurusan.mb, nilai_ami_jurusan.m, nilai_ami_jurusan.mp, nilai_ami_jurusan.ob, nilai_ami_jurusan.kts, nilai_ami_jurusan.open, nilai_ami_jurusan.close, nilai_ami_jurusan.catatan, nilai_ami_jurusan.penanggungjawab')
            ->from('auditor_hasil_desk_jurusan')
            ->join('nilai_ami_jurusan', 'auditor_hasil_desk_jurusan.id_auditor_hasil_desk = nilai_ami_jurusan.id_hasil_desk AND nilai_ami_jurusan.id_audit = ' . $id_audit, 'left')
            ->where('auditor_hasil_desk_jurusan.id_dokumen_acuan', $id)
            ->where('auditor_hasil_desk_jurusan.id_audit', $id_audit)
            ->order_by('auditor_hasil_desk_jurusan.id_auditor_hasil_desk', 'ASC')
            ->get()
            ->result();


        return $nilai;
    }



    function tampil_hasil_desk_tambahan_unit_baru($id)
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $id_dokumen_acuan = $this->uri->segment(3);

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $userLogin['id'])
            ->get()
            ->row()
            ->id_audit;

        $nilai = $this->db->select('auditor_hasil_desk_unit.*, nilai_ami_unit.id_nilai, nilai_ami_unit.my, nilai_ami_unit.mb, nilai_ami_unit.m, nilai_ami_unit.mp, nilai_ami_unit.ob, nilai_ami_unit.kts, nilai_ami_unit.open, nilai_ami_unit.close, nilai_ami_unit.catatan, nilai_ami_unit.penanggungjawab')
            ->from('auditor_hasil_desk_unit')
            ->join('nilai_ami_unit', 'auditor_hasil_desk_unit.id_auditor_hasil_desk = nilai_ami_unit.id_hasil_desk AND nilai_ami_unit.id_audit = ' . $id_audit, 'left')
            ->where('auditor_hasil_desk_unit.id_dokumen_acuan', $id)
            ->where('auditor_hasil_desk_unit.id_user', $userLogin['id'])
            ->order_by('auditor_hasil_desk_unit.id_auditor_hasil_desk', 'ASC')
            ->get()
            ->result();


        // var_dump($nilai);
        return $nilai;
    }

    function tampil_hasil_desk_tambahan_admin($id, $id_user)
    {
        // $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $id_dokumen_acuan = $this->uri->segment(3);

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $id_user)
            ->get()
            ->row()
            ->id_audit;

        $nilai = $this->db->select('auditor_hasil_desk.*, nilai_ami.id_nilai, nilai_ami.my, nilai_ami.mb, nilai_ami.m, nilai_ami.mp, nilai_ami.ob, nilai_ami.kts, nilai_ami.open, nilai_ami.close, nilai_ami.catatan, nilai_ami.penanggungjawab')
            ->from('auditor_hasil_desk')
            ->join('nilai_ami', 'auditor_hasil_desk.id_auditor_hasil_desk = nilai_ami.id_hasil_desk AND nilai_ami.id_audit = ' . $id_audit, 'left')
            ->where('auditor_hasil_desk.id_dokumen_acuan', $id)
            ->where('auditor_hasil_desk.id_user', $id_user)
            ->order_by('auditor_hasil_desk.id_auditor_hasil_desk', 'ASC')
            ->get()
            ->result();

        return $nilai;
    }


    function get_nilai_hasil_desk_utama($id_audit)
    {
        $this->db->select('*');
        $this->db->from('nilai_ami');
        $this->db->where('id_audit', $id_audit);
        $query = $this->db->get();

        var_dump($query->result());
        // return $query->result();
    }

    function delete_nilai_hasil_desk_utama($id_audit)
    {
        $this->db->select('*');
        $this->db->from('nilai_ami');
        $this->db->where('id_audit', $id_audit);
        $query = $this->db->get();

        var_dump($query->result());
        // return $query->result();
    }

    // INPUT NILAI HASIL DESK AUDITOR
    function add_nilai_hasil_desk_utama()
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $userLogin['id'])
            ->get()
            ->row()
            ->id_audit;

        $id_dokumen_acuan = $this->input->post('id_dokumen_acuan');
        $id_hasil_desk = $this->input->post('id_hasil_desk');
        $m = $this->input->post('m');
        $mp = $this->input->post('mp');
        $mb = $this->input->post('mb');
        $my = $this->input->post('my');
        $ob = $this->input->post('ob');
        $kts = $this->input->post('kts');
        $open = $this->input->post('open');
        $close = $this->input->post('close');
        $catatan = $this->input->post('catatan');
        $penanggungjawab = $this->input->post('penanggungjawab');

        // Prepare the data for bulk insertion/update
        $data = [];
        foreach ($id_hasil_desk as $id) {
            $data[] = array(
                'id_audit' => $id_audit,
                'id_dokumen_acuan' => $id_dokumen_acuan,
                'id_hasil_desk' => $id,
                'm' => isset($m[$id]) ? 1 : 0,
                'mp' => isset($mp[$id]) ? 1 : 0,
                'mb' => isset($mb[$id]) ? 1 : 0,
                'my' => isset($my[$id]) ? 1 : 0,
                'ob' => isset($ob[$id]) ? 1 : 0,
                'kts' => isset($kts[$id]) ? 1 : 0,
                'open' => isset($open[$id]) ? 1 : 0,
                'close' => isset($close[$id]) ? 1 : 0,
                'catatan' => $catatan[$id],
                'penanggungjawab' => $penanggungjawab[$id],
            );
        }

        $this->db->trans_start();

        $updateData = [];
        $insertData = [];
        foreach ($data as $item) {
            $id_hasil_desk = $item['id_hasil_desk'];

            // Check if the data exists in the database
            $existQuery = $this->db->from('nilai_ami')
                ->where('id_hasil_desk', $id_hasil_desk)
                ->where('id_audit', $id_audit)
                ->where('id_dokumen_acuan', $id_dokumen_acuan)
                ->get();

            if ($existQuery->num_rows() > 0) {
                // If data exists, add to the update batch
                $updateData[] = $item;
            } else {
                // If data doesn't exist, add to the insert batch
                $insertData[] = $item;
            }
        }

        // Perform batch update and insert
        if (!empty($updateData)) {
            // Use WHERE clause to update only the specific rows
            $this->db->where('id_audit', $id_audit);
            $this->db->where('id_dokumen_acuan', $id_dokumen_acuan);
            $this->db->update_batch('nilai_ami', $updateData, 'id_hasil_desk');
        }
        if (!empty($insertData)) {
            $this->db->insert_batch('nilai_ami', $insertData);
        }

        // Check if the transaction is successful
        if ($this->db->trans_status() === false) {
            // Rollback the transaction if there's an error
            $this->db->trans_rollback();
            return false;
        } else {
            // Commit the transaction if everything is successful
            $this->db->trans_commit();
            return true;
        }
    }

    function total_hasil_desk()
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $userLogin['id'])
            ->get()
            ->row()
            ->id_audit;

        $id_dokumen_acuan = $this->uri->segment(3);

        $getSum = $this->db->from('nilai_ami')
            ->where('id_audit', $id_audit)
            ->where('id_dokumen_acuan', $id_dokumen_acuan)
            ->select_sum('m')
            ->select_sum('mp')
            ->select_sum('mb')
            ->select_sum('my')
            ->select_sum('ob')
            ->select_sum('kts')
            ->select_sum('open')
            ->select_sum('close');

        $result = $getSum->get()->row();

        $m = $result->m;
        $mp = $result->mp;
        $mb = $result->mb;
        $my =  $result->my;
        $ob =  $result->ob;
        $kts =  $result->kts;
        $open =  $result->open;
        $close =  $result->close;

        return array(
            'm' => $m,
            'mp' => $mp,
            'mb' => $mb,
            'my' => $my,
            'ob' =>  $ob,
            'kts' =>  $kts,
            'open' =>  $open,
            'close' =>  $close,
        );
    }

    function total_hasil_desk_baru($id)
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $userLogin['id'])
            ->get()
            ->row()
            ->id_audit;

        $id_dokumen_acuan = $id;

        $getSum = $this->db->from('nilai_ami')
            ->where('id_audit', $id_audit)
            ->where('id_dokumen_acuan', $id_dokumen_acuan)
            ->select_sum('m')
            ->select_sum('mp')
            ->select_sum('mb')
            ->select_sum('my')
            ->select_sum('ob')
            ->select_sum('kts')
            ->select_sum('open')
            ->select_sum('close');

        $result = $getSum->get()->row();

        $m = $result->m;
        $mp = $result->mp;
        $mb = $result->mb;
        $my =  $result->my;
        $ob =  $result->ob;
        $kts =  $result->kts;
        $open =  $result->open;
        $close =  $result->close;

        return array(
            'm' => $m,
            'mp' => $mp,
            'mb' => $mb,
            'my' => $my,
            'ob' =>  $ob,
            'kts' =>  $kts,
            'open' =>  $open,
            'close' =>  $close,
        );
    }

    function total_hasil_desk_baru_jurusan($id)
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $userLogin['id'])
            ->get()
            ->row()
            ->id_audit;

        $id_dokumen_acuan = $id;

        $getSum = $this->db->from('nilai_ami_jurusan')
            ->where('id_audit', $id_audit)
            ->where('id_dokumen_acuan', $id_dokumen_acuan)
            ->select_sum('m')
            ->select_sum('mp')
            ->select_sum('mb')
            ->select_sum('my')
            ->select_sum('ob')
            ->select_sum('kts')
            ->select_sum('open')
            ->select_sum('close');

        $result = $getSum->get()->row();

        $m = $result->m;
        $mp = $result->mp;
        $mb = $result->mb;
        $my =  $result->my;
        $ob =  $result->ob;
        $kts =  $result->kts;
        $open =  $result->open;
        $close =  $result->close;

        return array(
            'm' => $m,
            'mp' => $mp,
            'mb' => $mb,
            'my' => $my,
            'ob' =>  $ob,
            'kts' =>  $kts,
            'open' =>  $open,
            'close' =>  $close,
        );
    }


    function total_hasil_desk_baru_auditor($id)
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $id_audit = $userLogin['id'];

        $getSum = $this->db->from('nilai_ami')
            ->where('id_audit', $id_audit)
            ->where('id_dokumen_acuan', $id)
            ->select_sum('m')
            ->select_sum('mp')
            ->select_sum('mb')
            ->select_sum('my')
            ->select_sum('ob')
            ->select_sum('kts')
            ->select_sum('open')
            ->select_sum('close');

        $result = $getSum->get()->row();

        $m = $result->m;
        $mp = $result->mp;
        $mb = $result->mb;
        $my =  $result->my;
        $ob =  $result->ob;
        $kts =  $result->kts;
        $open =  $result->open;
        $close =  $result->close;

        return array(
            'm' => $m,
            'mp' => $mp,
            'mb' => $mb,
            'my' => $my,
            'ob' =>  $ob,
            'kts' =>  $kts,
            'open' =>  $open,
            'close' =>  $close,
        );
    }

    function total_hasil_desk_admin($id, $id_user)
    {
        // $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $id_user)
            ->get()
            ->row()
            ->id_audit;

        $id_dokumen_acuan = $id;

        $getSum = $this->db->from('nilai_ami')
            ->where('id_audit', $id_audit)
            ->where('id_dokumen_acuan', $id_dokumen_acuan)
            ->select_sum('m')
            ->select_sum('mp')
            ->select_sum('mb')
            ->select_sum('my')
            ->select_sum('ob')
            ->select_sum('kts')
            ->select_sum('open')
            ->select_sum('close');

        $result = $getSum->get()->row();

        $m = $result->m;
        $mp = $result->mp;
        $mb = $result->mb;
        $my =  $result->my;
        $ob =  $result->ob;
        $kts =  $result->kts;
        $open =  $result->open;
        $close =  $result->close;

        return array(
            'm' => $m,
            'mp' => $mp,
            'mb' => $mb,
            'my' => $my,
            'ob' =>  $ob,
            'kts' =>  $kts,
            'open' =>  $open,
            'close' =>  $close,
        );
    }


    function total_daftar_tilik()
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $userLogin['id'])
            ->get()
            ->row()
            ->id_audit;

        $id_dokumen_acuan = $this->uri->segment(3);

        $getSum = $this->db->from('nilai_ami2')
            ->where('id_audit', $id_audit)
            ->where('id_dokumen_acuan', $id_dokumen_acuan)
            ->select_sum('m')
            ->select_sum('mp')
            ->select_sum('mb')
            ->select_sum('my');

        $result = $getSum->get()->row();

        $m = $result->m;
        $mp = $result->mp;
        $mb = $result->mb;
        $my =  $result->my;

        return array(
            'm' => $m,
            'mp' => $mp,
            'mb' => $mb,
            'my' => $my,
        );
    }

    function total_daftar_tilik_baru($id)
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $userLogin['id'])
            ->get()
            ->row()
            ->id_audit;

        $id_dokumen_acuan = $id;

        $getSum = $this->db->from('nilai_ami2')
            ->where('id_audit', $id_audit)
            ->where('id_dokumen_acuan', $id_dokumen_acuan)
            ->select_sum('m')
            ->select_sum('mp')
            ->select_sum('mb')
            ->select_sum('my');

        $result = $getSum->get()->row();

        $m = $result->m;
        $mp = $result->mp;
        $mb = $result->mb;
        $my =  $result->my;

        return array(
            'm' => $m,
            'mp' => $mp,
            'mb' => $mb,
            'my' => $my,
        );
    }

    function total_daftar_tilik_baru_jurusan($id)
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $userLogin['id'])
            ->get()
            ->row()
            ->id_audit;

        $id_dokumen_acuan = $id;

        $getSum = $this->db->from('nilai_ami2_jurusan')
            ->where('id_audit', $id_audit)
            ->where('id_dokumen_acuan', $id_dokumen_acuan)
            ->select_sum('m')
            ->select_sum('mp')
            ->select_sum('mb')
            ->select_sum('my');

        $result = $getSum->get()->row();

        $m = $result->m;
        $mp = $result->mp;
        $mb = $result->mb;
        $my =  $result->my;

        return array(
            'm' => $m,
            'mp' => $mp,
            'mb' => $mb,
            'my' => $my,
        );
    }

    function total_daftar_tilik_admin($id, $id_user)
    {
        // $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $id_user)
            ->get()
            ->row()
            ->id_audit;

        $id_dokumen_acuan = $id;

        $getSum = $this->db->from('nilai_ami2')
            ->where('id_audit', $id_audit)
            ->where('id_dokumen_acuan', $id_dokumen_acuan)
            ->select_sum('m')
            ->select_sum('mp')
            ->select_sum('mb')
            ->select_sum('my');

        $result = $getSum->get()->row();

        $m = $result->m;
        $mp = $result->mp;
        $mb = $result->mb;
        $my =  $result->my;

        return array(
            'm' => $m,
            'mp' => $mp,
            'mb' => $mb,
            'my' => $my,
        );
    }



    function add_hasil_desk_tambahan()
    {
        $data = [
            'id_dokumen_acuan' => $this->input->post('id_dokumen_acuan', true),
            'tambahan_hasil_desk' => $this->input->post('tambahan_hasil_desk', true),
            'id_audit' => $this->input->post('id_audit', true),
            'id_user' => $this->input->post('id_user', true),
        ];

        $data['id_auditor_hasil_desk'] = generate_custom_id('B', 'id_auditor_hasil_desk', 'auditor_hasil_desk');
        // var_dump($data);

        $this->db->insert('auditor_hasil_desk', $data);
    }

    function add_daftar_tilik_tambahan()
    {
        $data = [
            'id_dokumen_acuan' => $this->input->post('id_dokumen_acuan', true),
            'tambahan_daftar_tilik' => $this->input->post('tambahan_daftar_tilik', true),
            'id_audit' => $this->input->post('id_audit', true),
            'id_user' => $this->input->post('id_user', true),
        ];

        $data['id_auditor_daftar_tilik'] = generate_custom_id('D', 'id_auditor_daftar_tilik', 'auditor_daftar_tilik');
        // var_dump($data);

        $this->db->insert('auditor_daftar_tilik', $data);
    }

    public function add_nilai_hasil_desk_tambahan()
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $userLogin['id'])
            ->get()
            ->row()
            ->id_audit;

        $id_dokumen_acuan = $this->input->post('id_dokumen_acuan');
        $id_auditor_hasil_desk = $this->input->post('id_auditor_hasil_desk');
        $m = $this->input->post('m');
        $mp = $this->input->post('mp');
        $mb = $this->input->post('mb');
        $my = $this->input->post('my');
        $ob = $this->input->post('ob');
        $kts = $this->input->post('kts');
        $open = $this->input->post('open');
        $close = $this->input->post('close');
        $catatan = $this->input->post('catatan');
        $penanggungjawab = $this->input->post('penanggungjawab');

        // Prepare the data for bulk insertion/update
        $data = [];
        foreach ($id_auditor_hasil_desk as $id) {
            $data[] = array(
                'id_audit' => $id_audit,
                'id_dokumen_acuan' => $id_dokumen_acuan,
                'id_hasil_desk' => $id,
                'm' => isset($m[$id]) ? 1 : 0,
                'mp' => isset($mp[$id]) ? 1 : 0,
                'mb' => isset($mb[$id]) ? 1 : 0,
                'my' => isset($my[$id]) ? 1 : 0,
                'ob' => isset($ob[$id]) ? 1 : 0,
                'kts' => isset($kts[$id]) ? 1 : 0,
                'open' => isset($open[$id]) ? 1 : 0,
                'close' => isset($close[$id]) ? 1 : 0,
                'catatan' => $catatan[$id],
                'penanggungjawab' => $penanggungjawab[$id],
            );
        }

        $this->db->trans_start();

        $updateData = [];
        $insertData = [];
        foreach ($data as $item) {
            $id_auditor_hasil_desk = $item['id_hasil_desk'];

            // Check if the data exists in the database
            $existQuery = $this->db->from('nilai_ami')
                ->where('id_hasil_desk', $id_auditor_hasil_desk)
                ->where('id_audit', $id_audit)
                ->where('id_dokumen_acuan', $id_dokumen_acuan)
                ->get();

            if ($existQuery->num_rows() > 0) {
                // If data exists, add to the update batch
                $updateData[] = $item;
            } else {
                // If data doesn't exist, add to the insert batch
                $insertData[] = $item;
            }
        }

        // Perform batch update and insert
        // Perform batch update and insert
        if (!empty($updateData)) {
            // Use WHERE clause to update only the specific rows
            $this->db->where('id_audit', $id_audit);
            $this->db->where('id_dokumen_acuan', $id_dokumen_acuan);
            $this->db->update_batch('nilai_ami', $updateData, 'id_hasil_desk');
        }
        if (!empty($insertData)) {
            $this->db->insert_batch('nilai_ami', $insertData);
        }

        // Check if the transaction is successful
        if ($this->db->trans_status() === false) {
            // Rollback the transaction if there's an error
            $this->db->trans_rollback();
            return false;
        } else {
            // Commit the transaction if everything is successful
            $this->db->trans_commit();
            return true;
        }
    }


    //INPUT NILAI DAFTAR TILIK AUDITOR

    function add_nilai_daftar_tilik_tambahan()
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $userLogin['id'])
            ->get()
            ->row()
            ->id_audit;

        $id_dokumen_acuan = $this->input->post('id_dokumen_acuan');
        $id_auditor_daftar_tilik = $this->input->post('id_auditor_daftar_tilik');
        $dokumenterkait = $this->input->post('dokumenterkait');
        $hasilobservasi = $this->input->post('hasilobservasi');
        $m = $this->input->post('m');
        $mp = $this->input->post('mp');
        $mb = $this->input->post('mb');
        $my = $this->input->post('my');
        $rekomendasi = $this->input->post('rekomendasi');

        $data = [];
        foreach ($id_auditor_daftar_tilik as $id) {
            $data[] = array(
                'id_audit' => $id_audit,
                'id_dokumen_acuan' => $id_dokumen_acuan,
                'id_daftar_tilik' => $id,
                'dokumen_terkait' => $dokumenterkait[$id],
                'hasil_observasi' => $hasilobservasi[$id],
                'm' => isset($m[$id]) ? 1 : 0,
                'mp' => isset($mp[$id]) ? 1 : 0,
                'mb' => isset($mb[$id]) ? 1 : 0,
                'my' => isset($my[$id]) ? 1 : 0,
                'rekomendasi' => $rekomendasi[$id],
            );
        }

        $this->db->trans_start();

        $updateData = [];
        $insertData = [];
        foreach ($data as $item) {
            $id_auditor_daftar_tilik = $item['id_daftar_tilik'];

            // Check if the data exists in the database
            $existQuery = $this->db->from('nilai_ami2')
                ->where('id_audit', $id_audit)
                ->where('id_dokumen_acuan', $id_dokumen_acuan)
                ->where('id_daftar_tilik', $id_auditor_daftar_tilik)
                ->get();

            if ($existQuery->num_rows() > 0) {
                // If data exists, add to the update batch
                $updateData[] = $item;
            } else {
                // If data doesn't exist, add to the insert batch
                $insertData[] = $item;
            }
        }

        // Perform batch update and insert
        if (!empty($updateData)) {
            // Use WHERE clause to update only the specific rows
            $this->db->where('id_audit', $id_audit);
            $this->db->where('id_dokumen_acuan', $id_dokumen_acuan);
            $this->db->update_batch('nilai_ami2', $updateData, 'id_daftar_tilik');
        }
        if (!empty($insertData)) {
            $this->db->insert_batch('nilai_ami2', $insertData);
        }

        // Check if the transaction is successful
        if ($this->db->trans_status() === false) {
            // Rollback the transaction if there's an error
            $this->db->trans_rollback();
            return false;
        } else {
            // Commit the transaction if everything is successful
            $this->db->trans_commit();
            return true;
        }
    }

    //daftar tilik untuk auditor jurusan
    function tampil_hasil_desk_utama_jurusan($id)
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $id_dokumen_acuan = $this->uri->segment(3);

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $userLogin['id'])
            ->get()
            ->row()
            ->id_audit;

        $nilai = $this->db->select('admin_hasil_desk_jurusan.*, nilai_ami_jurusan.id_nilai, nilai_ami_jurusan.my, nilai_ami_jurusan.mb, nilai_ami_jurusan.m, nilai_ami_jurusan.mp, nilai_ami_jurusan.ob, nilai_ami_jurusan.kts, nilai_ami_jurusan.open, nilai_ami_jurusan.close, nilai_ami_jurusan.catatan, nilai_ami_jurusan.penanggungjawab')
            ->from('admin_hasil_desk_jurusan')
            ->join('nilai_ami_jurusan', 'admin_hasil_desk_jurusan.id_hasil_desk = nilai_ami_jurusan.id_hasil_desk AND nilai_ami_jurusan.id_audit = ' . $id_audit, 'left')
            ->where('admin_hasil_desk_jurusan.id_dokumen_acuan', $id_dokumen_acuan)
            ->order_by('admin_hasil_desk_jurusan.id_hasil_desk', 'ASC')
            ->get()
            ->result();

        $total = $this->db->where('my', 1)
            ->where('id_audit', $id_audit)
            ->where('id_dokumen_acuan', $id_dokumen_acuan)
            ->from('nilai_ami_jurusan')
            ->get()
            ->result();


        // var_dump($total);

        return $nilai;
    }

    function tampil_hasil_desk_utama_jurusan_baru($id)
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $id_dokumen_acuan = $this->uri->segment(3);

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $userLogin['id'])
            ->get()
            ->row()
            ->id_audit;

        $nilai = $this->db->select('admin_hasil_desk_jurusan.*, nilai_ami_jurusan.id_nilai, nilai_ami_jurusan.my, nilai_ami_jurusan.mb, nilai_ami_jurusan.m, nilai_ami_jurusan.mp, nilai_ami_jurusan.ob, nilai_ami_jurusan.kts, nilai_ami_jurusan.open, nilai_ami_jurusan.close, nilai_ami_jurusan.catatan, nilai_ami_jurusan.penanggungjawab')
            ->from('admin_hasil_desk_jurusan')
            ->join('nilai_ami_jurusan', 'admin_hasil_desk_jurusan.id_hasil_desk = nilai_ami_jurusan.id_hasil_desk AND nilai_ami_jurusan.id_audit = ' . $id_audit, 'left')
            ->where('admin_hasil_desk_jurusan.id_dokumen_acuan', $id)
            ->order_by('admin_hasil_desk_jurusan.id_hasil_desk', 'ASC')
            ->get()
            ->result();

        $total = $this->db->where('my', 1)
            ->where('id_audit', $id_audit)
            ->where('id_dokumen_acuan', $id)
            ->from('nilai_ami_jurusan')
            ->get()
            ->result();


        // var_dump($total);

        return $nilai;
    }

    function tampil_daftar_tilik_utama_jurusan($id)
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $id_dokumen_acuan = $this->uri->segment(3);

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $userLogin['id'])
            ->get()
            ->row()
            ->id_audit;

        $nilai = $this->db->select('admin_daftar_tilik_jurusan.*, nilai_ami2_jurusan.dokumen_terkait, nilai_ami2_jurusan.hasil_observasi, nilai_ami2_jurusan.m, nilai_ami2_jurusan.mp, nilai_ami2_jurusan.mb, nilai_ami2_jurusan.my, nilai_ami2_jurusan.rekomendasi')
            ->from('admin_daftar_tilik_jurusan')
            ->join('nilai_ami2_jurusan', 'admin_daftar_tilik_jurusan.id_daftar_tilik = nilai_ami2_jurusan.id_daftar_tilik AND nilai_ami2_jurusan.id_audit = ' . $id_audit, 'left')
            ->where('admin_daftar_tilik_jurusan.id_dokumen_acuan', $id_dokumen_acuan)
            ->order_by('admin_daftar_tilik_jurusan.id_daftar_tilik', 'ASC')
            ->get()
            ->result();

        return $nilai;
    }

    function tampil_daftar_tilik_utama_jurusan_baru($id)
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $id_dokumen_acuan = $this->uri->segment(3);

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $userLogin['id'])
            ->get()
            ->row()
            ->id_audit;

        $nilai = $this->db->select('admin_daftar_tilik_jurusan.*, nilai_ami2_jurusan.dokumen_terkait, nilai_ami2_jurusan.hasil_observasi, nilai_ami2_jurusan.m, nilai_ami2_jurusan.mp, nilai_ami2_jurusan.mb, nilai_ami2_jurusan.my, nilai_ami2_jurusan.rekomendasi')
            ->from('admin_daftar_tilik_jurusan')
            ->join('nilai_ami2_jurusan', 'admin_daftar_tilik_jurusan.id_daftar_tilik = nilai_ami2_jurusan.id_daftar_tilik AND nilai_ami2_jurusan.id_audit = ' . $id_audit, 'left')
            ->where('admin_daftar_tilik_jurusan.id_dokumen_acuan', $id)
            ->order_by('admin_daftar_tilik_jurusan.id_daftar_tilik', 'ASC')
            ->get()
            ->result();

        return $nilai;
    }

    function tampil_daftar_tilik_utama_admin_jurusan($id, $id_user)
    {
        // $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $id_dokumen_acuan = $this->uri->segment(3);

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $id_user)
            ->get()
            ->row()
            ->id_audit;

        $nilai = $this->db->select('admin_daftar_tilik_jurusan.*, nilai_ami2_jurusan.dokumen_terkait, nilai_ami2_jurusan.hasil_observasi, nilai_ami2_jurusan.m, nilai_ami2_jurusan.mp, nilai_ami2_jurusan.mb, nilai_ami2_jurusan.my, nilai_ami2_jurusan.rekomendasi')
            ->from('admin_daftar_tilik_jurusan')
            ->join('nilai_ami2_jurusan', 'admin_daftar_tilik_jurusan.id_daftar_tilik = nilai_ami2_jurusan.id_daftar_tilik AND nilai_ami2_jurusan.id_audit = ' . $id_audit, 'left')
            ->where('admin_daftar_tilik_jurusan.id_dokumen_acuan', $id)
            ->order_by('admin_daftar_tilik_jurusan.id_daftar_tilik', 'ASC')
            ->get()
            ->result();

        return $nilai;
    }


    function tampil_daftar_tilik_tambahan_jurusan($id)
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $id_dokumen_acuan = $this->uri->segment(3);

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $userLogin['id'])
            ->get()
            ->row()
            ->id_audit;

        $nilai = $this->db->select('auditor_daftar_tilik_jurusan.*, nilai_ami2_jurusan.dokumen_terkait, nilai_ami2_jurusan.hasil_observasi, nilai_ami2_jurusan.m, nilai_ami2_jurusan.mp, nilai_ami2_jurusan.mb, nilai_ami2_jurusan.my, nilai_ami2_jurusan.rekomendasi')
            ->from('auditor_daftar_tilik_jurusan')
            ->join('nilai_ami2_jurusan', 'auditor_daftar_tilik_jurusan.id_auditor_daftar_tilik = nilai_ami2_jurusan.id_daftar_tilik AND nilai_ami2_jurusan.id_audit = ' . $id_audit, 'left')
            ->where('auditor_daftar_tilik_jurusan.id_dokumen_acuan', $id_dokumen_acuan)
            ->where('auditor_daftar_tilik_jurusan.id_user', $userLogin['id'])
            ->order_by('auditor_daftar_tilik_jurusan.id_auditor_daftar_tilik', 'ASC')
            ->get()
            ->result();

        return $nilai;
    }

    function tampil_daftar_tilik_tambahan_jurusan_baru($id)
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $id_dokumen_acuan = $this->uri->segment(3);

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $userLogin['id'])
            ->get()
            ->row()
            ->id_audit;

        $nilai = $this->db->select('auditor_daftar_tilik_jurusan.*, nilai_ami2_jurusan.dokumen_terkait, nilai_ami2_jurusan.hasil_observasi, nilai_ami2_jurusan.m, nilai_ami2_jurusan.mp, nilai_ami2_jurusan.mb, nilai_ami2_jurusan.my, nilai_ami2_jurusan.rekomendasi')
            ->from('auditor_daftar_tilik_jurusan')
            ->join('nilai_ami2_jurusan', 'auditor_daftar_tilik_jurusan.id_auditor_daftar_tilik = nilai_ami2_jurusan.id_daftar_tilik AND nilai_ami2_jurusan.id_audit = ' . $id_audit, 'left')
            ->where('auditor_daftar_tilik_jurusan.id_dokumen_acuan', $id)
            ->where('auditor_daftar_tilik_jurusan.id_user', $userLogin['id'])
            ->order_by('auditor_daftar_tilik_jurusan.id_auditor_daftar_tilik', 'ASC')
            ->get()
            ->result();

        return $nilai;
    }

    function tampil_daftar_tilik_tambahan_admin_jurusan($id, $id_user)
    {
        // $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $id_dokumen_acuan = $this->uri->segment(3);

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $id_user)
            ->get()
            ->row()
            ->id_audit;

        $nilai = $this->db->select('auditor_daftar_tilik_jurusan.*, nilai_ami2_jurusan.dokumen_terkait, nilai_ami2_jurusan.hasil_observasi, nilai_ami2_jurusan.m, nilai_ami2_jurusan.mp, nilai_ami2_jurusan.mb, nilai_ami2_jurusan.my, nilai_ami2_jurusan.rekomendasi')
            ->from('auditor_daftar_tilik_jurusan')
            ->join('nilai_ami2_jurusan', 'auditor_daftar_tilik_jurusan.id_auditor_daftar_tilik = nilai_ami2_jurusan.id_daftar_tilik AND nilai_ami2_jurusan.id_audit = ' . $id_audit, 'left')
            ->where('auditor_daftar_tilik_jurusan.id_dokumen_acuan', $id)
            ->where('auditor_daftar_tilik_jurusan.id_user', $id_user)
            ->order_by('auditor_daftar_tilik_jurusan.id_auditor_daftar_tilik', 'ASC')
            ->get()
            ->result();

        return $nilai;
    }


    function tampil_hasil_desk_tambahan_jurusan($id)
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $id_dokumen_acuan = $this->uri->segment(3);

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $userLogin['id'])
            ->get()
            ->row()
            ->id_audit;

        $nilai = $this->db->select('auditor_hasil_desk_jurusan.*, nilai_ami_jurusan.id_nilai, nilai_ami_jurusan.my, nilai_ami_jurusan.mb, nilai_ami_jurusan.m, nilai_ami_jurusan.mp, nilai_ami_jurusan.ob, nilai_ami_jurusan.kts, nilai_ami_jurusan.open, nilai_ami_jurusan.close, nilai_ami_jurusan.catatan, nilai_ami_jurusan.penanggungjawab')
            ->from('auditor_hasil_desk_jurusan')
            ->join('nilai_ami_jurusan', 'auditor_hasil_desk_jurusan.id_auditor_hasil_desk = nilai_ami_jurusan.id_hasil_desk AND nilai_ami_jurusan.id_audit = ' . $id_audit, 'left')
            ->where('auditor_hasil_desk_jurusan.id_dokumen_acuan', $id_dokumen_acuan)
            ->where('auditor_hasil_desk_jurusan.id_user', $userLogin['id'])
            ->order_by('auditor_hasil_desk_jurusan.id_auditor_hasil_desk', 'ASC')
            ->get()
            ->result();


        // var_dump($nilai);
        return $nilai;
    }

    function tampil_hasil_desk_tambahan_jurusan_baru($id)
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $id_dokumen_acuan = $this->uri->segment(3);

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $userLogin['id'])
            ->get()
            ->row()
            ->id_audit;

        $nilai = $this->db->select('auditor_hasil_desk_jurusan.*, nilai_ami_jurusan.id_nilai, nilai_ami_jurusan.my, nilai_ami_jurusan.mb, nilai_ami_jurusan.m, nilai_ami_jurusan.mp, nilai_ami_jurusan.ob, nilai_ami_jurusan.kts, nilai_ami_jurusan.open, nilai_ami_jurusan.close, nilai_ami_jurusan.catatan, nilai_ami_jurusan.penanggungjawab')
            ->from('auditor_hasil_desk_jurusan')
            ->join('nilai_ami_jurusan', 'auditor_hasil_desk_jurusan.id_auditor_hasil_desk = nilai_ami_jurusan.id_hasil_desk AND nilai_ami_jurusan.id_audit = ' . $id_audit, 'left')
            ->where('auditor_hasil_desk_jurusan.id_dokumen_acuan', $id)
            ->where('auditor_hasil_desk.id_user', $userLogin['id'])
            ->order_by('auditor_hasil_desk_jurusan.id_auditor_hasil_desk', 'ASC')
            ->get()
            ->result();


        // var_dump($nilai);
        return $nilai;
    }


    function tampil_hasil_desk_tambahan_admin_jurusan($id, $id_user)
    {
        // $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $id_dokumen_acuan = $this->uri->segment(3);

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $id_user)
            ->get()
            ->row()
            ->id_audit;

        $nilai = $this->db->select('auditor_hasil_desk_jurusan.*, nilai_ami_jurusan.id_nilai, nilai_ami_jurusan.my, nilai_ami_jurusan.mb, nilai_ami_jurusan.m, nilai_ami_jurusan.mp, nilai_ami_jurusan.ob, nilai_ami_jurusan.kts, nilai_ami_jurusan.open, nilai_ami_jurusan.close, nilai_ami_jurusan.catatan, nilai_ami_jurusan.penanggungjawab')
            ->from('auditor_hasil_desk_jurusan')
            ->join('nilai_ami_jurusan', 'auditor_hasil_desk_jurusan.id_auditor_hasil_desk = nilai_ami_jurusan.id_hasil_desk AND nilai_ami_jurusan.id_audit = ' . $id_audit, 'left')
            ->where('auditor_hasil_desk_jurusan.id_dokumen_acuan', $id)
            ->where('auditor_hasil_desk_jurusan.id_user', $id_user)
            ->order_by('auditor_hasil_desk_jurusan.id_auditor_hasil_desk', 'ASC')
            ->get()
            ->result();


        // var_dump($nilai);
        return $nilai;
    }

    function get_nilai_hasil_desk_utama_jurusan($id_audit)
    {
        $this->db->select('*');
        $this->db->from('nilai_ami_jurusan');
        $this->db->where('id_audit', $id_audit);
        $query = $this->db->get();

        var_dump($query->result());
        // return $query->result();
    }

    function delete_nilai_hasil_desk_utama_jurusan($id_audit)
    {
        $this->db->select('*');
        $this->db->from('nilai_ami_jurusan');
        $this->db->where('id_audit', $id_audit);
        $query = $this->db->get();

        var_dump($query->result());
        // return $query->result();
    }

    // INPUT NILAI HASIL DESK AUDITOR
    function add_nilai_hasil_desk_utama_jurusan()
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $userLogin['id'])
            ->get()
            ->row()
            ->id_audit;

        $id_dokumen_acuan = $this->input->post('id_dokumen_acuan');
        $id_hasil_desk = $this->input->post('id_hasil_desk');
        $m = $this->input->post('m');
        $mp = $this->input->post('mp');
        $mb = $this->input->post('mb');
        $my = $this->input->post('my');
        $ob = $this->input->post('ob');
        $kts = $this->input->post('kts');
        $open = $this->input->post('open');
        $close = $this->input->post('close');
        $catatan = $this->input->post('catatan');
        $penanggungjawab = $this->input->post('penanggungjawab');

        // Prepare the data for bulk insertion/update
        $data = [];
        foreach ($id_hasil_desk as $id) {
            $data[] = array(
                'id_audit' => $id_audit,
                'id_dokumen_acuan' => $id_dokumen_acuan,
                'id_hasil_desk' => $id,
                'm' => isset($m[$id]) ? 1 : 0,
                'mp' => isset($mp[$id]) ? 1 : 0,
                'mb' => isset($mb[$id]) ? 1 : 0,
                'my' => isset($my[$id]) ? 1 : 0,
                'ob' => isset($ob[$id]) ? 1 : 0,
                'kts' => isset($kts[$id]) ? 1 : 0,
                'open' => isset($open[$id]) ? 1 : 0,
                'close' => isset($close[$id]) ? 1 : 0,
                'catatan' => $catatan[$id],
                'penanggungjawab' => $penanggungjawab[$id],
            );
        }

        $this->db->trans_start();

        $updateData = [];
        $insertData = [];
        foreach ($data as $item) {
            $id_hasil_desk = $item['id_hasil_desk'];

            // Check if the data exists in the database
            $existQuery = $this->db->from('nilai_ami_jurusan')
                ->where('id_hasil_desk', $id_hasil_desk)
                ->where('id_audit', $id_audit)
                ->where('id_dokumen_acuan', $id_dokumen_acuan)
                ->get();

            if ($existQuery->num_rows() > 0) {
                // If data exists, add to the update batch
                $updateData[] = $item;
            } else {
                // If data doesn't exist, add to the insert batch
                $insertData[] = $item;
            }
        }
        if (!empty($updateData)) {
            // Use WHERE clause to update only the specific rows
            $this->db->where('id_audit', $id_audit);
            $this->db->where('id_dokumen_acuan', $id_dokumen_acuan);
            $this->db->update_batch('nilai_ami_jurusan', $updateData, 'id_hasil_desk');
        }
        if (!empty($insertData)) {
            $this->db->insert_batch('nilai_ami_jurusan', $insertData);
        }

        // Check if the transaction is successful
        if ($this->db->trans_status() === false) {
            // Rollback the transaction if there's an error
            $this->db->trans_rollback();
            return false;
        } else {
            // Commit the transaction if everything is successful
            $this->db->trans_commit();
            return true;
        }
    }

    function total_hasil_desk_jurusan()
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $userLogin['id'])
            ->get()
            ->row()
            ->id_audit;

        $id_dokumen_acuan = $this->uri->segment(3);

        $getSum = $this->db->from('nilai_ami_jurusan')
            ->where('id_audit', $id_audit)
            ->where('id_dokumen_acuan', $id_dokumen_acuan)
            ->select_sum('m')
            ->select_sum('mp')
            ->select_sum('mb')
            ->select_sum('my')
            ->select_sum('ob')
            ->select_sum('kts')
            ->select_sum('open')
            ->select_sum('close');

        $result = $getSum->get()->row();

        $m = $result->m;
        $mp = $result->mp;
        $mb = $result->mb;
        $my =  $result->my;
        $ob =  $result->ob;
        $kts =  $result->kts;
        $open =  $result->open;
        $close =  $result->close;

        return array(
            'm' => $m,
            'mp' => $mp,
            'mb' => $mb,
            'my' => $my,
            'ob' =>  $ob,
            'kts' =>  $kts,
            'open' =>  $open,
            'close' =>  $close,
        );
    }

    function total_hasil_desk_jurusan_baru($id)
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $userLogin['id'])
            ->get()
            ->row()
            ->id_audit;

        $id_dokumen_acuan = $id;

        $getSum = $this->db->from('nilai_ami_jurusan')
            ->where('id_audit', $id_audit)
            ->where('id_dokumen_acuan', $id_dokumen_acuan)
            ->select_sum('m')
            ->select_sum('mp')
            ->select_sum('mb')
            ->select_sum('my')
            ->select_sum('ob')
            ->select_sum('kts')
            ->select_sum('open')
            ->select_sum('close');

        $result = $getSum->get()->row();

        $m = $result->m;
        $mp = $result->mp;
        $mb = $result->mb;
        $my =  $result->my;
        $ob =  $result->ob;
        $kts =  $result->kts;
        $open =  $result->open;
        $close =  $result->close;

        return array(
            'm' => $m,
            'mp' => $mp,
            'mb' => $mb,
            'my' => $my,
            'ob' =>  $ob,
            'kts' =>  $kts,
            'open' =>  $open,
            'close' =>  $close,
        );
    }

    function total_hasil_desk_admin_jurusan($id, $id_user)
    {
        // $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $id_user)
            ->get()
            ->row()
            ->id_audit;

        $id_dokumen_acuan = $id;

        $getSum = $this->db->from('nilai_ami_jurusan')
            ->where('id_audit', $id_audit)
            ->where('id_dokumen_acuan', $id_dokumen_acuan)
            ->select_sum('m')
            ->select_sum('mp')
            ->select_sum('mb')
            ->select_sum('my')
            ->select_sum('ob')
            ->select_sum('kts')
            ->select_sum('open')
            ->select_sum('close');

        $result = $getSum->get()->row();

        $m = $result->m;
        $mp = $result->mp;
        $mb = $result->mb;
        $my =  $result->my;
        $ob =  $result->ob;
        $kts =  $result->kts;
        $open =  $result->open;
        $close =  $result->close;

        return array(
            'm' => $m,
            'mp' => $mp,
            'mb' => $mb,
            'my' => $my,
            'ob' =>  $ob,
            'kts' =>  $kts,
            'open' =>  $open,
            'close' =>  $close,
        );
    }

    function total_daftar_tilik_jurusan()
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $userLogin['id'])
            ->get()
            ->row()
            ->id_audit;

        $id_dokumen_acuan = $this->uri->segment(3);

        $getSum = $this->db->from('nilai_ami2_jurusan')
            ->where('id_audit', $id_audit)
            ->where('id_dokumen_acuan', $id_dokumen_acuan)
            ->select_sum('m')
            ->select_sum('mp')
            ->select_sum('mb')
            ->select_sum('my');

        $result = $getSum->get()->row();

        $m = $result->m;
        $mp = $result->mp;
        $mb = $result->mb;
        $my =  $result->my;

        return array(
            'm' => $m,
            'mp' => $mp,
            'mb' => $mb,
            'my' => $my,
        );
    }

    function total_daftar_tilik_jurusan_baru($id)
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $userLogin['id'])
            ->get()
            ->row()
            ->id_audit;

        $id_dokumen_acuan = $id;

        $getSum = $this->db->from('nilai_ami2_jurusan')
            ->where('id_audit', $id_audit)
            ->where('id_dokumen_acuan', $id_dokumen_acuan)
            ->select_sum('m')
            ->select_sum('mp')
            ->select_sum('mb')
            ->select_sum('my');

        $result = $getSum->get()->row();

        $m = $result->m;
        $mp = $result->mp;
        $mb = $result->mb;
        $my =  $result->my;

        return array(
            'm' => $m,
            'mp' => $mp,
            'mb' => $mb,
            'my' => $my,
        );
    }

    function total_daftar_tilik_admin_jurusan($id, $id_user)
    {
        // $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $id_user)
            ->get()
            ->row()
            ->id_audit;

        $id_dokumen_acuan = $id;

        $getSum = $this->db->from('nilai_ami2_jurusan')
            ->where('id_audit', $id_audit)
            ->where('id_dokumen_acuan', $id_dokumen_acuan)
            ->select_sum('m')
            ->select_sum('mp')
            ->select_sum('mb')
            ->select_sum('my');

        $result = $getSum->get()->row();

        $m = $result->m;
        $mp = $result->mp;
        $mb = $result->mb;
        $my =  $result->my;

        return array(
            'm' => $m,
            'mp' => $mp,
            'mb' => $mb,
            'my' => $my,
        );
    }


    function add_hasil_desk_tambahan_jurusan()
    {
        $data = [
            'id_dokumen_acuan' => $this->input->post('id_dokumen_acuan', true),
            'tambahan_hasil_desk' => $this->input->post('tambahan_hasil_desk', true),
            'id_audit' => $this->input->post('id_audit', true),
            'id_user' => $this->input->post('id_user', true),
        ];

        $data['id_auditor_hasil_desk'] = generate_custom_id('W', 'id_auditor_hasil_desk', 'auditor_hasil_desk_jurusan');
        // var_dump($data);

        $this->db->insert('auditor_hasil_desk_jurusan', $data);
    }

    function add_daftar_tilik_tambahan_jurusan()
    {
        $data = [
            'id_dokumen_acuan' => $this->input->post('id_dokumen_acuan', true),
            'tambahan_daftar_tilik' => $this->input->post('tambahan_daftar_tilik', true),
            'id_audit' => $this->input->post('id_audit', true),
            'id_user' => $this->input->post('id_user', true),
        ];

        $data['id_auditor_daftar_tilik'] = generate_custom_id('X', 'id_auditor_daftar_tilik', 'auditor_daftar_tilik_jurusan');
        // var_dump($data);

        $this->db->insert('auditor_daftar_tilik_jurusan', $data);
    }

    public function add_nilai_hasil_desk_tambahan_jurusan()
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $userLogin['id'])
            ->get()
            ->row()
            ->id_audit;

        $id_dokumen_acuan = $this->input->post('id_dokumen_acuan');
        $id_auditor_hasil_desk = $this->input->post('id_auditor_hasil_desk');
        $m = $this->input->post('m');
        $mp = $this->input->post('mp');
        $mb = $this->input->post('mb');
        $my = $this->input->post('my');
        $ob = $this->input->post('ob');
        $kts = $this->input->post('kts');
        $open = $this->input->post('open');
        $close = $this->input->post('close');
        $catatan = $this->input->post('catatan');
        $penanggungjawab = $this->input->post('penanggungjawab');

        // Prepare the data for bulk insertion/update
        $data = [];
        foreach ($id_auditor_hasil_desk as $id) {
            $data[] = array(
                'id_audit' => $id_audit,
                'id_dokumen_acuan' => $id_dokumen_acuan,
                'id_hasil_desk' => $id,
                'm' => isset($m[$id]) ? 1 : 0,
                'mp' => isset($mp[$id]) ? 1 : 0,
                'mb' => isset($mb[$id]) ? 1 : 0,
                'my' => isset($my[$id]) ? 1 : 0,
                'ob' => isset($ob[$id]) ? 1 : 0,
                'kts' => isset($kts[$id]) ? 1 : 0,
                'open' => isset($open[$id]) ? 1 : 0,
                'close' => isset($close[$id]) ? 1 : 0,
                'catatan' => $catatan[$id],
                'penanggungjawab' => $penanggungjawab[$id],
            );
        }

        $this->db->trans_start();

        $updateData = [];
        $insertData = [];
        foreach ($data as $item) {
            $id_auditor_hasil_desk = $item['id_hasil_desk'];

            // Check if the data exists in the database
            $existQuery = $this->db->from('nilai_ami_jurusan')
                ->where('id_hasil_desk', $id_auditor_hasil_desk)
                ->where('id_audit', $id_audit)
                ->where('id_dokumen_acuan', $id_dokumen_acuan)
                ->get();

            if ($existQuery->num_rows() > 0) {
                // If data exists, add to the update batch
                $updateData[] = $item;
            } else {
                // If data doesn't exist, add to the insert batch
                $insertData[] = $item;
            }
        }

        if (!empty($updateData)) {
            // Use WHERE clause to update only the specific rows
            $this->db->where('id_audit', $id_audit);
            $this->db->where('id_dokumen_acuan', $id_dokumen_acuan);
            $this->db->update_batch('nilai_ami_jurusan', $updateData, 'id_hasil_desk');
        }
        if (!empty($insertData)) {
            $this->db->insert_batch('nilai_ami_jurusan', $insertData);
        }

        // Check if the transaction is successful
        if ($this->db->trans_status() === false) {
            // Rollback the transaction if there's an error
            $this->db->trans_rollback();
            return false;
        } else {
            // Commit the transaction if everything is successful
            $this->db->trans_commit();
            return true;
        }
    }


    //INPUT NILAI DAFTAR TILIK AUDITOR JURUSAN

    function add_nilai_daftar_tilik_tambahan_jurusan()
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $userLogin['id'])
            ->get()
            ->row()
            ->id_audit;

        $id_dokumen_acuan = $this->input->post('id_dokumen_acuan');
        $id_auditor_daftar_tilik = $this->input->post('id_auditor_daftar_tilik');
        $dokumenterkait = $this->input->post('dokumenterkait');
        $hasilobservasi = $this->input->post('hasilobservasi');
        $m = $this->input->post('m');
        $mp = $this->input->post('mp');
        $mb = $this->input->post('mb');
        $my = $this->input->post('my');
        $rekomendasi = $this->input->post('rekomendasi');

        $data = [];
        foreach ($id_auditor_daftar_tilik as $id) {
            $data[] = array(
                'id_audit' => $id_audit,
                'id_dokumen_acuan' => $id_dokumen_acuan,
                'id_daftar_tilik' => $id,
                'dokumen_terkait' => $dokumenterkait[$id],
                'hasil_observasi' => $hasilobservasi[$id],
                'm' => isset($m[$id]) ? 1 : 0,
                'mp' => isset($mp[$id]) ? 1 : 0,
                'mb' => isset($mb[$id]) ? 1 : 0,
                'my' => isset($my[$id]) ? 1 : 0,
                'rekomendasi' => $rekomendasi[$id],
            );
        }

        $this->db->trans_start();

        $updateData = [];
        $insertData = [];
        foreach ($data as $item) {
            $id_auditor_daftar_tilik = $item['id_daftar_tilik'];

            // Check if the data exists in the database
            $existQuery = $this->db->from('nilai_ami2_jurusan')
                ->where('id_audit', $id_audit)
                ->where('id_dokumen_acuan', $id_dokumen_acuan)
                ->where('id_daftar_tilik', $id_auditor_daftar_tilik)
                ->get();

            if ($existQuery->num_rows() > 0) {
                // If data exists, add to the update batch
                $updateData[] = $item;
            } else {
                // If data doesn't exist, add to the insert batch
                $insertData[] = $item;
            }
        }

        if (!empty($updateData)) {
            // Use WHERE clause to update only the specific rows
            $this->db->where('id_audit', $id_audit);
            $this->db->where('id_dokumen_acuan', $id_dokumen_acuan);
            $this->db->update_batch('nilai_ami2_jurusan', $updateData, 'id_daftar_tilik');
        }
        if (!empty($insertData)) {
            $this->db->insert_batch('nilai_ami2_jurusan', $insertData);
        }

        // Check if the transaction is successful
        if ($this->db->trans_status() === false) {
            // Rollback the transaction if there's an error
            $this->db->trans_rollback();
            return false;
        } else {
            // Commit the transaction if everything is successful
            $this->db->trans_commit();
            return true;
        }
    }


    // PERTANYAAN TAMBAHAN DAFTAR TILIK AUDITOR PRODI
    function add_daftar_tilik_auditor()
    {
        $data = [
            'id_dokumen_acuan' => $this->input->post('id_dokumen_acuan', true),
            'id_audit' => $this->input->post('id_audit', true),
            'id_user' => $this->input->post('id_user', true),
            'tambahan_daftar_tilik' => $this->input->post('tambahan_daftar_tilik', true),
        ];
        // var_dump($data);

        $this->db->insert('auditor_daftar_tilik', $data);
    }

    function tampil_tambahan_daftar_tilik_auditor($id)
    {
        $data = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $id_dokumen_acuan = $this->uri->segment(3);

        $id_audit = $this->db->select('id_audit')
            ->from('auditor_daftar_tilik')
            ->where('id_user',  $data['id'])
            ->get()
            ->row();

        if ($id_audit !== null) {
            $getData = $this->db->select('tambahan_daftar_tilik')
                ->from('auditor_daftar_tilik')
                ->where('id_audit',  $id_audit->id_audit)
                ->where('id_dokumen_acuan', $id_dokumen_acuan)
                ->get()
                ->row_array();

            if ($getData !== null && isset($getData['tambahan_daftar_tilik'])) {
                return $getData['tambahan_daftar_tilik'];
            }
        }

        return null;
    }

    function get_nilai_daftar_tilik_utama($id_audit)
    {
        $this->db->select('*');
        $this->db->from('nilai_ami2');
        $this->db->where('id_audit', $id_audit);
        $query = $this->db->get();

        var_dump($query->result());
        // return $query->result();
    }

    function delete_nilai_daftar_tilik_utama($id_audit)
    {
        $this->db->select('*');
        $this->db->from('nilai_ami2');
        $this->db->where('id_audit', $id_audit);
        $query = $this->db->get();

        var_dump($query->result());
        // return $query->result();
    }


    function add_nilai_daftar_tilik_utama()
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $userLogin['id'])
            ->get()
            ->row()
            ->id_audit;

        $id_dokumen_acuan = $this->input->post('id_dokumen_acuan');
        $id_daftar_tilik = $this->input->post('id_daftar_tilik');
        $dokumenterkait = $this->input->post('dokumenterkait');
        $hasilobservasi = $this->input->post('hasilobservasi');
        $m = $this->input->post('m');
        $mp = $this->input->post('mp');
        $mb = $this->input->post('mb');
        $my = $this->input->post('my');
        $rekomendasi = $this->input->post('rekomendasi');

        $data = [];
        foreach ($id_daftar_tilik as $id) {
            $data[] = array(
                'id_audit' => $id_audit,
                'id_dokumen_acuan' => $id_dokumen_acuan,
                'id_daftar_tilik' => $id,
                'dokumen_terkait' => $dokumenterkait[$id],
                'hasil_observasi' => $hasilobservasi[$id],
                'm' => isset($m[$id]) ? 1 : 0,
                'mp' => isset($mp[$id]) ? 1 : 0,
                'mb' => isset($mb[$id]) ? 1 : 0,
                'my' => isset($my[$id]) ? 1 : 0,
                'rekomendasi' => $rekomendasi[$id],
            );
        }

        $this->db->trans_start();

        $updateData = [];
        $insertData = [];
        foreach ($data as $item) {
            $id_daftar_tilik = $item['id_daftar_tilik'];

            // Check if the data exists in the database
            $existQuery = $this->db->from('nilai_ami2')
                ->where('id_audit', $id_audit)
                ->where('id_dokumen_acuan', $id_dokumen_acuan)
                ->where('id_daftar_tilik', $id_daftar_tilik)
                ->get();

            if ($existQuery->num_rows() > 0) {
                // If data exists, add to the update batch
                $updateData[] = $item;
            } else {
                // If data doesn't exist, add to the insert batch
                $insertData[] = $item;
            }
        }

        // Perform batch update and insert
        if (!empty($updateData)) {
            // Use WHERE clause to update only the specific rows
            $this->db->where('id_audit', $id_audit);
            $this->db->where('id_dokumen_acuan', $id_dokumen_acuan);
            $this->db->update_batch('nilai_ami2', $updateData, 'id_daftar_tilik');
        }
        if (!empty($insertData)) {
            $this->db->insert_batch('nilai_ami2', $insertData);
        }

        // Check if the transaction is successful
        if ($this->db->trans_status() === false) {
            // Rollback the transaction if there's an error
            $this->db->trans_rollback();
            return false;
        } else {
            // Commit the transaction if everything is successful
            $this->db->trans_commit();
            return true;
        }
    }


    // PERTANYAAN TAMBAHAN DAFTAR TILIK AUDITOR JURUSAN
    function add_daftar_tilik_auditor_jurusan()
    {
        $data = [
            'id_dokumen_acuan' => $this->input->post('id_dokumen_acuan', true),
            'id_audit' => $this->input->post('id_audit', true),
            'id_user' => $this->input->post('id_user', true),
            'tambahan_daftar_tilik' => $this->input->post('tambahan_daftar_tilik', true),
        ];
        // var_dump($data);

        $this->db->insert('auditor_daftar_tilik_jurusan', $data);
    }

    function tampil_tambahan_daftar_tilik_auditor_jurusan($id)
    {
        $data = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $id_dokumen_acuan = $this->uri->segment(3);

        $id_audit = $this->db->select('id_audit')
            ->from('auditor_daftar_tilik_jurusan')
            ->where('id_user',  $data['id'])
            ->get()
            ->row();

        if ($id_audit !== null) {
            $getData = $this->db->select('tambahan_daftar_tilik')
                ->from('auditor_daftar_tilik_jurusan')
                ->where('id_audit',  $id_audit->id_audit)
                ->where('id_dokumen_acuan', $id_dokumen_acuan)
                ->get()
                ->row_array();

            if ($getData !== null && isset($getData['tambahan_daftar_tilik'])) {
                return $getData['tambahan_daftar_tilik'];
            }
        }

        return null;
    }

    function get_nilai_daftar_tilik_utama_jurusan($id_audit)
    {
        $this->db->select('*');
        $this->db->from('nilai_ami2_jurusan');
        $this->db->where('id_audit', $id_audit);
        $query = $this->db->get();

        var_dump($query->result());
        // return $query->result();
    }

    function delete_nilai_daftar_tilik_utama_jurusan($id_audit)
    {
        $this->db->select('*');
        $this->db->from('nilai_ami2_jurusan');
        $this->db->where('id_audit', $id_audit);
        $query = $this->db->get();

        var_dump($query->result());
        // return $query->result();
    }


    function add_nilai_daftar_tilik_utama_jurusan()
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $userLogin['id'])
            ->get()
            ->row()
            ->id_audit;

        $id_dokumen_acuan = $this->input->post('id_dokumen_acuan');
        $id_daftar_tilik = $this->input->post('id_daftar_tilik');
        $dokumenterkait = $this->input->post('dokumenterkait');
        $hasilobservasi = $this->input->post('hasilobservasi');
        $m = $this->input->post('m');
        $mp = $this->input->post('mp');
        $mb = $this->input->post('mb');
        $my = $this->input->post('my');
        $rekomendasi = $this->input->post('rekomendasi');

        $data = [];
        foreach ($id_daftar_tilik as $id) {
            $data[] = array(
                'id_audit' => $id_audit,
                'id_dokumen_acuan' => $id_dokumen_acuan,
                'id_daftar_tilik' => $id,
                'dokumen_terkait' => $dokumenterkait[$id],
                'hasil_observasi' => $hasilobservasi[$id],
                'm' => isset($m[$id]) ? 1 : 0,
                'mp' => isset($mp[$id]) ? 1 : 0,
                'mb' => isset($mb[$id]) ? 1 : 0,
                'my' => isset($my[$id]) ? 1 : 0,
                'rekomendasi' => $rekomendasi[$id],
            );
        }

        $this->db->trans_start();

        $updateData = [];
        $insertData = [];
        foreach ($data as $item) {
            $id_daftar_tilik = $item['id_daftar_tilik'];

            // Check if the data exists in the database
            $existQuery = $this->db->from('nilai_ami2_jurusan')
                ->where('id_audit', $id_audit)
                ->where('id_dokumen_acuan', $id_dokumen_acuan)
                ->where('id_daftar_tilik', $id_daftar_tilik)
                ->get();

            if ($existQuery->num_rows() > 0) {
                // If data exists, add to the update batch
                $updateData[] = $item;
            } else {
                // If data doesn't exist, add to the insert batch
                $insertData[] = $item;
            }
        }

        if (!empty($updateData)) {
            // Use WHERE clause to update only the specific rows
            $this->db->where('id_audit', $id_audit);
            $this->db->where('id_dokumen_acuan', $id_dokumen_acuan);
            $this->db->update_batch('nilai_ami2_jurusan', $updateData, 'id_daftar_tilik');
        }
        if (!empty($insertData)) {
            $this->db->insert_batch('nilai_ami2_jurusan', $insertData);
        }

        // Check if the transaction is successful
        if ($this->db->trans_status() === false) {
            // Rollback the transaction if there's an error
            $this->db->trans_rollback();
            return false;
        } else {
            // Commit the transaction if everything is successful
            $this->db->trans_commit();
            return true;
        }
    }


    // DAFTAR TILIK UNIT
    function tampil_daftar_tilik_tambahan_unit()
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $id_dokumen_acuan = $this->uri->segment(3);

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $userLogin['id'])
            ->get()
            ->row()
            ->id_audit;

        $nilai = $this->db->select('auditor_daftar_tilik_unit.*, nilai_ami2_unit.dokumen_terkait, nilai_ami2_unit.hasil_observasi, nilai_ami2_unit.m, nilai_ami2_unit.mp, nilai_ami2_unit.mb, nilai_ami2_unit.my, nilai_ami2_unit.rekomendasi')
            ->from('auditor_daftar_tilik_unit')
            ->join('nilai_ami2_unit', 'auditor_daftar_tilik_unit.id_auditor_daftar_tilik = nilai_ami2_unit.id_daftar_tilik AND nilai_ami2_unit.id_audit = ' . $id_audit, 'left')
            // ->where('auditor_daftar_tilik_jurusan.id_dokumen_acuan', $id_dokumen_acuan)
            ->where('auditor_daftar_tilik_unit.id_user', $userLogin['id'])
            ->order_by('auditor_daftar_tilik_unit.id_auditor_daftar_tilik', 'ASC')
            ->get()
            ->result();

        return $nilai;
    }

    function tampil_daftar_tilik_tambahan_unit_admin($id_user)
    {
        // $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $id_dokumen_acuan = $this->uri->segment(3);

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $id_user)
            ->get()
            ->row()
            ->id_audit;

        $nilai = $this->db->select('auditor_daftar_tilik_unit.*, nilai_ami2_unit.dokumen_terkait, nilai_ami2_unit.hasil_observasi, nilai_ami2_unit.m, nilai_ami2_unit.mp, nilai_ami2_unit.mb, nilai_ami2_unit.my, nilai_ami2_unit.rekomendasi')
            ->from('auditor_daftar_tilik_unit')
            ->join('nilai_ami2_unit', 'auditor_daftar_tilik_unit.id_auditor_daftar_tilik = nilai_ami2_unit.id_daftar_tilik AND nilai_ami2_unit.id_audit = ' . $id_audit, 'left')
            // ->where('auditor_daftar_tilik_jurusan.id_dokumen_acuan', $id_dokumen_acuan)
            ->where('auditor_daftar_tilik_unit.id_user', $id_user)
            ->order_by('auditor_daftar_tilik_unit.id_auditor_daftar_tilik', 'ASC')
            ->get()
            ->result();

        return $nilai;
    }


    function tampil_hasil_desk_tambahan_unit()
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $id_dokumen_acuan = $this->uri->segment(3);

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $userLogin['id'])
            ->get()
            ->row()
            ->id_audit;

        $nilai = $this->db->select('auditor_hasil_desk_unit.*, nilai_ami_unit.id_nilai, nilai_ami_unit.my, nilai_ami_unit.mb, nilai_ami_unit.m, nilai_ami_unit.mp, nilai_ami_unit.ob, nilai_ami_unit.kts, nilai_ami_unit.open, nilai_ami_unit.close, nilai_ami_unit.catatan, nilai_ami_unit.penanggungjawab')
            ->from('auditor_hasil_desk_unit')
            ->join('nilai_ami_unit', 'auditor_hasil_desk_unit.id_auditor_hasil_desk = nilai_ami_unit.id_hasil_desk AND nilai_ami_unit.id_audit = ' . $id_audit, 'left')
            // ->where('auditor_hasil_desk_jurusan.id_dokumen_acuan', $id_dokumen_acuan)
            ->where('auditor_hasil_desk_unit.id_user', $userLogin['id'])
            ->order_by('auditor_hasil_desk_unit.id_auditor_hasil_desk', 'ASC')
            ->get()
            ->result();


        // var_dump($nilai);
        return $nilai;
    }

    function tampil_hasil_desk_tambahan_unit_admin($id_user)
    {
        // $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $id_dokumen_acuan = $this->uri->segment(3);

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $id_user)
            ->get()
            ->row()
            ->id_audit;

        $nilai = $this->db->select('auditor_hasil_desk_unit.*, nilai_ami_unit.id_nilai, nilai_ami_unit.my, nilai_ami_unit.mb, nilai_ami_unit.m, nilai_ami_unit.mp, nilai_ami_unit.ob, nilai_ami_unit.kts, nilai_ami_unit.open, nilai_ami_unit.close, nilai_ami_unit.catatan, nilai_ami_unit.penanggungjawab')
            ->from('auditor_hasil_desk_unit')
            ->join('nilai_ami_unit', 'auditor_hasil_desk_unit.id_auditor_hasil_desk = nilai_ami_unit.id_hasil_desk AND nilai_ami_unit.id_audit = ' . $id_audit, 'left')
            // ->where('auditor_hasil_desk_jurusan.id_dokumen_acuan', $id)
            ->where('auditor_hasil_desk_unit.id_user', $id_user)
            ->order_by('auditor_hasil_desk_unit.id_auditor_hasil_desk', 'ASC')
            ->get()
            ->result();

        return $nilai;
    }

    function total_hasil_desk_unit()
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $userLogin['id'])
            ->get()
            ->row()
            ->id_audit;

        // $id_dokumen_acuan = $this->uri->segment(3);

        $getSum = $this->db->from('nilai_ami_unit')
            ->where('id_audit', $id_audit)
            // ->where('id_dokumen_acuan', $id_dokumen_acuan)
            ->select_sum('m')
            ->select_sum('mp')
            ->select_sum('mb')
            ->select_sum('my')
            ->select_sum('ob')
            ->select_sum('kts')
            ->select_sum('open')
            ->select_sum('close');

        $result = $getSum->get()->row();

        $m = $result->m;
        $mp = $result->mp;
        $mb = $result->mb;
        $my =  $result->my;
        $ob =  $result->ob;
        $kts =  $result->kts;
        $open =  $result->open;
        $close =  $result->close;

        return array(
            'm' => $m,
            'mp' => $mp,
            'mb' => $mb,
            'my' => $my,
            'ob' =>  $ob,
            'kts' =>  $kts,
            'open' =>  $open,
            'close' =>  $close,
        );
    }

    function total_hasil_desk_unit_admin($id_user)
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $id_user)
            ->get()
            ->row()
            ->id_audit;

        // $id_dokumen_acuan = $this->uri->segment(3);

        $getSum = $this->db->from('nilai_ami_unit')
            ->where('id_audit', $id_audit)
            // ->where('id_dokumen_acuan', $id_dokumen_acuan)
            ->select_sum('m')
            ->select_sum('mp')
            ->select_sum('mb')
            ->select_sum('my')
            ->select_sum('ob')
            ->select_sum('kts')
            ->select_sum('open')
            ->select_sum('close');

        $result = $getSum->get()->row();

        $m = $result->m;
        $mp = $result->mp;
        $mb = $result->mb;
        $my =  $result->my;
        $ob =  $result->ob;
        $kts =  $result->kts;
        $open =  $result->open;
        $close =  $result->close;

        return array(
            'm' => $m,
            'mp' => $mp,
            'mb' => $mb,
            'my' => $my,
            'ob' =>  $ob,
            'kts' =>  $kts,
            'open' =>  $open,
            'close' =>  $close,
        );
    }


    function total_daftar_tilik_unit()
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $userLogin['id'])
            ->get()
            ->row()
            ->id_audit;

        // $id_dokumen_acuan = $this->uri->segment(3);

        $getSum = $this->db->from('nilai_ami2_unit')
            ->where('id_audit', $id_audit)
            // ->where('id_dokumen_acuan', $id_dokumen_acuan)
            ->select_sum('m')
            ->select_sum('mp')
            ->select_sum('mb')
            ->select_sum('my');

        $result = $getSum->get()->row();

        $m = $result->m;
        $mp = $result->mp;
        $mb = $result->mb;
        $my =  $result->my;

        return array(
            'm' => $m,
            'mp' => $mp,
            'mb' => $mb,
            'my' => $my,
        );
    }

    function total_daftar_tilik_unit_admin($id_user)
    {
        // $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $id_user)
            ->get()
            ->row()
            ->id_audit;

        // $id_dokumen_acuan = $this->uri->segment(3);

        $getSum = $this->db->from('nilai_ami2_unit')
            ->where('id_audit', $id_audit)
            // ->where('id_dokumen_acuan', $id_dokumen_acuan)
            ->select_sum('m')
            ->select_sum('mp')
            ->select_sum('mb')
            ->select_sum('my');

        $result = $getSum->get()->row();

        $m = $result->m;
        $mp = $result->mp;
        $mb = $result->mb;
        $my =  $result->my;

        return array(
            'm' => $m,
            'mp' => $mp,
            'mb' => $mb,
            'my' => $my,
        );
    }

    function add_hasil_desk_tambahan_unit()
    {
        $data = [
            // 'id_dokumen_acuan' => $this->input->post('id_dokumen_acuan', true),
            'tambahan_hasil_desk' => $this->input->post('tambahan_hasil_desk', true),
            'id_audit' => $this->input->post('id_audit', true),
            'id_user' => $this->input->post('id_user', true),
        ];

        $data['id_auditor_hasil_desk'] = generate_custom_id('J', 'id_auditor_hasil_desk', 'auditor_hasil_desk_unit');
        // var_dump($data);

        $this->db->insert('auditor_hasil_desk_unit', $data);
    }

    function add_daftar_tilik_tambahan_unit()
    {
        $data = [
            // 'id_dokumen_acuan' => $this->input->post('id_dokumen_acuan', true),
            'tambahan_daftar_tilik' => $this->input->post('tambahan_daftar_tilik', true),
            'id_audit' => $this->input->post('id_audit', true),
            'id_user' => $this->input->post('id_user', true),
        ];

        $data['id_auditor_daftar_tilik'] = generate_custom_id('K', 'id_auditor_daftar_tilik', 'auditor_daftar_tilik_unit');
        // var_dump($data);

        $this->db->insert('auditor_daftar_tilik_unit', $data);
    }

    public function add_nilai_hasil_desk_tambahan_unit()
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $userLogin['id'])
            ->get()
            ->row()
            ->id_audit;

        // $id_dokumen_acuan = $this->input->post('id_dokumen_acuan');
        $id_auditor_hasil_desk = $this->input->post('id_auditor_hasil_desk');
        $m = $this->input->post('m');
        $mp = $this->input->post('mp');
        $mb = $this->input->post('mb');
        $my = $this->input->post('my');
        $ob = $this->input->post('ob');
        $kts = $this->input->post('kts');
        $open = $this->input->post('open');
        $close = $this->input->post('close');
        $catatan = $this->input->post('catatan');
        $penanggungjawab = $this->input->post('penanggungjawab');

        // Prepare the data for bulk insertion/update
        $data = [];
        foreach ($id_auditor_hasil_desk as $id) {
            $data[] = array(
                'id_audit' => $id_audit,
                // 'id_dokumen_acuan' => $id_dokumen_acuan,
                'id_hasil_desk' => $id,
                'm' => isset($m[$id]) ? 1 : 0,
                'mp' => isset($mp[$id]) ? 1 : 0,
                'mb' => isset($mb[$id]) ? 1 : 0,
                'my' => isset($my[$id]) ? 1 : 0,
                'ob' => isset($ob[$id]) ? 1 : 0,
                'kts' => isset($kts[$id]) ? 1 : 0,
                'open' => isset($open[$id]) ? 1 : 0,
                'close' => isset($close[$id]) ? 1 : 0,
                'catatan' => $catatan[$id],
                'penanggungjawab' => $penanggungjawab[$id],
            );
        }

        $this->db->trans_start();

        $updateData = [];
        $insertData = [];
        foreach ($data as $item) {
            $id_auditor_hasil_desk = $item['id_hasil_desk'];

            // Check if the data exists in the database
            $existQuery = $this->db->from('nilai_ami_unit')
                ->where('id_hasil_desk', $id_auditor_hasil_desk)
                ->where('id_audit', $id_audit)
                // ->where('id_dokumen_acuan', $id_dokumen_acuan)
                ->get();

            if ($existQuery->num_rows() > 0) {
                // If data exists, add to the update batch
                $updateData[] = $item;
            } else {
                // If data doesn't exist, add to the insert batch
                $insertData[] = $item;
            }
        }

        if (!empty($updateData)) {
            // Use WHERE clause to update only the specific rows
            // $this->db->where('id_audit', $id_audit);
            // $this->db->where('id_dokumen_acuan', $id_dokumen_acuan);
            $this->db->update_batch('nilai_ami_unit', $updateData, 'id_hasil_desk');
        }
        if (!empty($insertData)) {
            $this->db->insert_batch('nilai_ami_unit', $insertData);
        }

        // Check if the transaction is successful
        if ($this->db->trans_status() === false) {
            // Rollback the transaction if there's an error
            $this->db->trans_rollback();
            return false;
        } else {
            // Commit the transaction if everything is successful
            $this->db->trans_commit();
            return true;
        }
    }


    //INPUT NILAI DAFTAR TILIK AUDITOR UNIT

    function add_nilai_daftar_tilik_tambahan_unit()
    {
        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $userLogin['id'])
            ->get()
            ->row()
            ->id_audit;

        // $id_dokumen_acuan = $this->input->post('id_dokumen_acuan');
        $id_auditor_daftar_tilik = $this->input->post('id_auditor_daftar_tilik');
        $dokumenterkait = $this->input->post('dokumenterkait');
        $hasilobservasi = $this->input->post('hasilobservasi');
        $m = $this->input->post('m');
        $mp = $this->input->post('mp');
        $mb = $this->input->post('mb');
        $my = $this->input->post('my');
        $rekomendasi = $this->input->post('rekomendasi');

        $data = [];
        foreach ($id_auditor_daftar_tilik as $id) {
            $data[] = array(
                'id_audit' => $id_audit,
                // 'id_dokumen_acuan' => $id_dokumen_acuan,
                'id_daftar_tilik' => $id,
                'dokumen_terkait' => $dokumenterkait[$id],
                'hasil_observasi' => $hasilobservasi[$id],
                'm' => isset($m[$id]) ? 1 : 0,
                'mp' => isset($mp[$id]) ? 1 : 0,
                'mb' => isset($mb[$id]) ? 1 : 0,
                'my' => isset($my[$id]) ? 1 : 0,
                'rekomendasi' => $rekomendasi[$id],
            );
        }

        $this->db->trans_start();

        $updateData = [];
        $insertData = [];
        foreach ($data as $item) {
            $id_auditor_daftar_tilik = $item['id_daftar_tilik'];

            // Check if the data exists in the database
            $existQuery = $this->db->from('nilai_ami2_unit')
                ->where('id_audit', $id_audit)
                // ->where('id_dokumen_acuan', $id_dokumen_acuan)
                ->where('id_daftar_tilik', $id_auditor_daftar_tilik)
                ->get();

            if ($existQuery->num_rows() > 0) {
                // If data exists, add to the update batch
                $updateData[] = $item;
            } else {
                // If data doesn't exist, add to the insert batch
                $insertData[] = $item;
            }
        }

        if (!empty($updateData)) {
            // Use WHERE clause to update only the specific rows
            $this->db->where('id_audit', $id_audit);
            // $this->db->where('id_dokumen_acuan', $id_dokumen_acuan);
            $this->db->update_batch('nilai_ami2_unit', $updateData, 'id_daftar_tilik');
        }
        if (!empty($insertData)) {
            $this->db->insert_batch('nilai_ami2_unit', $insertData);
        }

        // Check if the transaction is successful
        if ($this->db->trans_status() === false) {
            // Rollback the transaction if there's an error
            $this->db->trans_rollback();
            return false;
        } else {
            // Commit the transaction if everything is successful
            $this->db->trans_commit();
            return true;
        }
    }

    // PERTANYAAN TAMBAHAN DAFTAR TILIK AUDITOR UNIT
    function add_daftar_tilik_auditor_unit()
    {
        $data = [
            // 'id_dokumen_acuan' => $this->input->post('id_dokumen_acuan', true),
            'id_audit' => $this->input->post('id_audit', true),
            'id_user' => $this->input->post('id_user', true),
            'tambahan_daftar_tilik' => $this->input->post('tambahan_daftar_tilik', true),
        ];
        // var_dump($data);

        $this->db->insert('auditor_daftar_tilik_unit', $data);
    }

    function tampil_tambahan_daftar_tilik_auditor_unit($id)
    {
        $data = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $id_dokumen_acuan = $this->uri->segment(3);

        $id_audit = $this->db->select('id_audit')
            ->from('auditor_daftar_tilik_unit')
            ->where('id_user',  $data['id'])
            ->get()
            ->row();

        if ($id_audit !== null) {
            $getData = $this->db->select('tambahan_daftar_tilik')
                ->from('auditor_daftar_tilik_unit')
                ->where('id_audit',  $id_audit->id_audit)
                // ->where('id_dokumen_acuan', $id_dokumen_acuan)
                ->get()
                ->row_array();

            if ($getData !== null && isset($getData['tambahan_daftar_tilik'])) {
                return $getData['tambahan_daftar_tilik'];
            }
        }

        return null;
    }


    function get_id_hasil_tindak_lanjut()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $result = $this->db->select('tindaklanjut.id_tindaklanjut')
            ->from('tindaklanjut')
            ->join('user', 'user.id_audit = tindaklanjut.id_user')
            ->where('user.id', $data['user']['id'])
            ->get()
            ->row();

        if ($result !== null && isset($result->id_tindaklanjut)) {
            return $result->id_tindaklanjut;
        }

        return null; // Return null explicitly if no valid result is found
    }

    function get_id_hasil_audit()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // var_dump($data['user']['id']);
        $result = $this->db->select('hasilaudit.*')
            ->from('hasilaudit')
            ->join('user', 'user.id = hasilaudit.id_user')
            ->where('user.id_audit', $data['user']['id'])
            ->get()
            ->row();

        if ($result !== null && isset($result)) {
            return $result;
        }
        return null;
    }

    function get_id_hasil_audit_baru($id)
    {

        // var_dump($id);
        $id_auditor = $this->db->select('user.id')
            ->from('user')
            ->where('id_audit', $id)
            ->limit(1)
            ->get()
            ->row()
            ->id;

        // var_dump($id_auditor);

        $result = $this->db->select('*')
            ->from('hasilaudit')
            ->where('id_user', $id_auditor)
            ->limit(1)
            ->get()
            ->row();

        return $result;

        // var_dump($result);


        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // $result = $this->db->select('hasilaudit.id_hasilaudit')
        //     ->from('hasilaudit')
        //     ->join('user', 'user.id_audit = hasilaudit.id_user')
        //     ->where('user.id', $data['user']['id'])
        //     ->get()
        //     ->row();

        // if ($result !== null && isset($result->id_hasilaudit)) {
        //     return $result->id_hasilaudit;
        // }

        // return null; 

    }


    function get_hasil_tindak_lanjut()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $result = $this->db->select('tindaklanjut.*')
            ->from('tindaklanjut')
            ->order_by('tindaklanjut.id_tindaklanjut', 'ASC')
            ->get()
            ->result();

        if ($result !== null && isset($result->id_tindaklanjut)) {
            return $result->id_tindaklanjut;
        }

        return null; // Return null explicitly if no valid result is found
    }





    //hasil audit untuk auditor

    public function get_hasilaudit($id)
    {
        // $query = $this->db->query("SELECT * FROM prodi");
        // $id = (int)$id;
        $this->db->select('*');
        $this->db->from('hasilaudit');
        $this->db->where('id_user', $id);
        $query = $this->db->get();

        // var_dump($query->result());
        // var_dump($id);
        return $query->result();
    }

    public function get_hasilaudit2($id)
    {
        // $query = $this->db->query("SELECT * FROM prodi");
        // $id = (int)$id;
        $this->db->select('*');
        $this->db->from('bab2_hasil_audit');
        $this->db->where('id_hasilaudit', $id);
        $query = $this->db->get();

        // var_dump($query->result());
        // var_dump($id);
        return $query->result();
    }

    public function tambah_hasilaudit($id, $foto1, $foto2, $foto3, $foto4)
    {

        $userLogin = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $id_audit = $this->db->select('id_audit')
            ->from('user')
            ->where('id', $userLogin['id'])
            ->get()
            ->row()
            ->id_audit;


        $data = [
            'id_user' => $id,
            'id_audit' => $id_audit,
            'foto_pengesahan' => $foto1,
            'dokumentasi' => $foto2,
            'daftarhadir' => $foto3,
            'beritaacara' => $foto4,
            'tahun' => $this->input->post('tahun', true),
            'lembaga' => $this->input->post('lembaga', true),
            'tanggal' => $this->input->post('tanggal', true),
            'NIP' => $this->input->post('NIP', true),
            'periode' => $this->input->post('periode', true),
            'hari_tgl' => $this->input->post('hari_tgl', true),
            'waktu' => $this->input->post('waktu', true),
            'tempat' => $this->input->post('tempat', true),
            'auditor' => $this->input->post('auditor', true),
            'auditor2' => $this->input->post('auditor2', true),
            'auditee' => $this->input->post('auditee', true),
            'tanggalDE' => $this->input->post('tanggalDE', true),
            'jangka_waktu' => $this->input->post('jangka_waktu', true),
            // 'verifikasi' => $this->input->post('verifikasi', true),

        ];
        // var_dump($data);
        $this->db->insert('hasilaudit', $data);
    }

    public function verifikasi()
    {
        $data = [

            'verifikasi' => $this->input->post('verifikasi', true),

        ];
        // var_dump($data);
        $this->db->insert('hasilaudit', $data);
    }

    public function tambah_hasilaudit2($id)
    {
        $data = [
            'id_hasilaudit' => $id,
            'dokumen_acuan' => $this->input->post('dokumen_acuan', true),
            'deskripsi_temuan' => $this->input->post('deskripsi_temuan', true),
            'open' => $this->input->post('open', true),
            'close' => $this->input->post('close', true),
            'permintaan_tindakan' => $this->input->post('permintaan_tindakan', true),
        ];

        // $data['nama_file'] = $nama;
        // $data['type'] = $tipe;
        // $data['ukuran'] = $ukuran; 

        // var_dump($data);

        $this->db->insert('bab2_hasil_audit', $data,);
    }

    public function get_data_hasil_audit()
    {
        $id = $this->uri->segment(3);
        $query = $this->db->get_where('hasilaudit', array('id_hasilaudit' => $id));

        return $query->result();
    }

    public function get_data_by_id_hasil_audit($id)
    {

        $this->db->select('*');
        $this->db->from('hasilaudit');
        $this->db->where('id_hasilaudit', $id);
        $query = $this->db->get();

        // var_dump($query);
        // var_dump($id);
        return $query->result();
    }


    public function get_data2_hasil_audit($id)
    {
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // $result = $this->db->select('hasilaudit.*')
        //     ->from('hasilaudit')
        //     ->join('user', 'user.id = hasilaudit.id_user')
        //     ->where('user.id_audit', $data['user']['id'])
        //     ->get()
        //     ->row();
        // $id = $result->id_hasilaudit;

        $query = $this->db->get_where('bab2_hasil_audit', array('id_hasilaudit' => $id));
        

        // Check if the query result is not empty
        if ($query !== null) {


            // Check if the query result is not empty
            if ($query->num_rows() > 0) {
                return $query->result();
            }
        }

        return null;
    }

    public function get_data2_by_id_hasil_audit($id)
    {
        $this->db->select('*');
        $this->db->from('bab2_hasil_audit');
        $this->db->where('id_hasilaudit', $id);
        $query = $this->db->get();

        return $query->result();
    }

    public function update_data_hasil_audit($id, $foto1, $foto2, $foto3, $foto4)
    {
        $data = [
            // 'id_user' => $id,
            'foto_pengesahan' => $foto1,
            'dokumentasi' => $foto2,
            'daftarhadir' => $foto3,
            'beritaacara' => $foto4,
            'tahun' => $this->input->post('tahun', true),
            'lembaga' => $this->input->post('lembaga', true),
            'tanggal' => $this->input->post('tanggal', true),
            'NIP' => $this->input->post('NIP', true),
            'periode' => $this->input->post('periode', true),
            'hari_tgl' => $this->input->post('hari_tgl', true),
            'waktu' => $this->input->post('waktu', true),
            'tempat' => $this->input->post('tempat', true),
            'auditor' => $this->input->post('auditor', true),
            'auditee' => $this->input->post('auditee', true),
            'tanggalDE' => $this->input->post('tanggalDE', true),
            'jangka_waktu' => $this->input->post('jangka_waktu', true),

        ];
        $this->db->where('id_hasilaudit', $id);
        $this->db->update('hasilaudit', $data);
    }

    public function update_data2_hasil_audit()
    {

        $data = [
            'id_hasilaudit' => $id,
            'dokumen_acuan' => $this->input->post('dokumen_acuan', true),
            'deskripsi_temuan' => $this->input->post('deskripsi_temuan', true),
            'permintaan_tindakan' => $this->input->post('permintaan_tindakan', true),
        ];

        $this->db->where('id_hasilaudit', $this->input->post('id_hasilaudit'));
        $this->db->update('bab2_hasil_audit', $data);

        // $this->db->where('id_auditor', $id);
        // $this->db->update('auditor', $data);
    }

    public function update_data2_tindak_lanjut()
    {

        $data = [
            'id_tindaklanjut' => $id,
            'jenis_temuan' => $this->input->post('jenis_temuan', true),
            'OB' => $this->input->post('OB', true),
            'KTS' => $this->input->post('KTS', true),
            'kode' => $this->input->post('kode', true),
            'jangka_waktu' => $this->input->post('jangka_waktu', true),
            'pj' => $this->input->post('pj', true),
        ];

        $this->db->where('id_tindaklanjut', $this->input->post('id_tindaklanjut'));
        $this->db->update('bab2', $data);

        // $this->db->where('id_auditor', $id);
        // $this->db->update('auditor', $data);
    }
}
