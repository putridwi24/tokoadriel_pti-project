<div class="container">
    <div class="text-center">
        <h1>TOKO ADRIEL</h1>
        <h3>Laporan Stok Barang</h3>
    </div>

    <hr class="sidebar-divider">

    <div class="row table-responsive">
        <table class="table table-bordered table-striped">
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Stok</th>
                <th>Supplier</th>
                <th>Kedaluwarsa</th>
                <th>Harga Jual</th>
            </tr>

            <?php
            $i = 1; 
            foreach ($stok as $data) : 
        ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $data->nama_barang; ?></td>
                <td><?= $data->nama_kat; ?></td>
                <td><?= $data->stok; ?></td>
                <td><?= $data->nama_supplier; ?></td>
                <td><?= date('j F Y',strtotime($data->kedaluwarsa)); ?></td>
                <td>Rp<?= number_format($data->h_jual); ?></td>
            </tr>
            <?php endforeach; ?>

            <!-- <tr>
                <td style="text-align:center; vertical-align: middle" colspan="5"><b>
                        Total</b></td>
                <td id="val">
                Rp <?= number_format($subtotal += $data->subtotal);?>
                </td> -->
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