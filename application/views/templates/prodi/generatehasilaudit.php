<div class="container">

    <?php if ($hasilaudit == null) : ?>

        <div class="card">
            <div class="card-body">
                <center class="text-dark mt-8">
                    <h5><b>AUDITOR BELUM MEMBUAT LAPORAN HASIL AUDIT</b></h5>
                </center>
            </div>
        </div>

    <?php else : ?>

        <div class="card mt-2">
            <div class="card-body">
                <center class="text-dark mt-8">
                    <h5><b>LAPORAN AUDIT MUTU INTERNAL <?= $hasilaudit->tahun ?> <br>Program Studi <?= $hasilaudit->lembaga ?> <br></b></h5>
                </center>

                <center class="text-dark mt-8">
                    <!-- <h5><b> <?= $hasilaudit->foto_pengesahan ?></h5> -->
                    <img style="width: 1080px;" src="<?= base_url("/assets/dokumen/" . $hasilaudit->foto_pengesahan) ?>" alt="Gambar">
                </center>
                <div class="page-break"></div>
                <center class="text-dark mt-8">
                    <!-- <h5><b> <?= $hasilaudit->daftarhadir ?></h5> -->
                    <img style="width: 1080px;" src="<?= base_url("/assets/dokumen/" . $hasilaudit->daftarhadir) ?>" alt="Gambar">
                </center>
                <div class="page-break"></div>
                <center class="text-dark mt-8">
                    <!-- <h5><b> <?= $hasilaudit->beritaacara ?></h5> -->
                    <img style="width: 1080px;" src="<?= base_url("/assets/dokumen/" . $hasilaudit->beritaacara) ?>" alt="Gambar">
                </center>

                <div class="card">
                    <div class="card-body" style="font-family:Arial, Helvetica, sans-serif; color:black; font-size:large;">

                        <center class="text-dark mt-8" style="color:black;">
                            <div class="page-break"></div>
                            <h4><b>KATA PENGANTAR</b></h4>
                        </center>
                        <p class="ratakanankiri">Segala puji bagi Allah Subhanahu wa Ta’ala karena hanya dengan limpahan rahmat
                            dan bimbinganNya laporan Audit Mutu Internal siklus tahun <?= $hasilaudit->tahun ?> Institut Teknologi
                            Sumatera berhasil diselesaikan. Laporan ini merupakan hasil audit yang dilaksanakan oleh
                            tim audit mutu internal berdasarkan permintaan audit Program Studi <?= $hasilaudit->lembaga ?>
                            <br> <br> Laporan ini memuat beberapa temuan yang secara keseluruhan telah mendapat
                            tanggapan dari pihak teraudit. Selanjutnya dalam laporan ini juga memuat tindakan
                            permintaan koreksi untuk beberapa temuan selama pelaksanaan audit. Harapan kami, agar
                            temuan – temuan tersebut ditindaklanjuti sesuai dengan jangka waktu yang telah ditetapkan,
                            sehingga mutu penyelengaraan layanan pendidikan di Program Studi <?= $hasilaudit->lembaga ?> dapat ditingkatkan
                            </br> <br> Pada kesempatan ini, kami juga mengucapkan terimakasih kepada pihak teraudit yang
                            telah berlaku kooperatif selama proses audit berlangsung. Ucapan terima kasih juga kami
                            sampaikan kepada semua pihak yang telah berkenan membantu sehingga kegiatan audit dapat
                            terlaksana dengan baik dan lancar.</br>
                        </p>
                    </div>

                    <div class="text-right" style="font-family:Arial, Helvetica, sans-serif; color:black; font-size:large;">
                        <p>Lampung Selatan, <?= $hasilaudit->tanggal ?> </p>
                        <p>Ketua Audit Mutu Internal </p>
                        <br></br>
                        <br></br>
                        <p>NIP / NRK. <?= $hasilaudit->NIP ?></p>

                    </div>

                </div>

                <div class="card">
                    <div class="card-body" style="font-family:Arial, Helvetica, sans-serif; color:black; font-size:large;">
                        <center class="text-dark mt-8" style="color:black;">
                            <div class="page-break"></div>
                            <h4><b>BAB I <br> PENDAHULUAN </br></b></h4>
                        </center>
                        <b>1.1 Latar Belakang</b> <br><br>
                        <p class="ratakanankiri">Penjaminan mutu Pendidikan Tinggi merupakan kegiatan sistematik untuk meningkatkan
                            mutu Pendidikan Tinggi secara berencana dan berkelanjutan. Berdasarkan Undang – Undang
                            Nomor 12 tahun 2012 Pasal 51 dan 52, Penjaminan mutu pendidikan tinggi dilakukan
                            melalui penetapan, pelaksanaan, evaluasi, pengendalian dan peningkatan Standar Pendidikan
                            Tinggi. Sistem penjaminan mutu pendidikan tinggi tersebut terdiri atas (1) Sistem
                            Penjaminan Mutu Internal (SPMI) yang dikembangkan oleh Perguruan Tinggi; dan (2)
                            Sistem Penjaminan Mutu Eksternal (SPME) yang dilakukan melalui akreditasi <br> <br> SPMI yang dilaksanakan ITERA bertujuan untuk menjamin pemenuhan Standar
                            Nasional Dikti secara sistemati dan berkelanjutan hingga tumbuh dan berkembang budaya
                            mutu di setiap unit di ITERA. Pelaksanaan SPMI mengikuti kaidah PPEPP, yaitu Penetapan,
                            Pelaksanaan, Evaluasi, Pengendalian dan Pengembangan standar yang telah ditetapkan. Pada
                            tahapan Evaluasi dapt dilakukan melalui Audit Mutu Intenal.</br> <br> Audit Mutu Internal (AMI) merupakan suatu pemeriksaan yang sistematis dan
                            independen untuk menentukan apakah kegiatan dalam menjaga mutu serta hasilnya telah
                            dilaksanakan secara efektif sesuai dengan standar pendidikan tinggi ITERA.Standar mutu
                            ditetapkan untuk mencapai tujuan ITERA yang telah dituangkan dalam SK Rektor Institut
                            Teknologi Sumatera Nomor 722/IT9.A/KP.06.06/2022 tentang Sistem Penjaminan Mutu
                            Internal Institut Teknologi Sumatera.
                            <br><br> Proses audit dilaksanakan dalam 2 tahap, yaitu desk evaluation dan audit lapangan.
                            Aspek yang dievaluasi untuk kinerja unit adalah proses atau kegiatan yang berdasarkan
                            kesesuaian dengan 5 standar mutu pendidikan, yaitu (1) standar kompetensi lulusan, (2)
                            standar isi pembelajaran, (3) standar proses pembelajaran, (4) standar penilaian
                            pembelajaran, (5) standar pengelolaan pembelajaran.
                            <br> <br> <b> 1.2 Tujuan</b><br>
                            <br>AMI dilakukan untuk kepentingan peningkatan mutu Unit yang diaudit. Audit bukan
                            merupakan asesmen / penilaian melainkan pencocokan antara pelaksanaan dengan standar
                            yang sudah ditetapkan. Dengan demikian, tujuan secara khusus kegiatan audit mutu internal
                            Institut Teknologi Sumatera adalah:
                            <br> 1. Untuk memeriksa kesesuaian dan atau ketaksesuaian pelaksanaan standar yang telah ditetapkan <br> 2. Untuk memeriksa proses dan hasil proses pencapaian mutu sehingga dapat ditentukan keefektifan pencapaian dari tujuan yang telah ditetapkan
                            <br>3. Untuk menyiapkan laporan permintaan tindakan koreksi auditee sebagai dasar perbaikan mutu selanjutnya <br>4. Untuk memberi kesempatan teraudit memperbaiki sistem penjaminan mutu
                            <br>5. Untuk membantu institutsi/program studi dalam mempersiapakan diri dalam rangka audit eksternal atau akreditasi.
                            <br> <br> <b> 1.3 Waktu dan Pelaksanaan Audit</b><br>
                            <br> Kegiatan Audit Mutu Internal periode <?= $hasilaudit->periode ?> tahun <?= $hasilaudit->tahun ?> oleh tim Auditor LP3M ITERA dilakukan pada:
                        <div class="table-responsive mt-2">
                            <table class="table table-borderless" style="color:black;">
                                <tr>
                                    <td width="300px">Hari / Tanggal</td>
                                    <td width="10px">:</td>
                                    <td><?= $hasilaudit->hari_tgl ?></td>
                                </tr>

                                <tr>
                                    <td>Waktu Pelaksanaan</td>
                                    <td>:</td>
                                    <td><?= $hasilaudit->waktu ?></td>
                                </tr>

                                <tr>
                                    <td>Tempat Kegiatan</td>
                                    <td>:</td>
                                    <td><?= $hasilaudit->tempat ?></td>
                                </tr>

                                <tr>
                                    <td>Auditor</td>
                                    <td>:</td>
                                    <td><?= $hasilaudit->auditor ?></td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td>:</td>
                                    <td><?= $hasilaudit->auditor2 ?></td>
                                </tr>


                                <tr>
                                    <td>Auditee</td>
                                    <td>:</td>
                                    <td><?= $hasilaudit->auditee ?></td>
                                </tr>

                                <tr>
                                    <td>Dokumentasi</td>
                                    <td>:</td>
                                    <td><img style="width: 600px;" src="<?= base_url("/assets/dokumen/" . $hasilaudit->dokumentasi) ?>" alt="Gambar" </td>
                                </tr>
                            </table>
                        </div>
                        <br> <br> <b> 1.4 Dasar Hukum </b><br>
                        <br>Dasar hukum atau aturan yang digunakan untuk pelaksanaan AMI periode pertama tahun
                        20xx adalah sebagai berikut :
                        <br>- Undang – Undang Nomor 12 tahun 2012 tentang Pendidikan Tinggi
                        <br>- Peraturan Menteri Pendidikan dan Kebudayaan Nomor 50 tahun 2014 tentang Sistem Penjaminan Mutu Pendidikan Tinggi
                        <br>- Peraturan Menteri Riset, Teknologi dan Pendidikan Tinggi Nomor 44 tahun 2015 tentang Standar Nasional Pendidikan Tinggi
                        <br>- Peraturan Menteri Riset, Teknologi dan Pendidikan Tinggi Nomor 37 tahun 2015 tentang Organisasi dan Tata Kerja Institut Teknologi Sumatera
                        <br>- Peraturan Menteri Riset, Teknologi dan Pendidikan Tinggi Nomor 12 tahun 2017 tentang Statuta Institut Teknologi Sumatera
                        <br>- Surat Keputusan Rektor Institut Teknologi Sumatera Nomor 226/IT9.A/SK/PJ/2017 tentang Sistem Penjaminan Mutu Internal Institut Teknologi Sumatera</br></p>
                    </div>

                </div>


                <div class="card">
                    <div class="card-body" style="font-family:Arial, Helvetica, sans-serif; color:black; font-size:large;">
                        <!-- <a class="btn btn-success" type="button" href="<?= base_url('auditor/isidata2/') . $hasilaudit->id_hasilaudit ?>" class="text-white" href="#">+ Tambah</a> -->
                        <!-- <a class="btn btn-danger" type="button" href="<?= base_url('auditor/isidata2/') ?>" class="text-white" href="#"> Edit</a> -->


                        <center class="text-dark mt-8" style="color:black;">
                            <div class="page-break"></div>

                            <h4><b>BAB II <br> DAFTAR TEMUAN AMI </br></b></h4>
                        </center>

                        <div class="table-responsive mt-2">
                            <table class="table table-borderless" style="color:black;">
                                <tr>
                                    <td width="300px">Program Studi</td>
                                    <td width="10px">:</td>
                                    <td><?= $hasilaudit->lembaga ?></td>
                                </tr>

                                <tr>
                                    <td>Universitas</td>
                                    <td>:</td>
                                    <td>INSTITUT TEKNOLOGI SUMATERA</td>
                                </tr>

                                <tr>
                                    <td>Auditor</td>
                                    <td>:</td>
                                    <td><?= $hasilaudit->auditor ?></td>
                                </tr>

                                <tr>
                                    <td>Tanggal DE</td>
                                    <td>:</td>
                                    <td><?= $hasilaudit->tanggalDE ?></td>
                                </tr>

                                <tr>
                                    <td>Jangka Waktu Perbaikan</td>
                                    <td>:</td>
                                    <td><?= $hasilaudit->jangka_waktu ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="table-responsive">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="text-center">
                                    <tr>
                                        <th rowspan="2" style="background-color: #FFD700; color:black;">Kode PTK</th>
                                        <th rowspan="2" style="background-color: #FFD700; color:black;">Dokumen Acuan</th>
                                        <th rowspan="2" style="background-color: #FFD700; color:black;">Deskripsi Temuan</th>
                                        <th colspan="2" style="background-color: #FFD700; color:black;">Status Temuan</th>
                                        <th rowspan="2" style="background-color: #FF0000; color:black;">Permintaan Tindakan Koreksi</th>
                                        <!--<th rowspan="2" style="background-color: #FFD700; color:black;">Aksi</th>-->
                                    </tr>

                                    <tr>
                                        <th style="background-color: #FFD700; color:black;">Open</th>
                                        <th style="background-color: #FFD700; color:black;">Close</th>
                                    </tr>
                                </thead>

                                <tbody style="background-color: white; color:black;">
                                    <?php if ($bab2_hasil_audit != null) : ?>
                                        <?php
                                        $number = 1;
                                        foreach ($bab2_hasil_audit as $value) :
                                        ?>
                                            <tr>
                                                <td scope style="color: black;"="row"><?= $number++; ?></td>
                                                <td scope style="color: black;"="row"><?= $value->dokumen_acuan; ?></td>
                                                <td scope style="color: black;"="row"><?= $value->deskripsi_temuan; ?></td>
                                                <td class="text-center"><input type="checkbox" name="open[<?= $value->id_bab2 ?>]" <?= ($value->open == 1) ? 'checked' : '' ?>></td>
                                                <td class="text-center"><input type="checkbox" name="close[<?= $value->id_bab2 ?>]" <?= ($value->close == 1) ? 'checked' : '' ?>></td>
                                                <td scope style="color: black;"="row"><?= $value->permintaan_tindakan; ?></td>
                                                <!--<td> <a href="<?= base_url('auditorunit/edit_data2/') . $value->id_bab2; ?>"><button type="edit" class="sbtn btn" style="background-color: #DCDCDC;"><i class="fa fa-edit" style="color: #4169E1;"></i></button></a></td>-->
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>

<div class="page-break"></div>
<div class="card">
    <div class="card-body">
        <center class="text-dark mt-8">
            <h5><b>LAMPIRAN</b></h5>
        </center>
    </div>
</div>



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
                                        <td class="text-center"><input type="text" name="catatan[<?= $hasil_desk->id_hasil_desk ?>]" id="catatan<?= $hasil_desk->id_hasil_desk ?>" value="<?= $hasil_desk->catatan ?>"></td>
                                        <td class="text-center"><input type="text" name="penanggungjawab[<?= $hasil_desk->id_hasil_desk ?>]" id="penanggungjawab<?= $hasil_desk->id_hasil_desk ?>" value="<?= $hasil_desk->penanggungjawab ?>"></td>

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
                                foreach ($tampil_daftar_tilik_tambahan1 as $daftar_tilik) :
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
                                        <td class="text-center"><input type="text" name="catatan[<?= $hasil_desk->id_hasil_desk ?>]" id="catatan<?= $hasil_desk->id_hasil_desk ?>" value="<?= $hasil_desk->catatan ?>"></td>
                                        <td class="text-center"><input type="text" name="penanggungjawab[<?= $hasil_desk->id_hasil_desk ?>]" id="penanggungjawab<?= $hasil_desk->id_hasil_desk ?>" value="<?= $hasil_desk->penanggungjawab ?>"></td>

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
                                        <td class="text-center"><input type="text" name="catatan[<?= $hasil_desk->id_hasil_desk ?>]" id="catatan<?= $hasil_desk->id_hasil_desk ?>" value="<?= $hasil_desk->catatan ?>"></td>
                                        <td class="text-center"><input type="text" name="penanggungjawab[<?= $hasil_desk->id_hasil_desk ?>]" id="penanggungjawab<?= $hasil_desk->id_hasil_desk ?>" value="<?= $hasil_desk->penanggungjawab ?>"></td>

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
                                            <td class="text-center"><input type="text" name="catatan[<?= $hasil_desk->id_hasil_desk ?>]" id="catatan<?= $hasil_desk->id_hasil_desk ?>" value="<?= $hasil_desk->catatan ?>"></td>
                                            <td class="text-center"><input type="text" name="penanggungjawab[<?= $hasil_desk->id_hasil_desk ?>]" id="penanggungjawab<?= $hasil_desk->id_hasil_desk ?>" value="<?= $hasil_desk->penanggungjawab ?>"></td>

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
                                                <td class="text-center"><input type="text" name="catatan[<?= $hasil_desk->id_hasil_desk ?>]" id="catatan<?= $hasil_desk->id_hasil_desk ?>" value="<?= $hasil_desk->catatan ?>"></td>
                                                <td class="text-center"><input type="text" name="penanggungjawab[<?= $hasil_desk->id_hasil_desk ?>]" id="penanggungjawab<?= $hasil_desk->id_hasil_desk ?>" value="<?= $hasil_desk->penanggungjawab ?>"></td>

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
                                                    <td class="text-center"><input type="text" name="catatan[<?= $hasil_desk->id_hasil_desk ?>]" id="catatan<?= $hasil_desk->id_hasil_desk ?>" value="<?= $hasil_desk->catatan ?>"></td>
                                                    <td class="text-center"><input type="text" name="penanggungjawab[<?= $hasil_desk->id_hasil_desk ?>]" id="penanggungjawab<?= $hasil_desk->id_hasil_desk ?>" value="<?= $hasil_desk->penanggungjawab ?>"></td>

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
                                                        <td class="text-center"><input type="text" name="catatan[<?= $hasil_desk->id_hasil_desk ?>]" id="catatan<?= $hasil_desk->id_hasil_desk ?>" value="<?= $hasil_desk->catatan ?>"></td>
                                                        <td class="text-center"><input type="text" name="penanggungjawab[<?= $hasil_desk->id_hasil_desk ?>]" id="penanggungjawab<?= $hasil_desk->id_hasil_desk ?>" value="<?= $hasil_desk->penanggungjawab ?>"></td>

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