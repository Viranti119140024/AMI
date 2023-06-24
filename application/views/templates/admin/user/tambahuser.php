<div class="container">

    <div class="card">
        <div class="card-body">
            <form method="post" class="form-horizontal form-label-left" novalidate action="<?= base_url('auth/registrasi') ?>">
                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Nama Pengguna</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Email">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1" style="color: black;">Password</label>
                    <input type="text" class="form-control" id="password" name="password" placeholder="Masukkan Password">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Role</label>
                    <select name="role_name" id="role_name" class="form-control" id="exampleFormControlSelect1">
                        <option>Admin</option>
                        <option>Jurusan</option>
                        <option>Program Studi</option>
                        <option>Auditor Program Studi</option>
                        <option>Auditor Jurusan</option>
                    </select>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success" name="submit" id="submit">Simpan</button>
                </div>

                <form>
        </div>

    </div>
</div>