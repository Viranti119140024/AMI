<div class="container">


    <form enctype="multipart/form-data" method="post" class="form-horizontal form-label-left" novalidate action="<?= base_url('prodi/upload_dokumen/') . $id ?>">
        <div class="form-group">
            <label for="exampleFormControlFile1">Upload Dokumen</label>
            <input type="file" name="file_dokumen" id="file_dokumen" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <div class=" row justify-content-center pt-5 pb-5">
            <div class="col-3">
                <button type="submit" class="btn btn-success" name="submit" id="submit">Simpan</button>
            </div>
        </div>
    </form>

    <!-- <div class="card">
        <div class="card-body">
            <div class="text-dark mt-8">
                <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Tambah Dokumen Kebutuhan Audit Program Studi</b></h5>
            </div>
            <b>
                <hr color="red" />
            </b>
            <form method="post" class="form-horizontal form-label-left" novalidate action="<?= base_url('prodi/upload_dokumen/') . $id ?>">

                <div class="row justify-content-center pt-4" post>
                    <div class="col-2">
                        <label for="nama_jurusan" class="col-form-label" style="color:black;"><b> Jurusan </b></label>
                    </div>
                    <div class="col-3">
                        <input type="text" id="nama_jurusan" name="nama_jurusan" class="form-control" value="<?= set_value('nama_jurusan') ?>">
                        <?= form_error('nama_jurusan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class=" row justify-content-center pt-5 pb-5">
                        <div class="col-5">
                            <a href="<?php echo base_url('user/index'); ?>"><button class="btn btn-danger" type="button" name="batal" id="batal">Batal</button></a>
                        </div>
                        <div class="col-3">
                            <button type="submit" class="btn btn-success" name="submit" id="submit">Simpan</button>
                        </div>
                    </div>

                </div>
                <form>
        </div>
    </div> -->
</div>