<div class="container">
<!-- 
    <?php if ($hasilaudit == null) : ?>

        <div class="card">
            <div class="card-body">
                <center class="text-dark mt-8">
                    <h5><b>BELUM ADA DATA</b></h5>
                </center>
            </div>
        </div>

    <?php else : ?> -->
        <div class="card mt-2">
            <div class="card-body">
                <center class="text-dark mt-8">
                    <h5><b>LAPORAN AUDIT MUTU INTERNAL <?= $hasilaudit[0]->tahun ?> <br>Program Studi <?= $hasilaudit[0]->lembaga ?> <br></b></h5>
                </center>

                <center class="text-dark mt-8">
                    <!-- <h5><b> <?= $hasilaudit[0]->foto_pengesahan ?></h5> -->
                    <img style="width: 1080px;" src="<?= base_url("/assets/dokumen/" . $hasilaudit[0]->foto_pengesahan) ?>" alt="Gambar">
                </center>
                <div class="page-break"></div>
                <center class="text-dark mt-8">
                    <!-- <h5><b> <?= $hasilaudit[0]->daftarhadir ?></h5> -->
                    <img style="width: 1080px;" src="<?= base_url("/assets/dokumen/" . $hasilaudit[0]->daftarhadir) ?>" alt="Gambar">
                </center>
                <div class="page-break"></div>
                <center class="text-dark mt-8">
                    <!-- <h5><b> <?= $hasilaudit[0]->beritaacara ?></h5> -->
                    <img style="width: 1080px;" src="<?= base_url("/assets/dokumen/" . $hasilaudit[0]->beritaacara) ?>" alt="Gambar">
                </center>

                <div class="card">
                    <div class="card-body" style="font-family:Arial, Helvetica, sans-serif; color:black; font-size:large;">

                        <center class="text-dark mt-8" style="color:black;">
                            <div class="page-break"></div>
                            <h4><b>KATA PENGANTAR</b></h4>
                        </center>
                        <p class="ratakanankiri">Segala puji bagi Allah Subhanahu wa Ta’ala karena hanya dengan limpahan rahmat
                            dan bimbinganNya laporan Audit Mutu Internal siklus tahun <?= $hasilaudit[0]->tahun ?> Institut Teknologi
                            Sumatera berhasil diselesaikan. Laporan ini merupakan hasil audit yang dilaksanakan oleh
                            tim audit mutu internal berdasarkan permintaan audit Program Studi <?= $hasilaudit[0]->lembaga ?>
                            <br> <br> Laporan ini memuat beberapa temuan yang secara keseluruhan telah mendapat
                            tanggapan dari pihak teraudit. Selanjutnya dalam laporan ini juga memuat tindakan
                            permintaan koreksi untuk beberapa temuan selama pelaksanaan audit. Harapan kami, agar
                            temuan – temuan tersebut ditindaklanjuti sesuai dengan jangka waktu yang telah ditetapkan,
                            sehingga mutu penyelengaraan layanan pendidikan di Program Studi <?= $hasilaudit[0]->lembaga ?> dapat ditingkatkan
                            </br> <br> Pada kesempatan ini, kami juga mengucapkan terimakasih kepada pihak teraudit yang
                            telah berlaku kooperatif selama proses audit berlangsung. Ucapan terima kasih juga kami
                            sampaikan kepada semua pihak yang telah berkenan membantu sehingga kegiatan audit dapat
                            terlaksana dengan baik dan lancar.</br>
                        </p>
                    </div>

                    <div class="text-right" style="font-family:Arial, Helvetica, sans-serif; color:black; font-size:large;">
                        <p>Lampung Selatan, <?= $hasilaudit[0]->tanggal ?> </p>
                        <p>Ketua Audit Mutu Internal </p>
                        <br></br>
                        <br></br>
                        <p>NIP / NRK. <?= $hasilaudit[0]->NIP ?></p>

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
                            <br> Kegiatan Audit Mutu Internal periode <?= $hasilaudit[0]->periode ?> tahun <?= $hasilaudit[0]->tahun ?> oleh tim Auditor LP3M ITERA dilakukan pada:
                        <div class="table-responsive mt-2">
                            <table class="table table-borderless" style="color:black;">
                                <tr>
                                    <td width="300px">Hari / Tanggal</td>
                                    <td width="10px">:</td>
                                    <td><?= $hasilaudit[0]->hari_tgl ?></td>
                                </tr>

                                <tr>
                                    <td>Waktu Pelaksanaan</td>
                                    <td>:</td>
                                    <td><?= $hasilaudit[0]->waktu ?></td>
                                </tr>

                                <tr>
                                    <td>Tempat Kegiatan</td>
                                    <td>:</td>
                                    <td><?= $hasilaudit[0]->tempat ?></td>
                                </tr>

                                <tr>
                                    <td>Auditor</td>
                                    <td>:</td>
                                    <td><?= $hasilaudit[0]->auditor ?></td>
                                </tr>

                                <tr>
                                    <td>Auditor</td>
                                    <td>:</td>
                                    <td><?= $hasilaudit[0]->auditor2 ?></td>
                                </tr>

                                <tr>
                                    <td>Auditee</td>
                                    <td>:</td>
                                    <td><?= $hasilaudit[0]->auditee ?></td>
                                </tr>

                                <tr>
                                    <td>Dokumentasi</td>
                                    <td>:</td>
                                    <td><img style="width: 600px;" src="<?= base_url("/assets/dokumen/" . $hasilaudit[0]->dokumentasi) ?>" alt="Gambar" </td>
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
                        <!-- <a class="btn btn-success" type="button" href="<?= base_url('auditor/isidata2/') . $hasilaudit[0]->id_hasilaudit ?>" class="text-white" href="#">+ Tambah</a> -->
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
                                    <td><?= $hasilaudit[0]->lembaga ?></td>
                                </tr>

                                <tr>
                                    <td>Universitas</td>
                                    <td>:</td>
                                    <td>INSTITUT TEKNOLOGI SUMATERA</td>
                                </tr>

                                <tr>
                                    <td>Auditor</td>
                                    <td>:</td>
                                    <td><?= $hasilaudit[0]->auditor ?></td>
                                </tr>

                                <tr>
                                    <td>Tanggal DE</td>
                                    <td>:</td>
                                    <td><?= $hasilaudit[0]->tanggalDE ?></td>
                                </tr>

                                <tr>
                                    <td>Jangka Waktu Perbaikan</td>
                                    <td>:</td>
                                    <td><?= $hasilaudit[0]->jangka_waktu ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="text-center">
                                    <tr>
                                        <th rowspan="2" style="background-color: #FFD700; color:black;">No</th>
                                        <th rowspan="2" style="background-color: #FFD700; color:black;">Dokumen Acuan</th>
                                        <th rowspan="2" style="background-color: #FFD700; color:black;">Deskripsi Temuan</th>
                                        <th rowspan="2" style="background-color: #FF0000; color:black;">Permintaan Tindakan Koreksi</th>
                                </thead>

                                <?php if ($bab2_hasil_audit != null) : ?>
                                    <tbody style="background-color: white; color:black;">
                                        <?php
                                        $number = 1;
                                        foreach ($bab2_hasil_audit as $value) :
                                        ?>
                                            <tr>
                                                <th scope style="color: black;"="row"><?= $number++; ?></th>
                                                <th scope style="color: black;"="row"><?= $value->dokumen_acuan; ?></th>
                                                <th scope style="color: black;"="row"><?= $value->deskripsi_temuan; ?></th>
                                                <th scope style="color: black;"="row"><?= $value->permintaan_tindakan; ?></th>
                                                <!-- <th> <a href="<?= base_url('auditor/edit_data2/') . $value->id_bab2; ?>"><button type="edit" class="sbtn btn" style="background-color: #DCDCDC;"><i class="fa fa-edit" style="color: #4169E1;"></i></button></a></th> -->

                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                <?php else : ?>
                                    <tbody>
                                        <tr>
                                            <td colspan="4" class="text-center">DATA KOSONG</td>
                                        </tr>
                                    </tbody>
                                <?php endif; ?>
                            </table>
                        </div>
                        <!-- </div>
                <form method="post" class="form-horizontal form-label-left" novalidate action="<?= base_url('auditor/generate_pdf/' . $params) ?>">
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-success" name="submit" id="submit">Generate PDF</button>
                    </div>
                </form>
            </div> -->
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
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