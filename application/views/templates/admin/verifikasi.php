<div class="container">

    <div class="card">
        <div class="card-body">
            <form enctype="multipart/form-data" method="post" class="form-horizontal form-label-left" novalidate action="<?= base_url('User/verifikasi') ?>">

                <div class="form-group">
                    <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Verifikasi</b></h5>
                    <label for="exampleFormControlInput1" style="color: black;">Upload Tanda Tangan</label>
                    <input type="file" name="verifikasi" id="verifikasi" class="form-control-file" id="exampleFormControlFile1">
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success" name="submit" id="submit">Simpan</button>
                </div>

            </form>
        </div>
    </div>
</div>