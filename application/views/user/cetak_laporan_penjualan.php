<div class="container">
    <div class="text-center">
        <h1>TOKO ADRIEL</h1>
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

            <?php 
            foreach( $totaljual as $data) : ?>
            <tr>
                <td style="text-align:center; vertical-align: middle" colspan="5"><b>
                        Total</b></td>
                <td id="val">
                Rp <?= $data->total;?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>

<script>
window.print();
window.onafterprint=back;
function back(){
    window.close();
}
</script>