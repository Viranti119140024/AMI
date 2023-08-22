<div class="container">

    <div class="card">
        <div class="card-body">
            <form enctype="multipart/form-data" method="post" class="form-horizontal form-label-left" novalidate action="<?= base_url('jurusan_controller/isidata/') ?>">

                <div class="form-group">
                    <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Surat Pengesahan</b></h5>
                    <label for="exampleFormControlInput1" style="color: black;">Upload Foto Surat Pengesahan (Format JPG,PNG, JPEG / Max = 5MB)</label>
                    <input type="file" name="foto_pengesahan" id="foto_pengesahan" class="form-control-file" id="exampleFormControlFile1">
                </div>

                <div class="form-group">
                    <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Daftar Hadir</b></h5>
                    <label for="exampleFormControlInput1" style="color: black;">Upload Daftar Hadir (Format JPG,PNG, JPEG / Max = 5MB)</label>
                    <input type="file" name="daftarhadir" id="daftarhadir" class="form-control-file" id="exampleFormControlFile1">
                </div>

                <div class="form-group">
                    <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Berita Acara</b></h5>
                    <label for="exampleFormControlInput1" style="color: black;">Upload Berita Acara (Format JPG,PNG, JPEG / Max = 5MB)</label>
                    <input type="file" name="beritaacara" id="beritaacara" class="form-control-file" id="exampleFormControlFile1">
                </div>

                <div class="form-group">
                    <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Kata Pengantar</b></h5>

                    <label for="exampleFormControlInput1" style="color: black;">Periode</label>
                    <input type="text" class="form-control" id="periode" name="periode" placeholder="Masukkan Periode">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Tahun</label>
                    <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Contoh : 2023">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Lembaga</label>
                    <input type="text" class="form-control" id="lembaga" name="lembaga" placeholder="Contoh : Teknik Informatika">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Masukkan Tanggal">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">NRK / NIP</label>
                    <input type="text" class="form-control" id="nrk" name="nrk" placeholder="Masukkan NRK / NIP">
                </div>

                <div class="form-group">
                    <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Waktu dan Pelaksanaan Audit</b></h5>
                    <label for="exampleFormControlInput1" style="color: black;">Hari / Tanggal</label>
                    <input type="text" class="form-control" id="hari_tgl" name="hari_tgl" placeholder="Contoh : Senin, 18 Juni 2023">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Waktu Pelaksanaan</label>
                    <input type="text" class="form-control" id="waktu" name="waktu" placeholder="Contoh : 08.00 sd 11.00">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Tempat Kegiatan</label>
                    <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Masukkan Tempat Kegiatan">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Ketua Auditor</label>
                    <input type="text" class="form-control" id="auditor" name="auditor" placeholder="Masukkan Nama dan Gelar">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Sekretaris Auditor</label>
                    <input type="text" class="form-control" id="auditor2" name="auditor2" placeholder="Masukkan Nama dan Gelar">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Auditee</label>
                    <input type="text" class="form-control" id="auditee" name="auditee" placeholder="Contoh : Teknik Informatika">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Upload Dokumentasi</label>
                    <input type="file" name="dokumentasi" id="dokumentasi" class="form-control-file" id="exampleFormControlFile1">
                </div>

                <!-- <div class="form-group">
                    <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Bab II Permintaan Tindakan Koreksi</b></h5>
                    <label for="exampleFormControlInput1" style="color: black;">Temuan</label>
                    <input type="text" class="form-control" id="temuan" name="temuan" placeholder="Masukkan Nama"> -->

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Jurusan</label>
                    <input type="text" class="form-control" id="prodi" name="prodi" placeholder="Masukkan Jurusan">
                </div>

                <!-- <div class="form-group">
                        <label for="exampleFormControlInput1" style="color: black;">Ruang Lingkup DE</label>
                        <input type="text" class="form-control" id="ruanglingkup" name="ruanglingkup" placeholder="Masukkan Ruang Lingkup DE">
                    </div> -->

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Tanggal DE</label>
                    <input type="date" class="form-control" id="tanggalDE" name="tanggalDE" placeholder="Masukkan Tanggal DE">
                </div>

                <!-- <div class="form-group">
                        <label for="exampleFormControlInput1" style="color: black;">Dokumen Acuan</label>
                        <input type="text" class="form-control" id="dokumenacuan" name="dokumenacuan" placeholder="Masukkan Dokumen Acuan">
                    </div> -->

                <!-- <div class="form-group">
                        <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>TINDAK LANJUT TEMUAN</b></h5>
                        <label for="exampleFormControlInput1" style="color: black;">Deskripsi Tindak Lanjut Temuan</label>
                        <input type="textarea" class="form-control" id="a2" name="a2" placeholder="Masukkan Deskripsi Tindak Lanjut Temuan">
                    </div> -->

                <div class="form-group">
                    <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Bab II KESIMPULAN</b></h5>
                    <label for="kesimpulan" style="color: black;">Kesimpulan</label>
                    <textarea class="form-control" id="kesimpulan" name="kesimpulan" placeholder="Masukkan Kesimpulan" style="width: 100%; height: 150px;"></textarea>
                </div>




                <!-- <div class="form-group">
                    <label for="exampleFormControlFile1"> Dokumentasi</label>
                    <input type="file" name="file_dokumen" id="file_dokumen" class="form-control-file" id="exampleFormControlFile1">
                </div> -->

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success" name="submit" id="submit">Simpan</button>
                </div>

                <form>
        </div>

    </div>
</div>