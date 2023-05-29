<div class="container">

<div class="card">
  <div class="card-body">
    <div class="form-group">
    <label for="exampleFormControlSelect1" style="color: black;">Program Studi / Jurusan</label>
    <select class ="form-control" id="exampleFormControlSelect1">
      <option style="color: black;">Teknik Informatika</option>
      <option>Fisika</option>
      <option>Kimia</option>
      <option>Matematika</option>
      <option>Teknik Mesin</option>
      <option>Teknik Geologi</option>
      <option>Perencanaan Wilayah dan Kota</option>
      <option>Teknologi Produksi dan Industri</option>
    </select>
  </div>

  <form>
  <div class="form-group">
    <label for="exampleFormControlInput1" style="color: black;">Auditor</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1" style="color: black;">NIP / NRK</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama">
  </div>

  <div class="d-flex justify-content-end">
  <button class="btn btn-success" type="button"><a href="<?= base_url('user/auditor1') ?>" class="text-white">Simpan</a></button> 
  </div>
  </div>
</div>

</div>