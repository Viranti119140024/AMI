<div class="container">

  <div class="card">
    <div class="card-body">
      <form action="<?= base_url("User/auditor") ?>" method="post" class="form-horizontal form-label-left" novalidate>
        <div class="form-group">
          <label for="nama_lembaga" style="color: black;">Program Studi / Jurusan</label>
          <input type="text" class="form-control" id="nama_lembaga" name="nama_lembaga" placeholder="Masukkan Program Studi / Jurusan">
        </div>

        <div class="form-group">
          <label for="nama_auditor" style="color: black;">Auditor</label>
          <input type="text" class="form-control" id="nama_auditor" name="nama_auditor" placeholder="Masukkan Nama Auditor">
        </div>
        <div class="form-group">
          <label for="nip_nrk" style="color: black;">NIP / NRK</label>
          <input type="text" class="form-control" id="nip_nrk" name="nip_nrk" placeholder="Masukkan NIP / NRK">
        </div>

        <div class="d-flex justify-content-end">
          <button type="submit" class="btn btn-success" name="submit" id="submit">Simpan</button>
        </div>

        <form>
    </div>

  </div>
</div>