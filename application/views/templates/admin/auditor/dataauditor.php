<div class="container">

  <div class="text-dark mt-8"> <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Data Auditor</b></h5> </div> 


<b><hr color="red" /></b>

<a class="btn btn-success" type="button" href="<?= base_url('user/auditor') ?>" class="text-white">+ Tambah</a>

<div class="card mt-4">
  <div class="card-body">
  <table class="table table-striped mt-2">
  <thead>
    <tr>
      <th scope style="color: black;"="col">No</th>
      <th scope style="color: black;"="col">Program Studi / Jurusan</th>
      <th scope style="color: black;"="col">Auditor</th>
      <th scope style="color: black;"="col">NIP / NRK</th>
      <th scope style="color: black;"="col">Aksi</th>

    </tr>
  </thead>
  <tbody>

    <?php
    foreach ($auditor as $key => $value) :
      $number = $key + 1;
    ?>
      <tr>
        <th scope style="color: black;"="row"><?= $number; ?></th>
        <td style="color: black;"><?= $value->nama_lembaga; ?></td>
        <td style="color: black;"><?= $value->nama_auditor; ?></td>
        <td style="color: black;"><?= $value->nip_nrk; ?></td>
        <td>
    <!-- <a href="<?= base_url('user/dokumen1/') . $value->id_auditor ?> "><button type="lihat" class="sbtn btn-primary"><i class="fa fa-eye"></i></button></a>
         <a href="<?= base_url('user/downloaddokumen') ?>"><button type="download" class="sbtn btn-success"><i class="fas fa-download"></i></button></a> -->
         <a href="<?= base_url('user/deleteauditor/') . $value->id_auditor  ?>"><button type="delete" class="sbtn btn" style="background-color:	#DCDCDC ;"><i class="fa fa-trash"></i></button></a>
    </div>
    </td>
    </tr>
  <?php endforeach; ?>
    <!-- <tr>
      <th scope style="color: black;"="row">1</th>
      <td style="color: black;">Teknik Infromatika</td>
      <td style="color: black;">Eko Dwi Nugroho, S.Kom., M.Cs.</td>
      <td style="color: black;">19910209 2020 1 279</td>
      <td><button type="edit" class="sbtn btn-primary"><i class="fa fa-edit"></i></button> <button type="delete" class="sbtn btn-danger" onclick="return confirm('Yakin?')"><i class="fas fa-trash"></i></button</div></td>
    </tr>
    <tr>
      <th scope style="color: black;"="row">2</th>
      <td style="color: black;">Teknik Biosistem</td>
      <td style="color: black;">Zunanik Mufidah, S.TP., M.Si.</td>
      <td style="color: black;">-</td>
      <td><button type="edit" class="sbtn btn-primary"><i class="fa fa-edit"></i></button> <button type="delete" class="sbtn btn-danger" onclick="return confirm('Yakin?')"><i class="fas fa-trash"></i></button</div></td>
    </tr>
    <tr>
      <th scope style="color: black;"="row">3</th>
      <td style="color: black;">Fisika</td>
      <td style="color: black;">Dr. Melany Febrina, M.Si.</td>
      <td style="color: black;">1990020920203128</td>
      <td><button type="edit" class="sbtn btn-primary"><i class="fa fa-edit"></i></button> <button type="delete" class="sbtn btn-danger" onclick="return confirm('Yakin?')"><i class="fas fa-trash"></i></button</div></td>
    </tr> -->
  </tbody>
</table>
  </div>
</div>



  </div>

