<div class="container-fluid">

<a class="btn btn-success" type="button" href="<?= base_url('user/tambahprodi') ?>" class="text-white">+ Tambah</a>

<div class="card mt-2">

    <div class="card-body">

        <h4 class="d-flex justify-content-center align-items-center mt-3"><?= $title ?></h4>

    <div class="data table-responsive mt-2">
        <table class="table table-borderless">
            <thead>
                <tr>
                    <td style="color:black;" scope="col">Hari / Tanggal </td>
                    <td style="color:black;" scope="col">Auditee </div>
                </tr>
            </thead>
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
                    <th colspan="1">M*</th>
                    <th rowspan="1">MP*</th>
                    <th rowspan="1">MB*</th>
                    <th rowspan="1">MY*</th>
                    <th rowspan="1">Rekomendasi</th>
                </tr>
            </thead>

            <tbody style="background-color: white; color:black;">
                <tr>
                    <td>1</td>
                    <td>Apakah format RPS sudah sesuai dengan acuan?</td>
                    <td>•  Format RPS dari SPM <br> 
                        Permendikbud Nomor 3 tahun 2020 Pasal 12 ayat (3)</br></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td></td>
                    <td>a.  Nama Program Studi, nama dan kode mata kuliah, semester, sks, 
                        nama Dosen pengampu</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td></td>
                    <td>b.  Capaian Pembelajaran lulusan yang dibebankan pada mata kuliah</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td></td>
                    <td>c.  Kemampuan akhir yang direncanakan pada tiap tahap 
                        Pembelajaran untuk memenuhi capaian Pembelajaran lulusan</td>
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

        <p style="color:black;"> * M= Memenuhi, MP= Melampaui, MB= Belum Memenuhi, MY= Menyimpang	</br></br></p>

    </div>
    <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-end mt-2">
    <li class="page-item">
      <a class="page-link" href="<?= base_url('auditor/dtc1') ?>">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="<?= base_url('auditor/dtd1') ?>">Next</a>
    </li>
  </ul>
</nav>
  </div>
</div>
    

</div>