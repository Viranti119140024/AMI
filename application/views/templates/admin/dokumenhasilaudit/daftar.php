<div class="container">

  <div class="text-dark mt-8"> <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Laporan Hasil Audit Program Studi</b></h5> </div> 


<b><hr color="red" /></b>

<!-- <a class="btn btn-success" type="button" class="text-white" href="<?= base_url('user/TDP') ?>">+ Tambah</a> -->

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
    <tr>
    <th scope style="color: black;"="row">1</th>
      <td style="color: black;">Teknik Mesin</td>
      <td> <a href="#"><button type="lihat" class="sbtn btn" style="background-color: #DCDCDC;"><i class="fa fa-eye" style="color:#696969;"></i></button></td>
    </tr>
    <tr>
      <th scope style="color: black;"="row">2</th>
      <td style="color: black;">Teknik Informatika</td>
      <td> <a href="#"><button type="lihat" class="sbtn btn" style="background-color: #DCDCDC;"><i class="fa fa-eye" style="color:#696969;"></i></td>
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


