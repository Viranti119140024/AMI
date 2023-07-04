<div class="container">

    <div class="text-dark mt-8">
        <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Data Auditor</b></h5>
    </div>


    <b>
        <hr color="red" />
    </b>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Launch demo modal
    </button>


    <div class="card mt-3">
        <center class="text-dark mt-4" style="font-family: Arial, Helvetica, sans-serif; color:black;">
            <h5><b style="font-family: Arial, Helvetica, sans-serif;">Hasil Desk Evaluation</b></h5>
        </center>
        <div class="card-body">
            <table id="myTable" class="table" style="color: black;">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Dokumen Terkait</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    foreach ($admin_hasil_desk as $key => $value) :
                        $number = $key + 1;
                    ?>
                        <tr>
                            <th scope style="color: black;"="row"><?= $number; ?></th>
                            <td style="color: black;"><?= $value->nama_dokumen_terkait; ?></td>
                            <td>
                                <a href="<?= base_url('prodi/isidokumenacuan/') . $value->id_hasil_desk  ?>"><button type="edit" class="sbtn btn" style="background-color: #DCDCDC;"><i class="fa fa-edit" style="color: 	#4169E1;"></i></button></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>



        <a class="mt-5 btn btn-success" type="button" href="<?= base_url('user/auditor') ?>" class="text-white">+ Tambah</a>
        <div class="card mt-2">
            <center class="text-dark mt-4" style="font-family: Arial, Helvetica, sans-serif; color:black;">
                <h5><b style="font-family: Arial, Helvetica, sans-serif;">Daftar Tilik ( Checklist )</b></h5>
            </center>
            <div class="card-body">
                <table id="myTable" class="table" style="color: black;">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Pertanyaan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>

                    <?php
                    foreach ($admin_daftar_tilik as $key => $value) :
                        $number = $key + 1;
                    ?>
                        <tr>
                            <th scope style="color: black;"="row"><?= $number; ?></th>
                            <td style="color: black;"><?= $value->pertanyaan; ?></td>
                            <td>
                                <a href="<?= base_url('prodi/isidokumenacuan/') . $value->id_daftar_tilik  ?>"><button type="edit" class="sbtn btn" style="background-color: #DCDCDC;"><i class="fa fa-edit" style="color: 	#4169E1;"></i></button></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Tambah -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url("User/tambah_hasil_desk") ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="text" name="nama_dokumen_terkait" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                        <input type="hidden" name="id_dokumen_acuan" value="<?= $this->uri->segment(3) ?>">

                    </div>
                </div>




                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>