<!-- <div class="background px-3"> -->
<!-- <img src="<?php echo base_url('assets/img/profile/logo.png') ?>" alt="Responsive image" class="imglogo" /> -->
<!-- <p style="color:white;" class="pl-3 textlogo mt-2 mb-2" >Audit Mutu Internal ITERA</p> -->
<!-- </div> -->


<div class="col-md-12">
    <div class="row">
        <div class="col-md-1 mt-2">
            <img src="<?php echo base_url('assets/img/profile/logo.png') ?>" style="width: 70px;margin-left: 20px;">
        </div>
        <div class="col-md-11 mt-2">
            <h3 style="color:#324F6D;"">
			SISTEM AUDIT MUTU INTERNAL
		</h3>
		<p><i style=" color:#324F6D">"Lembaga Pengembangan Pembelajaran dan Penjaminan Mutu"</i></p>
        </div>
    </div>
</div>

<div>
    <nav class="navbar navbar-expand topbar mb-4 static-top shadow" style="background-color: #DAA520; color:white">

        <!-- <h6 class="my-auto"><?= $title ?></h4> -->
        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">


            <!-- NOTIFIKASI -->
            <!-- <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bell fa-fw" style="color:white;"></i>
                </a>
                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                    <h6 class="dropdown-header">
                        Notifikasi
                    </h6>
                    <a class="dropdown-item d-flex align-items-center" href="">
                        <div class="mr-3">
                            <div class="icon-circle bg-warning">
                                <i class="fas fa-exclamation-triangle"></i>
                            </div>
                        </div>
                        <div>
                            <?php if ($deadline <= 7 && $deadline > 3) : ?>
                                <div class="small text-gray-500">7 hari</div>
                            <?php elseif ($deadline <= 3) : ?>
                                <div class="small text-gray-500">3 hari</div>
                            <?php endif; ?>

                        </div>
                    </a>
                </div>
            </li> -->

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-white small"><?= $user['email']; ?></span>
                    <!-- <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image'] ?>"> -->
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown" data-target="#userDropdown">
                    <?php if ($user['role_name'] == 'Auditor Jurusan') : ?>
                        <a class="dropdown-item" href="<?= base_url('auditorjurusan/profile') ?>">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                    <?php elseif ($user['role_name'] == 'Auditor') : ?>
                        <a class="dropdown-item" href="<?= base_url('auditor/profile') ?>">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                    <?php elseif ($user['role_name'] == 'Program Studi') : ?>
                        <a class="dropdown-item" href="<?= base_url('prodi/profile') ?>">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                    <?php elseif ($user['role_name'] == 'Jurusan') : ?>
                        <a class="dropdown-item" href="<?= base_url('jurusan_controller/profile') ?>">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                    <?php elseif ($user['role_name'] == 'Admin') : ?>
                        <a class="dropdown-item" href="<?= base_url('user/profile') ?>">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                    <?php endif ?>
                    <a class="dropdown-item" href="<?= base_url('auth/logout') ?>">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                </div>
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown" data-target="#logout">

                </div>
            </li>
        </ul>

    </nav>
</div>