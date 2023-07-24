<div class="container">

  <div class="text-dark mt-8">
    <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Laporan Hasil Tindak Lanjut Program Studi</b></h5>
  </div>


  <b>
    <hr color="red" />
  </b>

  <button class="btn btn-success" type="button"><a href="<?= base_url('user/TDP') ?>" class="text-white">+ Tambah</button>

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
              <td style="color: black;"><?= $value->name ?></td>
              <td>
                <a target="_blank" href="<?= $value->link_drive ?> "><button type="lihat" class="sbtn btn" style="background-color: 	#DCDCDC;"><i class="fa fa-eye" style="color: #696969;"></i></button></a>
                <!-- <a href="<?= base_url('user/downloaddokumen') ?>"><button type="download" class="sbtn btn" style="background-color: 	#DCDCDC;"><i class="fas fa-download" style="color: #008000;"></i></button></a> -->
                <!-- <a href="<?= base_url('user/deleteprodi/') . $value->id ?>"><button type="delete" class="sbtn btn" style="background-color: 	#DCDCDC;"><i class="fa fa-trash" style="color: #8B0000;"></i></button></a> -->
    </div>
    </td>
    </tr>
  <?php endforeach; ?>

  </tbody>
  </table>
  </div>
</div>



</div>

<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src ="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.js"></script>

<script> let table = new DataTable('#myTable'); </script> -->