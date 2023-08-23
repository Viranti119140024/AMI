<div class="container">

    <div class="card">
        <div class="card-body">
            <form method="post" class="form-horizontal form-label-left" novalidate action="<?= base_url('auditor/isidata2_post/') . $params ?>">


            <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Dokumen Acuan</label>
                    <input type="text" class="form-control" id="dokumen_acuan" name="dokumen_acuan" placeholder="Masukkan Dokumen Acuan">
                </div>


                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Deskripsi Temuan</label>
                    <input type="text" class="form-control" id="deskripsi_temuan" name="deskripsi_temuan" placeholder="Masukkan Deskripsi Temuan">
                </div>

                <div class="form-group">
                    <!-- <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Waktu dan Pelaksanaan Audit</b></h5> -->
                    <label for="exampleFormControlInput1" style="color: black;">Open</label>
                    <input type="radio" id="open" name="open" value='1'>Ya
                    <input type="radio" id="open" name="open" value='0'>Tidak

                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Close</label>
                    <input type="radio" id="close" name="close" value='1'>Ya
                    <input type="radio" id="close" name="close" value='0'>Tidak
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Permintaan Tindakan Koreksi</label>
                    <textarea class="form-control" id="permintaan_tindakan" name="permintaan_tindakan" placeholder="Masukkan Permintaan Tindakan Koreksi" style="width: 100%; height: 150px;"></textarea>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success" name="submit" id="submit">Simpan</button>
                </div>

                <form>
        </div>

    </div>
</div>