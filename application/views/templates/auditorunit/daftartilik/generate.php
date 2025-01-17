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

                        <!-- tampil_tambahan_hasil_desk_auditor -->
                        <?php if ($tampil_hasil_desk_tambahan_unit !== null) : ?>
                            <tbody style="background-color: white; color: black;">
                                <?php
                                $no = 1;
                                foreach ($tampil_hasil_desk_tambahan_unit as $hasil_desk) :
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
                                <th style="background-color: #ffa07a; color:black;"> <?= $total_checkbox['my'] ?></th>
                                <th style="background-color: #3EB489; color:black;"><?= $total_checkbox['mb'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox['m'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox['mp'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox['ob'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox['kts'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox['open'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_checkbox['close'] ?></th>

                            </tr>
                            </thead>
                        </tfoot>

                    </table>
                </div>
                <p style="color:black;"> * MY= Menyimpang, MB= Belum Memenuhi, M= Memenuhi, MP= Melampaui <br> <br>* OB= Observasi, KTS= Ketidaksesuaian</br></br></p>
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


                        <tbody style="background-color: white; color:black;">
                            <?php
                            $no = 1;
                            foreach ($tampil_daftar_tilik_tambahan_unit as $daftar_tilik) :
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
                                <th style="background-color: #ffa07a; color:black;"> <?= $total_daftar_tilik['my'] ?></th>
                                <th style="background-color: #3EB489; color:black;"><?= $total_daftar_tilik['mb'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_daftar_tilik['m'] ?></th>
                                <th style="background-color: #B0C4DE; color:black;"><?= $total_daftar_tilik['mp'] ?></th>
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