<!-- Begin Page Content -->

<div class="container-fluid">

    <!-- Header Keterangan -->
    <div class="row tile_count justify-content-center" style="justify-content:center">
        
        <!-- <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count p-1 m-1" style="font-size:20px;">
            <span class="count_top"><i class="fa fa-users"></i> Supplier </span>
            <div class="count" style="text-align: ;"><?php echo $sumPemasok ?></div>
        </div>
        <div class=" col-md-2 col-sm-4 col-xs-6 tile_stats_count p-1 m-1" style="font-size:20px;">
            <span class="count_top"><i class="fa fa-medkit"></i> Total Produk</span>
            <div class="count" style="text-align: ;"><?php echo $sumObat ?></div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count p-1 m-1" style="font-size:20px;">
            <span class="count_top"><i class="fa fa-edit"></i> Total Kategori </span>
            <div class="count" style="text-align: ;"><?php echo number_format($sumJual) ?></div> -->
        </div>
    </div>
    <!-- /Header Keterangan -->

    <!-- Body -->
    
    <div class="row pt-5" style="justify-content:center">
        <div class="col-xl-3 col-md-6 mb-4" >
            <a href="<?= base_url('user/lihat_supplier')?>" class="text-decoration-none">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-lg-start font-weight-bold text-primary text-uppercase mb-1">
                                    Kelola Supplier
                                </div>
                                <div class="text-sm-start text-gray-80">Menambahkan <br>data Supplier</div>
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
            <a href="<?= base_url('user/lihat_produk')?>" class="text-decoration-none">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-lg-start font-weight-bold text-success text-uppercase mb-1">
                                    Kelola Barang</div>
                                <div class="text-sm-start text-gray-80">Menambahkan <br> Data Barang</div>
                            </div>
                            <div class="col-auto">
                                <i class="fa fa-archive fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="<?= base_url('user/lihat_kategori')?>" class="text-decoration-none">
                <div class="card border-left-info shadow h-s100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-lg-start font-weight-bold text-info text-uppercase mb-1">
                                    Kategori
                                </div>
                                <div class="text-sm-start text-gray-80">Menambahkan <br> Data Kategori</div>
                            </div>
                            <div class="col-auto">
                                <i class="fa fa-th-large fa-2x text-gray-300"></i>
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