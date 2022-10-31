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
        <a class="nav-link" href="<?= base_url('user/index')?>">
            <i class="fas fa-fw fa-home"></i>
            <span>Beranda</span></a>
    </li>

    <!-- Divider Garis -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Kelola Data -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/index')?>">
            <i class="fas fa-fw fa-home"></i>
            <span>Beranda</span></a>
    </li>

    <!-- Menu Obat -->
    <li class="nav-item <?php echo $this->uri->segment(2) == 'lihat_obat'||'form_obat'||'tabel_kedaluwarsa'||'tabel_stok' ? 'active': '' ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseObat" aria-expanded="true"
            aria-controls="collapseObat">
            <i class="fa fa-fw fa-medkit"></i>
            <span>Obat</span>
        </a>
        <div id="collapseObat" class="collapse" aria-labelledby="headingObat" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item <?php echo $this->uri->segment(2) == 'form_obat' ? 'active': '' ?>" href="<?= base_url('user/form_obat')?>">Tambah Obat</a>
                <a class="collapse-item <?php echo $this->uri->segment(2) == 'lihat_obat' ? 'active': '' ?>" href="<?= base_url('user/lihat_obat')?>">Lihat Obat</a>
                <a class="collapse-item <?php echo $this->uri->segment(2) == 'tabel_kedaluwarsa' ? 'active': '' ?>" href="<?= base_url('user/tabel_kedaluwarsa')?>">Obat Kedaluwarsa</a>
                <a class="collapse-item <?php echo $this->uri->segment(2) == 'tabel_stok' ? 'active': '' ?>" href="<?= base_url('user/tabel_stok')?>">Obat Akan Habis</a>
            </div>
        </div>
    </li>

    <!-- Menu Kategori -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseKategori"
            aria-expanded="true" aria-controls="collapseKategori">
            <i class="fa fa-fw fa-plus-square"></i>
            <span>Kategori</span>
        </a>
        <div id="collapseKategori" class="collapse" aria-labelledby="headingKategori" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= base_url('user/form_kategori')?>">Tambah Kategori</a>
                <a class="collapse-item" href="<?= base_url('user/lihat_kategori')?>">Lihat Kategori</a>
            </div>
        </div>
    </li>

    <!-- Menu Pemasok -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePemasok"
            aria-expanded="true" aria-controls="collapsePemasok">
            <i class="fa fa-fw fa-users"></i>
            <span>Pemasok</span>
        </a>
        <div id="collapsePemasok" class="collapse" aria-labelledby="headingPemasok" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= base_url('user/form_pemasok')?>">Tambah Pemasok</a>
                <a class="collapse-item" href="<?= base_url('user/lihat_pemasok')?>">Lihat Pemasok</a>
            </div>
        </div>
    </li>

    <!-- Menu Transaksi -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTransaksi"
            aria-expanded="true" aria-controls="collapseTransaksi">
            <i class="fa fa-fw fa-shopping-cart"></i>
            <span>Transaksi</span>
        </a>
        <div id="collapseTransaksi" class="collapse" aria-labelledby="headingTransaksi" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= base_url('user/lihat_penjualan')?>">Penjualan</a>
                <a class="collapse-item" href="<?= base_url('user/lihat_pembelian')?>">Pembelian</a>
            </div>
        </div>
    </li>


    <!-- Menu LAPORAN -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLaporan"
            aria-expanded="true" aria-controls="collapseLaporan">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Laporan</span>
        </a>
        <div id="collapseLaporan" class="collapse" aria-labelledby="headingLaporan" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= base_url('laporan_controller/laporan_penjualan')?>">Laporan
                    Penjualan</a>
                <a class="collapse-item" href="<?= base_url('laporan_controller/laporan_pembelian')?>"> Laporan
                    Pembelian</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->