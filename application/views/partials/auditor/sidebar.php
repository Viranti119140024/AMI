<div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar font-weight shadow mx-4 p-2" style="background: #fff;">


        <li class="list-group">
            <a class="list-group-item" href="<?= base_url('auditor/BERANDA') ?>">
                <i class="fas fa-fw fa-home itemcolor"></i>
                <span class="itemcolor">Beranda</span>
            </a>
        </li>

        <li class="list-group">
            <a target="_blank" class="list-group-item" href="<?= $unit[0]->link_drive ?>">
                <i class="fa fa-file itemcolor"></i>
                <span class="itemcolor">Dokumen Kebutuhan Audit</span>
            </a>
        </li>

        <li class="list-group">
            <a class="list-group-item" href="<?= base_url('auditor/pilihan') ?>">
                <i class="fa fa-list-alt itemcolor"></i>
                <span class="itemcolor">Daftar Tilik</span></a>
        </li>

        <li class="list-group">
            <a class="list-group-item" href="<?= base_url('auditor/datahasilaudit') ?>">
                <i class="fa fa-book itemcolor"></i>
                <span class="itemcolor">Laporan Hasil Audit</span>
            </a>
        </li>

        <li class="list-group">
            <a class="list-group-item" <?php if ($hasil_tindak_lanjut !== null) : ?> href="<?= base_url('auditor/generate_pdf/' . $hasil_tindak_lanjut) ?>" <?php else : ?> href="" <?php endif; ?>>
                <i class="fa fa-book itemcolor"></i>
                <span class="itemcolor">Laporan Hasil Tindak Lanjut</span>
            </a>
        </li>
    </ul>

    <!-- End of Sidebar -->