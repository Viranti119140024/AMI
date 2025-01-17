<div class="container-fluid">


    <a class="btn btn-success" type="button" href="<?= base_url('user/tambahprodi') ?>" class="text-white">+ Tambah</a>

    <div class="card mt-2">

        <div class="card-body">

            <h4 class="d-flex justify-content-center align-items-center mt-3"><?= $title ?></h4>
            <div class="table-responsive mt-2">


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

            <div class="table-responsive">
                <form action="">
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
                                <!-- <th rowspan="2" style="background-color: #808080; color:black;">Aksi</th> -->
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
                                <td>Tindak Lanjut AMI</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <!-- <td><textarea name="" id="" cols="30" rows="5"></textarea></td>
                            <td><textarea name="" id="" cols="30" rows="5"></textarea></</td> -->
                                <td></td>
                                <!-- <td> <a href="<?php echo base_url('user/dokumen1'); ?>"><button type="edit" class="sbtn btn-success"><i class="fa fa-pencil"></i></button></td> -->
                                <!-- <td> <a href="<?php echo base_url('user/dokumen1'); ?>"><button type="delete" class="sbtn btn-danger"><i class="fas fa-delete"></i></button></td> -->

                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Dokumen Kurikulum</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <!-- <td><textarea name="" id="" cols="30" rows="5"></textarea></td>
                            <td><textarea name="" id="" cols="30" rows="5"></textarea></</td> -->
                                <td></td>
                            </tr>

                            <tr>
                                <td>a.</td>
                                <td>Visi Misi Program Studi sesuai Institusi</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <!-- <td><textarea name="" id="" cols="30" rows="5"></textarea></td>
                            <td><textarea name="" id="" cols="30" rows="5"></textarea></</td> -->
                                <td></td>
                            </tr>

                            <tr>
                                <td>b.</td>
                                <td>Daftar Mata kuliah TPB dan Program Studi</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <!-- <td><textarea name="" id="" cols="30" rows="5"></textarea></td>
                            <td><textarea name="" id="" cols="30" rows="5"></textarea></</td> -->
                                <td></td>
                            </tr>

                            <tr>
                                <td>c.</td>
                                <td>Dokumen kompetensi lulusan mengacu pada KKNI Level 6/CPL</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <!-- <td><textarea name="" id="" cols="30" rows="5"></textarea></td>
                            <td><textarea name="" id="" cols="30" rows="5"></textarea></</td> -->
                                <td></td>
                            </tr>

                            <tr>
                                <td>d.</td>
                                <td>Matriks mata kuliah dengan kompetensi lulusan</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <!-- <td><textarea name="" id="" cols="30" rows="5"></textarea></td>
                            <td><textarea name="" id="" cols="30" rows="5"></textarea></</td> -->
                                <td></td>
                            </tr>

                            <tr>
                                <td>e.</td>
                                <td>Rencana Pembelajaran Semester</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <!-- <td><textarea name="" id="" cols="30" rows="5"></textarea></td>
                            <td><textarea name="" id="" cols="30" rows="5"></textarea></</td> -->
                            </tr>
                        </tbody>

                    </table>
                </form>

                <p style="color:black;"> * M= Memenuhi, MP= Melampaui, MB= Belum Memenuhi, MY= Menyimpang <br> <br>* OB= Observasi, KTS= Ketidaksesuaian</br></br></p>

            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end mt-2">
                    <li class="page-item disabled">
                        <a class="page-link">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="<?= base_url('user/daftartilik1') ?>">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src ="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.js"></script>

<script> let table = new DataTable('#myTable'); </script> -->