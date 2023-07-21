<div class="container">

    <div class="card">
        <div class="card-body">
            <form method="post" class="form-horizontal form-label-left" novalidate action="<?= base_url('auditor/isidata2_post/') . $params ?>">

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
                    <label for="exampleFormControlInput1" style="color: black;">Dokumen Aucna</label>
                    <input type="text" class="form-control" id="dokumen_acuan" name="dokumen_acuan" placeholder="Masukkan Dokumen Acuan">
                </div>


                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Deskripsi Temuan</label>
                    <input type="text" class="form-control" id="deskripsi_temuan" name="deskripsi_temuan" placeholder="Masukkan Deskripsi Temuan">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Permintaan Tindakan Koreksi</label>
                    <input type="text" class="form-control" id="permintaan_tindakan" name="permintaan_tindakan" placeholder="Masukkan Permintaan Tindakan Koreksi>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success" name="submit" id="submit">Simpan</button>
                </div>

                <form>
        </div>

    </div>
</div>