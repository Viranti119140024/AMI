<div class="container">

  <div class="text-dark mt-8"> 
    <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Dokumen Kebutuhan Audit Jurusan</b></h5> 
  </div> 

  <b>
    <hr color="red" />
  </b>

  <a class="btn btn-success" type="button" class="text-white" href="<?= base_url('user/tambahjurusan') ?>">+ Tambah</a>

  <!-- <div class="d-flex justify-content-end">
    <form class="d-flex" action="#" method="GET">
      <input class="form-control me-2" type="search" placeholder="Cari" name="search" />
    </form>
  </div> -->

<div class="card mt-4">
  <div class="card-body">
  <table class="table table-striped mt-2">
  <thead>
    <tr>
      <th scope style="color: black;"="col">No</th>
      <th scope style="color: black;"="col">Jurusan</th>
      <th scope style="color: black;"="col">Aksi</th>

    </tr>
  </thead>
  <tbody>
  <?php
          foreach ($jurusan as $key => $value) :
            $number = $key + 1;
          ?>
            <tr>
              <th scope style="color: black;"="row"><?= $number; ?></th>
              <td style="color: black;"><?= $value->nama_jurusan; ?></td>
              <td>
                <a href="<?= base_url('user/index/') . $value->id_jurusan ?> "><button type="lihat" class="sbtn btn" style="background-color: 	#DCDCDC;"><i class="fa fa-eye" style="color: #696969;"></i></button></a>
                <a href="<?= base_url('user/downloaddokumen') ?>"><button type="download" class="sbtn btn" style="background-color: 	#DCDCDC;"><i class="fas fa-download" style="color: #32CD32;"></i></button></a>
                <!-- <a href="<?= base_url('user/deletejurusan/') . $value->id_jurusan  ?>"><button type="delete" class="sbtn btn" style="background-color: 	#DCDCDC;"><i class="fa fa-trash" style="color: #8B0000;"></i></button></a> -->
    </div>
    </td>
    </tr>
  <?php endforeach; ?>

  </tbody>
  </table>
  </div>
</div>



  </div>


