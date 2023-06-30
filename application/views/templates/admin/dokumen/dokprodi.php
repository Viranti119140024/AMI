<div class="container">

  <div class="text-dark mt-8">
    <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Dokumen Kebutuhan Audit Program Studi</b></h5>
  </div>

  <b>
    <hr color="red" />
  </b>

  <!-- <a class="btn btn-success" type="button" class="text-white" href="<?= base_url('user/tambahprodi') ?>">+ Tambah</a> -->

  <!-- <div class="d-flex justify-content-end">
    <form class="d-flex" action="#" method="GET">
      <input class="form-control me-2" type="search" placeholder="Cari" name="search" />
    </form>
  </div> -->

  <div class="card mt-4">
    <div class="card-body">
      <table id="myTable" class="table table-striped mt-2">
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
              <td style="color: black;"><?= $value->name; ?></td>
              <td>
                <a href="<?= base_url('user/dokumen1/') . $value->id ?> "><button type="lihat" class="sbtn btn" style="background-color: 	#DCDCDC;"><i class="fa fa-eye" style="color: #696969;"></i></button></a>
                <a href="<?= base_url('user/downloaddokumen') ?>"><button type="download" class="sbtn btn" style="background-color: 	#DCDCDC;"><i class="fas fa-download" style="color: #008000;"></i></button></a>
                <!-- <a href="<?= base_url('user/deleteprodi/') . $value->id ?>"><button type="delete" class="sbtn btn" style="background-color: 	#DCDCDC;"><i class="fa fa-trash" style="color: #8B0000;"></i></button></a> -->
    </div>
    </td>
    </tr>
  <?php endforeach; ?>

  </tbody>
  </table>
  </div>
</div>

<!-- <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
      let table = new DataTable('#myTable');
    </script> -->

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src ="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.js"></script>

<script> let table = new DataTable('#myTable'); </script>

  