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
                            <td>Standar Kompetensi Lulusan</td>
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

                        <form action="<?= base_url("auditor/add_nilai_hasil_desk_utama") ?>" method="POST">
                            <tbody style="background-color: white; color: black;">
                                <?php
                                $no = 1;
                                foreach ($tampil_hasil_desk_utama1 as $hasil_desk) :
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
                                        <td class="text-center">
                                            <textarea name="catatan[<?= $hasil_desk->id_hasil_desk ?>]" id="catatan<?= $hasil_desk->id_hasil_desk ?>" style="width: 100%; height: 400px; border: 1px solid #ccc; padding: 5px;"><?= $hasil_desk->catatan ?></textarea>
                                        </td>
                                        <td class="text-center">
                                            <textarea name="penanggungjawab[<?= $hasil_desk->id_hasil_desk ?>]" id="penanggungjawab<?= $hasil_desk->id_hasil_desk ?>" style="width: 100%; border: 1px solid #ccc; padding: 5px;"><?= $hasil_desk->penanggungjawab ?></textarea>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </form>

                        <form action="<?= base_url("auditor/add_nilai_hasil_desk_tambahan") ?>" method="POST">
                            <?php if ($tampil_hasil_desk_tambahan1 !== null) : ?>
                                <tbody style="background-color: white; color: black;">
                                    <?php
                                    $no = 1;
                                    foreach ($tampil_hasil_desk_tambahan1 as $hasil_desk) :
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
                                            <td class="text-center">
                                                <textarea name="catatan[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="catatan<?= $hasil_desk->id_auditor_hasil_desk ?>" style="width: 100%; height: 400px; border: 1px solid #ccc; padding: 5px;"><?= $hasil_desk->catatan ?></textarea>
                                            </td>
                                            <td class="text-center">
                                                <textarea name="penanggungjawab[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="penanggungjawab<?= $hasil_desk->id_auditor_hasil_desk ?>" style="width: 100%; border: 1px solid #ccc; padding: 5px;"><?= $hasil_desk->penanggungjawab ?></textarea>
                                            </td>
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
                <p style="color:black;"> * MY= Menyimpang, MB= Belum Memenuhi,M=Memenuhi, MP= Melampaui <br> <br>* OB= Observasi, KTS= Ketidaksesuaian</br></br></p>
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

                        <form action="<?= base_url("auditor/add_nilai_daftar_tilik_utama") ?>" method="POST">

                            <tbody style="background-color: white; color:black;">
                                <?php
                                $no = 1;
                                foreach ($tampil_daftar_tilik_utama1 as $daftar_tilik) :
                                ?>
                                    <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td>
                                            <?= $daftar_tilik->pertanyaan ?>
                                            <input type="hidden" name="id_daftar_tilik[]" value="<?= $daftar_tilik->id_daftar_tilik ?>">
                                        </td>
                                        <td class="text-center">
                                            <textarea name="dokumenterkait[<?= $daftar_tilik->id_daftar_tilik ?>]" style="width: 100%; border: 1px solid #ccc; padding: 5px;"><?= $daftar_tilik->dokumen_terkait ?></textarea>
                                        </td>
                                        <td class="text-center">
                                            <textarea name="hasilobservasi[<?= $daftar_tilik->id_daftar_tilik ?>]" style="width: 100%; border: 1px solid #ccc; padding: 5px;"><?= $daftar_tilik->hasil_observasi ?></textarea>
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="my[<?= $daftar_tilik->id_daftar_tilik ?>]" <?= ($daftar_tilik->my == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mb[<?= $daftar_tilik->id_daftar_tilik ?>]" <?= ($daftar_tilik->mb == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="m[<?= $daftar_tilik->id_daftar_tilik ?>]" <?= ($daftar_tilik->m == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mp[<?= $daftar_tilik->id_daftar_tilik ?>]" <?= ($daftar_tilik->mp == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center">
                                            <textarea name="rekomendasi[<?= $daftar_tilik->id_daftar_tilik ?>]" style="width: 100%; border: 1px solid #ccc; padding: 5px;"><?= $daftar_tilik->rekomendasi ?></textarea>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </form>


                        <form action="<?= base_url("auditor/add_nilai_daftar_tilik_tambahan") ?>" method="POST">
                            </thead>
                            <tbody style="background-color: white; color:black;">
                                <?php
                                $no = 1;
                                foreach ($tampil_daftar_tilik_tambahan1 as $daftar_tilik) :
                                ?>
                                    <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td>
                                            <?= $daftar_tilik->tambahan_daftar_tilik ?>
                                            <input type="hidden" name="id_auditor_daftar_tilik[]" value="<?= $daftar_tilik->id_auditor_daftar_tilik ?>">
                                        </td>
                                        <td class="text-center">
                                            <textarea name="dokumenterkait[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" style="width: 100%; border: 1px solid #ccc; padding: 5px;"><?= $daftar_tilik->dokumen_terkait ?></textarea>
                                        </td>
                                        <td class="text-center">
                                            <textarea name="hasilobservasi[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" style="width: 100%; border: 1px solid #ccc; padding: 5px;"><?= $daftar_tilik->hasil_observasi ?></textarea>
                                        </td>
                                        <td class="text-center"><input type="checkbox" name="my[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" <?= ($daftar_tilik->my == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mb[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" <?= ($daftar_tilik->mb == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="m[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" <?= ($daftar_tilik->m == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center"><input type="checkbox" name="mp[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" <?= ($daftar_tilik->mp == 1) ? 'checked' : '' ?>></td>
                                        <td class="text-center">
                                            <textarea name="rekomendasi[<?= $daftar_tilik->id_auditor_daftar_tilik ?>]" style="width: 100%; border: 1px solid #ccc; padding: 5px;"><?= $daftar_tilik->rekomendasi ?></textarea>
                                        </td>
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
                            <td>Standar Isi Pembelajaran</td>
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

                        <form action="<?= base_url("auditor/add_nilai_hasil_desk_utama") ?>" method="POST">

                            <tbody style="background-color: white; color: black;">
                                <?php
                                $no = 1;
                                foreach ($tampil_hasil_desk_utama2 as $hasil_desk) :
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
                                        <td class="text-center">
                                            <textarea name="catatan[<?= $hasil_desk->id_hasil_desk ?>]" id="catatan<?= $hasil_desk->id_hasil_desk ?>" style="width: 100%; height: 400px; border: 1px solid #ccc; padding: 5px;"><?= $hasil_desk->catatan ?></textarea>
                                        </td>
                                        <td class="text-center">
                                            <textarea name="penanggungjawab[<?= $hasil_desk->id_hasil_desk ?>]" id="penanggungjawab<?= $hasil_desk->id_hasil_desk ?>" style="width: 100%; border: 1px solid #ccc; padding: 5px;"><?= $hasil_desk->penanggungjawab ?></textarea>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </form>

                        <form action="<?= base_url("auditor/add_nilai_hasil_desk_tambahan") ?>" method="POST">

                            <?php if ($tampil_hasil_desk_tambahan2 !== null) : ?>
                                <tbody style="background-color: white; color: black;">
                                    <?php
                                    $no = 1;
                                    foreach ($tampil_hasil_desk_tambahan2 as $hasil_desk) :
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
                                            <td class="text-center">
                                                <textarea name="catatan[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="catatan<?= $hasil_desk->id_auditor_hasil_desk ?>" style="width: 100%; height: 400px; border: 1px solid #ccc; padding: 5px;"><?= $hasil_desk->catatan ?></textarea>
                                            </td>
                                            <td class="text-center">
                                                <textarea name="penanggungjawab[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="penanggungjawab<?= $hasil_desk->id_auditor_hasil_desk ?>" style="width: 100%; border: 1px solid #ccc; padding: 5px;"><?= $hasil_desk->penanggungjawab ?></textarea>
                                            </td>
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
                <p style="color:black;"> * MY= Menyimpang, MB= Belum Memenuhi,M=Memenuhi, MP= Melampaui <br> <br>* OB= Observasi, KTS= Ketidaksesuaian</br></br></p>
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

                        <form action="<?= base_url("auditor/add_nilai_daftar_tilik_utama") ?>" method="POST">

                            <tbody style="background-color: white; color:black;">
                                <?php
                                $no = 1;
                                foreach ($tampil_daftar_tilik_utama2 as $daftar_tilik) :
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


                        <form action="<?= base_url("auditor/add_nilai_daftar_tilik_tambahan") ?>" method="POST">

                            </thead>
                            <tbody style="background-color: white; color:black;">
                                <?php
                                $no = 1;
                                foreach ($tampil_daftar_tilik_tambahan2 as $daftar_tilik) :
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
                            <td>Standar Proses Pembelajaran</td>
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

                        <form action="<?= base_url("auditor/add_nilai_hasil_desk_utama") ?>" method="POST">

                            <tbody style="background-color: white; color: black;">
                                <?php
                                $no = 1;
                                foreach ($tampil_hasil_desk_utama3 as $hasil_desk) :
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
                                        <td class="text-center">
                                            <textarea name="catatan[<?= $hasil_desk->id_hasil_desk ?>]" id="catatan<?= $hasil_desk->id_hasil_desk ?>" style="width: 100%; height: 400px; border: 1px solid #ccc; padding: 5px;"><?= $hasil_desk->catatan ?></textarea>
                                        </td>
                                        <td class="text-center">
                                            <textarea name="penanggungjawab[<?= $hasil_desk->id_hasil_desk ?>]" id="penanggungjawab<?= $hasil_desk->id_hasil_desk ?>" style="width: 100%; border: 1px solid #ccc; padding: 5px;"><?= $hasil_desk->penanggungjawab ?></textarea>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </form>

                        <form action="<?= base_url("auditor/add_nilai_hasil_desk_tambahan") ?>" method="POST">

                            <?php if ($tampil_hasil_desk_tambahan3 !== null) : ?>
                                <tbody style="background-color: white; color: black;">
                                    <?php
                                    $no = 1;
                                    foreach ($tampil_hasil_desk_tambahan3 as $hasil_desk) :
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
                                            <td class="text-center">
                                                <textarea name="catatan[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="catatan<?= $hasil_desk->id_auditor_hasil_desk ?>" style="width: 100%; height: 400px; border: 1px solid #ccc; padding: 5px;"><?= $hasil_desk->catatan ?></textarea>
                                            </td>
                                            <td class="text-center">
                                                <textarea name="penanggungjawab[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="penanggungjawab<?= $hasil_desk->id_auditor_hasil_desk ?>" style="width: 100%; border: 1px solid #ccc; padding: 5px;"><?= $hasil_desk->penanggungjawab ?></textarea>
                                            </td>
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
                <p style="color:black;"> * MY= Menyimpang, MB= Belum Memenuhi,M=Memenuhi, MP= Melampaui <br> <br>* OB= Observasi, KTS= Ketidaksesuaian</br></br></p>
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

                        <form action="<?= base_url("auditor/add_nilai_daftar_tilik_utama") ?>" method="POST">

                            <tbody style="background-color: white; color:black;">
                                <?php
                                $no = 1;
                                foreach ($tampil_daftar_tilik_utama3 as $daftar_tilik) :
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


                        <form action="<?= base_url("auditor/add_nilai_daftar_tilik_tambahan") ?>" method="POST">

                            </thead>
                            <tbody style="background-color: white; color:black;">
                                <?php
                                $no = 1;
                                foreach ($tampil_daftar_tilik_tambahan3 as $daftar_tilik) :
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
                                <td>Standar Penilaian Pembelajaran</td>
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

                            <form action="<?= base_url("auditor/add_nilai_hasil_desk_utama") ?>" method="POST">

                                <tbody style="background-color: white; color: black;">
                                    <?php
                                    $no = 1;
                                    foreach ($tampil_hasil_desk_utama4 as $hasil_desk) :
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
                                            <td class="text-center">
                                                <textarea name="catatan[<?= $hasil_desk->id_hasil_desk ?>]" id="catatan<?= $hasil_desk->id_hasil_desk ?>" style="width: 100%; height: 400px; border: 1px solid #ccc; padding: 5px;"><?= $hasil_desk->catatan ?></textarea>
                                            </td>
                                            <td class="text-center">
                                                <textarea name="penanggungjawab[<?= $hasil_desk->id_hasil_desk ?>]" id="penanggungjawab<?= $hasil_desk->id_hasil_desk ?>" style="width: 100%; border: 1px solid #ccc; padding: 5px;"><?= $hasil_desk->penanggungjawab ?></textarea>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </form>

                            <form action="<?= base_url("auditor/add_nilai_hasil_desk_tambahan") ?>" method="POST">

                                <?php if ($tampil_hasil_desk_tambahan4 !== null) : ?>
                                    <tbody style="background-color: white; color: black;">
                                        <?php
                                        $no = 1;
                                        foreach ($tampil_hasil_desk_tambahan4 as $hasil_desk) :
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
                    <p style="color:black;"> * MY= Menyimpang, MB= Belum Memenuhi,M=Memenuhi, MP= Melampaui <br> <br>* OB= Observasi, KTS= Ketidaksesuaian</br></br></p>
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

                            <form action="<?= base_url("auditor/add_nilai_daftar_tilik_utama") ?>" method="POST">

                                <tbody style="background-color: white; color:black;">
                                    <?php
                                    $no = 1;
                                    foreach ($tampil_daftar_tilik_utama4 as $daftar_tilik) :
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


                            <form action="<?= base_url("auditor/add_nilai_daftar_tilik_tambahan") ?>" method="POST">

                                </thead>
                                <tbody style="background-color: white; color:black;">
                                    <?php
                                    $no = 1;
                                    foreach ($tampil_daftar_tilik_tambahan4 as $daftar_tilik) :
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
                                    <td>Standar Pengelolaan Pembelajaran</td>
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

                                <form action="<?= base_url("auditor/add_nilai_hasil_desk_utama") ?>" method="POST">

                                    <tbody style="background-color: white; color: black;">
                                        <?php
                                        $no = 1;
                                        foreach ($tampil_hasil_desk_utama5 as $hasil_desk) :
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
                                                <td class="text-center">
                                                    <textarea name="catatan[<?= $hasil_desk->id_hasil_desk ?>]" id="catatan<?= $hasil_desk->id_hasil_desk ?>" style="width: 100%; height: 400px; border: 1px solid #ccc; padding: 5px;"><?= $hasil_desk->catatan ?></textarea>
                                                </td>
                                                <td class="text-center">
                                                    <textarea name="penanggungjawab[<?= $hasil_desk->id_hasil_desk ?>]" id="penanggungjawab<?= $hasil_desk->id_hasil_desk ?>" style="width: 100%; border: 1px solid #ccc; padding: 5px;"><?= $hasil_desk->penanggungjawab ?></textarea>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </form>

                                <form action="<?= base_url("auditor/add_nilai_hasil_desk_tambahan") ?>" method="POST">

                                    <!-- tampil_tambahan_hasil_desk_auditor -->
                                    <?php if ($tampil_hasil_desk_tambahan5 !== null) : ?>
                                        <tbody style="background-color: white; color: black;">
                                            <?php
                                            $no = 1;
                                            foreach ($tampil_hasil_desk_tambahan5 as $hasil_desk) :
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
                        <p style="color:black;"> * MY= Menyimpang, MB= Belum Memenuhi,M=Memenuhi, MP= Melampaui <br> <br>* OB= Observasi, KTS= Ketidaksesuaian</br></br></p>
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

                                <form action="<?= base_url("auditor/add_nilai_daftar_tilik_utama") ?>" method="POST">
                                    <tr>
                                        <td colspan="12" class="text-left font-weight-bold">
                                            A. Pertanyaan Utama
                                            <button type="submit" class="btn btn-outline-primary">Simpan Nilai Utama</button>
                                            <input type="hidden" name="id_dokumen_acuan" value="<?= $this->uri->segment(3) ?>">
                                        </td>
                                    </tr>
                                    <tbody style="background-color: white; color:black;">
                                        <?php
                                        $no = 1;
                                        foreach ($tampil_daftar_tilik_utama5 as $daftar_tilik) :
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


                                <form action="<?= base_url("auditor/add_nilai_daftar_tilik_tambahan") ?>" method="POST">

                                    <tbody style="background-color: white; color:black;">
                                        <?php
                                        $no = 1;
                                        foreach ($tampil_daftar_tilik_tambahan5 as $daftar_tilik) :
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
                                        <td>Standar Isi Isi dan Proses Penelitian</td>
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

                                    <form action="<?= base_url("auditor/add_nilai_hasil_desk_utama") ?>" method="POST">

                                        <tbody style="background-color: white; color: black;">
                                            <?php
                                            $no = 1;
                                            foreach ($tampil_hasil_desk_utama6 as $hasil_desk) :
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
                                                    <td class="text-center">
                                                        <textarea name="catatan[<?= $hasil_desk->id_hasil_desk ?>]" id="catatan<?= $hasil_desk->id_hasil_desk ?>" style="width: 100%; height: 400px; border: 1px solid #ccc; padding: 5px;"><?= $hasil_desk->catatan ?></textarea>
                                                    </td>
                                                    <td class="text-center">
                                                        <textarea name="penanggungjawab[<?= $hasil_desk->id_hasil_desk ?>]" id="penanggungjawab<?= $hasil_desk->id_hasil_desk ?>" style="width: 100%; border: 1px solid #ccc; padding: 5px;"><?= $hasil_desk->penanggungjawab ?></textarea>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </form>

                                    <form action="<?= base_url("auditor/add_nilai_hasil_desk_tambahan") ?>" method="POST">

                                        <!-- tampil_tambahan_hasil_desk_auditor -->
                                        <?php if ($tampil_hasil_desk_tambahan6 !== null) : ?>
                                            <tbody style="background-color: white; color: black;">
                                                <?php
                                                $no = 1;
                                                foreach ($tampil_hasil_desk_tambahan6 as $hasil_desk) :
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
                            <p style="color:black;"> * MY= Menyimpang, MB= Belum Memenuhi,M=Memenuhi, MP= Melampaui <br> <br>* OB= Observasi, KTS= Ketidaksesuaian</br></br></p>
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

                                    <form action="<?= base_url("auditor/add_nilai_daftar_tilik_utama") ?>" method="POST">

                                        <tbody style="background-color: white; color:black;">
                                            <?php
                                            $no = 1;
                                            foreach ($tampil_daftar_tilik_utama6 as $daftar_tilik) :
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


                                    <form action="<?= base_url("auditor/add_nilai_daftar_tilik_tambahan") ?>" method="POST">

                                        <tbody style="background-color: white; color:black;">
                                            <?php
                                            $no = 1;
                                            foreach ($tampil_daftar_tilik_tambahan6 as $daftar_tilik) :
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
                                            <td>Standar Isi Isi dan Proses Pengabdian Kepada Masyarakat</td>
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

                                        <form action="<?= base_url("auditor/add_nilai_hasil_desk_utama") ?>" method="POST">

                                            <tbody style="background-color: white; color: black;">
                                                <?php
                                                $no = 1;
                                                foreach ($tampil_hasil_desk_utama7 as $hasil_desk) :
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
                                                        <td class="text-center">
                                                            <textarea name="catatan[<?= $hasil_desk->id_hasil_desk ?>]" id="catatan<?= $hasil_desk->id_hasil_desk ?>" style="width: 100%; height: 400px; border: 1px solid #ccc; padding: 5px;"><?= $hasil_desk->catatan ?></textarea>
                                                        </td>
                                                        <td class="text-center">
                                                            <textarea name="penanggungjawab[<?= $hasil_desk->id_hasil_desk ?>]" id="penanggungjawab<?= $hasil_desk->id_hasil_desk ?>" style="width: 100%; border: 1px solid #ccc; padding: 5px;"><?= $hasil_desk->penanggungjawab ?></textarea>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </form>

                                        <form action="<?= base_url("auditor/add_nilai_hasil_desk_tambahan") ?>" method="POST">

                                            <!-- tampil_tambahan_hasil_desk_auditor -->
                                            <?php if ($tampil_hasil_desk_tambahan7 !== null) : ?>
                                                <tbody style="background-color: white; color: black;">
                                                    <?php
                                                    $no = 1;
                                                    foreach ($tampil_hasil_desk_tambahan7 as $hasil_desk) :
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
                                <p style="color:black;"> * MY= Menyimpang, MB= Belum Memenuhi,M=Memenuhi, MP= Melampaui <br> <br>* OB= Observasi, KTS= Ketidaksesuaian</br></br></p>
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


                                        <form action="<?= base_url("auditor/add_nilai_daftar_tilik_utama") ?>" method="POST">

                                            <tbody style="background-color: white; color:black;">
                                                <?php
                                                $no = 1;
                                                foreach ($tampil_daftar_tilik_utama7 as $daftar_tilik) :
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


                                        <form action="<?= base_url("auditor/add_nilai_daftar_tilik_tambahan") ?>" method="POST">

                                            </thead>
                                            <tbody style="background-color: white; color:black;">
                                                <?php
                                                $no = 1;
                                                foreach ($tampil_daftar_tilik_tambahan7 as $daftar_tilik) :
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