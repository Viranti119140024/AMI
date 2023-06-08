<div class="container">

  <div class="text-dark mt-8">
    <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Dokumen Kebutuhan Audit Program Studi</b></h5>
  </div>


  <b>
    <hr color="red" />
  </b>

  <a class="btn btn-success" type="button" class="text-white" href="<?= base_url('user/tambahprodi') ?>">+ Tambah</a>

  <div class="card mt-4">
    <div class="card-body">
      <table class="table table-striped mt-2">
        <thead>
          <tr>
            <th scope style="color: black;"="col">No</th>
            <th scope style="color: black;"="col">Program Studi</th>
            <th scope style="color: black;"="col">Aksi</th>

          </tr>
        </thead>
        <tbody>

          <?php
          foreach ($prodi as $key => $value) :
            $number = $key + 1;
          ?>
            <tr>
              <th scope style="color: black;"="row"><?= $number; ?></th>
              <td style="color: black;"><?= $value->nama_prodi; ?></td>
              <td>
                <a href="<?= base_url('user/dokumen1/') . $value->id_prodi ?> "><button type="lihat" class="sbtn btn" style="background-color: 	#DCDCDC;"><i class="fa fa-eye" style="color: #696969;"></i></button></a>
                <a href="<?= base_url('user/downloaddokumen') ?>"><button type="download" class="sbtn btn" style="background-color: 	#DCDCDC;"><i class="fas fa-download" style="color: #32CD32;"></i></button></a>
                <a href="<?= base_url('user/deleteprodi/') . $value->id_prodi  ?>"><button type="delete" class="sbtn btn" style="background-color: 	#DCDCDC;"><i class="fa fa-trash" style="color: #8B0000;"></i></button></a>
    </div>
    </td>
    </tr>
  <?php endforeach; ?>

  <!-- <tr>
      <th scope style="color: black;"="row">2</th>
      <td style="color: black;">Teknik Industri</td>
      <td> <a href="<?php echo base_url('user/dokumen1'); ?>"><button type="lihat" class="sbtn btn-primary"><i class="fa fa-eye"></i></button> <button type="download" class="sbtn btn-success"><i class="fas fa-download"></i></button</div></td>
    </tr>
    <tr>
      <th scope style="color: black;"="row">3</th>
      <td style="color: black;">Fisika</td>
      <td> <a href="<?php echo base_url('user/dokumen1'); ?>"><button type="lihat" class="sbtn btn-primary"><i class="fa fa-eye"></i></button> <button type="download" class="sbtn btn-success"><i class="fas fa-download"></i></button</div></td>
    </tr>
    <tr>
      <th scope style="color: black;"="row">4</th>
      <td style="color: black;">Matematika</td>
      <td> <a href="<?php echo base_url('user/dokumen1'); ?>"><button type="lihat" class="sbtn btn-primary"><i class="fa fa-eye"></i></button> <button type="download" class="sbtn btn-success"><i class="fas fa-download"></i></button</div></td>
    </tr>
    <tr>
      <th scope style="color: black;"="row">5</th>
      <td style="color: black;">Perencanaan Wilayah dan Kota</td>
      <td> <a href="<?php echo base_url('user/dokumen1'); ?>"><button type="lihat" class="sbtn btn-primary"><i class="fa fa-eye"></i></button> <button type="download" class="sbtn btn-success"><i class="fas fa-download"></i></button</div></td>
    </tr>
    <tr>
      <th scope style="color: black;"="row">6</th>
      <td style="color: black;">Teknik Mesin</td>
      <td> <a href="<?php echo base_url('user/dokumen1'); ?>"><button type="lihat" class="sbtn btn-primary"><i class="fa fa-eye"></i></button> <button type="download" class="sbtn btn-success"><i class="fas fa-download"></i></button</div></td>
    </tr> -->

  </tbody>
  </table>
  </div>
</div>



</div>