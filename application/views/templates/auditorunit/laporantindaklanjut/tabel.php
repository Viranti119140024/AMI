<div class="container">

    <div class="text-dark mt-8">
        <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Data Laporan Hasil Audit</b></h5>
    </div>

    <b>
        <hr color="red" />
    </b>

    <a class="btn btn-success" type="button" href="<?= base_url('auditor/isidata') ?>" class="text-white" href="#">+ Tambah</a>

    <div class="card mt-4">
        <div class="card-body">
            <table id="myTable" class="table table-striped mt-2">
                <thead>
                    <tr>
                        <th scope style="color: black;"="col">No</th>
                        <th scope style="color: black;"="col">Periode</th>
                        <th scope style="color: black;"="col">Aksi</th>

                    </tr>
                </thead>
                <tbody>

                    <?php
                    foreach ($hasilaudit as $key => $value) :
                        $number = $key + 1;
                    ?>
                        <tr>
                            <th scope style="color: black;"="row"><?= $number; ?></th>
                            <td style="color: black;"><?= $value->periode; ?></td>
                            <td>
                                <a href="<?= base_url('auditor/laporanakhir/') . $value->id_hasilaudit ?> "><button type="lihat" class="sbtn btn" style="background-color: 	#DCDCDC;"><i class="fa fa-eye" style="color: #696969;"></i></button></a>
                                <a href="<?= base_url('auditor/edit_data/') . $value->id_hasilaudit;?>"><button type="edit" class="sbtn btn" style="background-color: #DCDCDC;"><i class="fa fa-edit" style="color: 	#4169E1;"></i></button></a>
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
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.js"></script>

<script>
    let table = new DataTable('#myTable');
</script>