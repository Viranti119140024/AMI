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


        $this->db->select('*');
        $this->db->from('user');

        $this->db->where('id_audit !=', 0);
        $query = $this->db->get();

        // foreach ($query as $key => $value) {
        //     if ($value['id_audit'] != 1) {
        //         unset($query[$key]);
        //     }
        // }

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
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id_audit', 0);
        $this->db->or_where('id_audit ', 1);
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

    public function tambah_tindaklanjut($id)
    {
        $data = [
            'id_user' => $id,
            'nama_penyusunan' => $this->input->post('nama_penyusunan', true),
            'pemeriksa1' => $this->input->post('pemeriksa1', true),
            'pemeriksa2' => $this->input->post('pemeriksa2', true),
            'penetapan1' => $this->input->post('penetapan1', true),
            'penetapan2' => $this->input->post('penetapan2', true),
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

        $this->db->insert('tindaklanjut', $data,);
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

        var_dump($data);

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
            'nama_penyusunan' => $this->input->post('nama_penyusunan', true),
            'pemeriksa1' => $this->input->post('pemeriksa1', true),
            'pemeriksa2' => $this->input->post('pemeriksa2', true),
            'penetapan1' => $this->input->post('penetapan1', true),
            'penetapan2' => $this->input->post('penetapan2', true),
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
            'a2' => $this->input->post('a2', true),
            'kesimpulan' => $this->input->post('kesimpulan', true),
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

    public function tambah_hasil_desk()
    {

        $data = [
            'id_dokumen_acuan' => $this->input->post('id_dokumen_acuan', true),
            'nama_dokumen_terkait' => $this->input->post('nama_dokumen_terkait', true),
        ];
        // var_dump($data);

        $this->db->insert('admin_hasil_desk', $data);
    }

    public function tambah_daftar_tilik()
    {

        $data = [
            'id_dokumen_acuan' => $this->input->post('id_dokumen_acuan', true),
            'pertanyaan' => $this->input->post('pertanyaan', true),
        ];
        // var_dump($data);

        $this->db->insert('admin_daftar_tilik', $data);
    }

    public function tambah_link_drive($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('user', $data);

        // var_dump("terimadata", $data);
        // $data = [
        //     'id_user' => $id,
        //     'link_drive' => $this->input->post('link_drive', true),
        // ];
        // // var_dump($data);

        // $this->db->insert('link_drive', $data);
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

    function tampil_hasil_desk_auditor($id)
    {
        $this->db->select('*');
        $this->db->from('admin_hasil_desk');
        $this->db->where('id_dokumen_acuan', $id);
        $query = $this->db->get();

        return $query->result();
    }

    function tampil_daftar_tilik_auditor($id)
    {
        $this->db->select('*');
        $this->db->from('admin_daftar_tilik');
        $this->db->where('id_dokumen_acuan', $id);
        $query = $this->db->get();

        return $query->result();
    }

    // PERTANYAAN TAMBAHAN
    function add_hasil_desk_auditor()
    {
        $data = [
            'id_dokumen_acuan' => $this->input->post('id_dokumen_acuan', true),
            'id_prodi' => $this->input->post('id_prodi', true),
            'tambahan_hasil_desk' => $this->input->post('tambahan_hasil_desk', true),
        ];
        // var_dump($data);

        $this->db->insert('auditor_hasil_desk', $data);
    }

    function tampil_tambahan_hasil_desk_auditor($id)
    {
        $this->db->select('*');
        $this->db->from('auditor_hasil_desk');
        $this->db->where('id_dokumen_acuan', $id);
        $query = $this->db->get();

        return $query->result();
    }

    function add_nilai_hasil_desk_utama()
    {
        $id_dokumen_acuan = $this->input->post('id_dokumen_acuan', true);
        $id_hasil_desk =  $this->input->post('id_hasil_desk', true);
        $m = $this->input->post('m', true);
        $mp = $this->input->post('mp', true);
        $mb = $this->input->post('mb', true);
        $my = $this->input->post('my', true);
        $ob = $this->input->post('ob', true);
        $kts = $this->input->post('kts', true);
        $open = $this->input->post('open', true);
        $close = $this->input->post('close', true);
        $catatan = $this->input->post('catatan', true);
        $penanggungjawab = $this->input->post('penanggungjawab', true);

        foreach ($id_hasil_desk as $index => $id) {
            $data = array(
                'id_dokumen_acuan' => $id_dokumen_acuan,
                'id_hasil_desk' => $id,
                'm' => $m,
                'mp' => $mp,
                'mb' => $mb,
                'my' => $my,
                'ob' => $ob,
                'kts' => $kts,
                'open' => $open,
                'close' => $close,
                'catatan' => $catatan[$index],
                'penanggungjawab' => $penanggungjawab[$index]
            );

            var_dump($data);
            $this->db->insert('nilai_ami', $data);
        }
    }
}
