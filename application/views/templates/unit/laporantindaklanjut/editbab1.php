<div class="container">

    <div class="card">
        <div class="card-body">
        <form enctype="multipart/form-data" method="post" class="form-horizontal form-label-left" novalidate action="<?= base_url("unit/edit_form_tindak_lanjut_auditor/") . $tindaklanjut[0]->id_tindaklanjut; ?>">
        
        <div class="form-group">
                    <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Surat Pengesahan</b></h5>
                    <label for="exampleFormControlInput1" style="color: black;">Upload Foto Surat Pengesahan (Format JPG,PNG, JPEG / Max = 5MB)</label>
                    <input type="file" value="<?= $tindaklanjut[0]->foto_pengesahan; ?>" name="foto_pengesahan" id="foto_pengesahan" class="form-control-file">
                </div>
                <div class="form-group">
                    <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Daftar Hadir</b></h5>
                    <label for="exampleFormControlInput1" style="color: black;">Upload Daftar Hadir (Format JPG,PNG, JPEG / Max = 5MB)</label>
                    <input type="file" value="<?= $tindaklanjut[0]->daftarhadir; ?>" name="daftarhadir" id="daftarhadir" class="form-control-file">
                </div>

                <div class="form-group">
                    <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Berita Acara</b></h5>
                    <label for="exampleFormControlInput1" style="color: black;">Upload Berita Acara (Format JPG,PNG, JPEG / Max = 5MB)</label>
                    <input type="file" value="<?= $tindaklanjut[0]->beritaacara; ?>" name="beritaacara" id="beritaacara" class="form-control-file">
                </div>                

                <div class="form-group">
                    <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Kata Pengantar</b></h5>

                    <label for="exampleFormControlInput1" style="color: black;">Periode</label>
                    <input value="<?= $tindaklanjut[0]->periode; ?>" type="text" class="form-control" id="periode" name="periode" placeholder="Masukkan Periode">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Tahun</label>
                    <input value="<?= $tindaklanjut[0]->tahun; ?>" type="text" class="form-control" id="tahun" name="tahun" placeholder="Masukkan Tahun">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Unit</label>
                    <input value="<?= $tindaklanjut[0]->lembaga; ?>" type="text" class="form-control" id="lembaga" name="lembaga" placeholder="Masukkan Unit">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Tanggal</label>
                    <input value="<?= $tindaklanjut[0]->tanggal; ?>" type="text" class="form-control" id="tanggal" name="tanggal" placeholder="Masukkan Tanggal">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">NRK / NIP</label>
                    <input value="<?= $tindaklanjut[0]->nrk; ?>" type="text" class="form-control" id="nrk" name="nrk" placeholder="Masukkan NRK / NIP">
                </div>

                <div class="form-group">
                    <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Waktu dan Pelaksanaan Audit</b></h5>
                    <label for="exampleFormControlInput1" style="color: black;">Hari / Tanggal</label>
                    <input value="<?= $tindaklanjut[0]->hari_tgl; ?>" type="text" class="form-control" id="hari_tgl" name="hari_tgl" placeholder="Masukkan Hari / Tanggal">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Waktu Pelaksanaan</label>
                    <input value="<?= $tindaklanjut[0]->waktu; ?>" type="text" class="form-control" id="waktu" name="waktu" placeholder="Masukkan Waktu Pelaksanaan">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Tempat Kegiatan</label>
                    <input value="<?= $tindaklanjut[0]->tempat; ?>" type="text" class="form-control" id="tempat" name="tempat" placeholder="Masukkan Tempat Kegiatan">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Ketua Auditor</label>
                    <input value="<?= $tindaklanjut[0]->auditor; ?>" type="text" class="form-control" id="auditor" name="auditor" placeholder="Masukkan Nama">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Sekretaris Auditor</label>
                    <input value="<?= $tindaklanjut[0]->auditor2; ?>" type="text" class="form-control" id="auditor" name="auditor" placeholder="Masukkan Nama">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Auditee</label>
                    <input value="<?= $tindaklanjut[0]->auditee; ?>" type="text" class="form-control" id="auditee" name="auditee" placeholder="Masukkan Nama">
                </div>

                <!-- <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Temuan</label>
                    <input value="<?= $tindaklanjut[0]->temuan; ?>" type="text" class="form-control" id="temuan" name="temuan" placeholder="Masukkan Nama">
                </div> -->

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Unit</label>
                    <input value="<?= $tindaklanjut[0]->prodi; ?>" type="text" class="form-control" id="prodi" name="prodi" placeholder="Masukkan Program Studi/Jurusan/Unit">
                </div>

                <!-- <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Ruang Lingkup DE</label>
                    <input value="<?= $tindaklanjut[0]->ruanglingkup; ?>" type="text" class="form-control" id="ruanglingkup" name="ruanglingkup" placeholder="Masukkan Ruang Lingkup DE">
                </div> -->

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Tanggal DE</label>
                    <input value="<?= $tindaklanjut[0]->tanggalDE; ?>" type="text" class="form-control" id="tanggalDE" name="tanggalDE" placeholder="Masukkan Tanggal DE">
                </div>

                <!-- <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Dokumen Acuan</label>
                    <input value="<?= $tindaklanjut[0]->dokumenacuan; ?>" type="text" class="form-control" id="dokumenacuan" name="dokumenacuan" placeholder="Masukkan Dokumen Acuan">
                </div>

                <div class="form-group">
                    <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Bab II TINDAK LANJUT TEMUAN</b></h5>
                    <label for="exampleFormControlInput1" style="color: black;">Kode Temuan</label>
                    <input value="<?= $tindaklanjut[0]->a2; ?>" type="text" class="form-control" id="a2" name="a2" placeholder="Masukkan Deskripsi Kode Temuan">
                </div> -->
<!-- 
                <div class="form-group">
                    <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Bab II KESIMPULAN</b></h5>
                    <label for="exampleFormControlInput1" style="color: black;">Kesimpulan</label>
                    <input value="<?= $tindaklanjut[0]->kesimpulan; ?>" type="text" class="form-control" id="kesimpulan" name="kesimpulan" placeholder="Masukkan Kesimpulan">
                </div> -->

                <div class="form-group">
                    <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Bab II KESIMPULAN</b></h5>
                    <label for="kesimpulan" style="color: black;">Kesimpulan</label>
                    <textarea value="<?= $tindaklanjut[0]->kesimpulan; ?>" class="form-control" id="kesimpulan" name="kesimpulan" placeholder="Masukkan Kesimpulan" style="width: 100%; height: 150px;"></textarea>
                </div>


                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success" name="submit" id="submit">Simpan</button>
                </div>

                <form>
        </div>

    </div>
</div>