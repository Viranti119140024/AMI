<div class="container">

    <div class="card">
        <div class="card-body">
            <form method="post" class="form-horizontal form-label-left" novalidate action="<?= base_url('jurusan_controller/isidata2_post/') ?>">

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Jenis Temuan</label>
                    <input value="<?= $bab2[0]->jenis_temuan; ?>" type="text" class="form-control" id="jenis_temuan" name="jenis_temuan" placeholder="Masukkan NRK / NIP">
                </div>

                <div class="form-group">
                    <!-- <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Waktu dan Pelaksanaan Audit</b></h5> -->
                    <label for="exampleFormControlInput1" style="color: black;">OB</label>
                    <input type="radio" name="OB" value="1" <?php
                                                            echo set_value('OB', $bab2[0]->OB) == 1 ? "checked" : "";
                                                            ?> />✓

                    <input type="radio" name="OB" value="0" <?php
                                                            echo set_value('OB', $bab2[0]->OB) == 0 ? "checked" : "";
                                                            ?> />-

                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">KTS</label>
                    <input type="radio" name="KTS" value="1" <?php
                                                                echo set_value('OB', $bab2[0]->KTS) == 1 ? "checked" : "";
                                                                ?> />Yes

                    <input type="radio" name="KTS" value="0" <?php
                                                                echo set_value('OB', $bab2[0]->KTS) == 0 ? "checked" : "";
                                                                ?> />No

                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Kode Temuan</label>
                    <input value="<?= $bab2[0]->kode; ?>" type="text" class="form-control" id="kode" name="kode" placeholder="Masukkan Tempat Kegiatan">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Jangka Waktu</label>
                    <input value="<?= $bab2[0]->jangka_waktu; ?>" type="text" class="form-control" id="jangka_waktu" name="jangka_waktu" placeholder="Masukkan Nama">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Penanggung Jawab</label>
                    <input value="<?= $bab2[0]->pj; ?>" type="text" class="form-control" id="pj" name="pj" placeholder="Masukkan Nama">
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success" name="submit" id="submit">Simpan</button>
                </div>

                <form>
        </div>

    </div>
</div>