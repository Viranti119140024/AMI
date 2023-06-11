<div class="container-fluid">

<a class="btn btn-success" type="button" href="<?= base_url('user/tambahprodi') ?>" class="text-white">+ Tambah</a>

<div class="card mt-2">

    <div class="card-body">

        <h4 class="d-flex justify-content-center align-items-center mt-3"><?= $title ?></h4>
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
                    <td>Standar Penilaian Pembelajaran</td>
                </tr>
            </table>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="text-center" style="background-color: #DAA520; color:black;">
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
                        <th style="background-color: #ffa07a; color:black;">M*</th>
                        <th style="background-color: #ffa07a; color:black;">MP*</th>
                        <th style="background-color: #ffa07a; color:black;">MB*</th>
                        <th style="background-color: #ffa07a; color:black;">MY*</th>
                        <th style="background-color: #3EB489; color:black;">OB*</th>
                        <th style="background-color: #3EB489; color:black;">KTS*</th>
                        <th style="background-color: #B0C4DE; color:black;">OPEN</th>
                        <th style="background-color: #B0C4DE; color:black;">CLOSE</th>
                    </tr>
                </thead>

                <tbody style="background-color: white; color:black;">
                <tr>
                 <td>1</td>
                 <td>Dokumen Petunjuk teknis Tugas Akhir</td>
                 <td></td>
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

             <tr>
                 <td>2</td>
                 <td>Dokumen Petunjuk teknis Stadium General</td>
                 <td></td>
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

             <tr>
                 <td>3.</td>
                 <td>Dokumen Petunjuk teknis PL/PKl/Magang/KP </td>
                 <td></td>
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

             <tr>
                 <td>4.</td>
                 <td>Dokumen laporan kinerja Program Studi</td>
                 <td></td>
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
                </tbody>

            </table>

     <p style="color:black;"> * M= Memenuhi, MP= Melampaui, MB= Belum Memenuhi, MY= Menyimpang <br> <br>* OB= Observasi, KTS= Ketidaksesuaian</br></br></p>

        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end mt-2">
                <li class="page-item">
                    <a class="page-link" href="<?= base_url('auditor/dtd2') ?>">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="<?= base_url('auditor/dte2') ?>">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</div>
</div>