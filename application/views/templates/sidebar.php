<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion font-weight-bold" style="background: #254F43;"
    id="accordionSidebar">
    
    <!-- Sidebar - LOGO-->
    <div class="d-flex justify-content-center">
        <!-- logo info -->
        <div class=" logo_pic">
            <img src="<?php echo base_url('assets/img/profile/Logo.png') ?>" alt="..." class="img-circle" width="200"
                height="200" style= "position:relative; margin-top:20px;"></a>
        </div>
    </div>
    <div class="profile">
        <div class="font-weight-bold text-center" style="color: white; margin-bottom:20px;"><span style="font-size: 20px;">
                Toko Adriel
            </span></div>
    </div>

    <!-- Nav Item - Beranda -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/beranda')?>">
            <i class="fas fa-fw fa-home"></i>
            <span>Beranda</span></a>
    </li>

    <!-- Nav Item - Kelola Data -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/menukeloladata')?>">
            <i class="fas fa-fw fa-home"></i>
            <span>Kelola Data</span></a>
    </li>

    <!-- Nav Item - Pembelian -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/lihat_pembelian')?>">
            <i class="fas fa-fw fa-home"></i>
            <span>Pembelian</span></a>
    </li>

    <!-- Nav Item - Penjualan -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/lihat_penjualan')?>">
            <i class="fas fa-fw fa-home"></i>
            <span>Penjualan</span></a>
    </li>

    <!-- Nav Item - Laporan -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/menulaporan')?>">
            <i class="fas fa-fw fa-home"></i>
            <span>Laporan</span></a>
    </li>

    <!-- Nav Item - Keluar -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout')?>" data-toggle="modal"
            data-target="#logoutModal">
            <i class="fas fa-fw fa-home"></i>
            <span>Keluar</span></a>
            
        </a>
    </li>

</ul>
<!-- End of Sidebar -->