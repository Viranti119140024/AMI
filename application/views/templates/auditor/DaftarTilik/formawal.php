<div class="container">

    <div class="card">
        <div class="card-body">
            <form enctype="multipart/form-data" method="post" class="form-horizontal form-label-left" novalidate action="<?= base_url('auditor/isidataawal/') ?>">
                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Unit</label>
                    <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Masukkan Unit">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Ruang Lingkup</label>
                    <input type="text" class="form-control" id="ruang_lingkup" name="ruang_lingkup" placeholder="Masukkan Ruang Lingkup">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Tangal DE</label>
                    <input type="text" class="form-control" id="tanggalDE" name="tanggalDE" placeholder="Masukkan Tanggal DE">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Dokumen Acuan</label>
                    <input type="text" class="form-control" id="dokumen_acuan" name="dokumen_acuan" placeholder="Masukkan Dokumen Acuan">
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success" name="submit" id="submit">Simpan</button>
                </div>

                <form>
        </div>

    </div>
</div>