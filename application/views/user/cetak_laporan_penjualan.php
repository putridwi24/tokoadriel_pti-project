<div class="container">
    <div class="text-center">
        <h1>Sistem Informasi Toko Adriel</h1>
        <h3><?= $judul; ?></h3>
        <h6><?= $subjudul; ?></h6>
    </div>

    <hr class="sidebar-divider">

    <div class="row table-responsive">
        <table class="table table-bordered table-striped" id="table">
            <tr>
                <th>No Referensi</th>
                <th>Nama Pembeli</th>
                <th>Nama Obat</th>
                <th>Tanggal Transaksi</th>
                <th>Banyak</th>
                <th>Grandtotal</th>
            </tr>

            <?php 
            $subtotal=0;
            foreach( $datafilter as $data) : ?>
            <tr>
                <td><?= $data->ref; ?></td>
                <td><?= $data->nama_pembeli; ?></td>
                <td><?= $data->nama_barang; ?></td>
                <td><?= date('j F Y',strtotime($data->tgl_beli)); ?></td>
                <td><?= $data->banyak; ?></td>
                <td>Rp <?= number_format($data->subtotal); ?></td>
            </tr>
            <?php endforeach; ?>

            <tr>
                <td style="text-align:center; vertical-align: middle" colspan="5"><b>
                        Total</b></td>
                <td id="val">
                Rp <?= number_format($subtotal += $data->subtotal);?>
                </td>
            </tr> 
        </table>
    </div>

    <!-- this row will not appear when printing -->
    <!-- <div class="row m-3">
        <div class="col-xs-12">
            <button class="btn btn-default" window.onload="window.print();"><i class="fa fa-print"></i>
                Cetak</button>

        </div>
    </div> -->
</div>

<script>
window.print();
window.onafterprint=back;
function back(){
    window.close();
}
</script>