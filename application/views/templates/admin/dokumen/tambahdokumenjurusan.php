<div class="container">

    <div class="card">
        <div class="card-body">
            <div class="text-dark mt-8">
                <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Tambah Dokumen Kebutuhan Audit Jurusan</b></h5>
            </div>
            <b>
                <hr color="red" />
            </b>
            <form method="post" class="form-horizontal form-label-left" novalidate action="<?= base_url('user/TDJ_post/') . $params ?>">

                <div class="row justify-content-center pt-4" post>

                    <div class="col-2">
                        <label for="nama_dokumen" class="col-form-label" style="color:black;"><b> Nama Dokumen </b></label>
                    </div>
                    <div class="col-3">
                        <input type="text" id="nama_dokumen" name="nama_dokumen" class="form-control" value="<?= set_value('nama_dokumen') ?>">
                        <?= form_error('nama_dokumen', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class=" row justify-content-center pt-5 pb-5">
                        <div class="col-5">
                            <button class="btn btn-danger" type="button" name="batal" id="batal">Batal</button></a>
                        </div>
                        <div class="col-3">
                            <button type="submit" class="btn btn-success" name="submit" id="submit">Simpan</button>
                        </div>
                    </div>

                </div>
                <form>
        </div>
    </div>
</div>