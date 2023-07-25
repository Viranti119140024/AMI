<div class="container">

    <div class="card">
        <div class="card-body">
            <form action="<?= base_url("prodi/edit_data2/" . $bab2 [0]->id_bab2) ?>" method="post" class="form-horizontal form-label-left" novalidate>
            <input type="hidden" name="id_tindaklanjut" value="<?= $bab2 [0]->id_tindaklanjut; ?>">    
            <!-- <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Lembaga</label>
                    <input type="text" class="form-control" id="prodi" name="prodi" placeholder="Masukkan Periode">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Ruang Lingkup</label>
                    <input type="text" class="form-control" id="ruanglingkup" name="ruanglingkup" placeholder="Masukkan Tahun">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Tanggal</label>
                    <input type="text" class="form-control" id="tanggal" name="tanggal" placeholder="Masukkan Unit">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Dokumen Acuan</label>
                    <input type="text" class="form-control" id="dokumen_acuan" name="dokumen_acuan" placeholder="Masukkan Tanggal">
                </div> -->

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

                <!-- <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Temuan</label>
                    <input value="<?= $bab2[0]->temuan; ?>" type="text" class="form-control" id="temuan" name="temuan" placeholder="Masukkan Nama">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">A2. TINDAK LANJUT TEMUAN</label>
                    <input value="<?= $bab2[0]->a2; ?>" type="text" class="form-control" id="a2" name="a2" placeholder="Masukkan Nama">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Kesimpulan</label>
                    <input value="<?= $bab2[0]->kesimpulan; ?>" type="text" class="form-control" id="kesimpulan" name="kesimpulan" kesimpulan="Masukkan Nama">
                </div> -->

                <!-- <div class="form-group">
                    <label for="exampleFormControlFile1"> Dokumentasi</label>
                    <input type="file" name="file_dokumen" id="file_dokumen" class="form-control-file" id="exampleFormControlFile1">
                </div> -->

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success" name="submit" id="submit">Simpan</button>
                </div>

                <form>
        </div>

    </div>
</div>