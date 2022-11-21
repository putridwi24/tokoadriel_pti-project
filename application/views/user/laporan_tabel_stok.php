<!-- DataTales Example -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark"><?= $title1; ?></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <button class="btn btn-success mb-3" id="button1">Print</button> </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Kategori</th>
                            <th>Stok</th>
                            <th>Supplier</th>
                            <th>Kedaluwarsa</th>
                            <th>Harga Jual</th>
                        </tr>
                    </thead>
                    <tbody>
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
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>

<!-- <script>
$(document).ready(function() {
    $('#dataTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'excel', 'pdf',
        ]
    });
});
</script> -->

<script>
    function printData()
    {
        var divToPrint=document.getElementById("dataTable");
        var isi = "Laporan Stok Barang"
        var htmlToPrint = '' +
        '<style type="text/css">' +
        'table th, table td {' +
        'border:0.5px solid #000;' +
        'padding:0.5em;' +
        '}' +
        '</style>';
        htmlToPrint += isi;
        htmlToPrint += divToPrint.outerHTML;
        newWin= window.open("");
        newWin.document.write(htmlToPrint);
        newWin.print();
        newWin.close();
    }

    $('#button1').on('click',function(){
    printData();
    })
</script>