<div class="container-fluid">
    <div class="row-lg-12">
        <div class="card mt-2">
            <div class="card-body">

                <h4 class="d-flex justify-content-center align-items-center mt-3"><?= $title1 ?></h4>

                <div class="table-responsive mt-2">
                    <table class="table table-borderless" style="color:black;">
                        <tr>
                            <td width="200px">Jurusan</td>
                            <td width="10px">:</td>
                            <td>JTPI</td>
                        </tr>

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
                            <td>Ruang Lingkup DE</td>
                            <td>:</td>
                            <td>Kompetensi Lulusan</td>
                        </tr>

                        <tr>
                            <td>Auditor</td>
                            <td>:</td>
                            <td>Tim Auditor Mutu Internal ITERA</td>
                        </tr>

                        <tr>
                            <td>Tanggal DE</td>
                            <td>:</td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>Dokumen Acuan</td>
                            <td>:</td>
                            <td>Standar Kompetensi Lulusan</td>
                        </tr>
                    </table>
                </div>

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
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <input type="hidden" name="id_dokumen_acuan[]" value="<?= $this->uri->segment(3) ?>">
                                </td>
                            </tr>
                            <tbody style="background-color: white; color:black;">
                                <?php
                                $no = 1;
                                foreach ($tampil_hasil_desk as $hasil_desk) :
                                ?>
                                    <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td>
                                            <?= $hasil_desk->nama_dokumen_terkait ?>
                                            <input type="hidden" name="id_hasil_desk[]" value=" <?= $hasil_desk->id_hasil_desk ?>">
                                        </td>
                                        <td class="text-center"><input type="checkbox" value="1" name="my[]" id="m"></td>
                                        <td class="text-center"><input type="checkbox" value="1" name="mb[]" id="m"></td>
                                        <td class="text-center"><input type="checkbox" value="1" name="m[]" id="m"></td>
                                        <td class="text-center"><input type="checkbox" value="1" name="mp[]" id="m"></td>
                                        <td class="text-center"><input type="checkbox" value="1" name="ob[]" id="m"></td>
                                        <td class="text-center"><input type="checkbox" value="1" name="kts[]" id="m"></td>
                                        <td class="text-center"><input type="checkbox" value="1" name="open[]" id="m"></td>
                                        <td class="text-center"><input type="checkbox" value="1" name="close[]" id="m"></td>
                                        <td class="text-center"><input type="text" name="catatan[]" id="m"></td>
                                        <td class="text-center"><input type="text" name="penanggungjawab[]" id="m"></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </form>
                        <thead>
                            <tr>
                                <td colspan="12" class="text-left font-weight-bold">B. Pertanyaan Tambahan</td>
                            </tr>
                        </thead>

                        <!-- tampil_tambahan_hasil_desk_auditor -->
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($tampil_tambahan_hasil_desk_auditor as $hasil_desk) :
                            ?>
                                <tr>
                                    <td class="text-center"><?= $no++; ?></td>
                                    <td><?= $hasil_desk->tambahan_hasil_desk ?></td>
                                    <td class="text-center"><input type="checkbox" name="m" id="m"></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr class="text-center" style="background-color: #C0C0C0; color:black;">
                                <th colspan="2">Jumlah Nilai</th>
                            </tr>
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
                <a class="btn btn-success" type="button" href="<?= base_url('user/tambahprodi') ?>" class="text-white">+ Tambah</a>
                <h4 class="d-flex justify-content-center align-items-center mt-3"><?= $title2 ?></h4>

                <div class="data table-responsive mt-2">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <td style="color:black;" scope="col">Hari / Tanggal </td>
                                <td style="color:black;" scope="col">Auditee
                            </tr>
                        </thead>
                </div>

                <tbody>
                    <tr>
                        <td style="color:black;" scope="row">Jam </td>
                        <td style="color:black;">Auditor</td>
                    </tr>

                    <tr>
                        <td style="color:black;" scope="row">Ruang Lingkup</td>
                        <td style="color:black;">Ketua</td>
                    </tr>

                    <tr>
                        <td style="color:black;" scope="row">Dokumen Acuan</td>
                        <td style="color:black;">Anggota</td>
                    </tr>
            </div>

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

                    <!-- <tbody style="background-color: white; color:black;">
                        <tr>
                            <td>1</td>
                            <td>Apakah sebelumnya pernah dilakukan AMI
                                terkait kompetensi lulusan?
                                Bila Ya, apakah dilakukan tindak lanjut terhadap temuan sebelumnya?</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Apakah kompetensi lulusan prodi
                                telah sesuai dengan KKNI minimal Level 6?</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>Apakah prodi melibatkan dosen dan pemangku kepentingan
                                yang relevan dalam menyusun kompetensi lulusan?</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>Apakah kompetensi lulusan prodi terdiri dari : - keterampilan umum (mencakup 9 poin)
                                - penguasaan pengetahuan
                                - sikap (mencakup 10 poin sikap)
                                - keterampilan khusus?
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>Apakah kompetensi lulusan tertera di Kurikulum? (Dokumen CPL)</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody> -->
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
            <form action="<?= base_url("auditor/tambahan_hasil_desk_auditor") ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="tambahan_hasil_desk">Pertanyaan Tambahan</label>
                        <input type="text" name="tambahan_hasil_desk" class="form-control" id="tambahan_hasil_desk">

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