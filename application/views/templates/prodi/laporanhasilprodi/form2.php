<div class="container">
    <div class="card">
        <div class="card-body">
            <form method="post" class="form-horizontal form-label-left" novalidate action="<?= base_url('prodi/isidata2_post/') . $params ?>">

                <div class="form-group">
                    <label for="kode_temuan">Kode Temuan</label>
                    <select name="kode_temuan" id="kode_temuan" class="form-control" id="kode_temuan">
                        <option>A</option>
                        <option>B</option>
                        <option>C</option>
                        <option>D</option>
                        <option>E</option>
                        <option>F</option>
                        <option>G</option>
                    </select>
                </div>

                <h4>TEMUAN</h4>
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

                <h4>TINDAK LANJUT</h4>

                <div class="form-group">
                    <!-- <label for="exampleFormControlTextarea1" style="color: black;">Tindak Lanjut</label> -->
                    <textarea class="form-control" id="a2" name="a2" placeholder="Masukkan Tindak Lanjut" style="width: 100%; height: 150px;"></textarea>
                </div>




                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success" name="submit" id="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>