<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>


            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- SEARCH -->
                <li class="nav-item dropdown no-arrow d-sm-none">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                        aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small"
                                    placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- NOTIFIKASI -->
                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bell fa-fw"></i>
                        <!-- Counter - Alerts -->
                        <span
                            class="badge badge-danger badge-counter"><?php $habisTotal = $expired + $habis + $hampir_habis + $hampir_exp ; if ($habisTotal > 0) echo $habisTotal ?>
                        </span>
                    </a>
                    <!-- Dropdown - Alerts -->
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="alertsDropdown">
                        <h6 class="dropdown-header">
                            Notifikasi
                        </h6>

                        <a class="dropdown-item d-flex align-items-center"
                            href="<?= base_url('user/tabel_kedaluwarsa')?>">
                            <div class="mr-3">
                                <div class="icon-circle bg-warning">
                                    <i class="fas fa-exclamation-triangle"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-gray-500"><?= date('j F Y'); ?></div>
                                <span class="font-weight-bold"><strong><?php echo $hampir_exp ?></strong> Barang akan
                                    segera Kedaluwarsa!</span>
                            </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="<?= base_url('user/tabel_stok')?>">
                            <div class="mr-3">
                                <div class="icon-circle bg-warning">
                                    <i class="fas fa-exclamation-triangle"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-gray-500"><?= date('j F Y'); ?></div>
                                <span class="font-weight-bold"><?php echo $hampir_habis ?> Barang akan segera habis
                                    Stok!</span>
                            </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center"
                            href="<?= base_url('user/tabel_kedaluwarsa')?>">
                            <div class="mr-3">
                                <div class="icon-circle bg-warning">
                                    <i class="fas fa-exclamation-triangle"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-gray-500"><?= date('j F Y'); ?></div>
                                <span class="font-weight-bold"><?php echo $expired ?> Barang yang sudah
                                    Kedaluwarsa!</span>
                            </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="<?= base_url('user/tabel_stok')?>">
                            <div class="mr-3">
                                <div class="icon-circle bg-warning">
                                    <i class="fas fa-exclamation-triangle"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-gray-500"><?= date('j F Y'); ?></div>
                                <span class="font-weight-bold"><?php echo $habis ?> Barang sudah habis stok!</span>
                            </div>
                        </a>


                        <!-- <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a> -->
                    </div>
                </li>

                <div class="topbar-divider d-none d-sm-block"></div>

            </ul>

        </nav>
        <!-- End of Topbar -->