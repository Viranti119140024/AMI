<div class="container">

    <div class="card">
        <div class="card-body">
            <div class="text-dark mt-8">
                <h5 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black;"><b>Upload Link Drive Dokumen Kebutuhan Audit Program Studi</b></h5>
            </div>
            <b>
                <hr color="red" />

                <!-- <?php if ($link_drive) : ?>
                    <a href="<?php echo $link_drive['link_drive']; ?>"><?php echo $link_drive['link_drive']; ?></a>
                <?php endif; ?> -->

                <form method="POST" action="<?php echo base_url('prodi/terima_link_drive') ?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Masukkan Link Drive</label>
                        <input type="text" name="link_drive" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <input type="hidden" name="id_user" value="<?php echo $user['id'] ?>" <div class=" row justify-content-center pt-5 pb-5">
                    <div class="col-3">
                        <button type="submit" class="btn btn-success" name="submit" id="submit">Simpan</button>
                    </div>

                    <?php
                    if ($this->session->flashdata('Sukses')) {
                    $successSaveLink = $this->session->flashdata('Sukses');

                    echo "<script>
                        alert('$successSaveLink ');
                    </script>";
                    } ?>
        </div>
        </form>
    </div>
</div>
</div>