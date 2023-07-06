<div class="container">

<div class="card-deck">
  <!-- <div class="card" style="background-color: red; color:white;"> -->
  <div class="card text-white bg-warning">
    <div class="card-body mb-4" >
      <h5 class="card-title">Dokumen Kebutuhan Audit</h5>
    </div>
  </div>
  <div class="card text-white bg-danger">
    <div class="card-body">
      <h5 class="card-title">Laporan Hasil Audit</h5>
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
      <h5><b>PROSES AUDIT MUTU INTERNAL</b></h5></center>
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
        <tr>
            <th scope="row">1</th>
            <td>Mengupload Dokumen Kebutuhan Audit</td>
            <th class="text-success">Selesai</th>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Mengecek Laporan Hasil Audit</td>
            <th class="text-danger">Selesai</th>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td> Menmbuat Laporan Hasil Tindak Lanjut</td>
            <th class="text-danger">Belum Selesai</th>
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