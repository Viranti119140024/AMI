<div class="container">

    <div class="card">
        <div class="card-body">
            <form method="post" class="form-horizontal form-label-left" novalidate action="<?= base_url('prodi/isidata/') ?>">
                <div class="form-group">
                    <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Penanggung Jawab</b></h5>
                    <label for="exampleFormControlInput1" style="color: black;">Proses Penyusunan</label>
                    <input type="text" class="form-control" id="nama_penyusunan" name="nama_penyusunan" placeholder="Masukkan Nama">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Proses Pemeriksaan 1</label>
                    <input type="text" class="form-control" id="pemeriksa1" name="pemeriksa1" placeholder="Masukkan Nama">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Proses Pemeriksaan 2</label>
                    <input type="text" class="form-control" id="pemeriksa2" name="pemeriksa2" placeholder="Masukkan Nama">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Proses Penetapan 1</label>
                    <input type="text" class="form-control" id="penetapan1" name="penetapan1" placeholder="Masukkan Nama">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Proses Penetapan 2</label>
                    <input type="text" class="form-control" id="penetapan2" name="penetapan2" placeholder="Masukkan Nama">
                </div>

                <div class="form-group">
                    <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Kata Pengantar</b></h5>

                    <label for="exampleFormControlInput1" style="color: black;">Periode</label>
                    <input type="text" class="form-control" id="periode" name="periode" placeholder="Masukkan Periode">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Tahun</label>
                    <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Masukkan Tahun">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Lembaga</label>
                    <input type="text" class="form-control" id="lembaga" name="lembaga" placeholder="Masukkan Unit">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Tanggal</label>
                    <input type="text" class="form-control" id="tanggal" name="tanggal" placeholder="Masukkan Tanggal">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">NRK / NIP</label>
                    <input type="text" class="form-control" id="nrk" name="nrk" placeholder="Masukkan NRK / NIP">
                </div>

                <div class="form-group">
                    <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Waktu dan Pelaksanaan Audit</b></h5>
                    <label for="exampleFormControlInput1" style="color: black;">Hari / Tanggal</label>
                    <input type="text" class="form-control" id="hari_tgl" name="hari_tgl" placeholder="Masukkan Hari / Tanggal">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Waktu Pelaksanaan</label>
                    <input type="text" class="form-control" id="waktu" name="waktu" placeholder="Masukkan Waktu Pelaksanaan">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Tempat Kegiatan</label>
                    <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Masukkan Tempat Kegiatan">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Auditor</label>
                    <input type="text" class="form-control" id="auditor" name="auditor" placeholder="Masukkan Nama">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Auditee</label>
                    <input type="text" class="form-control" id="auditee" name="auditee" placeholder="Masukkan Nama">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Temuan</label>
                    <input type="text" class="form-control" id="temuan" name="temuan" placeholder="Masukkan Nama">
                </div>

                <div class="form-group">
                    <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Bab II Permintaan Tindakan Koreksi</b></h5>
                    <label for="exampleFormControlInput1" style="color: black;">Program Studi/Jurusan/Unit</label>
                    <input type="text" class="form-control" id="prodi" name="prodi" placeholder="Masukkan Program Studi/Jurusan/Unit">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Ruang Lingkup DE</label>
                    <input type="text" class="form-control" id="ruanglingkup" name="ruanglingkup" placeholder="Masukkan Ruang Lingkup DE">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Tanggal DE</label>
                    <input type="text" class="form-control" id="tanggalDE" name="tanggalDE" placeholder="Masukkan Tanggal DE">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Dokumen Acuan</label>
                    <input type="text" class="form-control" id="dokumenacuan" name="dokumenacuan" placeholder="Masukkan Dokumen Acuan">
                </div>

                <div class="form-group">
                    <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Bab II TINDAK LANJUT TEMUAN</b></h5>
                    <label for="exampleFormControlInput1" style="color: black;">Kode Temuan</label>
                    <input type="text" class="form-control" id="a2" name="a2" placeholder="Masukkan Deskripsi Kode Temuan">
                </div>

                <div class="form-group">
                    <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Bab II KESIMPULAN</b></h5>
                    <label for="exampleFormControlInput1" style="color: black;">Kesimpulan</label>
                    <input type="text" class="form-control" id="kesimpulan" name="kesimpulan" placeholder="Masukkan Kesimpulan">
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