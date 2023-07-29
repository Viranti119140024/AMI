<div class="container">

    <div class="text-dark mt-8">
        <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Daftar Tilik Unit</b></h5>
    </div>


    <b>
        <hr color="red" />
    </b>

    <div class="card mt-4">
        <div class="card-body">
            <table class="table mt-2">
                <thead>
                    <tr>
                        <th scope style="color: black;"="col">No</th>
                        <th scope style="color: black;"="col">Dokumen</th>
                        <th scope style="color: black;"="col">Aksi</th>

                    </tr>
                </thead>
                <tbody>
                    <th scope style="color: black;"="row">1</th>
                    <td style="color: black;">Daftar Tilik Unit</td>
                    <td class="text">
                        <a href="<?= base_url('auditorunit/pertanyaan_dok_acuan') ?>">
                            <button type="lihat" class="btn btn-success">
                                Nilai
                            </button>
                        </a>
                    </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
    <form method="post" class="form-horizontal form-label-left" novalidate action="<?= base_url('auditorunit/generate_daftar_tilik_unit') ?>">
    <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-primary" name="submit" id="submit">Generate Daftar Tilik</button>
    </div>
</form>
</div>
