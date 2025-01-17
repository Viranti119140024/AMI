<div class="container">

    <div class="text-dark mt-8">
        <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Daftar Tilik Program Studi</b></h5>
    </div>


    <b>
        <hr color="red" />
    </b>

    <div class="card mt-4">
        <div class=" d-flex justify-content-center card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="text-center " style="color: black;"="col">No</th>
                        <th scope style="color: black;"="col">Dokumen Acuan</th>
                        <th class="text-center " scope style="color: black;"="col">Aksi</th>

                    </tr>
                </thead>
                <tbody>

                    <?php
                    foreach ($tampil_dokumen_acuan as $key => $value) :
                        $number = $key + 1;
                    ?>
                        <tr>
                            <th class="text-center " scope style="color: black;"="row"><?= $number; ?></th>
                            <td style="color: black;"><?= $value->nama_dokumen; ?></td>
                            <td class="text-center">
                                <a href="<?= base_url('auditor/pertanyaan_dok_acuan/' . $value->id_dokumen_acuan) ?>">
                                    <button type="lihat" class="btn btn-success">
                                        Nilai
                                    </button>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <form method="post" class="form-horizontal form-label-left" novalidate action="<?= base_url('auditor/generate_daftar_tilik') ?>">
    <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-primary" name="submit" id="submit">Generate Daftar Tilik</button>
    </div>
</form>

</div>


<!-- <script src=" https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
                                        <script src="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.js"></script>

                                        <script>
                                            let table = new DataTable('#myTable');
                                        </script> -->