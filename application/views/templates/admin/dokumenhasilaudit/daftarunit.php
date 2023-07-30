<div class="container">

  <div class="text-dark mt-8">
    <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Daftar Unit</b></h5>
  </div>

  <b>
    <hr color="red" />
  </b>

  <div class="card mt-4">
    <div class="card-body">
      <!-- <?php
            // var_dump($prodi);
            ?> -->
      <table id="myTable" class="table table-striped mt-2">
        <thead>
          <tr>
            <th scope style="color: black;"="col">No</th>
            <th scope style="color: black;"="col">Unit</th>
            <th scope style="color: black;"="col">Aksi</th>

          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($unit as $key => $value) :
            $number = $key + 1;
          ?>
            <tr>
              <th scope style="color: black;"="row"><?= $number; ?></th>
              <td style="color: black;"><?= $value->email ?></td>
              <td class="text">
              <a href="<?= base_url('User/generate_pdf_hasil_audit_unit/') . $value->id ?>">
                  <button type="lihat" class="btn btn-success">
                    Lihat
                  </button>
                </a>
                <a href="<?= base_url('User/generate_daftar_tilik_unit/') . $value->id ?>">
                  <button type="lihat" class="btn btn-primary">
                    Daftar Tilik
                  </button>
                </a>
                <!-- <a href="#">
                  <button type="lihat" class="btn btn-secondary">
                    Upload
                  </button>
                </a> -->
              </td>
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
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.js"></script>

<script>
  let table = new DataTable('#myTable');
</script>