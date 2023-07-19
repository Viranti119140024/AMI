<div class="container">

    <div class="card">
        <div class="card-body">
            <form action="<?= base_url("User/edit_auditor/".$user[0]->id) ?>" method="post" class="form-horizontal form-label-left" novalidate>
                <input type="hidden" name="id_audit" value="<?= $user[0]->id; ?>">
                <div class="form-group">
                    <label for="unit" style="color: black;">Program Studi / Jurusan</label>
                    <input value="<?= $user[0]->unit; ?>" type="text" class="form-control" id="unit" name="unit" placeholder="Masukkan Program Studi / Jurusan">
                </div>

                <div class="form-group">
                    <label for="nama_auditor" style="color: black;">Auditor</label>
                    <input value="<?= $user[0]->name; ?>" type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama Auditor">
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success" name="submit" id="submit">Simpan</button>
                </div>

                <form>
        </div>

    </div>
</div>