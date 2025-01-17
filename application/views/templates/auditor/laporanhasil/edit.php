<div class="container">
    <div class="card">
        <div class="card-body">
            <form enctype="multipart/form-data" method="post" class="form-horizontal form-label-left" novalidate action="<?= base_url("auditor/edit_form_hasil_auditor/") . $hasilaudit[0]->id_hasilaudit; ?>">
                <!-- <form action="<?= base_url("auditor/edit_form_hasil_auditor/") . $hasilaudit[0]->id_hasilaudit; ?>" method="post" class="form-horizontal form-label-left" novalidate> -->

                <div class="form-group">
                    <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Cover</b></h5>
                    <label for="exampleFormControlInput1" style="color: black;">Upload Cover (Format JPG,PNG, JPEG / Max = 5MB)</label>
                    <input type="file" value="<?= $hasilaudit[0]->cover; ?>"  name="cover" id="cover" class="form-control-file">
                </div>

                <div class="form-group">
                    <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Surat Pengesahan</b></h5>
                    <label for="exampleFormControlInput1" style="color: black;">Upload Foto Surat Pengesahan (Format JPG,PNG, JPEG / Max = 5MB)</label>
                    <input type="file" value="<?= $hasilaudit[0]->foto_pengesahan; ?>"  name="foto_pengesahan" id="foto_pengesahan" class="form-control-file">
                </div>
                <!-- <img src="<?php echo base_url() . '/assets/dokumen' . $hasilaudit[0]->foto_pengesahan; ?>" width="100" alt="Gambar"> -->
                <!-- </div> -->
                <div class="form-group">
                    <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Daftar Hadir</b></h5>
                    <label for="exampleFormControlInput1" style="color: black;">Upload Daftar Hadir (Format JPG,PNG, JPEG / Max = 5MB)</label>
                    <input type="file" value="<?= $hasilaudit[0]->daftarhadir; ?>" name="daftarhadir" id="daftarhadir" class="form-control-file">
                </div>

                <div class="form-group">
                    <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Berita Acara</b></h5>
                    <label for="exampleFormControlInput1" style="color: black;">Upload Berita Acara (Format JPG,PNG, JPEG / Max = 5MB)</label>
                    <input type="file" value="<?= $hasilaudit[0]->beritaacara; ?>" name="beritaacara" id="beritaacara" class="form-control-file">
                </div>

                <div class="form-group">
                    <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Kata Pengantar</b></h5>

                    <label for="exampleFormControlInput1" style="color: black;">Tahun</label>
                    <input type="text" value="<?= $hasilaudit[0]->tahun; ?>" class="form-control" id="tahun" name="tahun" placeholder="Masukkan Tahun">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Lembaga</label>
                    <input type="text" value="<?= $hasilaudit[0]->lembaga; ?>" class="form-control" id="lembaga" name="lembaga" placeholder="Contoh : Teknik Informatika">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Tanggal</label>
                    <input type="date" value="<?= $hasilaudit[0]->tanggal; ?>" class="form-control" id="tanggal" name="tanggal" placeholder="Masukkan Tanggal">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Nama Ketua Audit Mutu Internal</label>
                    <input type="text" value="<?= $hasilaudit[0]->ketua; ?>" class="form-control" id="ketua" name="ketua" placeholder="Masukkan Nama dan Gelar">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">NRK / NIP</label>
                    <input type="text" value="<?= $hasilaudit[0]->NIP; ?>" class="form-control" id="NIP" name="NIP" placeholder="Masukkan NRK / NIP">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Periode</label>
                    <input type="text" value="<?= $hasilaudit[0]->periode; ?>" class="form-control" id="periode" name="periode" placeholder="Masukkan Periode">
                </div>

                <div class="form-group">
                    <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Waktu dan Pelaksanaan Audit</b></h5>
                    <label for="exampleFormControlInput1" style="color: black;">Hari / Tanggal</label>
                    <input type="text" value="<?= $hasilaudit[0]->hari_tgl; ?>" class="form-control" id="hari_tgl" name="hari_tgl" placeholder="Masukkan Hari / Tanggal">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Waktu Pelaksanaan</label>
                    <input type="text" value="<?= $hasilaudit[0]->waktu; ?>" class="form-control" id="waktu" name="waktu" placeholder="Masukkan Waktu Pelaksanaan">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Tempat Kegiatan</label>
                    <input type="text" value="<?= $hasilaudit[0]->tempat; ?>" class="form-control" id="tempat" name="tempat" placeholder="Masukkan Tempat Kegiatan">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Auditor</label>
                    <input type="text" value="<?= $hasilaudit[0]->auditor; ?>" class="form-control" id="auditor" name="auditor" placeholder="Masukkan Nama">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Auditor 2</label>
                    <input type="text" value="<?= $hasilaudit[0]->auditor2; ?>" class="form-control" id="auditor2" name="auditor2" placeholder="Masukkan Nama">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Auditee</label>
                    <input type="text" value="<?= $hasilaudit[0]->auditee; ?>" class="form-control" id="auditee" name="auditee" placeholder="Masukkan Nama">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Upload Dokumentasi</label>
                    <input type="file" value="<?= $hasilaudit[0]->dokumentasi; ?>" name="dokumentasi" id="dokumentasi" class="form-control-file" id="exampleFormControlFile1">
                </div>

                <div class="form-group">
                    <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Bab II Daftar Temuan AMI</b></h5>
                    <label for="exampleFormControlInput1" style="color: black;">Tanggal DE</label>
                    <input type="date" value="<?= $hasilaudit[0]->tanggalDE; ?>" class="form-control" id="tanggalDE" name="tanggalDE" placeholder="Masukkan Tanggal DE">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Jangka Waktu Perbaikan</label>
                    <input type="text" value="<?= $hasilaudit[0]->jangka_waktu; ?>" class="form-control" id="jangka_waktu" name="jangka_waktu" placeholder="Masukkan Jangka Waktu">
                </div>


                <!-- <div class="form-group">
                    <label for="exampleFormControlFile1"> Dokumentasi</label>
                    <input type="file" name="file_dokumen" id="file_dokumen" class="form-control-file" id="exampleFormControlFile1">
                </div> -->

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success" name="submit" id="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>