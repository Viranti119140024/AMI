<div class="container">

  <div class="text-dark mt-8"> <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Dokumen Kebutuhan Audit Jurusan</b></h5> </div> 


<b><hr color="red" /></b>

<a class="btn btn-success" type="button" class="text-white" href="<?= base_url('user/TDJ') ?>">+ Tambah</a>


<div class="card mt-4">
  <div class="card-body">
  <table id="myTable" class="table table-striped mt-2">
  <thead>
    <tr>
      <th scope style="color: black;"="col">No</th>
      <th scope style="color: black;"="col">Dokumen</th>
      <th scope style="color: black;"="col">Aksi</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope style="color: black;"="row">1</th>
      <td style="color: black;">Laporan Tindak Lanjut AMI</td>
      <td> <a href="<?php echo base_url('user/index'); ?>"><button type="lihat" class="sbtn btn" style="background-color: #DCDCDC;"><i class="fa fa-eye" style="color: 	#2F4F4F;"></i></button> <button type="download" class="sbtn btn" style="background-color: 	#DCDCDC;"><i class="fas fa-download" style="color: #008000;"></i></button</div></td>
    </tr>
    <tr>
      <th scope style="color: black;"="row">2</th>
      <td style="color: black;">Dokumen SOP Pelaksanaan Ujian Semester</td>
      <td> <a href="<?php echo base_url('user/index'); ?>"><button type="lihat" class="sbtn btn" style="background-color: #DCDCDC;"><i class="fa fa-eye" style="color: 	#2F4F4F;"></i></button> <button type="download" class="sbtn btn" style="background-color: 	#DCDCDC;"><i class="fas fa-download" style="color: #008000;"></i></button</div></td>
    </tr>
    <tr>
      <th scope style="color: black;"="row">3</th>
      <td style="color: black;">Dokumen SOP Penilaian Perkuliahan Paralel</td>
      <td> <a href="<?php echo base_url('user/index'); ?>"><button type="lihat" class="sbtn btn" style="background-color: #DCDCDC;"><i class="fa fa-eye" style="color: 	#2F4F4F;"></i></button> <button type="download" class="sbtn btn" style="background-color: 	#DCDCDC;"><i class="fas fa-download" style="color: #008000;"></i></button</div></td>
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
