<div class="container">

    <div class="text-dark mt-8">
        <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Daftar Tilik Jurusan</b></h5>
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
                    foreach ($tampil_dokumen_acuan_jurusan as $key => $value) :
                        $number = $key + 1;
                    ?>
                        <tr>
                            <th class="text-center " scope style="color: black;"="row"><?= $number; ?></th>
                            <td style="color: black;"><?= $value->nama_dokumen; ?></td>
                            <td class="text-center">
                                <a href="<?= base_url('auditorjurusan/pertanyaan_dok_acuan/' . $value->id_dokumen_acuan) ?>">
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

</div>