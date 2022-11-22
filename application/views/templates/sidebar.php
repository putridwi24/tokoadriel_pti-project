<!-- Sidebar -->
<link href="<?= base_url('assets/');?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
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
    <li class="nav-item <?php if($this->uri->segment(2)=="beranda"){echo "active";}?>">
        <a class="nav-link" href="<?= base_url('user/beranda')?>">
            <i class="fas fa-fw fa-home"></i>
            <span>Beranda</span></a>
    </li>

    <!-- Nav Item - Kelola Data -->
    <li class="nav-item <?php if($this->uri->segment(2)=="menukeloladata" || $this->uri->segment(2)=="lihat_supplier" || $this->uri->segment(2)=="form_tambahsupplier" || $this->uri->segment(2)=="edit_supplier" || $this->uri->segment(2)=="lihat_produk" || $this->uri->segment(2)=="form_tambahbarang" || $this->uri->segment(2)=="edit_barang" || $this->uri->segment(2)=="lihat_kategori" || $this->uri->segment(2)=="form_tambahkategori" || $this->uri->segment(2)=="edit_kategori"){echo "active";}?>">
        <a class="nav-link" href="<?= base_url('user/menukeloladata')?>">
            <i class="fas fa-fw fa-home"></i>
            <span>Kelola Data</span></a>
    </li>

    <!-- Nav Item - Pembelian -->
    <li class="nav-item  <?php if($this->uri->segment(2)=="lihat_pembelian" || $this->uri->segment(2)=="form_pembelian"){echo "active";}?>">
        <a class="nav-link" href="<?= base_url('user/lihat_pembelian')?>">
            <i class="fas fa-fw fa-home"></i>
            <span>Pembelian</span></a>
    </li>

    <!-- Nav Item - Penjualan -->
    <li class="nav-item <?php if($this->uri->segment(2)=="lihat_penjualan" || $this->uri->segment(2)=="form_penjualan"){echo "active";}?>">
        <a class="nav-link" href="<?= base_url('user/lihat_penjualan')?>">
            <i class="fas fa-fw fa-home"></i>
            <span>Penjualan</span></a>
    </li>

    <!-- Nav Item - Laporan -->
    <li class="nav-item <?php if($this->uri->segment(2)=="menulaporan" || $this->uri->segment(2)=="tabel_laporan" || $this->uri->segment(2)=="laporan_tabel_stok" || $this->uri->segment(2)=="laporan_pembelian" || $this->uri->segment(2)=="laporan_penjualan"){echo "active";}?>">
        <a class="nav-link" href="<?= base_url('user/menulaporan')?>">
            <i class="fas fa-fw fa-home"></i>
            <span>Laporan</span></a>
    </li>

    <!-- Nav Item - Keluar -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout')?>" data-toggle="modal"
            data-target="#logoutModal">
            <i class="fas fa-signout"></i>
            <span>Keluar</span></a>
            
        </a>
    </li>

</ul>
<!-- End of Sidebar -->