<div class="container">

  <div class="row">
    <div class="col mb-4">
      <div class="card text-white bg-warning">
        <div class="card-body">
          <h5 class="card-title">Jurusan</h5>
          <p class="card-text">3</p>
        </div>
      </div>
    </div>
    <div class="col mb-4">
      <div class="card text-white bg-danger">
        <div class="card-body">
          <h5 class="card-title">Program Studi</h5>
          <p class="card-text">40</p>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col mb-4">
      <div class="card text-white bg-success">
        <div class="card-body">
          <h5 class="card-title">Dokumen Kebutuhan Audit</h5>
          <p class="card-text">Jurusan dan Program Studi</p>
        </div>
      </div>
    </div>
    <div class="col mb-4">
      <div class="card text-white bg-info">
        <div class="card-body">
          <h5 class="card-title">Dokumen Hasil Audit</h5>
          <p class="card-text">Jurusan dan Program Studi</p>
        </div>
      </div>
    </div>
  </div>

  <div class="card mt-3">
    <center class="text-dark mt-4" style="font-family: Arial, Helvetica, sans-serif; color:black;">
      <h5><b style="font-family: Arial, Helvetica, sans-serif;">STATUS PROSES AUDIT MUTU INTERNAL</b></h5>
    </center>
    <div class="card-body">
      <table id="myTable" class="table" style="color: black;">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Program Studi / Jurusan</th>
            <th scope="col">Auditor</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Teknik Informatika</td>
            <td>Eko Dwi Nugroho</td>
            <th class="text-success">Selesai</th>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jurusan Teknologi Produksi dan Industri</td>
            <td>Hadi Yudistira</td>
            <th class="text-danger">Belum Selesai</th>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Perencanaan Wilayah dan Kota</td>
            <td>Zenia Saraswati</td>
            <th class="text-danger">Belum Selesai</th>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Jurusan Sains</td>
            <td>Hari Wiryanto</td>
            <th class="text-success">Selesai</th>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>Teknik Industri</td>
            <td>Sritomo Subroto</td>
            <th class="text-danger">Belum Selesai</th>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td>Fisika</td>
            <td>Melany Febrina</td>
            <th class="text-success">Selesai</th>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src ="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.js"></script>

<script> let table = new DataTable('#myTable'); </script>