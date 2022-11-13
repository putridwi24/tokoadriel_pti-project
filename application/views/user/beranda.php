<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Header Keterangan -->
    <div class="row tile_count justify-content-center" style="text-align:center">
        <div class=" col-md-2 col-sm-4 col-xs-6 tile_stats_count p-1 m-1" style="font-size:20px;">
            <span class="count_top"><i class="fa fa-medkit"></i> Total Barang</span>
            <div class="count" style="text-align: ;"><?php echo $sumBarang ?></div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count p-1 m-1" style="font-size:20px;">
            <span class="count_top"><i class="fa fa-plus-square"></i> Total Kategori</span>
            <div class="count" style="text-align: ;"><?php echo $sumKat ?></div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count p-1 m-1" style="font-size:20px;">
            <span class="count_top"><i class="fa fa-users"></i> Supplier </span>
            <div class="count" style="text-align: ;"><?php echo $sumSupplier ?></div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count p-1 m-1" style="font-size:20px;">
            <span class="count_top"><i class="fa fa-edit"></i> Penjualan </span>
            <div class="count" style="text-align: ;"><?php echo number_format($sumJual) ?></div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count p-1 m-1" style="font-size:20px;">
            <span class="count_top"><i class="fa fa-edit"></i> Pembelian</span>
            <div class="count" style="text-align: ;"><?php echo number_format($sumBeli) ?></div>
        </div>
    </div>
    <!-- /Header Keterangan -->

    <!-- Body -->
    <div class="row pt-5">
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="<?= base_url('user/lihat_produk')?>" class="text-decoration-none">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-lg-start font-weight-bold text-primary text-uppercase mb-1">
                                    Barang
                                </div>
                                <div class="text-sm-start text-gray-80">Lihat <br>Barang</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-medkit fa-2x text-gray-300 size"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <a href="<?= base_url('user/menukeloladata')?>" class="text-decoration-none">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-lg-start font-weight-bold text-success text-uppercase mb-1">
                                    Kelola Data</div>
                                <div class="text-sm-start text-gray-80">Menu <br> Kelola Data</div>
                            </div>
                            <div class="col-auto">
                                <i class="fa fa-plus-square fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="<?= base_url('user/lihat_pembelian')?>" class="text-decoration-none">
                <div class="card border-left-info shadow h-s100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-lg-start font-weight-bold text-info text-uppercase mb-1">
                                    Pembelian
                                </div>
                                <div class="text-sm-start text-gray-80">Lihat <br> Pembelian</div>
                            </div>
                            <div class="col-auto">
                                <i class="fa fa-users fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="<?= base_url('user/lihat_penjualan')?>" class="text-decoration-none">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-lg-start font-weight-bold text-warning text-uppercase mb-1">
                                    Penjualan</div>
                                <div class="text-sm-start text-gray-80">Lihat penjualan</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-shopping-cart fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <!-- BARIS KE 2 -->
    <div class="row" style="justify-content:center">
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="<?= base_url('user/tabel_kedaluwarsa')?>" class="text-decoration-none">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-lg-start font-weight-bold text-warning text-uppercase mb-1">
                                    Kedaluwarsa</div>
                                <div class="text-sm-start text-gray-80">Menampilkan Barang kedaluwarsa</div>
                            </div>
                            <div class="col-auto">
                                <i class="fa fa-exclamation-triangle fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="<?= base_url('user/tabel_stok')?>" class="text-decoration-none">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-lg-start font-weight-bold text-info text-uppercase mb-1">Habis
                                </div>
                                <div class="text-sm-start text-gray-80">Menampilkan Barang akan habis</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="<?= base_url('user/menulaporan')?>" class="text-decoration-none">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-lg-start font-weight-bold text-success text-uppercase mb-1">
                                    Laporan</div>
                                <div class="text-sm-start text-gray-80">Menu <br> laporan</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-chart-area fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<script src="<?= base_url('assets/');?>vendor/moment/min/moment.min.js">
</script>