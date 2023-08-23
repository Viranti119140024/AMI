<div class="container">

    <div class="card">
        <div class="card-body">
            <form method="post" class="form-horizontal form-label-left" action="<?= base_url('auditorunit/edit_data2_post/') . $bab2_hasil_audit[0]->id_bab2 ?>">

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Dokumen Acuan</label>
                    <input value="<?= $bab2_hasil_audit[0]->dokumen_acuan; ?>" type="text" class="form-control" id="dokumen_acuan" name="dokumen_acuan" placeholder="Masukkan Dokumen Acuan">
                </div>


                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Deskripsi Temuan</label>
                    <input value="<?= $bab2_hasil_audit[0]->deskripsi_temuan; ?>" type="text" class="form-control" id="deskripsi_temuan" name="deskripsi_temuan" placeholder="Masukkan Deskripsi Temuan">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Open</label>
                    <input type="checkbox" name="open[<?= $bab2_hasil_audit[0]->id_bab2 ?>]" value="1" <?= ($bab2_hasil_audit[0]->open == 1) ? 'checked' : '' ?>>Ya
                    <input type="checkbox" name="open[<?= $bab2_hasil_audit[0]->id_bab2 ?>]" value="0" <?= ($bab2_hasil_audit[0]->open == 0) ? 'checked' : '' ?>>Tidak
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Close</label>
                    <input type="checkbox" name="close[<?= $bab2_hasil_audit[0]->id_bab2 ?>]" value="1" <?= ($bab2_hasil_audit[0]->close == 1) ? 'checked' : '' ?>>Ya
                    <input type="checkbox" name="close[<?= $bab2_hasil_audit[0]->id_bab2 ?>]" value="0" <?= ($bab2_hasil_audit[0]->close == 0) ? 'checked' : '' ?>>Tidak
                </div>


                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Permintaan Tindakan Koreksi</label>
                    <input value="<?= $bab2_hasil_audit[0]->permintaan_tindakan; ?>" type="text" class="form-control" id="permintaan_tindakan" name="permintaan_tindakan" placeholder="Masukkan Permintaan Tindakan Koreksi">
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success" name="submit" id="submit">Simpan</button>
                </div>

            </form>
        </div>

    </div>
</div>