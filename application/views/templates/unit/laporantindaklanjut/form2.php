<div class="container">

    <div class="card">
        <div class="card-body">
            <form method="post" class="form-horizontal form-label-left" novalidate action="<?= base_url('unit/isidata2_post/') . $params ?>">

                <!-- <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Lembaga</label>
                    <input type="text" class="form-control" id="prodi" name="prodi" placeholder="Masukkan Periode">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Ruang Lingkup</label>
                    <input type="text" class="form-control" id="ruanglingkup" name="ruanglingkup" placeholder="Masukkan Tahun">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Tanggal</label>
                    <input type="text" class="form-control" id="tanggal" name="tanggal" placeholder="Masukkan Unit">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Dokumen Acuan</label>
                    <input type="text" class="form-control" id="dokumen_acuan" name="dokumen_acuan" placeholder="Masukkan Tanggal">
                </div> -->

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Jenis Temuan</label>
                    <input type="text" class="form-control" id="jenis_temuan" name="jenis_temuan" placeholder="Masukkan Jenis Temuan">
                </div>

                <div class="form-group">
                    <!-- <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Waktu dan Pelaksanaan Audit</b></h5> -->
                    <label for="exampleFormControlInput1" style="color: black;">OB</label>
                    <input type="radio" id="OB" name="OB" value='1'>Ya
                    <input type="radio" id="OB" name="OB" value='0'>Tidak

                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">KTS</label>
                    <input type="radio" id="KTS" name="KTS" value='1'>Ya
                    <input type="radio" id="KTS" name="KTS" value='0'>Tidak
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Kode Temuan</label>
                    <input type="text" class="form-control" id="kode" name="kode" placeholder="Masukkan Kode Temuan">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Jangka Waktu</label>
                    <input type="text" class="form-control" id="jangka_waktu" name="jangka_waktu" placeholder="Masukkan Jangka Waktu">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Penanggung Jawab</label>
                    <input type="text" class="form-control" id="pj" name="pj" placeholder="Masukkan Penanggung Jawab">
                </div>

                <!-- <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Temuan</label>
                    <input type="text" class="form-control" id="temuan" name="temuan" placeholder="Masukkan Nama">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">A2. TINDAK LANJUT TEMUAN</label>
                    <input type="text" class="form-control" id="a2" name="a2" placeholder="Masukkan Nama">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Kesimpulan</label>
                    <input type="text" class="form-control" id="kesimpulan" name="kesimpulan" kesimpulan="Masukkan Nama">
                </div> -->

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