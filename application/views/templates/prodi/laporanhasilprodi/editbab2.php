<div class="container">

    <div class="card">
        <div class="card-body">
            <!-- <form action="<?= base_url("prodi/edit_data2/" . $bab2[0]->id_bab2) ?>" method="post" class="form-horizontal form-label-left" novalidate>
                <input type="hidden" name="id_tindaklanjut" value="<?= $bab2[0]->id_tindaklanjut; ?>"> -->
            <form enctype="multipart/form-data" method="post" class="form-horizontal form-label-left" novalidate action="<?= base_url('prodi/edit_data2_post/') . $bab2[0]->id_bab2 ?>">

        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1" style="color: black;">A2. TINDAK LANJUT TEMUAN</label>
            <input value="<?= $bab2[0]->a2; ?>" type="text" class="form-control" id="a2" name="a2" placeholder="Masukkan Nama">
        </div>


        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-success" name="submit" id="submit">Simpan</button>
        </div>

        <form>
    </div>

</div>