<div class="container">

    <div class="card">
        <div class="card-body">
        <form enctype="multipart/form-data" method="post" class="form-horizontal form-label-left" novalidate action="<?= base_url('auditor/isidata2/') . $params ?>">
    
                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Dokumen Acuan</label>
                    <input value="<?= $bab2_hasil_audit[0]->dokumen_acuan; ?>" type="text" class="form-control" id="dokumen_acuan" name="dokumen_acuan" placeholder="Masukkan Dokumen Acuan">
                </div>


                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Deskripsi Temuan</label>
                    <input value="<?= $bab2_hasil_audit[0]->deskripsi_temuan; ?>" type="text" class="form-control" id="deskripsi_temuan" name="deskripsi_temuan" placeholder="Masukkan Deskripsi Temuan">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Permintaan Tindakan Koreksi</label>
                    <input value="<?= $bab2_hasil_audit[0]->permintaan_tindakan; ?>" type="text" class="form-control" id="permintaan_tindakan" name="permintaan_tindakan" placeholder="Masukkan Permintaan Tindakan Koreksi">
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success" name="submit" id="submit">Simpan</button>
                </div>

                <form>
        </div>

    </div>
</div>