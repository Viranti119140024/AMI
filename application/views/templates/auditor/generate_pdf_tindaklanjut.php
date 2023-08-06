<div class="container">


    <div class="card mt-2">
        <div class="card-body">
            <center style="font: bold;" class="text-dark mt-8">
                <h5><b>LAPORAN TINDAK LANJUT AUDIT MUTU INTERNAL <?= $tindaklanjut->periode ?> <br>Program Studi <?= $tindaklanjut->lembaga ?> <br></b></h5>
            </center>

            <center class="text-dark mt-8">
                <!-- <h5><b>Foto Pengesahan <?= $tindaklanjut->foto_pengesahan ?></h5> -->
                <img style="width: 1080px;" src="<?= base_url("/assets/dokumen/" . $tindaklanjut->foto_pengesahan) ?>" alt="Gambar">
            </center>
            <center class="text-dark mt-8">
                <!-- <h5><b>Foto Pengesahan <?= $tindaklanjut->daftarhadir ?></h5> -->
                <img style="width: 1080px;" src="<?= base_url("/assets/dokumen/" . $tindaklanjut->daftarhadir) ?>" alt="Gambar">
            </center>

            <center class="text-dark mt-8">
                <!-- <h5><b>Foto Pengesahan <?= $tindaklanjut->beritaacara ?></h5> -->
                <img style="width: 1080px;" src="<?= base_url("/assets/dokumen/" . $tindaklanjut->beritaacara) ?>" alt="Gambar">
            </center>

            <div class="table-responsive">

                <div class="card">
                    <div class="card-body" style="font-family:Arial, Helvetica, sans-serif; color:black; font-size:large; color:black;">
                        <center class="text-dark mt-8">
                            <br></br>
                            <br></br>
                            <br></br>
                            <h4><b>KATA PENGANTAR</b></h4>
                        </center>
                        Segala puji bagi Allah Subhanahu wa Ta’ala karena hanya dengan limpahan rahmat dan bimbinganNya laporan tindak lanjut temuan Audit Mutu Internal siklus periode <?= $tindaklanjut->periode ?> tahun
                        <?= $tindaklanjut->tahun ?> Program Studi <?= $tindaklanjut->lembaga ?> berhasil diselesaikan. Laporan ini merupakan salah satu bentuk komitmen Studi/Jurusan/Unit Kerja untuk meningkatkan mutu penyelenggaraan
                        pendidikan. <br> <br> Laporan ini memuat beberapa tindakan koreksi dari temuan berdasarkan laporan audit
                        mutu internal yang telah diberikan LP3M ITERA. Beberapa temuan telah ditindaklanjuti dan
                        dikoreksi berdasarkan masukan dari audit serta waktu yang telah ditetapkan sebelumnya.
                        Hasil tindakan koreksi tersebut disajikan dalam laporan ini.</br> <br> Pada kesempatan ini, kami juga mengucapkan terimakasih kepada pihak auditor yang
                        telah memberikan masukan-masukan positif selama proses audit berlangsung. Ucapan
                        terima kasih juga kami sampaikan kepada semua pihak yang telah berkenan membantu
                        sehingga kegiatan audit dapat terlaksana dengan baik dan lancar.</br>
                    </div>

                    <div class="text-right" style="font-family:Arial, Helvetica, sans-serif; color:black; font-size:large;">
                        <p>Lampung Selatan, <?= $tindaklanjut->tanggal ?> </p>
                        <p>Auditee <br> <?= $tindaklanjut->auditee ?> </br></p>

                        <br></br>
                        <br></br>


                        <p>NIP / NRK. <?= $tindaklanjut->nrk ?> </p>

                    </div>

                </div>

                <div class="card">
                    <div class="card-body" style="font-family:Arial, Helvetica, sans-serif; color:black; font-size:large; color:black;">
                        <center class="text-dark mt-8">
                            <div class="page-break"></div>
                            <h4><b>BAB I <br> PENDAHULUAN </br></b></h4>
                        </center>
                        <b> 1.1 Latar Belakang</b> <br><br>Penjaminan mutu Pendidikan Tinggi merupakan kegiatan sistematik untuk meningkatkan mutu Pendidikan Tinggi secara berencana dan berkelanjutan. Berdasarkan Undang – Undang
                        Nomor 12 tahun 2012 Pasal 51 dan 52, Penjaminan mutu pendidikan tinggi dilakukan melalui penetapan, pelaksanaan, evaluasi, pengendalian dan peningkatan Standar Pendidikan
                        Tinggi. Sistem penjaminan mutu pendidikan tinggi tersebut terdiri atas (1) Sistem Penjaminan Mutu Internal (SPMI) yang dikembangkan oleh Perguruan Tinggi; dan (2)
                        Sistem Penjaminan Mutu Eksternal (SPME) yang dilakukan melalui akreditasi. <br> <br> SPMI yang dilaksanakan ITERA bertujuan untuk menjamin pemenuhan Standar
                        Nasional Dikti secara sistemati dan berkelanjutan hingga tumbuh dan berkembang budaya mutu di setiap unit di ITERA. Pelaksanaan SPMI mengikuti kaidah PPEPP, yaitu Penetapan,
                        Pelaksanaan, Evaluasi, Pengendalian dan Pengembangan standar yang telah ditetapkan. Pada tahapan Evaluasi dapt dilakukan melalui Audit Mutu Intenal.</br> <br> Audit Mutu Internal (AMI) merupakan suatu pemeriksaan yang sistematis dan
                        independen untuk menentukan apakah kegiatan dalam menjaga mutu serta hasilnya telah dilaksanakan secara efektif sesuai dengan standar pendidikan tinggi ITERA.Standar mutu
                        ditetapkan untuk mencapai tujuan ITERA yang telah dituangkan dalam SK Rektor Institut Teknologi Sumatera Nomor 722/IT9.A/KP.06.06/2022 tentang Sistem Penjaminan Mutu
                        Internal Institut Teknologi Sumatera. <br><br> Pelaksanaan audit mutu periode tahun <?= $tindaklanjut->periode ?> merupakan kegiatan audit pertama kali yang
                        dilakukan oleh sistem penjamin mutu ITERA. Pada periode pertama,audit dilakukan untuk memeriksa kesesuaian mutu akademik di tingkat Program Studi. Mutu penelitian dan
                        pengabdian kepada masyarakat akan dilakukan pada periode kedua audit. Proses audit dilaksanakan dalam 2 tahap, yaitu desk evaluation dan audit lapangan. Aspek yang
                        dievaluasi untuk kinerja unit adalah proses atau kegiatan yang berdasarkan kesesuaian dengan 5 standar mutu pendidikan, yaitu (1) standar kompetensi lulusan, (2) standar isi
                        pembelajaran (kurikulum), (3) standar proses pembelajaran, (4) standar penilaian pembelajaran, (5) standar pengelolaan pembelajaran.
                        <br> <br> <b> 1.2 Tujuan</b><br>
                        <br>AMI dilakukan untuk kepentingan peningkatan mutu program studi yang diaudit. Audit bukan merupakan asesmen / penilaian melainkan pencocokan antara pelaksanaan dengan
                        standar yang sudah ditetapkan. Dengan demikian, tujuan secara khusus kegiatan audit mutu internal Institut Teknologi Sumatera adalah:
                        <br> 1. Untuk memeriksa kesesuaian dan atau ketaksesuaian pelaksanaan standar yang telah ditetapkan <br> 2. Untuk memeriksa proses dan hasil proses pencapaian mutu sehingga dapat ditentukan keefektifan pencapaian dari tujuan yang telah ditetapkan
                        <br>3. Untuk menyiapkan laporan permintaan tindakan koreksi auditee sebagai dasar perbaikan mutu selanjutnya <br>4. Untuk memberi kesempatan teraudit memperbaiki sistem penjaminan mutu
                        <br>5. Untuk membantu institutsi/program studi dalam mempersiapakan diri dalam rangka audit eksternal atau akreditasi.
                        <br> <br> <b> 1.3 Waktu dan Pelaksanaan Audit</b><br>
                        <br> Kegiatan Audit Mutu Internal periode <?= $tindaklanjut->periode ?> tahun <?= $tindaklanjut->tahun ?> oleh tim Auditor LP3M ITERA dilakukan pada:
                        <div class="table-responsive mt-2">
                            <table class="table table-borderless" style="color:black;">
                                <tr>
                                    <td width="300px">Hari / Tanggal</td>
                                    <td width="10px">:</td>
                                    <td><?= $tindaklanjut->hari_tgl ?></td>
                                </tr>

                                <tr>
                                    <td>Waktu Pelaksanaan</td>
                                    <td>:</td>
                                    <td><?= $tindaklanjut->waktu ?></td>
                                </tr>

                                <tr>
                                    <td>Tempat Kegiatan</td>
                                    <td>:</td>
                                    <td><?= $tindaklanjut->tempat ?></td>
                                </tr>

                                <tr>
                                    <td>Auditor</td>
                                    <td>:</td>
                                    <td><?= $tindaklanjut->auditor ?></td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td>:</td>
                                    <td><?= $tindaklanjut->auditor2 ?></td>
                                </tr>

                                <tr>
                                    <td>Auditee</td>
                                    <td>:</td>
                                    <td><?= $tindaklanjut->auditee ?></td>
                                </tr>

                                <tr>
                                    <td>Dokumentasi</td>
                                    <td>:</td>
                                    <td><img style="width: 600px;" src="<?= base_url("/assets/dokumen/" . $tindaklanjut->dokumentasi) ?>" alt="Gambar" </td>
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
                        <br>- Surat Keputusan Rektor Institut Teknologi Sumatera Nomor 226/IT9.A/SK/PJ/2017 tentang Sistem Penjaminan Mutu Internal Institut Teknologi Sumatera</br>
                    </div>

                </div>

                <div class="card">
                    <div class="card-body" style="font-family:Arial, Helvetica, sans-serif; color:black; font-size:large;">
                        <!-- <a class="btn btn-success" type="button" href="<?= base_url('prodi/isidata2/') . $tindaklanjut->id_tindaklanjut ?>" class="text-white" href="#">+ Tambah</a> -->
                        <!-- <a class="btn btn-danger" type="button" href="<?= base_url('prodi/isidata2/') ?>" class="text-white" href="#"> Edit</a> -->

                        <center class="text-dark mt-8" style="color:black;">
                            <br></br>
                            <br></br>
                            <div class="page-break"></div>
                            <h4><b>BAB II <br> TINDAK LANJUT </br></b></h4>
                        </center>
                        <b> A.1 TEMUAN <?= $tindaklanjut->temuan ?></b>

                        <center>
                            <li class="list-group-item mt-2" style="background-color: #ffa07a; color:black;"><b>PERMINTAAN TINDAKAN KOREKSI</b></li>
                        </center>

                        <div class="table-responsive mt-2">
                            <table class="table table-borderless" style="color:black;">
                                <tr>
                                    <td width="300px">Program Studi/Jurusan/Unit</td>
                                    <td width="10px">:</td>
                                    <td><?= $tindaklanjut->prodi ?></td>
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
                                    <td><?= $tindaklanjut->ruanglingkup ?></td>
                                </tr>

                                <tr>
                                    <td>Auditor</td>
                                    <td>:</td>
                                    <td>Tim Auditor Mutu Internal ITERA</td>
                                </tr>

                                <tr>
                                    <td>Tanggal DE</td>
                                    <td>:</td>
                                    <td><?= $tindaklanjut->tanggalDE ?></td>
                                </tr>

                                <tr>
                                    <td>Dokumen Acuan</td>
                                    <td>:</td>
                                    <td><?= $tindaklanjut->dokumenacuan ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="text-center">
                                    <tr>
                                        <th rowspan="2" style="background-color: #FFD700; color:black;">No</th>
                                        <th rowspan="2" style="background-color: #FFD700; color:black;">Jenis Temuan</th>
                                        <th colspan="2" style="background-color: #FFD700; color:black;">Kategori Temuan</th>
                                        <th rowspan="2" style="background-color: #FFD700; color:black;">Kode Temuan</th>
                                        <th rowspan="2" style="background-color: #FFD700; color:black;">Jangka Waktu Perbaikan</th>
                                        <th rowspan="2" style="background-color: #FFD700; color:black;">Penanggung Jawab</th>
                                        <!-- <th rowspan="2" style="background-color: #FFD700; color:black;">Aksi</th> -->
                                    </tr>

                                    <tr>
                                        <th style="background-color: #FFD700; color:black;">OB</th>
                                        <th style="background-color: #FFD700; color:black;">KTS</th>
                                    </tr>
                                </thead>

                                <tbody style="background-color: white; color:black;">
                                    <?php
                                    foreach ($bab2 as $key => $value) :
                                        $number = $key + 1;
                                    ?>
                                       <tr>
                                            <th scope style="color: black;"="row"><?= $number; ?></th>
                                            <th scope style="color: black;"="row"><?= $value->jenis_temuan; ?></th>
                                            <?php if ($value->OB == 1) : ?>
                                                <th scope style="color: black;"=>✓</th>
                                            <?php else : ?>
                                                <th scope style="color: black;"=></th>
                                            <?php endif; ?>
                                            <?php if ($value->KTS == 1) : ?>
                                                <th scope style="color: black;"=>✓</th>
                                            <?php else : ?>
                                                <th scope style="color: black;"=></th>
                                            <?php endif; ?>
                                            <!-- <th scope style="color: black;"="row"><?= $value->OB; ?></th> -->
                                            <!-- <th scope style="color: black;"="row"><?= $value->KTS; ?></th> -->
                                            <th scope style="color: black;"="row"><?= $value->kode; ?></th>
                                            <th scope style="color: black;"="row"><?= $value->jangka_waktu; ?></th>
                                            <th scope style="color: black;"="row"><?= $value->pj; ?></th>
                                            <!-- <th> <a href="<?= base_url('prodi/edit_data2/') . $value->id_bab2; ?>"><button type="edit" class="sbtn btn" style="background-color: #DCDCDC;"><i class="fa fa-edit" style="color: #4169E1;"></i></button></a></th> -->

                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                        <b> A.2 TINDAK LANJUT TEMUAN <?= $tindaklanjut->temuan ?></b>

                        <div class="form-group">
                            <center>
                                <li class="list-group-item mt-2" style="background-color: #6B8E23; color:black;"><b>KODE TEMUAN :</b></li>
                            </center>
                            <label for="exampleFormControlTextarea1"></label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Deskripsi..." rows="3"> <?= $tindaklanjut->a2 ?></textarea>
                        </div>

                        <div class="card">
                            <div class="card-body" style="font-family:Arial, Helvetica, sans-serif; color:black; font-size:large;">
                                <center class="text-dark mt-8" style="color:black;">
                                    <br></br>
                                    <br></br>
                                    <div class="page-break"></div>
                                    <h4><b>BAB III <br> KESIMPULAN </br></b></h4>
                                </center>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1"></label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1"> <?= $tindaklanjut->kesimpulan ?></textarea>
                                </div>

                            </div>
                            <!-- <form method="post" class="form-horizontal form-label-left" novalidate action="<?= base_url('prodi/generate_pdf/' . $params) ?>">
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-success" name="submit" id="submit">Generate PDF</button>
                                </div>
                            </form> -->
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