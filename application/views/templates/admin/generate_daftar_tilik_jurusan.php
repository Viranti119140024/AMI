<div class="container-fluid">
    <div class="row-lg-12">
        <div class="card mt-2">
            <div class="card-body">
                <h4 class="d-flex justify-content-center align-items-center mt-3 font-weight-bold text-dark"><?= $title1 ?></h4>
                <div class="table-responsive mt-2">
                    <table class="table table-borderless" style="color:black;">
                        <tr>
                            <td>Strata</td>
                            <td>:</td>
                            <td>S1</td>
                        </tr>

                        <tr>
                            <td>Universitas</td>
                            <td>:</td>
                            <td>INSTITUT TEKNOLOGI SUMATERA</td>
                        </tr>

                        <tr>
                            <td>Auditor</td>
                            <td>:</td>
                            <td>Tim Auditor Mutu Internal ITERA</td>
                        </tr>

                        <tr>
                            <td>Dokumen Acuan</td>
                            <td>:</td>
                            <td>Pengelolaan Pembelajaran</td>
                        </tr>
                    </table>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="text-center">
                            <tr>
                                <th rowspan="2" style="background-color: #808080; color:black;">No</th>
                                <th rowspan="2" style="background-color: #808080; color:black;">Dokumen Terkait</th>
                                <th colspan="4" style="background-color: #ffa07a; color:black;">Kondisi Dokumen</th>
                                <th colspan="2" style="background-color: #3EB489; color:black;">Kategori Temuan</th>
                                <th colspan="2" style="background-color: #B0C4DE; color:black;">Status Temuan</th>
                                <th rowspan="2" style="background-color: #FF8C00; color:black;">Catatan</th>
                                <th rowspan="2" style="background-color: #FFFF00; color:black;">Penanggung Jawab</th>
                            </tr>

                            <tr>
                                <th style="background-color: #ffa07a; color:black;">MY*</th>
                                <th style="background-color: #ffa07a; color:black;">MB*</th>
                                <th style="background-color: #ffa07a; color:black;">M*</th>
                                <th style="background-color: #ffa07a; color:black;">MP*</th>
                                <th style="background-color: #3EB489; color:black;">OB*</th>
                                <th style="background-color: #3EB489; color:black;">KTS*</th>
                                <th style="background-color: #B0C4DE; color:black;">OPEN</th>
                                <th style="background-color: #B0C4DE; color:black;">CLOSE</th>
                            </tr>
                        </thead>

                        <form action="<?= base_url("auditorjurusan/add_nilai_hasil_desk_utama") ?>" method="POST">

                            <tbody style="background-color: white; color: black;">
                                <?php
                                $no = 1;
                                foreach ($tampil_hasil_desk_utama_jurusan1 as $hasil_desk) :
                                ?>
                                    <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td>
                                            <?= $hasil_desk->nama_dokumen_terkait ?>
                                            <input type="hidden" name="id_hasil_desk[]" value="<?= $hasil_desk->id_hasil_desk ?>">
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="my[<?= $hasil_desk->id_hasil_desk ?>]" id="my<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->my == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mb[<?= $hasil_desk->id_hasil_desk ?>]" id="mb<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->mb == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="m[<?= $hasil_desk->id_hasil_desk ?>]" id="m<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->m == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mp[<?= $hasil_desk->id_hasil_desk ?>]" id="mp<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->mp == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="ob[<?= $hasil_desk->id_hasil_desk ?>]" id="ob<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->ob == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="kts[<?= $hasil_desk->id_hasil_desk ?>]" id="kts<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->kts == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="open[<?= $hasil_desk->id_hasil_desk ?>]" id="open<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->open == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="close[<?= $hasil_desk->id_hasil_desk ?>]" id="close<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->close == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="text" name="catatan[<?= $hasil_desk->id_hasil_desk ?>]" id="catatan<?= $hasil_desk->id_hasil_desk ?>" value="<?= $hasil_desk->catatan ?>"></td>
                                        <td class="text-center"><input type="text" name="penanggungjawab[<?= $hasil_desk->id_hasil_desk ?>]" id="penanggungjawab<?= $hasil_desk->id_hasil_desk ?>" value="<?= $hasil_desk->penanggungjawab ?>"></td>

                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </form>

                        <form action="<?= base_url("auditorjurusan/add_nilai_hasil_desk_tambahan") ?>" method="POST">
                            <!-- tampil_tambahan_hasil_desk_auditor -->
                            <?php if ($tampil_hasil_desk_tambahan_jurusan1 !== null) : ?>
                                <tbody style="background-color: white; color: black;">
                                    <?php
                                    $no = 1;
                                    foreach ($tampil_hasil_desk_tambahan_jurusan1 as $hasil_desk) :
                                    ?>
                                        <tr>
                                            <td class="text-center"><?= $no++; ?></td>
                                            <td>
                                                <?= $hasil_desk->tambahan_hasil_desk ?>
                                                <input type="hidden" name="id_auditor_hasil_desk[]" value="<?= $hasil_desk->id_auditor_hasil_desk ?>">
                                            </td>
                                            <td class="text-center"><input type="checkbox" name="my[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="my<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->my == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="mb[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="mb<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->mb == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="m[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="m<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->m == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="mp[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="mp<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->mp == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="ob[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="ob<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->ob == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="kts[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="kts<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->kts == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="open[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="open<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->open == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="close[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="close<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->close == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="text" name="catatan[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="catatan<?= $hasil_desk->id_auditor_hasil_desk ?>" value="<?= $hasil_desk->catatan ?>"></td>
                                            <td class="text-center"><input type="text" name="penanggungjawab[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="penanggungjawab<?= $hasil_desk->id_auditor_hasil_desk ?>" value="<?= $hasil_desk->penanggungjawab ?>"></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            <?php endif ?>
                        </form>

                        <tfoot>
                            <tr class="text-center" style="background-color: #C0C0C0; color:black;">
                                <th colspan="2">Jumlah Nilai</th>
                                <th style="background-color: #ffa07a; color:black;"> <?= $total_checkbox1['my'] ?></th>
                                <th style="background-color: #3EB489; color:black;"><?= $total_checkbox1['mb'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox1['m'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox1['mp'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox1['ob'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox1['kts'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox1['open'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox1['close'] ?></th>

                            </tr>
                            </thead>
                        </tfoot>

                    </table>
                </div>
                <p style="color:black;"> * M= Memenuhi, MP= Melampaui, MB= Belum Memenuhi, MY= Menyimpang <br> <br>* OB= Observasi, KTS= Ketidaksesuaian</br></br></p>
            </div>
        </div>
    </div>

    <div class="row-lg-12 mt-2">
        <div class="card mt-2">
            <div class="card-body">
                <h4 class="d-flex justify-content-center align-items-center mt-3 font-weight-bold text-dark"><?= $title2 ?></h4>


                <div class="table-data">
                    <table class="table table-bordered">
                        <thead class="text-center" style="background-color: #C0C0C0; color:black;">
                            <tr>
                                <th rowspan="1">No</th>
                                <th rowspan="1">Pertanyaan</th>
                                <th colspan="1">Dokumen Terkait</th>
                                <th colspan="1">Hasil Observasi/Audit/Visitasi</th>
                                <th colspan="1">MY*</th>
                                <th rowspan="1">MB*</th>
                                <th rowspan="1">M*</th>
                                <th rowspan="1">MP*</th>
                                <th rowspan="1">Rekomendasi</th>
                            </tr>
                        </thead>
                        <form action="<?= base_url("auditorjurusan/add_nilai_daftar_tilik_utama") ?>" method="POST">

                            <tbody style="background-color: white; color:black;">
                                <?php
                                $no = 1;
                                foreach ($tampil_daftar_tilik_utama_jurusan1 as $daftar_tilik) :
                                ?>
                                    <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td>
                                            <?= $daftar_tilik->pertanyaan ?>
                                            <input type="hidden" name="id_daftar_tilik[]" value="<?= $daftar_tilik->id_daftar_tilik ?>">
                                        </td>
                                        <td class="text-center"><input type="text" name="dokumenterkait[<?= $daftar_tilik->id_daftar_tilik ?>]" value="<?= $daftar_tilik->dokumen_terkait ?>"></td>
                                        <td class="text-center"><input type="text" name="hasilobservasi[<?= $daftar_tilik->id_daftar_tilik ?>]" value="<?= $daftar_tilik->hasil_observasi ?>"></td>
                                        <td class="text-center"><input type="checkbox" name="my[<?= $daftar_tilik->id_daftar_tilik ?>]" <?= ($daftar_tilik->my == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mb[<?= $daftar_tilik->id_daftar_tilik ?>]" <?= ($daftar_tilik->mb == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="m[<?= $daftar_tilik->id_daftar_tilik ?>]" <?= ($daftar_tilik->m == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mp[<?= $daftar_tilik->id_daftar_tilik ?>]" <?= ($daftar_tilik->mp == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="text" name="rekomendasi[<?= $daftar_tilik->id_daftar_tilik ?>]" value="<?= $daftar_tilik->rekomendasi ?>"></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </form>


                        <form action="<?= base_url("auditorjurusan/add_nilai_daftar_tilik_tambahan") ?>" method="POST">

                            </thead>
                            <tbody style="background-color: white; color:black;">
                                <?php
                                $no = 1;
                                foreach ($tampil_daftar_tilik_tambahan_jurusan1 as $daftar_tilik) :
                                ?>
                                    <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td>
                                            <?= $daftar_tilik->tambahan_daftar_tilik ?>
                                            <input type="hidden" name="id_auditor_daftar_tilik[]" value="<?= $daftar_tilik->id_auditor_daftar_tilik ?>">
                                        </td>
                                        <td class="text-center"><input type="text" name="dokumenterkait[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" value="<?= $daftar_tilik->dokumen_terkait ?>"></td>
                                        <td class="text-center"><input type="text" name="hasilobservasi[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" value="<?= $daftar_tilik->hasil_observasi ?>"></td>
                                        <td class="text-center"><input type="checkbox" name="my[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" <?= ($daftar_tilik->my == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mb[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" <?= ($daftar_tilik->mb == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="m[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" <?= ($daftar_tilik->m == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mp[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" <?= ($daftar_tilik->mp == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="text" name="rekomendasi[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" value="<?= $daftar_tilik->rekomendasi ?>"></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr class="text-center" style="background-color: #C0C0C0; color:black;">
                                    <th colspan="4">Jumlah Nilai</th>
                                    <th style="background-color: #ffa07a; color:black;"> <?= $total_daftar_tilik1['my'] ?></th>
                                    <th style="background-color: #3EB489; color:black;"><?= $total_daftar_tilik1['mb'] ?></th>
                                    <th style="background-color: #B0C4DE; color:black;"><?= $total_daftar_tilik1['m'] ?></th>
                                    <th style="background-color: #B0C4DE; color:black;"><?= $total_daftar_tilik1['mp'] ?></th>
                                </tr>
                            </tfoot>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-break"></div>

<div class="container-fluid">
    <div class="row-lg-12">
        <div class="card mt-2">
            <div class="card-body">
                <h4 class="d-flex justify-content-center align-items-center mt-3 font-weight-bold text-dark"><?= $title1 ?></h4>
                <div class="table-responsive mt-2">
                    <table class="table table-borderless" style="color:black;">
                        <tr>
                            <td>Strata</td>
                            <td>:</td>
                            <td>S1</td>
                        </tr>

                        <tr>
                            <td>Universitas</td>
                            <td>:</td>
                            <td>INSTITUT TEKNOLOGI SUMATERA</td>
                        </tr>

                        <tr>
                            <td>Auditor</td>
                            <td>:</td>
                            <td>Tim Auditor Mutu Internal ITERA</td>
                        </tr>

                        <tr>
                            <td>Dokumen Acuan</td>
                            <td>:</td>
                            <td>Suasana Akademik</td>
                        </tr>
                    </table>
                </div>


                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="text-center">
                            <tr>
                                <th rowspan="2" style="background-color: #808080; color:black;">No</th>
                                <th rowspan="2" style="background-color: #808080; color:black;">Dokumen Terkait</th>
                                <th colspan="4" style="background-color: #ffa07a; color:black;">Kondisi Dokumen</th>
                                <th colspan="2" style="background-color: #3EB489; color:black;">Kategori Temuan</th>
                                <th colspan="2" style="background-color: #B0C4DE; color:black;">Status Temuan</th>
                                <th rowspan="2" style="background-color: #FF8C00; color:black;">Catatan</th>
                                <th rowspan="2" style="background-color: #FFFF00; color:black;">Penanggung Jawab</th>
                            </tr>

                            <tr>
                                <th style="background-color: #ffa07a; color:black;">MY*</th>
                                <th style="background-color: #ffa07a; color:black;">MB*</th>
                                <th style="background-color: #ffa07a; color:black;">M*</th>
                                <th style="background-color: #ffa07a; color:black;">MP*</th>
                                <th style="background-color: #3EB489; color:black;">OB*</th>
                                <th style="background-color: #3EB489; color:black;">KTS*</th>
                                <th style="background-color: #B0C4DE; color:black;">OPEN</th>
                                <th style="background-color: #B0C4DE; color:black;">CLOSE</th>
                            </tr>
                        </thead>

                        <form action="<?= base_url("auditorjurusan/add_nilai_hasil_desk_utama") ?>" method="POST">

                            <tbody style="background-color: white; color: black;">
                                <?php
                                $no = 1;
                                foreach ($tampil_hasil_desk_utama_jurusan2 as $hasil_desk) :
                                ?>
                                    <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td>
                                            <?= $hasil_desk->nama_dokumen_terkait ?>
                                            <input type="hidden" name="id_hasil_desk[]" value="<?= $hasil_desk->id_hasil_desk ?>">
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="my[<?= $hasil_desk->id_hasil_desk ?>]" id="my<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->my == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mb[<?= $hasil_desk->id_hasil_desk ?>]" id="mb<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->mb == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="m[<?= $hasil_desk->id_hasil_desk ?>]" id="m<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->m == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mp[<?= $hasil_desk->id_hasil_desk ?>]" id="mp<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->mp == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="ob[<?= $hasil_desk->id_hasil_desk ?>]" id="ob<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->ob == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="kts[<?= $hasil_desk->id_hasil_desk ?>]" id="kts<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->kts == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="open[<?= $hasil_desk->id_hasil_desk ?>]" id="open<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->open == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="close[<?= $hasil_desk->id_hasil_desk ?>]" id="close<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->close == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="text" name="catatan[<?= $hasil_desk->id_hasil_desk ?>]" id="catatan<?= $hasil_desk->id_hasil_desk ?>" value="<?= $hasil_desk->catatan ?>"></td>
                                        <td class="text-center"><input type="text" name="penanggungjawab[<?= $hasil_desk->id_hasil_desk ?>]" id="penanggungjawab<?= $hasil_desk->id_hasil_desk ?>" value="<?= $hasil_desk->penanggungjawab ?>"></td>

                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </form>

                        <form action="<?= base_url("auditorjurusan/add_nilai_hasil_desk_tambahan") ?>" method="POST">
                            <!-- tampil_tambahan_hasil_desk_auditor -->
                            <?php if ($tampil_hasil_desk_tambahan_jurusan2 !== null) : ?>
                                <tbody style="background-color: white; color: black;">
                                    <?php
                                    $no = 1;
                                    foreach ($tampil_hasil_desk_tambahan_jurusan2 as $hasil_desk) :
                                    ?>
                                        <tr>
                                            <td class="text-center"><?= $no++; ?></td>
                                            <td>
                                                <?= $hasil_desk->tambahan_hasil_desk ?>
                                                <input type="hidden" name="id_auditor_hasil_desk[]" value="<?= $hasil_desk->id_auditor_hasil_desk ?>">
                                            </td>
                                            <td class="text-center"><input type="checkbox" name="my[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="my<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->my == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="mb[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="mb<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->mb == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="m[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="m<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->m == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="mp[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="mp<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->mp == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="ob[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="ob<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->ob == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="kts[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="kts<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->kts == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="open[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="open<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->open == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="close[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="close<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->close == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="text" name="catatan[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="catatan<?= $hasil_desk->id_auditor_hasil_desk ?>" value="<?= $hasil_desk->catatan ?>"></td>
                                            <td class="text-center"><input type="text" name="penanggungjawab[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="penanggungjawab<?= $hasil_desk->id_auditor_hasil_desk ?>" value="<?= $hasil_desk->penanggungjawab ?>"></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            <?php endif ?>
                        </form>

                        <tfoot>
                            <tr class="text-center" style="background-color: #C0C0C0; color:black;">
                                <th colspan="2">Jumlah Nilai</th>
                                <th style="background-color: #ffa07a; color:black;"> <?= $total_checkbox2['my'] ?></th>
                                <th style="background-color: #3EB489; color:black;"><?= $total_checkbox2['mb'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox2['m'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox2['mp'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox2['ob'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox2['kts'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox2['open'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox2['close'] ?></th>

                            </tr>
                            </thead>
                        </tfoot>

                    </table>
                </div>
                <p style="color:black;"> * M= Memenuhi, MP= Melampaui, MB= Belum Memenuhi, MY= Menyimpang <br> <br>* OB= Observasi, KTS= Ketidaksesuaian</br></br></p>
            </div>
        </div>
    </div>

    <div class="row-lg-12 mt-2">
        <div class="card mt-2">
            <div class="card-body">
                <h4 class="d-flex justify-content-center align-items-center mt-3 font-weight-bold text-dark"><?= $title2 ?></h4>


                <div class="table-data">
                    <table class="table table-bordered">
                        <thead class="text-center" style="background-color: #C0C0C0; color:black;">
                            <tr>
                                <th rowspan="1">No</th>
                                <th rowspan="1">Pertanyaan</th>
                                <th colspan="1">Dokumen Terkait</th>
                                <th colspan="1">Hasil Observasi/Audit/Visitasi</th>
                                <th colspan="1">MY*</th>
                                <th rowspan="1">MB*</th>
                                <th rowspan="1">M*</th>
                                <th rowspan="1">MP*</th>
                                <th rowspan="1">Rekomendasi</th>
                            </tr>
                        </thead>
                        <form action="<?= base_url("auditorjurusan/add_nilai_daftar_tilik_utama") ?>" method="POST">

                            <tbody style="background-color: white; color:black;">
                                <?php
                                $no = 1;
                                foreach ($tampil_daftar_tilik_utama_jurusan2 as $daftar_tilik) :
                                ?>
                                    <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td>
                                            <?= $daftar_tilik->pertanyaan ?>
                                            <input type="hidden" name="id_daftar_tilik[]" value="<?= $daftar_tilik->id_daftar_tilik ?>">
                                        </td>
                                        <td class="text-center"><input type="text" name="dokumenterkait[<?= $daftar_tilik->id_daftar_tilik ?>]" value="<?= $daftar_tilik->dokumen_terkait ?>"></td>
                                        <td class="text-center"><input type="text" name="hasilobservasi[<?= $daftar_tilik->id_daftar_tilik ?>]" value="<?= $daftar_tilik->hasil_observasi ?>"></td>
                                        <td class="text-center"><input type="checkbox" name="my[<?= $daftar_tilik->id_daftar_tilik ?>]" <?= ($daftar_tilik->my == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mb[<?= $daftar_tilik->id_daftar_tilik ?>]" <?= ($daftar_tilik->mb == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="m[<?= $daftar_tilik->id_daftar_tilik ?>]" <?= ($daftar_tilik->m == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mp[<?= $daftar_tilik->id_daftar_tilik ?>]" <?= ($daftar_tilik->mp == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="text" name="rekomendasi[<?= $daftar_tilik->id_daftar_tilik ?>]" value="<?= $daftar_tilik->rekomendasi ?>"></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </form>


                        <form action="<?= base_url("auditorjurusan/add_nilai_daftar_tilik_tambahan") ?>" method="POST">

                            </thead>
                            <tbody style="background-color: white; color:black;">
                                <?php
                                $no = 1;
                                foreach ($tampil_daftar_tilik_tambahan_jurusan2 as $daftar_tilik) :
                                ?>
                                    <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td>
                                            <?= $daftar_tilik->tambahan_daftar_tilik ?>
                                            <input type="hidden" name="id_auditor_daftar_tilik[]" value="<?= $daftar_tilik->id_auditor_daftar_tilik ?>">
                                        </td>
                                        <td class="text-center"><input type="text" name="dokumenterkait[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" value="<?= $daftar_tilik->dokumen_terkait ?>"></td>
                                        <td class="text-center"><input type="text" name="hasilobservasi[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" value="<?= $daftar_tilik->hasil_observasi ?>"></td>
                                        <td class="text-center"><input type="checkbox" name="my[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" <?= ($daftar_tilik->my == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mb[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" <?= ($daftar_tilik->mb == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="m[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" <?= ($daftar_tilik->m == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mp[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" <?= ($daftar_tilik->mp == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="text" name="rekomendasi[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" value="<?= $daftar_tilik->rekomendasi ?>"></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr class="text-center" style="background-color: #C0C0C0; color:black;">
                                    <th colspan="4">Jumlah Nilai</th>
                                    <th style="background-color: #ffa07a; color:black;"> <?= $total_daftar_tilik2['my'] ?></th>
                                    <th style="background-color: #3EB489; color:black;"><?= $total_daftar_tilik2['mb'] ?></th>
                                    <th style="background-color: #B0C4DE; color:black;"><?= $total_daftar_tilik2['m'] ?></th>
                                    <th style="background-color: #B0C4DE; color:black;"><?= $total_daftar_tilik2['mp'] ?></th>
                                </tr>
                            </tfoot>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-break"></div>

<div class="container-fluid">
    <div class="row-lg-12">
        <div class="card mt-2">
            <div class="card-body">
                <h4 class="d-flex justify-content-center align-items-center mt-3 font-weight-bold text-dark"><?= $title1 ?></h4>
                <div class="table-responsive mt-2">
                    <table class="table table-borderless" style="color:black;">
                        <tr>
                            <td>Strata</td>
                            <td>:</td>
                            <td>S1</td>
                        </tr>

                        <tr>
                            <td>Universitas</td>
                            <td>:</td>
                            <td>INSTITUT TEKNOLOGI SUMATERA</td>
                        </tr>

                        <tr>
                            <td>Auditor</td>
                            <td>:</td>
                            <td>Tim Auditor Mutu Internal ITERA</td>
                        </tr>

                        <tr>
                            <td>Dokumen Acuan</td>
                            <td>:</td>
                            <td>Keuangan</td>
                        </tr>
                    </table>
                </div>


                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="text-center">
                            <tr>
                                <th rowspan="2" style="background-color: #808080; color:black;">No</th>
                                <th rowspan="2" style="background-color: #808080; color:black;">Dokumen Terkait</th>
                                <th colspan="4" style="background-color: #ffa07a; color:black;">Kondisi Dokumen</th>
                                <th colspan="2" style="background-color: #3EB489; color:black;">Kategori Temuan</th>
                                <th colspan="2" style="background-color: #B0C4DE; color:black;">Status Temuan</th>
                                <th rowspan="2" style="background-color: #FF8C00; color:black;">Catatan</th>
                                <th rowspan="2" style="background-color: #FFFF00; color:black;">Penanggung Jawab</th>
                            </tr>

                            <tr>
                                <th style="background-color: #ffa07a; color:black;">MY*</th>
                                <th style="background-color: #ffa07a; color:black;">MB*</th>
                                <th style="background-color: #ffa07a; color:black;">M*</th>
                                <th style="background-color: #ffa07a; color:black;">MP*</th>
                                <th style="background-color: #3EB489; color:black;">OB*</th>
                                <th style="background-color: #3EB489; color:black;">KTS*</th>
                                <th style="background-color: #B0C4DE; color:black;">OPEN</th>
                                <th style="background-color: #B0C4DE; color:black;">CLOSE</th>
                            </tr>
                        </thead>

                        <form action="<?= base_url("auditorjurusan/add_nilai_hasil_desk_utama") ?>" method="POST">

                            <tbody style="background-color: white; color: black;">
                                <?php
                                $no = 1;
                                foreach ($tampil_hasil_desk_utama_jurusan3 as $hasil_desk) :
                                ?>
                                    <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td>
                                            <?= $hasil_desk->nama_dokumen_terkait ?>
                                            <input type="hidden" name="id_hasil_desk[]" value="<?= $hasil_desk->id_hasil_desk ?>">
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="my[<?= $hasil_desk->id_hasil_desk ?>]" id="my<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->my == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mb[<?= $hasil_desk->id_hasil_desk ?>]" id="mb<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->mb == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="m[<?= $hasil_desk->id_hasil_desk ?>]" id="m<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->m == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mp[<?= $hasil_desk->id_hasil_desk ?>]" id="mp<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->mp == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="ob[<?= $hasil_desk->id_hasil_desk ?>]" id="ob<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->ob == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="kts[<?= $hasil_desk->id_hasil_desk ?>]" id="kts<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->kts == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="open[<?= $hasil_desk->id_hasil_desk ?>]" id="open<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->open == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="close[<?= $hasil_desk->id_hasil_desk ?>]" id="close<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->close == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="text" name="catatan[<?= $hasil_desk->id_hasil_desk ?>]" id="catatan<?= $hasil_desk->id_hasil_desk ?>" value="<?= $hasil_desk->catatan ?>"></td>
                                        <td class="text-center"><input type="text" name="penanggungjawab[<?= $hasil_desk->id_hasil_desk ?>]" id="penanggungjawab<?= $hasil_desk->id_hasil_desk ?>" value="<?= $hasil_desk->penanggungjawab ?>"></td>

                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </form>

                        <form action="<?= base_url("auditorjurusan/add_nilai_hasil_desk_tambahan") ?>" method="POST">
                            <!-- tampil_tambahan_hasil_desk_auditor -->
                            <?php if ($tampil_hasil_desk_tambahan_jurusan3 !== null) : ?>
                                <tbody style="background-color: white; color: black;">
                                    <?php
                                    $no = 1;
                                    foreach ($tampil_hasil_desk_tambahan_jurusan3 as $hasil_desk) :
                                    ?>
                                        <tr>
                                            <td class="text-center"><?= $no++; ?></td>
                                            <td>
                                                <?= $hasil_desk->tambahan_hasil_desk ?>
                                                <input type="hidden" name="id_auditor_hasil_desk[]" value="<?= $hasil_desk->id_auditor_hasil_desk ?>">
                                            </td>
                                            <td class="text-center"><input type="checkbox" name="my[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="my<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->my == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="mb[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="mb<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->mb == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="m[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="m<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->m == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="mp[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="mp<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->mp == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="ob[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="ob<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->ob == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="kts[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="kts<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->kts == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="open[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="open<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->open == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="close[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="close<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->close == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="text" name="catatan[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="catatan<?= $hasil_desk->id_auditor_hasil_desk ?>" value="<?= $hasil_desk->catatan ?>"></td>
                                            <td class="text-center"><input type="text" name="penanggungjawab[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="penanggungjawab<?= $hasil_desk->id_auditor_hasil_desk ?>" value="<?= $hasil_desk->penanggungjawab ?>"></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            <?php endif ?>
                        </form>

                        <tfoot>
                            <tr class="text-center" style="background-color: #C0C0C0; color:black;">
                                <th colspan="2">Jumlah Nilai</th>
                                <th style="background-color: #ffa07a; color:black;"> <?= $total_checkbox3['my'] ?></th>
                                <th style="background-color: #3EB489; color:black;"><?= $total_checkbox3['mb'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox3['m'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox3['mp'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox3['ob'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox3['kts'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox3['open'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox3['close'] ?></th>

                            </tr>
                            </thead>
                        </tfoot>

                    </table>
                </div>
                <p style="color:black;"> * M= Memenuhi, MP= Melampaui, MB= Belum Memenuhi, MY= Menyimpang <br> <br>* OB= Observasi, KTS= Ketidaksesuaian</br></br></p>
            </div>
        </div>
    </div>

    <div class="row-lg-12 mt-2">
        <div class="card mt-2">
            <div class="card-body">
                <h4 class="d-flex justify-content-center align-items-center mt-3 font-weight-bold text-dark"><?= $title2 ?></h4>


                <div class="table-data">
                    <table class="table table-bordered">
                        <thead class="text-center" style="background-color: #C0C0C0; color:black;">
                            <tr>
                                <th rowspan="1">No</th>
                                <th rowspan="1">Pertanyaan</th>
                                <th colspan="1">Dokumen Terkait</th>
                                <th colspan="1">Hasil Observasi/Audit/Visitasi</th>
                                <th colspan="1">MY*</th>
                                <th rowspan="1">MB*</th>
                                <th rowspan="1">M*</th>
                                <th rowspan="1">MP*</th>
                                <th rowspan="1">Rekomendasi</th>
                            </tr>
                        </thead>
                        <form action="<?= base_url("auditorjurusan/add_nilai_daftar_tilik_utama") ?>" method="POST">

                            <tbody style="background-color: white; color:black;">
                                <?php
                                $no = 1;
                                foreach ($tampil_daftar_tilik_utama_jurusan3 as $daftar_tilik) :
                                ?>
                                    <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td>
                                            <?= $daftar_tilik->pertanyaan ?>
                                            <input type="hidden" name="id_daftar_tilik[]" value="<?= $daftar_tilik->id_daftar_tilik ?>">
                                        </td>
                                        <td class="text-center"><input type="text" name="dokumenterkait[<?= $daftar_tilik->id_daftar_tilik ?>]" value="<?= $daftar_tilik->dokumen_terkait ?>"></td>
                                        <td class="text-center"><input type="text" name="hasilobservasi[<?= $daftar_tilik->id_daftar_tilik ?>]" value="<?= $daftar_tilik->hasil_observasi ?>"></td>
                                        <td class="text-center"><input type="checkbox" name="my[<?= $daftar_tilik->id_daftar_tilik ?>]" <?= ($daftar_tilik->my == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mb[<?= $daftar_tilik->id_daftar_tilik ?>]" <?= ($daftar_tilik->mb == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="m[<?= $daftar_tilik->id_daftar_tilik ?>]" <?= ($daftar_tilik->m == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mp[<?= $daftar_tilik->id_daftar_tilik ?>]" <?= ($daftar_tilik->mp == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="text" name="rekomendasi[<?= $daftar_tilik->id_daftar_tilik ?>]" value="<?= $daftar_tilik->rekomendasi ?>"></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </form>


                        <form action="<?= base_url("auditorjurusan/add_nilai_daftar_tilik_tambahan") ?>" method="POST">

                            </thead>
                            <tbody style="background-color: white; color:black;">
                                <?php
                                $no = 1;
                                foreach ($tampil_daftar_tilik_tambahan_jurusan3 as $daftar_tilik) :
                                ?>
                                    <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td>
                                            <?= $daftar_tilik->tambahan_daftar_tilik ?>
                                            <input type="hidden" name="id_auditor_daftar_tilik[]" value="<?= $daftar_tilik->id_auditor_daftar_tilik ?>">
                                        </td>
                                        <td class="text-center"><input type="text" name="dokumenterkait[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" value="<?= $daftar_tilik->dokumen_terkait ?>"></td>
                                        <td class="text-center"><input type="text" name="hasilobservasi[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" value="<?= $daftar_tilik->hasil_observasi ?>"></td>
                                        <td class="text-center"><input type="checkbox" name="my[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" <?= ($daftar_tilik->my == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mb[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" <?= ($daftar_tilik->mb == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="m[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" <?= ($daftar_tilik->m == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mp[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" <?= ($daftar_tilik->mp == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="text" name="rekomendasi[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" value="<?= $daftar_tilik->rekomendasi ?>"></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr class="text-center" style="background-color: #C0C0C0; color:black;">
                                    <th colspan="4">Jumlah Nilai</th>
                                    <th style="background-color: #ffa07a; color:black;"> <?= $total_daftar_tilik3['my'] ?></th>
                                    <th style="background-color: #3EB489; color:black;"><?= $total_daftar_tilik3['mb'] ?></th>
                                    <th style="background-color: #B0C4DE; color:black;"><?= $total_daftar_tilik3['m'] ?></th>
                                    <th style="background-color: #B0C4DE; color:black;"><?= $total_daftar_tilik3['mp'] ?></th>
                                </tr>
                            </tfoot>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-break"></div>

<div class="container-fluid">
    <div class="row-lg-12">
        <div class="card mt-2">
            <div class="card-body">
                <h4 class="d-flex justify-content-center align-items-center mt-3 font-weight-bold text-dark"><?= $title1 ?></h4>
                <div class="table-responsive mt-2">
                    <table class="table table-borderless" style="color:black;">
                        <tr>
                            <td>Strata</td>
                            <td>:</td>
                            <td>S1</td>
                        </tr>

                        <tr>
                            <td>Universitas</td>
                            <td>:</td>
                            <td>INSTITUT TEKNOLOGI SUMATERA</td>
                        </tr>

                        <tr>
                            <td>Auditor</td>
                            <td>:</td>
                            <td>Tim Auditor Mutu Internal ITERA</td>
                        </tr>

                        <tr>
                            <td>Dokumen Acuan</td>
                            <td>:</td>
                            <td>Sumber Daya Manusia</td>
                        </tr>
                    </table>
                </div>


                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="text-center">
                            <tr>
                                <th rowspan="2" style="background-color: #808080; color:black;">No</th>
                                <th rowspan="2" style="background-color: #808080; color:black;">Dokumen Terkait</th>
                                <th colspan="4" style="background-color: #ffa07a; color:black;">Kondisi Dokumen</th>
                                <th colspan="2" style="background-color: #3EB489; color:black;">Kategori Temuan</th>
                                <th colspan="2" style="background-color: #B0C4DE; color:black;">Status Temuan</th>
                                <th rowspan="2" style="background-color: #FF8C00; color:black;">Catatan</th>
                                <th rowspan="2" style="background-color: #FFFF00; color:black;">Penanggung Jawab</th>
                            </tr>

                            <tr>
                                <th style="background-color: #ffa07a; color:black;">MY*</th>
                                <th style="background-color: #ffa07a; color:black;">MB*</th>
                                <th style="background-color: #ffa07a; color:black;">M*</th>
                                <th style="background-color: #ffa07a; color:black;">MP*</th>
                                <th style="background-color: #3EB489; color:black;">OB*</th>
                                <th style="background-color: #3EB489; color:black;">KTS*</th>
                                <th style="background-color: #B0C4DE; color:black;">OPEN</th>
                                <th style="background-color: #B0C4DE; color:black;">CLOSE</th>
                            </tr>
                        </thead>

                        <form action="<?= base_url("auditorjurusan/add_nilai_hasil_desk_utama") ?>" method="POST">

                            <tbody style="background-color: white; color: black;">
                                <?php
                                $no = 1;
                                foreach ($tampil_hasil_desk_utama_jurusan4 as $hasil_desk) :
                                ?>
                                    <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td>
                                            <?= $hasil_desk->nama_dokumen_terkait ?>
                                            <input type="hidden" name="id_hasil_desk[]" value="<?= $hasil_desk->id_hasil_desk ?>">
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="my[<?= $hasil_desk->id_hasil_desk ?>]" id="my<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->my == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mb[<?= $hasil_desk->id_hasil_desk ?>]" id="mb<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->mb == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="m[<?= $hasil_desk->id_hasil_desk ?>]" id="m<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->m == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mp[<?= $hasil_desk->id_hasil_desk ?>]" id="mp<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->mp == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="ob[<?= $hasil_desk->id_hasil_desk ?>]" id="ob<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->ob == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="kts[<?= $hasil_desk->id_hasil_desk ?>]" id="kts<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->kts == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="open[<?= $hasil_desk->id_hasil_desk ?>]" id="open<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->open == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="close[<?= $hasil_desk->id_hasil_desk ?>]" id="close<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->close == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="text" name="catatan[<?= $hasil_desk->id_hasil_desk ?>]" id="catatan<?= $hasil_desk->id_hasil_desk ?>" value="<?= $hasil_desk->catatan ?>"></td>
                                        <td class="text-center"><input type="text" name="penanggungjawab[<?= $hasil_desk->id_hasil_desk ?>]" id="penanggungjawab<?= $hasil_desk->id_hasil_desk ?>" value="<?= $hasil_desk->penanggungjawab ?>"></td>

                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </form>

                        <form action="<?= base_url("auditorjurusan/add_nilai_hasil_desk_tambahan") ?>" method="POST">
                            <!-- tampil_tambahan_hasil_desk_auditor -->
                            <?php if ($tampil_hasil_desk_tambahan_jurusan4 !== null) : ?>
                                <tbody style="background-color: white; color: black;">
                                    <?php
                                    $no = 1;
                                    foreach ($tampil_hasil_desk_tambahan_jurusan4 as $hasil_desk) :
                                    ?>
                                        <tr>
                                            <td class="text-center"><?= $no++; ?></td>
                                            <td>
                                                <?= $hasil_desk->tambahan_hasil_desk ?>
                                                <input type="hidden" name="id_auditor_hasil_desk[]" value="<?= $hasil_desk->id_auditor_hasil_desk ?>">
                                            </td>
                                            <td class="text-center"><input type="checkbox" name="my[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="my<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->my == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="mb[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="mb<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->mb == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="m[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="m<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->m == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="mp[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="mp<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->mp == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="ob[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="ob<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->ob == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="kts[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="kts<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->kts == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="open[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="open<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->open == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="close[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="close<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->close == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="text" name="catatan[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="catatan<?= $hasil_desk->id_auditor_hasil_desk ?>" value="<?= $hasil_desk->catatan ?>"></td>
                                            <td class="text-center"><input type="text" name="penanggungjawab[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="penanggungjawab<?= $hasil_desk->id_auditor_hasil_desk ?>" value="<?= $hasil_desk->penanggungjawab ?>"></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            <?php endif ?>
                        </form>

                        <tfoot>
                            <tr class="text-center" style="background-color: #C0C0C0; color:black;">
                                <th colspan="2">Jumlah Nilai</th>
                                <th style="background-color: #ffa07a; color:black;"> <?= $total_checkbox4['my'] ?></th>
                                <th style="background-color: #3EB489; color:black;"><?= $total_checkbox4['mb'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox4['m'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox4['mp'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox4['ob'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox4['kts'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox4['open'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox4['close'] ?></th>

                            </tr>
                            </thead>
                        </tfoot>

                    </table>
                </div>
                <p style="color:black;"> * M= Memenuhi, MP= Melampaui, MB= Belum Memenuhi, MY= Menyimpang <br> <br>* OB= Observasi, KTS= Ketidaksesuaian</br></br></p>
            </div>
        </div>
    </div>

    <div class="row-lg-12 mt-2">
        <div class="card mt-2">
            <div class="card-body">
                <h4 class="d-flex justify-content-center align-items-center mt-3 font-weight-bold text-dark"><?= $title2 ?></h4>


                <div class="table-data">
                    <table class="table table-bordered">
                        <thead class="text-center" style="background-color: #C0C0C0; color:black;">
                            <tr>
                                <th rowspan="1">No</th>
                                <th rowspan="1">Pertanyaan</th>
                                <th colspan="1">Dokumen Terkait</th>
                                <th colspan="1">Hasil Observasi/Audit/Visitasi</th>
                                <th colspan="1">MY*</th>
                                <th rowspan="1">MB*</th>
                                <th rowspan="1">M*</th>
                                <th rowspan="1">MP*</th>
                                <th rowspan="1">Rekomendasi</th>
                            </tr>
                        </thead>
                        <form action="<?= base_url("auditorjurusan/add_nilai_daftar_tilik_utama") ?>" method="POST">

                            <tbody style="background-color: white; color:black;">
                                <?php
                                $no = 1;
                                foreach ($tampil_daftar_tilik_utama_jurusan4 as $daftar_tilik) :
                                ?>
                                    <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td>
                                            <?= $daftar_tilik->pertanyaan ?>
                                            <input type="hidden" name="id_daftar_tilik[]" value="<?= $daftar_tilik->id_daftar_tilik ?>">
                                        </td>
                                        <td class="text-center"><input type="text" name="dokumenterkait[<?= $daftar_tilik->id_daftar_tilik ?>]" value="<?= $daftar_tilik->dokumen_terkait ?>"></td>
                                        <td class="text-center"><input type="text" name="hasilobservasi[<?= $daftar_tilik->id_daftar_tilik ?>]" value="<?= $daftar_tilik->hasil_observasi ?>"></td>
                                        <td class="text-center"><input type="checkbox" name="my[<?= $daftar_tilik->id_daftar_tilik ?>]" <?= ($daftar_tilik->my == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mb[<?= $daftar_tilik->id_daftar_tilik ?>]" <?= ($daftar_tilik->mb == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="m[<?= $daftar_tilik->id_daftar_tilik ?>]" <?= ($daftar_tilik->m == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mp[<?= $daftar_tilik->id_daftar_tilik ?>]" <?= ($daftar_tilik->mp == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="text" name="rekomendasi[<?= $daftar_tilik->id_daftar_tilik ?>]" value="<?= $daftar_tilik->rekomendasi ?>"></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </form>


                        <form action="<?= base_url("auditorjurusan/add_nilai_daftar_tilik_tambahan") ?>" method="POST">

                            </thead>
                            <tbody style="background-color: white; color:black;">
                                <?php
                                $no = 1;
                                foreach ($tampil_daftar_tilik_tambahan_jurusan4 as $daftar_tilik) :
                                ?>
                                    <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td>
                                            <?= $daftar_tilik->tambahan_daftar_tilik ?>
                                            <input type="hidden" name="id_auditor_daftar_tilik[]" value="<?= $daftar_tilik->id_auditor_daftar_tilik ?>">
                                        </td>
                                        <td class="text-center"><input type="text" name="dokumenterkait[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" value="<?= $daftar_tilik->dokumen_terkait ?>"></td>
                                        <td class="text-center"><input type="text" name="hasilobservasi[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" value="<?= $daftar_tilik->hasil_observasi ?>"></td>
                                        <td class="text-center"><input type="checkbox" name="my[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" <?= ($daftar_tilik->my == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mb[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" <?= ($daftar_tilik->mb == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="m[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" <?= ($daftar_tilik->m == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mp[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" <?= ($daftar_tilik->mp == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="text" name="rekomendasi[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" value="<?= $daftar_tilik->rekomendasi ?>"></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr class="text-center" style="background-color: #C0C0C0; color:black;">
                                    <th colspan="4">Jumlah Nilai</th>
                                    <th style="background-color: #ffa07a; color:black;"> <?= $total_daftar_tilik4['my'] ?></th>
                                    <th style="background-color: #3EB489; color:black;"><?= $total_daftar_tilik4['mb'] ?></th>
                                    <th style="background-color: #B0C4DE; color:black;"><?= $total_daftar_tilik4['m'] ?></th>
                                    <th style="background-color: #B0C4DE; color:black;"><?= $total_daftar_tilik4['mp'] ?></th>
                                </tr>
                            </tfoot>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-break"></div>

<div class="container-fluid">
    <div class="row-lg-12">
        <div class="card mt-2">
            <div class="card-body">
                <h4 class="d-flex justify-content-center align-items-center mt-3 font-weight-bold text-dark"><?= $title1 ?></h4>
                <div class="table-responsive mt-2">
                    <table class="table table-borderless" style="color:black;">
                        <tr>
                            <td>Strata</td>
                            <td>:</td>
                            <td>S1</td>
                        </tr>

                        <tr>
                            <td>Universitas</td>
                            <td>:</td>
                            <td>INSTITUT TEKNOLOGI SUMATERA</td>
                        </tr>

                        <tr>
                            <td>Auditor</td>
                            <td>:</td>
                            <td>Tim Auditor Mutu Internal ITERA</td>
                        </tr>

                        <tr>
                            <td>Dokumen Acuan</td>
                            <td>:</td>
                            <td>Layanan Semester Pendek</td>
                        </tr>
                    </table>
                </div>


                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="text-center">
                            <tr>
                                <th rowspan="2" style="background-color: #808080; color:black;">No</th>
                                <th rowspan="2" style="background-color: #808080; color:black;">Dokumen Terkait</th>
                                <th colspan="4" style="background-color: #ffa07a; color:black;">Kondisi Dokumen</th>
                                <th colspan="2" style="background-color: #3EB489; color:black;">Kategori Temuan</th>
                                <th colspan="2" style="background-color: #B0C4DE; color:black;">Status Temuan</th>
                                <th rowspan="2" style="background-color: #FF8C00; color:black;">Catatan</th>
                                <th rowspan="2" style="background-color: #FFFF00; color:black;">Penanggung Jawab</th>
                            </tr>

                            <tr>
                                <th style="background-color: #ffa07a; color:black;">MY*</th>
                                <th style="background-color: #ffa07a; color:black;">MB*</th>
                                <th style="background-color: #ffa07a; color:black;">M*</th>
                                <th style="background-color: #ffa07a; color:black;">MP*</th>
                                <th style="background-color: #3EB489; color:black;">OB*</th>
                                <th style="background-color: #3EB489; color:black;">KTS*</th>
                                <th style="background-color: #B0C4DE; color:black;">OPEN</th>
                                <th style="background-color: #B0C4DE; color:black;">CLOSE</th>
                            </tr>
                        </thead>

                        <form action="<?= base_url("auditorjurusan/add_nilai_hasil_desk_utama") ?>" method="POST">

                            <tbody style="background-color: white; color: black;">
                                <?php
                                $no = 1;
                                foreach ($tampil_hasil_desk_utama_jurusan5 as $hasil_desk) :
                                ?>
                                    <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td>
                                            <?= $hasil_desk->nama_dokumen_terkait ?>
                                            <input type="hidden" name="id_hasil_desk[]" value="<?= $hasil_desk->id_hasil_desk ?>">
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="my[<?= $hasil_desk->id_hasil_desk ?>]" id="my<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->my == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mb[<?= $hasil_desk->id_hasil_desk ?>]" id="mb<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->mb == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="m[<?= $hasil_desk->id_hasil_desk ?>]" id="m<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->m == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mp[<?= $hasil_desk->id_hasil_desk ?>]" id="mp<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->mp == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="ob[<?= $hasil_desk->id_hasil_desk ?>]" id="ob<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->ob == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="kts[<?= $hasil_desk->id_hasil_desk ?>]" id="kts<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->kts == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="open[<?= $hasil_desk->id_hasil_desk ?>]" id="open<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->open == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="close[<?= $hasil_desk->id_hasil_desk ?>]" id="close<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->close == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="text" name="catatan[<?= $hasil_desk->id_hasil_desk ?>]" id="catatan<?= $hasil_desk->id_hasil_desk ?>" value="<?= $hasil_desk->catatan ?>"></td>
                                        <td class="text-center"><input type="text" name="penanggungjawab[<?= $hasil_desk->id_hasil_desk ?>]" id="penanggungjawab<?= $hasil_desk->id_hasil_desk ?>" value="<?= $hasil_desk->penanggungjawab ?>"></td>

                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </form>

                        <form action="<?= base_url("auditorjurusan/add_nilai_hasil_desk_tambahan") ?>" method="POST">
                            <!-- tampil_tambahan_hasil_desk_auditor -->
                            <?php if ($tampil_hasil_desk_tambahan_jurusan5 !== null) : ?>
                                <tbody style="background-color: white; color: black;">
                                    <?php
                                    $no = 1;
                                    foreach ($tampil_hasil_desk_tambahan_jurusan5 as $hasil_desk) :
                                    ?>
                                        <tr>
                                            <td class="text-center"><?= $no++; ?></td>
                                            <td>
                                                <?= $hasil_desk->tambahan_hasil_desk ?>
                                                <input type="hidden" name="id_auditor_hasil_desk[]" value="<?= $hasil_desk->id_auditor_hasil_desk ?>">
                                            </td>
                                            <td class="text-center"><input type="checkbox" name="my[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="my<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->my == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="mb[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="mb<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->mb == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="m[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="m<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->m == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="mp[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="mp<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->mp == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="ob[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="ob<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->ob == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="kts[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="kts<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->kts == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="open[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="open<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->open == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="close[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="close<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->close == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="text" name="catatan[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="catatan<?= $hasil_desk->id_auditor_hasil_desk ?>" value="<?= $hasil_desk->catatan ?>"></td>
                                            <td class="text-center"><input type="text" name="penanggungjawab[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="penanggungjawab<?= $hasil_desk->id_auditor_hasil_desk ?>" value="<?= $hasil_desk->penanggungjawab ?>"></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            <?php endif ?>
                        </form>

                        <tfoot>
                            <tr class="text-center" style="background-color: #C0C0C0; color:black;">
                                <th colspan="2">Jumlah Nilai</th>
                                <th style="background-color: #ffa07a; color:black;"> <?= $total_checkbox5['my'] ?></th>
                                <th style="background-color: #3EB489; color:black;"><?= $total_checkbox5['mb'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox5['m'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox5['mp'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox5['ob'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox5['kts'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox5['open'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox5['close'] ?></th>

                            </tr>
                            </thead>
                        </tfoot>

                    </table>
                </div>
                <p style="color:black;"> * M= Memenuhi, MP= Melampaui, MB= Belum Memenuhi, MY= Menyimpang <br> <br>* OB= Observasi, KTS= Ketidaksesuaian</br></br></p>
            </div>
        </div>
    </div>

    <div class="row-lg-12 mt-2">
        <div class="card mt-2">
            <div class="card-body">
                <h4 class="d-flex justify-content-center align-items-center mt-3 font-weight-bold text-dark"><?= $title2 ?></h4>


                <div class="table-data">
                    <table class="table table-bordered">
                        <thead class="text-center" style="background-color: #C0C0C0; color:black;">
                            <tr>
                                <th rowspan="1">No</th>
                                <th rowspan="1">Pertanyaan</th>
                                <th colspan="1">Dokumen Terkait</th>
                                <th colspan="1">Hasil Observasi/Audit/Visitasi</th>
                                <th colspan="1">MY*</th>
                                <th rowspan="1">MB*</th>
                                <th rowspan="1">M*</th>
                                <th rowspan="1">MP*</th>
                                <th rowspan="1">Rekomendasi</th>
                            </tr>
                        </thead>
                        <form action="<?= base_url("auditorjurusan/add_nilai_daftar_tilik_utama") ?>" method="POST">

                            <tbody style="background-color: white; color:black;">
                                <?php
                                $no = 1;
                                foreach ($tampil_daftar_tilik_utama_jurusan5 as $daftar_tilik) :
                                ?>
                                    <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td>
                                            <?= $daftar_tilik->pertanyaan ?>
                                            <input type="hidden" name="id_daftar_tilik[]" value="<?= $daftar_tilik->id_daftar_tilik ?>">
                                        </td>
                                        <td class="text-center"><input type="text" name="dokumenterkait[<?= $daftar_tilik->id_daftar_tilik ?>]" value="<?= $daftar_tilik->dokumen_terkait ?>"></td>
                                        <td class="text-center"><input type="text" name="hasilobservasi[<?= $daftar_tilik->id_daftar_tilik ?>]" value="<?= $daftar_tilik->hasil_observasi ?>"></td>
                                        <td class="text-center"><input type="checkbox" name="my[<?= $daftar_tilik->id_daftar_tilik ?>]" <?= ($daftar_tilik->my == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mb[<?= $daftar_tilik->id_daftar_tilik ?>]" <?= ($daftar_tilik->mb == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="m[<?= $daftar_tilik->id_daftar_tilik ?>]" <?= ($daftar_tilik->m == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mp[<?= $daftar_tilik->id_daftar_tilik ?>]" <?= ($daftar_tilik->mp == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="text" name="rekomendasi[<?= $daftar_tilik->id_daftar_tilik ?>]" value="<?= $daftar_tilik->rekomendasi ?>"></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </form>


                        <form action="<?= base_url("auditorjurusan/add_nilai_daftar_tilik_tambahan") ?>" method="POST">

                            </thead>
                            <tbody style="background-color: white; color:black;">
                                <?php
                                $no = 1;
                                foreach ($tampil_daftar_tilik_tambahan_jurusan5 as $daftar_tilik) :
                                ?>
                                    <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td>
                                            <?= $daftar_tilik->tambahan_daftar_tilik ?>
                                            <input type="hidden" name="id_auditor_daftar_tilik[]" value="<?= $daftar_tilik->id_auditor_daftar_tilik ?>">
                                        </td>
                                        <td class="text-center"><input type="text" name="dokumenterkait[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" value="<?= $daftar_tilik->dokumen_terkait ?>"></td>
                                        <td class="text-center"><input type="text" name="hasilobservasi[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" value="<?= $daftar_tilik->hasil_observasi ?>"></td>
                                        <td class="text-center"><input type="checkbox" name="my[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" <?= ($daftar_tilik->my == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mb[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" <?= ($daftar_tilik->mb == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="m[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" <?= ($daftar_tilik->m == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mp[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" <?= ($daftar_tilik->mp == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="text" name="rekomendasi[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" value="<?= $daftar_tilik->rekomendasi ?>"></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr class="text-center" style="background-color: #C0C0C0; color:black;">
                                    <th colspan="4">Jumlah Nilai</th>
                                    <th style="background-color: #ffa07a; color:black;"> <?= $total_daftar_tilik5['my'] ?></th>
                                    <th style="background-color: #3EB489; color:black;"><?= $total_daftar_tilik5['mb'] ?></th>
                                    <th style="background-color: #B0C4DE; color:black;"><?= $total_daftar_tilik5['m'] ?></th>
                                    <th style="background-color: #B0C4DE; color:black;"><?= $total_daftar_tilik5['mp'] ?></th>
                                </tr>
                            </tfoot>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-break"></div>

<div class="container-fluid">
    <div class="row-lg-12">
        <div class="card mt-2">
            <div class="card-body">
                <h4 class="d-flex justify-content-center align-items-center mt-3 font-weight-bold text-dark"><?= $title1 ?></h4>
                <div class="table-responsive mt-2">
                    <table class="table table-borderless" style="color:black;">
                        <tr>
                            <td>Strata</td>
                            <td>:</td>
                            <td>S1</td>
                        </tr>

                        <tr>
                            <td>Universitas</td>
                            <td>:</td>
                            <td>INSTITUT TEKNOLOGI SUMATERA</td>
                        </tr>

                        <tr>
                            <td>Auditor</td>
                            <td>:</td>
                            <td>Tim Auditor Mutu Internal ITERA</td>
                        </tr>

                        <tr>
                            <td>Dokumen Acuan</td>
                            <td>:</td>
                            <td>Layanan Pembinaan Softskill</td>
                        </tr>
                    </table>
                </div>


                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="text-center">
                            <tr>
                                <th rowspan="2" style="background-color: #808080; color:black;">No</th>
                                <th rowspan="2" style="background-color: #808080; color:black;">Dokumen Terkait</th>
                                <th colspan="4" style="background-color: #ffa07a; color:black;">Kondisi Dokumen</th>
                                <th colspan="2" style="background-color: #3EB489; color:black;">Kategori Temuan</th>
                                <th colspan="2" style="background-color: #B0C4DE; color:black;">Status Temuan</th>
                                <th rowspan="2" style="background-color: #FF8C00; color:black;">Catatan</th>
                                <th rowspan="2" style="background-color: #FFFF00; color:black;">Penanggung Jawab</th>
                            </tr>

                            <tr>
                                <th style="background-color: #ffa07a; color:black;">MY*</th>
                                <th style="background-color: #ffa07a; color:black;">MB*</th>
                                <th style="background-color: #ffa07a; color:black;">M*</th>
                                <th style="background-color: #ffa07a; color:black;">MP*</th>
                                <th style="background-color: #3EB489; color:black;">OB*</th>
                                <th style="background-color: #3EB489; color:black;">KTS*</th>
                                <th style="background-color: #B0C4DE; color:black;">OPEN</th>
                                <th style="background-color: #B0C4DE; color:black;">CLOSE</th>
                            </tr>
                        </thead>

                        <form action="<?= base_url("auditorjurusan/add_nilai_hasil_desk_utama") ?>" method="POST">

                            <tbody style="background-color: white; color: black;">
                                <?php
                                $no = 1;
                                foreach ($tampil_hasil_desk_utama_jurusan6 as $hasil_desk) :
                                ?>
                                    <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td>
                                            <?= $hasil_desk->nama_dokumen_terkait ?>
                                            <input type="hidden" name="id_hasil_desk[]" value="<?= $hasil_desk->id_hasil_desk ?>">
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="my[<?= $hasil_desk->id_hasil_desk ?>]" id="my<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->my == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mb[<?= $hasil_desk->id_hasil_desk ?>]" id="mb<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->mb == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="m[<?= $hasil_desk->id_hasil_desk ?>]" id="m<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->m == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mp[<?= $hasil_desk->id_hasil_desk ?>]" id="mp<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->mp == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="ob[<?= $hasil_desk->id_hasil_desk ?>]" id="ob<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->ob == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="kts[<?= $hasil_desk->id_hasil_desk ?>]" id="kts<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->kts == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="open[<?= $hasil_desk->id_hasil_desk ?>]" id="open<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->open == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="close[<?= $hasil_desk->id_hasil_desk ?>]" id="close<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->close == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="text" name="catatan[<?= $hasil_desk->id_hasil_desk ?>]" id="catatan<?= $hasil_desk->id_hasil_desk ?>" value="<?= $hasil_desk->catatan ?>"></td>
                                        <td class="text-center"><input type="text" name="penanggungjawab[<?= $hasil_desk->id_hasil_desk ?>]" id="penanggungjawab<?= $hasil_desk->id_hasil_desk ?>" value="<?= $hasil_desk->penanggungjawab ?>"></td>

                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </form>

                        <form action="<?= base_url("auditorjurusan/add_nilai_hasil_desk_tambahan") ?>" method="POST">
                            <!-- tampil_tambahan_hasil_desk_auditor -->
                            <?php if ($tampil_hasil_desk_tambahan_jurusan6 !== null) : ?>
                                <tbody style="background-color: white; color: black;">
                                    <?php
                                    $no = 1;
                                    foreach ($tampil_hasil_desk_tambahan_jurusan6 as $hasil_desk) :
                                    ?>
                                        <tr>
                                            <td class="text-center"><?= $no++; ?></td>
                                            <td>
                                                <?= $hasil_desk->tambahan_hasil_desk ?>
                                                <input type="hidden" name="id_auditor_hasil_desk[]" value="<?= $hasil_desk->id_auditor_hasil_desk ?>">
                                            </td>
                                            <td class="text-center"><input type="checkbox" name="my[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="my<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->my == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="mb[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="mb<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->mb == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="m[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="m<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->m == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="mp[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="mp<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->mp == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="ob[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="ob<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->ob == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="kts[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="kts<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->kts == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="open[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="open<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->open == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="close[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="close<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->close == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="text" name="catatan[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="catatan<?= $hasil_desk->id_auditor_hasil_desk ?>" value="<?= $hasil_desk->catatan ?>"></td>
                                            <td class="text-center"><input type="text" name="penanggungjawab[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="penanggungjawab<?= $hasil_desk->id_auditor_hasil_desk ?>" value="<?= $hasil_desk->penanggungjawab ?>"></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            <?php endif ?>
                        </form>

                        <tfoot>
                            <tr class="text-center" style="background-color: #C0C0C0; color:black;">
                                <th colspan="2">Jumlah Nilai</th>
                                <th style="background-color: #ffa07a; color:black;"> <?= $total_checkbox6['my'] ?></th>
                                <th style="background-color: #3EB489; color:black;"><?= $total_checkbox6['mb'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox6['m'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox6['mp'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox6['ob'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox6['kts'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox6['open'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox6['close'] ?></th>

                            </tr>
                            </thead>
                        </tfoot>

                    </table>
                </div>
                <p style="color:black;"> * M= Memenuhi, MP= Melampaui, MB= Belum Memenuhi, MY= Menyimpang <br> <br>* OB= Observasi, KTS= Ketidaksesuaian</br></br></p>
            </div>
        </div>
    </div>

    <div class="row-lg-12 mt-2">
        <div class="card mt-2">
            <div class="card-body">
                <h4 class="d-flex justify-content-center align-items-center mt-3 font-weight-bold text-dark"><?= $title2 ?></h4>


                <div class="table-data">
                    <table class="table table-bordered">
                        <thead class="text-center" style="background-color: #C0C0C0; color:black;">
                            <tr>
                                <th rowspan="1">No</th>
                                <th rowspan="1">Pertanyaan</th>
                                <th colspan="1">Dokumen Terkait</th>
                                <th colspan="1">Hasil Observasi/Audit/Visitasi</th>
                                <th colspan="1">MY*</th>
                                <th rowspan="1">MB*</th>
                                <th rowspan="1">M*</th>
                                <th rowspan="1">MP*</th>
                                <th rowspan="1">Rekomendasi</th>
                            </tr>
                        </thead>
                        <form action="<?= base_url("auditorjurusan/add_nilai_daftar_tilik_utama") ?>" method="POST">

                            <tbody style="background-color: white; color:black;">
                                <?php
                                $no = 1;
                                foreach ($tampil_daftar_tilik_utama_jurusan6 as $daftar_tilik) :
                                ?>
                                    <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td>
                                            <?= $daftar_tilik->pertanyaan ?>
                                            <input type="hidden" name="id_daftar_tilik[]" value="<?= $daftar_tilik->id_daftar_tilik ?>">
                                        </td>
                                        <td class="text-center"><input type="text" name="dokumenterkait[<?= $daftar_tilik->id_daftar_tilik ?>]" value="<?= $daftar_tilik->dokumen_terkait ?>"></td>
                                        <td class="text-center"><input type="text" name="hasilobservasi[<?= $daftar_tilik->id_daftar_tilik ?>]" value="<?= $daftar_tilik->hasil_observasi ?>"></td>
                                        <td class="text-center"><input type="checkbox" name="my[<?= $daftar_tilik->id_daftar_tilik ?>]" <?= ($daftar_tilik->my == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mb[<?= $daftar_tilik->id_daftar_tilik ?>]" <?= ($daftar_tilik->mb == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="m[<?= $daftar_tilik->id_daftar_tilik ?>]" <?= ($daftar_tilik->m == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mp[<?= $daftar_tilik->id_daftar_tilik ?>]" <?= ($daftar_tilik->mp == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="text" name="rekomendasi[<?= $daftar_tilik->id_daftar_tilik ?>]" value="<?= $daftar_tilik->rekomendasi ?>"></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </form>


                        <form action="<?= base_url("auditorjurusan/add_nilai_daftar_tilik_tambahan") ?>" method="POST">

                            </thead>
                            <tbody style="background-color: white; color:black;">
                                <?php
                                $no = 1;
                                foreach ($tampil_daftar_tilik_tambahan_jurusan6 as $daftar_tilik) :
                                ?>
                                    <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td>
                                            <?= $daftar_tilik->tambahan_daftar_tilik ?>
                                            <input type="hidden" name="id_auditor_daftar_tilik[]" value="<?= $daftar_tilik->id_auditor_daftar_tilik ?>">
                                        </td>
                                        <td class="text-center"><input type="text" name="dokumenterkait[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" value="<?= $daftar_tilik->dokumen_terkait ?>"></td>
                                        <td class="text-center"><input type="text" name="hasilobservasi[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" value="<?= $daftar_tilik->hasil_observasi ?>"></td>
                                        <td class="text-center"><input type="checkbox" name="my[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" <?= ($daftar_tilik->my == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mb[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" <?= ($daftar_tilik->mb == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="m[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" <?= ($daftar_tilik->m == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mp[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" <?= ($daftar_tilik->mp == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="text" name="rekomendasi[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" value="<?= $daftar_tilik->rekomendasi ?>"></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr class="text-center" style="background-color: #C0C0C0; color:black;">
                                    <th colspan="4">Jumlah Nilai</th>
                                    <th style="background-color: #ffa07a; color:black;"> <?= $total_daftar_tilik6['my'] ?></th>
                                    <th style="background-color: #3EB489; color:black;"><?= $total_daftar_tilik6['mb'] ?></th>
                                    <th style="background-color: #B0C4DE; color:black;"><?= $total_daftar_tilik6['m'] ?></th>
                                    <th style="background-color: #B0C4DE; color:black;"><?= $total_daftar_tilik6['mp'] ?></th>
                                </tr>
                            </tfoot>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-break"></div>

<div class="container-fluid">
    <div class="row-lg-12">
        <div class="card mt-2">
            <div class="card-body">
                <h4 class="d-flex justify-content-center align-items-center mt-3 font-weight-bold text-dark"><?= $title1 ?></h4>
                <div class="table-responsive mt-2">
                    <table class="table table-borderless" style="color:black;">
                        <tr>
                            <td>Strata</td>
                            <td>:</td>
                            <td>S1</td>
                        </tr>

                        <tr>
                            <td>Universitas</td>
                            <td>:</td>
                            <td>INSTITUT TEKNOLOGI SUMATERA</td>
                        </tr>

                        <tr>
                            <td>Auditor</td>
                            <td>:</td>
                            <td>Tim Auditor Mutu Internal ITERA</td>
                        </tr>

                        <tr>
                            <td>Dokumen Acuan</td>
                            <td>:</td>
                            <td>Standar Waktu Kerja Dosen dan Tendik</td>
                        </tr>
                    </table>
                </div>


                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="text-center">
                            <tr>
                                <th rowspan="2" style="background-color: #808080; color:black;">No</th>
                                <th rowspan="2" style="background-color: #808080; color:black;">Dokumen Terkait</th>
                                <th colspan="4" style="background-color: #ffa07a; color:black;">Kondisi Dokumen</th>
                                <th colspan="2" style="background-color: #3EB489; color:black;">Kategori Temuan</th>
                                <th colspan="2" style="background-color: #B0C4DE; color:black;">Status Temuan</th>
                                <th rowspan="2" style="background-color: #FF8C00; color:black;">Catatan</th>
                                <th rowspan="2" style="background-color: #FFFF00; color:black;">Penanggung Jawab</th>
                            </tr>

                            <tr>
                                <th style="background-color: #ffa07a; color:black;">MY*</th>
                                <th style="background-color: #ffa07a; color:black;">MB*</th>
                                <th style="background-color: #ffa07a; color:black;">M*</th>
                                <th style="background-color: #ffa07a; color:black;">MP*</th>
                                <th style="background-color: #3EB489; color:black;">OB*</th>
                                <th style="background-color: #3EB489; color:black;">KTS*</th>
                                <th style="background-color: #B0C4DE; color:black;">OPEN</th>
                                <th style="background-color: #B0C4DE; color:black;">CLOSE</th>
                            </tr>
                        </thead>

                        <form action="<?= base_url("auditorjurusan/add_nilai_hasil_desk_utama") ?>" method="POST">

                            <tbody style="background-color: white; color: black;">
                                <?php
                                $no = 1;
                                foreach ($tampil_hasil_desk_utama_jurusan7 as $hasil_desk) :
                                ?>
                                    <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td>
                                            <?= $hasil_desk->nama_dokumen_terkait ?>
                                            <input type="hidden" name="id_hasil_desk[]" value="<?= $hasil_desk->id_hasil_desk ?>">
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="my[<?= $hasil_desk->id_hasil_desk ?>]" id="my<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->my == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mb[<?= $hasil_desk->id_hasil_desk ?>]" id="mb<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->mb == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="m[<?= $hasil_desk->id_hasil_desk ?>]" id="m<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->m == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mp[<?= $hasil_desk->id_hasil_desk ?>]" id="mp<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->mp == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="ob[<?= $hasil_desk->id_hasil_desk ?>]" id="ob<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->ob == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="kts[<?= $hasil_desk->id_hasil_desk ?>]" id="kts<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->kts == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="open[<?= $hasil_desk->id_hasil_desk ?>]" id="open<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->open == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="close[<?= $hasil_desk->id_hasil_desk ?>]" id="close<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->close == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="text" name="catatan[<?= $hasil_desk->id_hasil_desk ?>]" id="catatan<?= $hasil_desk->id_hasil_desk ?>" value="<?= $hasil_desk->catatan ?>"></td>
                                        <td class="text-center"><input type="text" name="penanggungjawab[<?= $hasil_desk->id_hasil_desk ?>]" id="penanggungjawab<?= $hasil_desk->id_hasil_desk ?>" value="<?= $hasil_desk->penanggungjawab ?>"></td>

                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </form>

                        <form action="<?= base_url("auditorjurusan/add_nilai_hasil_desk_tambahan") ?>" method="POST">
                            <!-- tampil_tambahan_hasil_desk_auditor -->
                            <?php if ($tampil_hasil_desk_tambahan_jurusan7 !== null) : ?>
                                <tbody style="background-color: white; color: black;">
                                    <?php
                                    $no = 1;
                                    foreach ($tampil_hasil_desk_tambahan_jurusan7 as $hasil_desk) :
                                    ?>
                                        <tr>
                                            <td class="text-center"><?= $no++; ?></td>
                                            <td>
                                                <?= $hasil_desk->tambahan_hasil_desk ?>
                                                <input type="hidden" name="id_auditor_hasil_desk[]" value="<?= $hasil_desk->id_auditor_hasil_desk ?>">
                                            </td>
                                            <td class="text-center"><input type="checkbox" name="my[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="my<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->my == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="mb[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="mb<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->mb == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="m[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="m<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->m == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="mp[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="mp<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->mp == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="ob[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="ob<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->ob == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="kts[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="kts<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->kts == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="open[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="open<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->open == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="close[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="close<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->close == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="text" name="catatan[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="catatan<?= $hasil_desk->id_auditor_hasil_desk ?>" value="<?= $hasil_desk->catatan ?>"></td>
                                            <td class="text-center"><input type="text" name="penanggungjawab[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="penanggungjawab<?= $hasil_desk->id_auditor_hasil_desk ?>" value="<?= $hasil_desk->penanggungjawab ?>"></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            <?php endif ?>
                        </form>

                        <tfoot>
                            <tr class="text-center" style="background-color: #C0C0C0; color:black;">
                                <th colspan="2">Jumlah Nilai</th>
                                <th style="background-color: #ffa07a; color:black;"> <?= $total_checkbox7['my'] ?></th>
                                <th style="background-color: #3EB489; color:black;"><?= $total_checkbox7['mb'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox7['m'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox7['mp'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox7['ob'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox7['kts'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox7['open'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox7['close'] ?></th>

                            </tr>
                            </thead>
                        </tfoot>

                    </table>
                </div>
                <p style="color:black;"> * M= Memenuhi, MP= Melampaui, MB= Belum Memenuhi, MY= Menyimpang <br> <br>* OB= Observasi, KTS= Ketidaksesuaian</br></br></p>
            </div>
        </div>
    </div>

    <div class="row-lg-12 mt-2">
        <div class="card mt-2">
            <div class="card-body">
                <h4 class="d-flex justify-content-center align-items-center mt-3 font-weight-bold text-dark"><?= $title2 ?></h4>


                <div class="table-data">
                    <table class="table table-bordered">
                        <thead class="text-center" style="background-color: #C0C0C0; color:black;">
                            <tr>
                                <th rowspan="1">No</th>
                                <th rowspan="1">Pertanyaan</th>
                                <th colspan="1">Dokumen Terkait</th>
                                <th colspan="1">Hasil Observasi/Audit/Visitasi</th>
                                <th colspan="1">MY*</th>
                                <th rowspan="1">MB*</th>
                                <th rowspan="1">M*</th>
                                <th rowspan="1">MP*</th>
                                <th rowspan="1">Rekomendasi</th>
                            </tr>
                        </thead>
                        <form action="<?= base_url("auditorjurusan/add_nilai_daftar_tilik_utama") ?>" method="POST">

                            <tbody style="background-color: white; color:black;">
                                <?php
                                $no = 1;
                                foreach ($tampil_daftar_tilik_utama_jurusan7 as $daftar_tilik) :
                                ?>
                                    <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td>
                                            <?= $daftar_tilik->pertanyaan ?>
                                            <input type="hidden" name="id_daftar_tilik[]" value="<?= $daftar_tilik->id_daftar_tilik ?>">
                                        </td>
                                        <td class="text-center"><input type="text" name="dokumenterkait[<?= $daftar_tilik->id_daftar_tilik ?>]" value="<?= $daftar_tilik->dokumen_terkait ?>"></td>
                                        <td class="text-center"><input type="text" name="hasilobservasi[<?= $daftar_tilik->id_daftar_tilik ?>]" value="<?= $daftar_tilik->hasil_observasi ?>"></td>
                                        <td class="text-center"><input type="checkbox" name="my[<?= $daftar_tilik->id_daftar_tilik ?>]" <?= ($daftar_tilik->my == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mb[<?= $daftar_tilik->id_daftar_tilik ?>]" <?= ($daftar_tilik->mb == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="m[<?= $daftar_tilik->id_daftar_tilik ?>]" <?= ($daftar_tilik->m == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mp[<?= $daftar_tilik->id_daftar_tilik ?>]" <?= ($daftar_tilik->mp == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="text" name="rekomendasi[<?= $daftar_tilik->id_daftar_tilik ?>]" value="<?= $daftar_tilik->rekomendasi ?>"></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </form>


                        <form action="<?= base_url("auditorjurusan/add_nilai_daftar_tilik_tambahan") ?>" method="POST">

                            </thead>
                            <tbody style="background-color: white; color:black;">
                                <?php
                                $no = 1;
                                foreach ($tampil_daftar_tilik_tambahan_jurusan7 as $daftar_tilik) :
                                ?>
                                    <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td>
                                            <?= $daftar_tilik->tambahan_daftar_tilik ?>
                                            <input type="hidden" name="id_auditor_daftar_tilik[]" value="<?= $daftar_tilik->id_auditor_daftar_tilik ?>">
                                        </td>
                                        <td class="text-center"><input type="text" name="dokumenterkait[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" value="<?= $daftar_tilik->dokumen_terkait ?>"></td>
                                        <td class="text-center"><input type="text" name="hasilobservasi[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" value="<?= $daftar_tilik->hasil_observasi ?>"></td>
                                        <td class="text-center"><input type="checkbox" name="my[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" <?= ($daftar_tilik->my == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mb[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" <?= ($daftar_tilik->mb == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="m[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" <?= ($daftar_tilik->m == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mp[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" <?= ($daftar_tilik->mp == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="text" name="rekomendasi[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" value="<?= $daftar_tilik->rekomendasi ?>"></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr class="text-center" style="background-color: #C0C0C0; color:black;">
                                    <th colspan="4">Jumlah Nilai</th>
                                    <th style="background-color: #ffa07a; color:black;"> <?= $total_daftar_tilik7['my'] ?></th>
                                    <th style="background-color: #3EB489; color:black;"><?= $total_daftar_tilik7['mb'] ?></th>
                                    <th style="background-color: #B0C4DE; color:black;"><?= $total_daftar_tilik7['m'] ?></th>
                                    <th style="background-color: #B0C4DE; color:black;"><?= $total_daftar_tilik7['mp'] ?></th>
                                </tr>
                            </tfoot>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-break"></div>

<div class="container-fluid">
    <div class="row-lg-12">
        <div class="card mt-2">
            <div class="card-body">
                <h4 class="d-flex justify-content-center align-items-center mt-3 font-weight-bold text-dark"><?= $title1 ?></h4>
                <div class="table-responsive mt-2">
                    <table class="table table-borderless" style="color:black;">
                        <tr>
                            <td>Strata</td>
                            <td>:</td>
                            <td>S1</td>
                        </tr>

                        <tr>
                            <td>Universitas</td>
                            <td>:</td>
                            <td>INSTITUT TEKNOLOGI SUMATERA</td>
                        </tr>

                        <tr>
                            <td>Auditor</td>
                            <td>:</td>
                            <td>Tim Auditor Mutu Internal ITERA</td>
                        </tr>

                        <tr>
                            <td>Dokumen Acuan</td>
                            <td>:</td>
                            <td>Standar Pengembangan Karir Dosen dan Tendik</td>
                        </tr>
                    </table>
                </div>


                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="text-center">
                            <tr>
                                <th rowspan="2" style="background-color: #808080; color:black;">No</th>
                                <th rowspan="2" style="background-color: #808080; color:black;">Dokumen Terkait</th>
                                <th colspan="4" style="background-color: #ffa07a; color:black;">Kondisi Dokumen</th>
                                <th colspan="2" style="background-color: #3EB489; color:black;">Kategori Temuan</th>
                                <th colspan="2" style="background-color: #B0C4DE; color:black;">Status Temuan</th>
                                <th rowspan="2" style="background-color: #FF8C00; color:black;">Catatan</th>
                                <th rowspan="2" style="background-color: #FFFF00; color:black;">Penanggung Jawab</th>
                            </tr>

                            <tr>
                                <th style="background-color: #ffa07a; color:black;">MY*</th>
                                <th style="background-color: #ffa07a; color:black;">MB*</th>
                                <th style="background-color: #ffa07a; color:black;">M*</th>
                                <th style="background-color: #ffa07a; color:black;">MP*</th>
                                <th style="background-color: #3EB489; color:black;">OB*</th>
                                <th style="background-color: #3EB489; color:black;">KTS*</th>
                                <th style="background-color: #B0C4DE; color:black;">OPEN</th>
                                <th style="background-color: #B0C4DE; color:black;">CLOSE</th>
                            </tr>
                        </thead>

                        <form action="<?= base_url("auditorjurusan/add_nilai_hasil_desk_utama") ?>" method="POST">

                            <tbody style="background-color: white; color: black;">
                                <?php
                                $no = 1;
                                foreach ($tampil_hasil_desk_utama_jurusan8 as $hasil_desk) :
                                ?>
                                    <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td>
                                            <?= $hasil_desk->nama_dokumen_terkait ?>
                                            <input type="hidden" name="id_hasil_desk[]" value="<?= $hasil_desk->id_hasil_desk ?>">
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="my[<?= $hasil_desk->id_hasil_desk ?>]" id="my<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->my == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mb[<?= $hasil_desk->id_hasil_desk ?>]" id="mb<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->mb == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="m[<?= $hasil_desk->id_hasil_desk ?>]" id="m<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->m == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mp[<?= $hasil_desk->id_hasil_desk ?>]" id="mp<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->mp == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="ob[<?= $hasil_desk->id_hasil_desk ?>]" id="ob<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->ob == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="kts[<?= $hasil_desk->id_hasil_desk ?>]" id="kts<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->kts == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="open[<?= $hasil_desk->id_hasil_desk ?>]" id="open<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->open == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="close[<?= $hasil_desk->id_hasil_desk ?>]" id="close<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->close == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="text" name="catatan[<?= $hasil_desk->id_hasil_desk ?>]" id="catatan<?= $hasil_desk->id_hasil_desk ?>" value="<?= $hasil_desk->catatan ?>"></td>
                                        <td class="text-center"><input type="text" name="penanggungjawab[<?= $hasil_desk->id_hasil_desk ?>]" id="penanggungjawab<?= $hasil_desk->id_hasil_desk ?>" value="<?= $hasil_desk->penanggungjawab ?>"></td>

                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </form>

                        <form action="<?= base_url("auditorjurusan/add_nilai_hasil_desk_tambahan") ?>" method="POST">
                            <!-- tampil_tambahan_hasil_desk_auditor -->
                            <?php if ($tampil_hasil_desk_tambahan_jurusan8 !== null) : ?>
                                <tbody style="background-color: white; color: black;">
                                    <?php
                                    $no = 1;
                                    foreach ($tampil_hasil_desk_tambahan_jurusan8 as $hasil_desk) :
                                    ?>
                                        <tr>
                                            <td class="text-center"><?= $no++; ?></td>
                                            <td>
                                                <?= $hasil_desk->tambahan_hasil_desk ?>
                                                <input type="hidden" name="id_auditor_hasil_desk[]" value="<?= $hasil_desk->id_auditor_hasil_desk ?>">
                                            </td>
                                            <td class="text-center"><input type="checkbox" name="my[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="my<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->my == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="mb[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="mb<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->mb == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="m[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="m<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->m == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="mp[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="mp<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->mp == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="ob[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="ob<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->ob == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="kts[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="kts<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->kts == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="open[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="open<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->open == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="close[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="close<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->close == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="text" name="catatan[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="catatan<?= $hasil_desk->id_auditor_hasil_desk ?>" value="<?= $hasil_desk->catatan ?>"></td>
                                            <td class="text-center"><input type="text" name="penanggungjawab[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="penanggungjawab<?= $hasil_desk->id_auditor_hasil_desk ?>" value="<?= $hasil_desk->penanggungjawab ?>"></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            <?php endif ?>
                        </form>

                        <tfoot>
                            <tr class="text-center" style="background-color: #C0C0C0; color:black;">
                                <th colspan="2">Jumlah Nilai</th>
                                <th style="background-color: #ffa07a; color:black;"> <?= $total_checkbox8['my'] ?></th>
                                <th style="background-color: #3EB489; color:black;"><?= $total_checkbox8['mb'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox8['m'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox8['mp'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox8['ob'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox8['kts'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox8['open'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox8['close'] ?></th>

                            </tr>
                            </thead>
                        </tfoot>

                    </table>
                </div>
                <p style="color:black;"> * M= Memenuhi, MP= Melampaui, MB= Belum Memenuhi, MY= Menyimpang <br> <br>* OB= Observasi, KTS= Ketidaksesuaian</br></br></p>
            </div>
        </div>
    </div>

    <div class="row-lg-12 mt-2">
        <div class="card mt-2">
            <div class="card-body">
                <h4 class="d-flex justify-content-center align-items-center mt-3 font-weight-bold text-dark"><?= $title2 ?></h4>


                <div class="table-data">
                    <table class="table table-bordered">
                        <thead class="text-center" style="background-color: #C0C0C0; color:black;">
                            <tr>
                                <th rowspan="1">No</th>
                                <th rowspan="1">Pertanyaan</th>
                                <th colspan="1">Dokumen Terkait</th>
                                <th colspan="1">Hasil Observasi/Audit/Visitasi</th>
                                <th colspan="1">MY*</th>
                                <th rowspan="1">MB*</th>
                                <th rowspan="1">M*</th>
                                <th rowspan="1">MP*</th>
                                <th rowspan="1">Rekomendasi</th>
                            </tr>
                        </thead>
                        <form action="<?= base_url("auditorjurusan/add_nilai_daftar_tilik_utama") ?>" method="POST">

                            <tbody style="background-color: white; color:black;">
                                <?php
                                $no = 1;
                                foreach ($tampil_daftar_tilik_utama_jurusan8 as $daftar_tilik) :
                                ?>
                                    <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td>
                                            <?= $daftar_tilik->pertanyaan ?>
                                            <input type="hidden" name="id_daftar_tilik[]" value="<?= $daftar_tilik->id_daftar_tilik ?>">
                                        </td>
                                        <td class="text-center"><input type="text" name="dokumenterkait[<?= $daftar_tilik->id_daftar_tilik ?>]" value="<?= $daftar_tilik->dokumen_terkait ?>"></td>
                                        <td class="text-center"><input type="text" name="hasilobservasi[<?= $daftar_tilik->id_daftar_tilik ?>]" value="<?= $daftar_tilik->hasil_observasi ?>"></td>
                                        <td class="text-center"><input type="checkbox" name="my[<?= $daftar_tilik->id_daftar_tilik ?>]" <?= ($daftar_tilik->my == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mb[<?= $daftar_tilik->id_daftar_tilik ?>]" <?= ($daftar_tilik->mb == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="m[<?= $daftar_tilik->id_daftar_tilik ?>]" <?= ($daftar_tilik->m == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mp[<?= $daftar_tilik->id_daftar_tilik ?>]" <?= ($daftar_tilik->mp == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="text" name="rekomendasi[<?= $daftar_tilik->id_daftar_tilik ?>]" value="<?= $daftar_tilik->rekomendasi ?>"></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </form>


                        <form action="<?= base_url("auditorjurusan/add_nilai_daftar_tilik_tambahan") ?>" method="POST">

                            </thead>
                            <tbody style="background-color: white; color:black;">
                                <?php
                                $no = 1;
                                foreach ($tampil_daftar_tilik_tambahan_jurusan8 as $daftar_tilik) :
                                ?>
                                    <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td>
                                            <?= $daftar_tilik->tambahan_daftar_tilik ?>
                                            <input type="hidden" name="id_auditor_daftar_tilik[]" value="<?= $daftar_tilik->id_auditor_daftar_tilik ?>">
                                        </td>
                                        <td class="text-center"><input type="text" name="dokumenterkait[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" value="<?= $daftar_tilik->dokumen_terkait ?>"></td>
                                        <td class="text-center"><input type="text" name="hasilobservasi[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" value="<?= $daftar_tilik->hasil_observasi ?>"></td>
                                        <td class="text-center"><input type="checkbox" name="my[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" <?= ($daftar_tilik->my == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mb[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" <?= ($daftar_tilik->mb == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="m[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" <?= ($daftar_tilik->m == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mp[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" <?= ($daftar_tilik->mp == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="text" name="rekomendasi[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" value="<?= $daftar_tilik->rekomendasi ?>"></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr class="text-center" style="background-color: #C0C0C0; color:black;">
                                    <th colspan="4">Jumlah Nilai</th>
                                    <th style="background-color: #ffa07a; color:black;"> <?= $total_daftar_tilik8['my'] ?></th>
                                    <th style="background-color: #3EB489; color:black;"><?= $total_daftar_tilik8['mb'] ?></th>
                                    <th style="background-color: #B0C4DE; color:black;"><?= $total_daftar_tilik8['m'] ?></th>
                                    <th style="background-color: #B0C4DE; color:black;"><?= $total_daftar_tilik8['mp'] ?></th>
                                </tr>
                            </tfoot>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-break"></div>

<div class="container-fluid">
    <div class="row-lg-12">
        <div class="card mt-2">
            <div class="card-body">
                <h4 class="d-flex justify-content-center align-items-center mt-3 font-weight-bold text-dark"><?= $title1 ?></h4>
                <div class="table-responsive mt-2">
                    <table class="table table-borderless" style="color:black;">
                        <tr>
                            <td>Strata</td>
                            <td>:</td>
                            <td>S1</td>
                        </tr>

                        <tr>
                            <td>Universitas</td>
                            <td>:</td>
                            <td>INSTITUT TEKNOLOGI SUMATERA</td>
                        </tr>

                        <tr>
                            <td>Auditor</td>
                            <td>:</td>
                            <td>Tim Auditor Mutu Internal ITERA</td>
                        </tr>

                        <tr>
                            <td>Dokumen Acuan</td>
                            <td>:</td>
                            <td>Standar Perjalanan Dinas Dosen dan Tendik</td>
                        </tr>
                    </table>
                </div>


                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="text-center">
                            <tr>
                                <th rowspan="2" style="background-color: #808080; color:black;">No</th>
                                <th rowspan="2" style="background-color: #808080; color:black;">Dokumen Terkait</th>
                                <th colspan="4" style="background-color: #ffa07a; color:black;">Kondisi Dokumen</th>
                                <th colspan="2" style="background-color: #3EB489; color:black;">Kategori Temuan</th>
                                <th colspan="2" style="background-color: #B0C4DE; color:black;">Status Temuan</th>
                                <th rowspan="2" style="background-color: #FF8C00; color:black;">Catatan</th>
                                <th rowspan="2" style="background-color: #FFFF00; color:black;">Penanggung Jawab</th>
                            </tr>

                            <tr>
                                <th style="background-color: #ffa07a; color:black;">MY*</th>
                                <th style="background-color: #ffa07a; color:black;">MB*</th>
                                <th style="background-color: #ffa07a; color:black;">M*</th>
                                <th style="background-color: #ffa07a; color:black;">MP*</th>
                                <th style="background-color: #3EB489; color:black;">OB*</th>
                                <th style="background-color: #3EB489; color:black;">KTS*</th>
                                <th style="background-color: #B0C4DE; color:black;">OPEN</th>
                                <th style="background-color: #B0C4DE; color:black;">CLOSE</th>
                            </tr>
                        </thead>

                        <form action="<?= base_url("auditorjurusan/add_nilai_hasil_desk_utama") ?>" method="POST">

                            <tbody style="background-color: white; color: black;">
                                <?php
                                $no = 1;
                                foreach ($tampil_hasil_desk_utama_jurusan9 as $hasil_desk) :
                                ?>
                                    <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td>
                                            <?= $hasil_desk->nama_dokumen_terkait ?>
                                            <input type="hidden" name="id_hasil_desk[]" value="<?= $hasil_desk->id_hasil_desk ?>">
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="my[<?= $hasil_desk->id_hasil_desk ?>]" id="my<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->my == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mb[<?= $hasil_desk->id_hasil_desk ?>]" id="mb<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->mb == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="m[<?= $hasil_desk->id_hasil_desk ?>]" id="m<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->m == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mp[<?= $hasil_desk->id_hasil_desk ?>]" id="mp<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->mp == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="ob[<?= $hasil_desk->id_hasil_desk ?>]" id="ob<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->ob == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="kts[<?= $hasil_desk->id_hasil_desk ?>]" id="kts<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->kts == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="open[<?= $hasil_desk->id_hasil_desk ?>]" id="open<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->open == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="close[<?= $hasil_desk->id_hasil_desk ?>]" id="close<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->close == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="text" name="catatan[<?= $hasil_desk->id_hasil_desk ?>]" id="catatan<?= $hasil_desk->id_hasil_desk ?>" value="<?= $hasil_desk->catatan ?>"></td>
                                        <td class="text-center"><input type="text" name="penanggungjawab[<?= $hasil_desk->id_hasil_desk ?>]" id="penanggungjawab<?= $hasil_desk->id_hasil_desk ?>" value="<?= $hasil_desk->penanggungjawab ?>"></td>

                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </form>

                        <form action="<?= base_url("auditorjurusan/add_nilai_hasil_desk_tambahan") ?>" method="POST">
                            <!-- tampil_tambahan_hasil_desk_auditor -->
                            <?php if ($tampil_hasil_desk_tambahan_jurusan9 !== null) : ?>
                                <tbody style="background-color: white; color: black;">
                                    <?php
                                    $no = 1;
                                    foreach ($tampil_hasil_desk_tambahan_jurusan9 as $hasil_desk) :
                                    ?>
                                        <tr>
                                            <td class="text-center"><?= $no++; ?></td>
                                            <td>
                                                <?= $hasil_desk->tambahan_hasil_desk ?>
                                                <input type="hidden" name="id_auditor_hasil_desk[]" value="<?= $hasil_desk->id_auditor_hasil_desk ?>">
                                            </td>
                                            <td class="text-center"><input type="checkbox" name="my[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="my<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->my == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="mb[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="mb<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->mb == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="m[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="m<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->m == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="mp[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="mp<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->mp == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="ob[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="ob<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->ob == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="kts[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="kts<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->kts == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="open[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="open<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->open == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="close[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="close<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->close == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="text" name="catatan[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="catatan<?= $hasil_desk->id_auditor_hasil_desk ?>" value="<?= $hasil_desk->catatan ?>"></td>
                                            <td class="text-center"><input type="text" name="penanggungjawab[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="penanggungjawab<?= $hasil_desk->id_auditor_hasil_desk ?>" value="<?= $hasil_desk->penanggungjawab ?>"></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            <?php endif ?>
                        </form>

                        <tfoot>
                            <tr class="text-center" style="background-color: #C0C0C0; color:black;">
                                <th colspan="2">Jumlah Nilai</th>
                                <th style="background-color: #ffa07a; color:black;"> <?= $total_checkbox9['my'] ?></th>
                                <th style="background-color: #3EB489; color:black;"><?= $total_checkbox9['mb'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox9['m'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox9['mp'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox9['ob'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox9['kts'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox9['open'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox9['close'] ?></th>

                            </tr>
                            </thead>
                        </tfoot>

                    </table>
                </div>
                <p style="color:black;"> * M= Memenuhi, MP= Melampaui, MB= Belum Memenuhi, MY= Menyimpang <br> <br>* OB= Observasi, KTS= Ketidaksesuaian</br></br></p>
            </div>
        </div>
    </div>

    <div class="row-lg-12 mt-2">
        <div class="card mt-2">
            <div class="card-body">
                <h4 class="d-flex justify-content-center align-items-center mt-3 font-weight-bold text-dark"><?= $title2 ?></h4>


                <div class="table-data">
                    <table class="table table-bordered">
                        <thead class="text-center" style="background-color: #C0C0C0; color:black;">
                            <tr>
                                <th rowspan="1">No</th>
                                <th rowspan="1">Pertanyaan</th>
                                <th colspan="1">Dokumen Terkait</th>
                                <th colspan="1">Hasil Observasi/Audit/Visitasi</th>
                                <th colspan="1">MY*</th>
                                <th rowspan="1">MB*</th>
                                <th rowspan="1">M*</th>
                                <th rowspan="1">MP*</th>
                                <th rowspan="1">Rekomendasi</th>
                            </tr>
                        </thead>
                        <form action="<?= base_url("auditorjurusan/add_nilai_daftar_tilik_utama") ?>" method="POST">

                            <tbody style="background-color: white; color:black;">
                                <?php
                                $no = 1;
                                foreach ($tampil_daftar_tilik_utama_jurusan9 as $daftar_tilik) :
                                ?>
                                    <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td>
                                            <?= $daftar_tilik->pertanyaan ?>
                                            <input type="hidden" name="id_daftar_tilik[]" value="<?= $daftar_tilik->id_daftar_tilik ?>">
                                        </td>
                                        <td class="text-center"><input type="text" name="dokumenterkait[<?= $daftar_tilik->id_daftar_tilik ?>]" value="<?= $daftar_tilik->dokumen_terkait ?>"></td>
                                        <td class="text-center"><input type="text" name="hasilobservasi[<?= $daftar_tilik->id_daftar_tilik ?>]" value="<?= $daftar_tilik->hasil_observasi ?>"></td>
                                        <td class="text-center"><input type="checkbox" name="my[<?= $daftar_tilik->id_daftar_tilik ?>]" <?= ($daftar_tilik->my == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mb[<?= $daftar_tilik->id_daftar_tilik ?>]" <?= ($daftar_tilik->mb == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="m[<?= $daftar_tilik->id_daftar_tilik ?>]" <?= ($daftar_tilik->m == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mp[<?= $daftar_tilik->id_daftar_tilik ?>]" <?= ($daftar_tilik->mp == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="text" name="rekomendasi[<?= $daftar_tilik->id_daftar_tilik ?>]" value="<?= $daftar_tilik->rekomendasi ?>"></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </form>


                        <form action="<?= base_url("auditorjurusan/add_nilai_daftar_tilik_tambahan") ?>" method="POST">

                            </thead>
                            <tbody style="background-color: white; color:black;">
                                <?php
                                $no = 1;
                                foreach ($tampil_daftar_tilik_tambahan_jurusan9 as $daftar_tilik) :
                                ?>
                                    <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td>
                                            <?= $daftar_tilik->tambahan_daftar_tilik ?>
                                            <input type="hidden" name="id_auditor_daftar_tilik[]" value="<?= $daftar_tilik->id_auditor_daftar_tilik ?>">
                                        </td>
                                        <td class="text-center"><input type="text" name="dokumenterkait[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" value="<?= $daftar_tilik->dokumen_terkait ?>"></td>
                                        <td class="text-center"><input type="text" name="hasilobservasi[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" value="<?= $daftar_tilik->hasil_observasi ?>"></td>
                                        <td class="text-center"><input type="checkbox" name="my[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" <?= ($daftar_tilik->my == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mb[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" <?= ($daftar_tilik->mb == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="m[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" <?= ($daftar_tilik->m == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mp[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" <?= ($daftar_tilik->mp == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="text" name="rekomendasi[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" value="<?= $daftar_tilik->rekomendasi ?>"></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr class="text-center" style="background-color: #C0C0C0; color:black;">
                                    <th colspan="4">Jumlah Nilai</th>
                                    <th style="background-color: #ffa07a; color:black;"> <?= $total_daftar_tilik9['my'] ?></th>
                                    <th style="background-color: #3EB489; color:black;"><?= $total_daftar_tilik9['mb'] ?></th>
                                    <th style="background-color: #B0C4DE; color:black;"><?= $total_daftar_tilik9['m'] ?></th>
                                    <th style="background-color: #B0C4DE; color:black;"><?= $total_daftar_tilik9['mp'] ?></th>
                                </tr>
                            </tfoot>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-break"></div>

<div class="container-fluid">
    <div class="row-lg-12">
        <div class="card mt-2">
            <div class="card-body">
                <h4 class="d-flex justify-content-center align-items-center mt-3 font-weight-bold text-dark"><?= $title1 ?></h4>
                <div class="table-responsive mt-2">
                    <table class="table table-borderless" style="color:black;">
                        <tr>
                            <td>Strata</td>
                            <td>:</td>
                            <td>S1</td>
                        </tr>

                        <tr>
                            <td>Universitas</td>
                            <td>:</td>
                            <td>INSTITUT TEKNOLOGI SUMATERA</td>
                        </tr>

                        <tr>
                            <td>Auditor</td>
                            <td>:</td>
                            <td>Tim Auditor Mutu Internal ITERA</td>
                        </tr>

                        <tr>
                            <td>Dokumen Acuan</td>
                            <td>:</td>
                            <td>Manajemen Sumber Daya Manusia</td>
                        </tr>
                    </table>
                </div>


                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="text-center">
                            <tr>
                                <th rowspan="2" style="background-color: #808080; color:black;">No</th>
                                <th rowspan="2" style="background-color: #808080; color:black;">Dokumen Terkait</th>
                                <th colspan="4" style="background-color: #ffa07a; color:black;">Kondisi Dokumen</th>
                                <th colspan="2" style="background-color: #3EB489; color:black;">Kategori Temuan</th>
                                <th colspan="2" style="background-color: #B0C4DE; color:black;">Status Temuan</th>
                                <th rowspan="2" style="background-color: #FF8C00; color:black;">Catatan</th>
                                <th rowspan="2" style="background-color: #FFFF00; color:black;">Penanggung Jawab</th>
                            </tr>

                            <tr>
                                <th style="background-color: #ffa07a; color:black;">MY*</th>
                                <th style="background-color: #ffa07a; color:black;">MB*</th>
                                <th style="background-color: #ffa07a; color:black;">M*</th>
                                <th style="background-color: #ffa07a; color:black;">MP*</th>
                                <th style="background-color: #3EB489; color:black;">OB*</th>
                                <th style="background-color: #3EB489; color:black;">KTS*</th>
                                <th style="background-color: #B0C4DE; color:black;">OPEN</th>
                                <th style="background-color: #B0C4DE; color:black;">CLOSE</th>
                            </tr>
                        </thead>

                        <form action="<?= base_url("auditorjurusan/add_nilai_hasil_desk_utama") ?>" method="POST">

                            <tbody style="background-color: white; color: black;">
                                <?php
                                $no = 1;
                                foreach ($tampil_hasil_desk_utama_jurusan10 as $hasil_desk) :
                                ?>
                                    <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td>
                                            <?= $hasil_desk->nama_dokumen_terkait ?>
                                            <input type="hidden" name="id_hasil_desk[]" value="<?= $hasil_desk->id_hasil_desk ?>">
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="my[<?= $hasil_desk->id_hasil_desk ?>]" id="my<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->my == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mb[<?= $hasil_desk->id_hasil_desk ?>]" id="mb<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->mb == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="m[<?= $hasil_desk->id_hasil_desk ?>]" id="m<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->m == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mp[<?= $hasil_desk->id_hasil_desk ?>]" id="mp<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->mp == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="ob[<?= $hasil_desk->id_hasil_desk ?>]" id="ob<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->ob == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="kts[<?= $hasil_desk->id_hasil_desk ?>]" id="kts<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->kts == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="open[<?= $hasil_desk->id_hasil_desk ?>]" id="open<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->open == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="close[<?= $hasil_desk->id_hasil_desk ?>]" id="close<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->close == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="text" name="catatan[<?= $hasil_desk->id_hasil_desk ?>]" id="catatan<?= $hasil_desk->id_hasil_desk ?>" value="<?= $hasil_desk->catatan ?>"></td>
                                        <td class="text-center"><input type="text" name="penanggungjawab[<?= $hasil_desk->id_hasil_desk ?>]" id="penanggungjawab<?= $hasil_desk->id_hasil_desk ?>" value="<?= $hasil_desk->penanggungjawab ?>"></td>

                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </form>

                        <form action="<?= base_url("auditorjurusan/add_nilai_hasil_desk_tambahan") ?>" method="POST">
                            <!-- tampil_tambahan_hasil_desk_auditor -->
                            <?php if ($tampil_hasil_desk_tambahan_jurusan10 !== null) : ?>
                                <tbody style="background-color: white; color: black;">
                                    <?php
                                    $no = 1;
                                    foreach ($tampil_hasil_desk_tambahan_jurusan10 as $hasil_desk) :
                                    ?>
                                        <tr>
                                            <td class="text-center"><?= $no++; ?></td>
                                            <td>
                                                <?= $hasil_desk->tambahan_hasil_desk ?>
                                                <input type="hidden" name="id_auditor_hasil_desk[]" value="<?= $hasil_desk->id_auditor_hasil_desk ?>">
                                            </td>
                                            <td class="text-center"><input type="checkbox" name="my[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="my<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->my == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="mb[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="mb<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->mb == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="m[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="m<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->m == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="mp[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="mp<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->mp == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="ob[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="ob<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->ob == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="kts[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="kts<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->kts == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="open[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="open<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->open == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="close[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="close<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->close == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="text" name="catatan[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="catatan<?= $hasil_desk->id_auditor_hasil_desk ?>" value="<?= $hasil_desk->catatan ?>"></td>
                                            <td class="text-center"><input type="text" name="penanggungjawab[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="penanggungjawab<?= $hasil_desk->id_auditor_hasil_desk ?>" value="<?= $hasil_desk->penanggungjawab ?>"></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            <?php endif ?>
                        </form>

                        <tfoot>
                            <tr class="text-center" style="background-color: #C0C0C0; color:black;">
                                <th colspan="2">Jumlah Nilai</th>
                                <th style="background-color: #ffa07a; color:black;"> <?= $total_checkbox10['my'] ?></th>
                                <th style="background-color: #3EB489; color:black;"><?= $total_checkbox10['mb'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox10['m'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox10['mp'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox10['ob'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox10['kts'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox10['open'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox10['close'] ?></th>

                            </tr>
                            </thead>
                        </tfoot>

                    </table>
                </div>
                <p style="color:black;"> * M= Memenuhi, MP= Melampaui, MB= Belum Memenuhi, MY= Menyimpang <br> <br>* OB= Observasi, KTS= Ketidaksesuaian</br></br></p>
            </div>
        </div>
    </div>

    <div class="row-lg-12 mt-2">
        <div class="card mt-2">
            <div class="card-body">
                <h4 class="d-flex justify-content-center align-items-center mt-3 font-weight-bold text-dark"><?= $title2 ?></h4>


                <div class="table-data">
                    <table class="table table-bordered">
                        <thead class="text-center" style="background-color: #C0C0C0; color:black;">
                            <tr>
                                <th rowspan="1">No</th>
                                <th rowspan="1">Pertanyaan</th>
                                <th colspan="1">Dokumen Terkait</th>
                                <th colspan="1">Hasil Observasi/Audit/Visitasi</th>
                                <th colspan="1">MY*</th>
                                <th rowspan="1">MB*</th>
                                <th rowspan="1">M*</th>
                                <th rowspan="1">MP*</th>
                                <th rowspan="1">Rekomendasi</th>
                            </tr>
                        </thead>
                        <form action="<?= base_url("auditorjurusan/add_nilai_daftar_tilik_utama") ?>" method="POST">

                            <tbody style="background-color: white; color:black;">
                                <?php
                                $no = 1;
                                foreach ($tampil_daftar_tilik_utama_jurusan10 as $daftar_tilik) :
                                ?>
                                    <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td>
                                            <?= $daftar_tilik->pertanyaan ?>
                                            <input type="hidden" name="id_daftar_tilik[]" value="<?= $daftar_tilik->id_daftar_tilik ?>">
                                        </td>
                                        <td class="text-center"><input type="text" name="dokumenterkait[<?= $daftar_tilik->id_daftar_tilik ?>]" value="<?= $daftar_tilik->dokumen_terkait ?>"></td>
                                        <td class="text-center"><input type="text" name="hasilobservasi[<?= $daftar_tilik->id_daftar_tilik ?>]" value="<?= $daftar_tilik->hasil_observasi ?>"></td>
                                        <td class="text-center"><input type="checkbox" name="my[<?= $daftar_tilik->id_daftar_tilik ?>]" <?= ($daftar_tilik->my == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mb[<?= $daftar_tilik->id_daftar_tilik ?>]" <?= ($daftar_tilik->mb == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="m[<?= $daftar_tilik->id_daftar_tilik ?>]" <?= ($daftar_tilik->m == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mp[<?= $daftar_tilik->id_daftar_tilik ?>]" <?= ($daftar_tilik->mp == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="text" name="rekomendasi[<?= $daftar_tilik->id_daftar_tilik ?>]" value="<?= $daftar_tilik->rekomendasi ?>"></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </form>


                        <form action="<?= base_url("auditorjurusan/add_nilai_daftar_tilik_tambahan") ?>" method="POST">

                            </thead>
                            <tbody style="background-color: white; color:black;">
                                <?php
                                $no = 1;
                                foreach ($tampil_daftar_tilik_tambahan_jurusan10 as $daftar_tilik) :
                                ?>
                                    <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td>
                                            <?= $daftar_tilik->tambahan_daftar_tilik ?>
                                            <input type="hidden" name="id_auditor_daftar_tilik[]" value="<?= $daftar_tilik->id_auditor_daftar_tilik ?>">
                                        </td>
                                        <td class="text-center"><input type="text" name="dokumenterkait[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" value="<?= $daftar_tilik->dokumen_terkait ?>"></td>
                                        <td class="text-center"><input type="text" name="hasilobservasi[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" value="<?= $daftar_tilik->hasil_observasi ?>"></td>
                                        <td class="text-center"><input type="checkbox" name="my[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" <?= ($daftar_tilik->my == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mb[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" <?= ($daftar_tilik->mb == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="m[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" <?= ($daftar_tilik->m == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mp[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" <?= ($daftar_tilik->mp == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="text" name="rekomendasi[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" value="<?= $daftar_tilik->rekomendasi ?>"></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr class="text-center" style="background-color: #C0C0C0; color:black;">
                                    <th colspan="4">Jumlah Nilai</th>
                                    <th style="background-color: #ffa07a; color:black;"> <?= $total_daftar_tilik10['my'] ?></th>
                                    <th style="background-color: #3EB489; color:black;"><?= $total_daftar_tilik10['mb'] ?></th>
                                    <th style="background-color: #B0C4DE; color:black;"><?= $total_daftar_tilik10['m'] ?></th>
                                    <th style="background-color: #B0C4DE; color:black;"><?= $total_daftar_tilik10['mp'] ?></th>
                                </tr>
                            </tfoot>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-break"></div>

<div class="container-fluid">
    <div class="row-lg-12">
        <div class="card mt-2">
            <div class="card-body">
                <h4 class="d-flex justify-content-center align-items-center mt-3 font-weight-bold text-dark"><?= $title1 ?></h4>
                <div class="table-responsive mt-2">
                    <table class="table table-borderless" style="color:black;">
                        <tr>
                            <td>Strata</td>
                            <td>:</td>
                            <td>S1</td>
                        </tr>

                        <tr>
                            <td>Universitas</td>
                            <td>:</td>
                            <td>INSTITUT TEKNOLOGI SUMATERA</td>
                        </tr>

                        <tr>
                            <td>Auditor</td>
                            <td>:</td>
                            <td>Tim Auditor Mutu Internal ITERA</td>
                        </tr>

                        <tr>
                            <td>Dokumen Acuan</td>
                            <td>:</td>
                            <td>Monitoring dan Evaluasi / Sub Jurusan</td>
                        </tr>
                    </table>
                </div>


                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="text-center">
                            <tr>
                                <th rowspan="2" style="background-color: #808080; color:black;">No</th>
                                <th rowspan="2" style="background-color: #808080; color:black;">Dokumen Terkait</th>
                                <th colspan="4" style="background-color: #ffa07a; color:black;">Kondisi Dokumen</th>
                                <th colspan="2" style="background-color: #3EB489; color:black;">Kategori Temuan</th>
                                <th colspan="2" style="background-color: #B0C4DE; color:black;">Status Temuan</th>
                                <th rowspan="2" style="background-color: #FF8C00; color:black;">Catatan</th>
                                <th rowspan="2" style="background-color: #FFFF00; color:black;">Penanggung Jawab</th>
                            </tr>

                            <tr>
                                <th style="background-color: #ffa07a; color:black;">MY*</th>
                                <th style="background-color: #ffa07a; color:black;">MB*</th>
                                <th style="background-color: #ffa07a; color:black;">M*</th>
                                <th style="background-color: #ffa07a; color:black;">MP*</th>
                                <th style="background-color: #3EB489; color:black;">OB*</th>
                                <th style="background-color: #3EB489; color:black;">KTS*</th>
                                <th style="background-color: #B0C4DE; color:black;">OPEN</th>
                                <th style="background-color: #B0C4DE; color:black;">CLOSE</th>
                            </tr>
                        </thead>

                        <form action="<?= base_url("auditorjurusan/add_nilai_hasil_desk_utama") ?>" method="POST">

                            <tbody style="background-color: white; color: black;">
                                <?php
                                $no = 1;
                                foreach ($tampil_hasil_desk_utama_jurusan11 as $hasil_desk) :
                                ?>
                                    <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td>
                                            <?= $hasil_desk->nama_dokumen_terkait ?>
                                            <input type="hidden" name="id_hasil_desk[]" value="<?= $hasil_desk->id_hasil_desk ?>">
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="my[<?= $hasil_desk->id_hasil_desk ?>]" id="my<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->my == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mb[<?= $hasil_desk->id_hasil_desk ?>]" id="mb<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->mb == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="m[<?= $hasil_desk->id_hasil_desk ?>]" id="m<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->m == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mp[<?= $hasil_desk->id_hasil_desk ?>]" id="mp<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->mp == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="ob[<?= $hasil_desk->id_hasil_desk ?>]" id="ob<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->ob == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="kts[<?= $hasil_desk->id_hasil_desk ?>]" id="kts<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->kts == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="open[<?= $hasil_desk->id_hasil_desk ?>]" id="open<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->open == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="close[<?= $hasil_desk->id_hasil_desk ?>]" id="close<?= $hasil_desk->id_hasil_desk ?>" <?= ($hasil_desk->close == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="text" name="catatan[<?= $hasil_desk->id_hasil_desk ?>]" id="catatan<?= $hasil_desk->id_hasil_desk ?>" value="<?= $hasil_desk->catatan ?>"></td>
                                        <td class="text-center"><input type="text" name="penanggungjawab[<?= $hasil_desk->id_hasil_desk ?>]" id="penanggungjawab<?= $hasil_desk->id_hasil_desk ?>" value="<?= $hasil_desk->penanggungjawab ?>"></td>

                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </form>

                        <form action="<?= base_url("auditorjurusan/add_nilai_hasil_desk_tambahan") ?>" method="POST">
                            <!-- tampil_tambahan_hasil_desk_auditor -->
                            <?php if ($tampil_hasil_desk_tambahan_jurusan11 !== null) : ?>
                                <tbody style="background-color: white; color: black;">
                                    <?php
                                    $no = 1;
                                    foreach ($tampil_hasil_desk_tambahan_jurusan11 as $hasil_desk) :
                                    ?>
                                        <tr>
                                            <td class="text-center"><?= $no++; ?></td>
                                            <td>
                                                <?= $hasil_desk->tambahan_hasil_desk ?>
                                                <input type="hidden" name="id_auditor_hasil_desk[]" value="<?= $hasil_desk->id_auditor_hasil_desk ?>">
                                            </td>
                                            <td class="text-center"><input type="checkbox" name="my[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="my<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->my == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="mb[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="mb<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->mb == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="m[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="m<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->m == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="mp[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="mp<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->mp == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="ob[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="ob<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->ob == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="kts[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="kts<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->kts == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="open[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="open<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->open == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="checkbox" name="close[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="close<?= $hasil_desk->id_auditor_hasil_desk ?>" <?= ($hasil_desk->close == 1) ? 'checked' : '' ?>></td>
                                            <td class="text-center"><input type="text" name="catatan[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="catatan<?= $hasil_desk->id_auditor_hasil_desk ?>" value="<?= $hasil_desk->catatan ?>"></td>
                                            <td class="text-center"><input type="text" name="penanggungjawab[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="penanggungjawab<?= $hasil_desk->id_auditor_hasil_desk ?>" value="<?= $hasil_desk->penanggungjawab ?>"></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            <?php endif ?>
                        </form>

                        <tfoot>
                            <tr class="text-center" style="background-color: #C0C0C0; color:black;">
                                <th colspan="2">Jumlah Nilai</th>
                                <th style="background-color: #ffa07a; color:black;"> <?= $total_checkbox11['my'] ?></th>
                                <th style="background-color: #3EB489; color:black;"><?= $total_checkbox11['mb'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox11['m'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox11['mp'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox11['ob'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox11['kts'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox11['open'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox11['close'] ?></th>

                            </tr>
                            </thead>
                        </tfoot>

                    </table>
                </div>
                <p style="color:black;"> * M= Memenuhi, MP= Melampaui, MB= Belum Memenuhi, MY= Menyimpang <br> <br>* OB= Observasi, KTS= Ketidaksesuaian</br></br></p>
            </div>
        </div>
    </div>

    <div class="row-lg-12 mt-2">
        <div class="card mt-2">
            <div class="card-body">
                <h4 class="d-flex justify-content-center align-items-center mt-3 font-weight-bold text-dark"><?= $title2 ?></h4>


                <div class="table-data">
                    <table class="table table-bordered">
                        <thead class="text-center" style="background-color: #C0C0C0; color:black;">
                            <tr>
                                <th rowspan="1">No</th>
                                <th rowspan="1">Pertanyaan</th>
                                <th colspan="1">Dokumen Terkait</th>
                                <th colspan="1">Hasil Observasi/Audit/Visitasi</th>
                                <th colspan="1">MY*</th>
                                <th rowspan="1">MB*</th>
                                <th rowspan="1">M*</th>
                                <th rowspan="1">MP*</th>
                                <th rowspan="1">Rekomendasi</th>
                            </tr>
                        </thead>
                        <form action="<?= base_url("auditorjurusan/add_nilai_daftar_tilik_utama") ?>" method="POST">

                            <tbody style="background-color: white; color:black;">
                                <?php
                                $no = 1;
                                foreach ($tampil_daftar_tilik_utama_jurusan11 as $daftar_tilik) :
                                ?>
                                    <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td>
                                            <?= $daftar_tilik->pertanyaan ?>
                                            <input type="hidden" name="id_daftar_tilik[]" value="<?= $daftar_tilik->id_daftar_tilik ?>">
                                        </td>
                                        <td class="text-center"><input type="text" name="dokumenterkait[<?= $daftar_tilik->id_daftar_tilik ?>]" value="<?= $daftar_tilik->dokumen_terkait ?>"></td>
                                        <td class="text-center"><input type="text" name="hasilobservasi[<?= $daftar_tilik->id_daftar_tilik ?>]" value="<?= $daftar_tilik->hasil_observasi ?>"></td>
                                        <td class="text-center"><input type="checkbox" name="my[<?= $daftar_tilik->id_daftar_tilik ?>]" <?= ($daftar_tilik->my == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mb[<?= $daftar_tilik->id_daftar_tilik ?>]" <?= ($daftar_tilik->mb == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="m[<?= $daftar_tilik->id_daftar_tilik ?>]" <?= ($daftar_tilik->m == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mp[<?= $daftar_tilik->id_daftar_tilik ?>]" <?= ($daftar_tilik->mp == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="text" name="rekomendasi[<?= $daftar_tilik->id_daftar_tilik ?>]" value="<?= $daftar_tilik->rekomendasi ?>"></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </form>


                        <form action="<?= base_url("auditorjurusan/add_nilai_daftar_tilik_tambahan") ?>" method="POST">

                            </thead>
                            <tbody style="background-color: white; color:black;">
                                <?php
                                $no = 1;
                                foreach ($tampil_daftar_tilik_tambahan_jurusan11 as $daftar_tilik) :
                                ?>
                                    <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td>
                                            <?= $daftar_tilik->tambahan_daftar_tilik ?>
                                            <input type="hidden" name="id_auditor_daftar_tilik[]" value="<?= $daftar_tilik->id_auditor_daftar_tilik ?>">
                                        </td>
                                        <td class="text-center"><input type="text" name="dokumenterkait[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" value="<?= $daftar_tilik->dokumen_terkait ?>"></td>
                                        <td class="text-center"><input type="text" name="hasilobservasi[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" value="<?= $daftar_tilik->hasil_observasi ?>"></td>
                                        <td class="text-center"><input type="checkbox" name="my[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" <?= ($daftar_tilik->my == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mb[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" <?= ($daftar_tilik->mb == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="m[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" <?= ($daftar_tilik->m == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mp[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" <?= ($daftar_tilik->mp == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="text" name="rekomendasi[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" value="<?= $daftar_tilik->rekomendasi ?>"></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr class="text-center" style="background-color: #C0C0C0; color:black;">
                                    <th colspan="4">Jumlah Nilai</th>
                                    <th style="background-color: #ffa07a; color:black;"> <?= $total_daftar_tilik11['my'] ?></th>
                                    <th style="background-color: #3EB489; color:black;"><?= $total_daftar_tilik11['mb'] ?></th>
                                    <th style="background-color: #B0C4DE; color:black;"><?= $total_daftar_tilik11['m'] ?></th>
                                    <th style="background-color: #B0C4DE; color:black;"><?= $total_daftar_tilik11['mp'] ?></th>
                                </tr>
                            </tfoot>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Automatically trigger print when the page loads
    window.onload = function() {
        window.print(
            options = [{
                'background-graphics': false,
            }]
        );
    };
</script>