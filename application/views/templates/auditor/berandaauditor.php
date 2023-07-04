<div class="container">

  <div class="card-deck">
    <!-- <div class="card" style="background-color: red; color:white;"> -->
    <div class="card text-white bg-warning">
      <div class="card-body mb-4">
        <h5 class="card-title">Dokumen Kebutuhan Audit</h5>
      </div>
    </div>
    <div class="card text-white bg-danger">
      <div class="card-body">
        <h5 class="card-title">Daftar Tilik</h5>
      </div>
    </div>
    <div class="card text-white bg-success">
      <div class="card-body">
        <h5 class="card-title">Laporan Hasil Tindak Lanjut</h5>
      </div>
    </div>

  </div>


  <div class="card mt-4">
    <center class="text-dark mt-4" style="font-family: Arial, Helvetica, sans-serif; color:black;">
      <h5><b>PROSES AUDIT MUTU INTERNAL</b></h5>
    </center>
    <div class="card-body">
      <table id="myTable" class="table" style="color: black;">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Proses</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>

          <form method="POST" action="<?php base_url('auditor/input_status'); ?>">
            <tr>
              <th scope="row">1</th>
              <td>Mengecek Dokumen Kebutuhan Audit</td>
              <td>
                <select name="status_upload" id="status_upload" class="form-control" id="exampleFormControlSelect1">
                  <option>Selesai</option>
                  <option>Belum Selesai</option>
                </select>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Mengisi Daftar Tilik</td>
              <td>
                <select name="status_upload" id="status_laporanhasil" class="form-control" id="exampleFormControlSelect1">
                  <option>Selesai</option>
                  <option>Belum Selesai</option>
                </select>
              </td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td> Mengecek Laporan Hasil Tindak Lanjut</td>
              <td>
                <select name="status_upload" id="status_tindaklanjut" class="form-control" id="exampleFormControlSelect1">
                  <option>Selesai</option>
                  <option>Belum Selesai</option>
                </select>
              </td>
            </tr>
            <div class="d-flex justify-content-end">
              <input type="submit" class="btn btn-success" name="submit" id="submit" value="submit"/>
            </div>
          </form>
        </tbody>
      </table>
      <!-- <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-success" name="submit" id="submit">Simpan</button>
      </div> -->
    </div>
  </div>
</div>

<!-- <?php var_dump($user['id']); ?> -->


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.js"></script>

<script>
  let table = new DataTable('#myTable');
</script>