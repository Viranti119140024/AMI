<div class="container">

    <div class="card">
        <div class="card-body">
            <form method="post" class="form-horizontal form-label-left" novalidate action="<?= base_url('jurusan_controller/isidata2_post/') . $params ?>">

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Jenis Temuan</label>
                    <input type="text" class="form-control" id="jenis_temuan" name="jenis_temuan" placeholder="Masukkan Jenis Temuan">
                </div>

                <div class="form-group">
                    <!-- <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Waktu dan Pelaksanaan Audit</b></h5> -->
                    <label for="exampleFormControlInput1" style="color: black;">OB</label>
                    <input type="radio" id="OB" name="OB" value='1'>Ya
                    <input type="radio" id="OB" name="OB" value='0'>Tidak

                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">KTS</label>
                    <input type="radio" id="KTS" name="KTS" value='1'>Ya
                    <input type="radio" id="KTS" name="KTS" value='0'>Tidak
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Kode Temuan</label>
                    <input type="text" class="form-control" id="kode" name="kode" placeholder="Masukkan Kode Temuan">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Jangka Waktu</label>
                    <input type="text" class="form-control" id="jangka_waktu" name="jangka_waktu" placeholder="Masukkan Jangka Waktu">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Penanggung Jawab</label>
                    <input type="text" class="form-control" id="pj" name="pj" placeholder="Masukkan Penanggung Jawab">
                </div>


                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success" name="submit" id="submit">Simpan</button>
                </div>

                <form>
        </div>

    </div>
</div>