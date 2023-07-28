<div class="container">

  <div class="text-dark mt-8">
    <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Laporan Tindak Lanjut Program Studi</b></h5>
  </div>


  <b>
    <hr color="red" />
  </b>

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
              <td style="color: black;"><?= $value->email ?></td>
              <td class="text">
                <a href="#">
                  <!-- <a <?php if ($hasil_tindak_lanjut !== null) : ?> href="<?= base_url('user/generate_pdf/' . $hasil_tindak_lanjut) ?>" <?php else : ?> href="" <?php endif; ?>> -->
                  <button type="lihat" class="btn btn-success">
                    Lihat
                  </button>
                </a>
                <a href="#">
                  <button type="lihat" class="btn btn-primary">
                    Daftar Tilik
                  </button>
                </a>
                <a href="#">
                  <button type="upload" class="btn btn-secondary">
                    Upload
                  </button>
                </a>
              </td>
    </div>
    </td>
    </tr>
  <?php endforeach; ?>

  </tbody>
  </table>
  </div>
</div>



</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src ="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.js"></script>

<script> let table = new DataTable('#myTable'); </script>