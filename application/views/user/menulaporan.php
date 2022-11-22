<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Body -->
    <div class="row pt-5 center" style="justify-content:center">
    <div class="col-xl-3 col-md-6 mb-4">
            <a href="<?= base_url('user/tabel_laporan')?>" class="text-decoration-none">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-lg-start font-weight-bold text-success text-uppercase mb-1">
                                    Laporan Laba Rugi</div>
                                <div class="text-sm-start text-gray-80">Menampilkan <br> Laporan Laba Rugi</div>
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
            <a href="<?= base_url('user/laporan_tabel_stok')?>" class="text-decoration-none">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-lg-start font-weight-bold text-success text-uppercase mb-1">
                                    Laporan Stok Barang</div>
                                <div class="text-sm-start text-gray-80">Menampilkan <br> Laporan Stok Barang</div>
                            </div>
                            <div class="col-auto">
                                <i class="fa fa fa-archive fa-2x text-gray-300"></i>
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
            <a href="<?= base_url('laporan_controller/laporan_pembelian')?>" class="text-decoration-none">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-lg-start font-weight-bold text-success text-uppercase mb-1">
                                    Laporan Prmbelian</div>
                                <div class="text-sm-start text-gray-80">Menampilkan <br> Laporan Pembelian</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-shopping-cart fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <a href="<?= base_url('laporan_controller/laporan_penjualan')?>" class="text-decoration-none">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-lg-start font-weight-bold text-success text-uppercase mb-1">
                                    Laporan Penjualan</div>
                                <div class="text-sm-start text-gray-80">Menampilkan <br> Laporan Penjualan</div>
                            </div>
                            <div class="col-auto">
                                <i class="fa fa-calculator fa-2x text-gray-300"></i>
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