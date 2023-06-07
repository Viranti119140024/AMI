<div class="container">

  <div class="text-dark mt-8"> <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Daftar Hadir Audit Mutu Internal</b></h5> </div> 


<b><hr color="red" /></b>

<button class="btn btn-success" type="button"><a href="<?= base_url('auditorjurusan/TambahDaftarHadir') ?>" class="text-white">+ Tambah</button>

<div class="card mt-4">
  <div class="card-body">
  <table class="table table-striped mt-2">
  <thead>
    <tr>
      <th scope style="color: black;"="col">No</th>
      <th scope style="color: black;"="col">Nama</th>
      <th scope style="color: black;"="col">Jabatan</th>
      <th scope style="color: black;"="col">Tanda Tangan</th>
      <th scope style="color: black;"="col">Aksi</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope style="color: black;"="row">1</th>
      <td style="color: black;">Eko Dwi Nugroho</td>
      <td style="color: black;">Auditor Prodi</td>
      <td style="color: black;"></td>
      <td><button type="edit" class="sbtn btn-primary"><i class="fa fa-edit"></i></button> <button type="delete" class="sbtn btn-danger" onclick="return confirm('Yakin?')"><i class="fas fa-trash"></i></button</div></td>
    </tr>
  </tbody>
</table>

</div>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end mt-2">
                <li class="page-item disabled">
                    <a class="page-link">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="<?= base_url('auditorjurusan/DaftarTilik') ?>">Next</a>
                </li>
            </ul>
        </nav>
    </div>
  </div>
</div>




  </div>

