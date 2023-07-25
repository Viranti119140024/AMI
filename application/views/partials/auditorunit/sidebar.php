<div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar font-weight shadow mx-4 p-2" style="background: #fff;">


        <li class="list-group">
            <a class="list-group-item" href="<?= base_url('auditorunit/berandaauditorunit') ?>">
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
            <a class="list-group-item" href="<?= base_url('auditorunit/pilihan') ?>">
                <i class="fa fa-list-alt itemcolor"></i>
                <span class="itemcolor">Daftar Tilik</span></a>
        </li>

        <li class="list-group">
            <a class="list-group-item" href="">
                <i class="fa fa-book itemcolor"></i>
                <span class="itemcolor">Laporan Hasil Audit</span>
            </a>
        </li>

        <li class="list-group">
            <a class="list-group-item" href="">
                <i class="fa fa-book itemcolor"></i>
                <span class="itemcolor">Laporan Tindak Lanjut</span>
            </a>
        </li>
    </ul>

    <!-- End of Sidebar -->