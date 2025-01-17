<div class="container-fluid">
    <div class="row-lg-12">
        <div class="card mt-2">
            <div class="card-body">
                <h4 class="d-flex justify-content-center align-items-center mt-3 font-weight-bold text-dark"><?= $title1 ?></h4>

                <div class=" d-flex justify-content-start my-3">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#hasil_desk">
                        Tambah Pertanyaan
                    </button>
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
                            <tr>
                                <td colspan="12" class="text-left font-weight-bold">
                                    A. Pertanyaan Utama
                                    <button type="submit" class="btn btn-outline-primary">Simpan Nilai Utama</button>
                                    <input type="hidden" name="id_dokumen_acuan" value="<?= $this->uri->segment(3) ?>">
                                </td>
                            </tr>
                            <tbody style="background-color: white; color: black;">
                                <?php
                                $no = 1;
                                foreach ($tampil_hasil_desk_utama as $hasil_desk) :
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
                            <tr>
                                <td colspan="12" class="text-left font-weight-bold">B. Pertanyaan Tambahan
                                    <button type="submit" class="btn btn-outline-primary">Simpan Nilai Tambahan</button>
                                    <input type="hidden" name="id_dokumen_acuan" value="<?= $this->uri->segment(3) ?>">
                                </td>
                            </tr>

                            <!-- tampil_tambahan_hasil_desk_auditor -->
                            <?php if ($tampil_hasil_desk_tambahan !== null) : ?>
                                <tbody style="background-color: white; color: black;">
                                    <?php
                                    $no = 1;
                                    foreach ($tampil_hasil_desk_tambahan as $hasil_desk) :
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
                                                <textarea name="catatan[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="catatan<?= $hasil_desk->id_auditor_hasil_desk ?>" style="width: 100%; height: 400px; border: 1px solid #ccc; padding: 5px; resize: vertical;"><?= $hasil_desk->catatan ?></textarea>
                                            </td>
                                            <td class="text-center">
                                                <textarea name="penanggungjawab[<?= $hasil_desk->id_auditor_hasil_desk ?>]" id="penanggungjawab<?= $hasil_desk->id_auditor_hasil_desk ?>" style="width: 100%; height: 100px; border: 1px solid #ccc; padding: 5px; resize: vertical;"><?= $hasil_desk->penanggungjawab ?></textarea>
                                            </td>
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

                        <div class=" d-flex justify-content-start my-3">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#daftar_tilik">
                                Tambah Pertanyaan
                            </button>
                        </div>

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
                                foreach ($tampil_daftar_tilik_utama as $daftar_tilik) :
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
                            <tr>
                                <td colspan="12" class="text-left font-weight-bold">B. Pertanyaan Tambahan
                                    <button type="submit" class="btn btn-outline-primary">Simpan Nilai Tambahan</button>
                                    <input type="hidden" name="id_dokumen_acuan" value="<?= $this->uri->segment(3) ?>">
                                </td>
                            </tr>
                            </thead>
                            <tbody style="background-color: white; color:black;">
                                <?php
                                $no = 1;
                                foreach ($tampil_daftar_tilik_tambahan as $daftar_tilik) :
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


    <!-- MODAL TAMBAH PERTANYAAN HASIL DESK -->
    <div class="modal fade" id="hasil_desk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Dokumen Terkait Tambahan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url("auditor/add_hasil_desk_tambahan") ?>" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="tambahan_hasil_desk">Pertanyaan Tambahan</label>
                            <input type="text" name="tambahan_hasil_desk" class="form-control" id="tambahan_hasil_desk">

                            <input type="hidden" name="id_dokumen_acuan" value="<?= $this->uri->segment(3) ?>">
                            <input type="hidden" name="id_audit" value="<?= $user['id_audit'] ?>">
                            <input type="hidden" name="id_user" value="<?= $user['id'] ?>">

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

    <!-- MODAL TAMBAH PERTANYAAN DAFTAR TILIK -->
    <div class="modal fade" id="daftar_tilik" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pertanyaan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url("auditor/add_daftar_tilik_tambahan") ?>" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="tambahan_daftar_tilik">Pertanyaan Tambahan</label>
                            <input type="text" name="tambahan_daftar_tilik" class="form-control" id="tambahan_daftar_tilik">

                            <input type="hidden" name="id_dokumen_acuan" value="<?= $this->uri->segment(3) ?>">
                            <input type="hidden" name="id_audit" value="<?= $user['id_audit'] ?>">
                            <input type="hidden" name="id_user" value="<?= $user['id'] ?>">

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>