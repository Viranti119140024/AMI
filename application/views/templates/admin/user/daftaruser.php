<div class="container">

    <div class="text-dark mt-8">
        <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Daftar Pengguna</b></h5>
    </div>


    <b>
        <hr color="red" />
    </b>

    <a class="btn btn-success" type="button" href="<?= base_url('user/TambahUser') ?>" class="text-white" href="#">+ Tambah</a>

    <div class="card mt-4">
        <div class="card-body">
            <table id="myTable" class="table table-striped mt-2">
                <thead>
                    <tr>
                        <th scope style="color: black;"="col">No</th>
                        <th scope style="color: black;"="col">Nama User</th>
                        <th scope style="color: black;"="col">Email</th>
                        <th scope style="color: black;"="col">Role</th>
                        <th scope style="color: black;"="col">Aksi</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($user as $key => $value) :
                        $number = $key + 1;
                    ?>
                        <tr>
                            <th scope style="color: black;"="row"><?= $number; ?></th>
                            <td style="color: black;"><?= $value->name; ?></td>
                            <td style="color: black;"><?= $value->email; ?></td>
                            <td style="color: black;"><?= $value->role_name; ?></td>
                            <td>
                            <td> <a href="<?= base_url('user/deleteprodi/') . $value->id  ?>"><button type="edit" class="sbtn btn" style="background-color: #DCDCDC;"><i class="fa fa-edit" style="color: 	#4169E1;"></i></button></a>
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