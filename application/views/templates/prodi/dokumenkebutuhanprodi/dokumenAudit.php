<div class="container">



  <div class="card">
    <div class="card-body">
      <center class="text-dark mt-8" style="color:black;">
        <h5><b>DOKUMEN KEBUTUHAN AUDIT PROGRAM STUDI</br></b></h5>
      </center>
      <table class="table table-striped" style="color:black;">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Dokumen</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($dokumen as $key => $value) :
            $number = $key + 1;
          ?>
            <tr>
              <th scope style="color: black;"="row"><?= $number; ?></th>
              <td style="color: black;"><?= $value->nama_dokumen; ?></td>
              <td>
                <a href="<?= base_url('prodi/upload_dokumen/') . $value->id_dokumen ?> "><button type="upload" class="sbtn btn" style="background-color: #DCDCDC;"><i class="fa fa-upload" style="color:#696969;"></i></button></a>
                <!-- <a href="#"><button type="ceklist" class="sbtn btn" style="background-color: #DCDCDC;"><i class="fa fa-check" style="color: #32CD32"></i></button></a> -->
                <!-- <a href="#"><button type="delete" class="sbtn btn" style="background-color: 	#DCDCDC;"><i class="fa fa-trash" style="color: #8B0000;"></i></button></a> -->
    </div>
    </td>
    </tr>
  <?php endforeach; ?>

  </div>

</div>