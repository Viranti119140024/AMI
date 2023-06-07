<div class="container">

<div class="card">
  <div class="card-body">

  <form>
  <div class="form-group">
    <label for="exampleFormControlInput1" style="color: black;">Nama</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1" style="color: black;">Jabatan</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Jabatan">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1" style="color: black;"> Upload Tanda Tangan</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>

  <div class="d-flex justify-content-end">
  <button class="btn btn-success" type="button"><a href="<?= base_url('auditorjurusan/DaftarHadir') ?>" class="text-white">Simpan</a></button> 
  </div>
  </div>
</div>

</div>