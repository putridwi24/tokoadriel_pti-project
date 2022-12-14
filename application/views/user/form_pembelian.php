<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark"><?= $title; ?></h6>
        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">


                    <form action="<?php echo base_url() . 'user/form_pembelian'; ?>" method="post"
                        class="form-horizontal form-label-left" novalidate>

                        <div class="row justify-content-center pt-2">
                            <div class="col-2">
                                <label for="nama_supplier" class="col-form-label">Nama Supplier</label>
                            </div>
                            <div class="col-3">
                                <select name="nama_supplier" id="nama_supplier"
                                    class="select2_single form-control nama_supplier" tabindex="-1" required="required">
                                    <option selected="true" value="" disabled></option>
                                    <?php foreach($get_supplier as $gs){ ?>
                                    <option value="<?php echo $gs; ?>"><?php echo $gs; ?></option>
                                    <?php  }?>
                                </select>
                                <?= form_error('nama_supplier', '<small class="text-danger pl-3">' ,'</small>'); ?>
                            </div>
                        </div>


                        <div class="row justify-content-center pt-2 mb-4">
                            <div class="col-2">
                                <label for="tgl_beli" class="col-form-label">Tanggal Pembelian</label>
                            </div>
                            <div class="col-3">
                                <input type="date" id="tgl_beli" name="tgl_beli" class="form-control">
                                <span class=" input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                                <?= form_error('tgl_beli', '<small class="text-danger pl-3">' ,'</small>'); ?>
                            </div>
                        </div>



                        <table id="pembelian" class="table table-bordered">
                            
                            <thead>
                                <tr>
                                    <th style="text-align: center">Id Barang</th>
                                    <th style="text-align: center">Nama Barang</th>
                                    <th style="text-align: center">Kategori</th>
                                    <th style="text-align: center">Harga Beli</th>
                                    <th style="text-align: center">Harga Jual</th>
                                    <th style="text-align: center">Kedaluwarsa</th>
                                    <th style="text-align: center">Banyak</th>

                                    <th style="text-align: center">Subtotal</th>
                                    <th style="text-align: center">Aksi</th>

                                </tr>
                            </thead>

                            <tfoot>
                                <tr>
                                    <td style="text-align:right; vertical-align: middle" colspan="5">
                                        <b>Total Pembelian</b>
                                    </td>
                                    <td>
                                        <input id="grandtotal" name="grandtotal" type="text"
                                            class="form-control grandtotal" readonly>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>

                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <button id="send" type="submit" class="btn btn-success">Simpan</button>
                                <button id='addpembelian' class="btn btn-info" type="button"><span
                                        class="fa fa-plus"></span>
                                    Tambah Barang</button>
                                <a href="<?php echo base_url('user/lihat_pembelian') ?>"><button type="button"
                                    class="btn btn-danger">Batal</button></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css" />
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>

<script type="text/javascript">
const addpembelian = document.querySelector("#addpembelian");
var pembelian = $('#pembelian').DataTable({
    "paging": false,
    "ordering": false,
    "info": false,
    "searching": false,
});

$(document).on('change', '.nama_supplier', function() {

    var nama_supplier = $('.nama_supplier').val();

    $.ajax({
        url: "<?php echo base_url('user/getmedbysupplier') ?>",
        method: "POST",
        data: {
            nama_supplier: nama_supplier
        },
        async: false,
        dataType: 'json',
        success: function(data) {
            var html = '';
            var i;
            html += '<option selected="true" value="" disabled >Pilih barang</option>';
            for (i = 0; i < data.length; i++) {
                html += '<option>' + data[i].nama_supplier + '</option>';
            }
            $('.nama_supplier').html(html);

        }
    });
});

var count = 1;

addpembelian.onclick = function(event) {
    pembelian.row.add([
        '<input id="id' + count +
        '" name="id[]" class="form-control id" required="required">',
        '<select required="required" style="width:100%;" class="form-control nama_barang" id="nama_barang' +
        count + '" name="nama_barang[]" data-stok="#stok' + count + '" data-nama_kat="#nama_kat' + count +
        '" data-h_beli="#h_beli' + count +
        '"><option selected="true" value="" disabled ></option><?php foreach ($get_brg as $gm) { ?><option value="<?php echo $gm; ?>"><?php echo $gm; ?></option><?php  } ?></select>',
        '<input id="nama_kat' + count + '" name="nama_kat[]" class="form-control nama_kat" readonly>',
        '<input id="h_beli' + count +
        '" name="h_beli[]" class="form-control h_beli" required="required">',
        '<input id="h_jual' + count +
        '" name="h_jual[]" class="form-control h_jual" required="required">',
        '<input type="date" id="kedaluwarsa' + count +
        '" name="kedaluwarsa[]" class="form-control kedaluwarsa" required="required">',
        '<input type="number" id="banyak' + count +
        '" name="banyak[]" class="form-control banyak" required="required">',
        '<input id="subtotal' + count +
        '" name="subtotal[]" class="form-control subtotal" readonly>',
        '<button id="removeproduk" class="btn btn-danger btn-sm" type="button"><span class="fa fa-trash"></span> Hapus</button>',
    ]).draw(false);

    var myOpt = [];
    $("select").each(function() {
        myOpt.push($(this).val());
    });
    $("select").each(function() {
        $(this).find("option").prop('hidden', false);
        var sel = $(this);
        $.each(myOpt, function(key, value) {
            if ((value != "") && (value != sel.val())) {
                sel.find("option").filter('[value="' + value + '"]').prop('hidden', true);
            }
        });
    });

    count++;
}

$('#pembelian').on("click", "#removeproduk", function() {
    console.log($(this).parent());
    pembelian.row($(this).parents('tr')).remove().draw(false);
    updateTotal();
});


$('#pembelian').on('change', '.nama_barang', function() {
    var $select = $(this);
    var nama_barang = $select.val();

    $.ajax({
        type: "POST",
        url: "<?php echo base_url('user/product') ?>",
        dataType: "JSON",
        data: {
            nama_barang: nama_barang
        },
        cache: false,
        success: function(data) {
            $.each(data, function(nama_barang, stok, nama_kat, h_beli) {
                $($select.data('stok')).val(data.stok);
                $($select.data('nama_kat')).val(data.nama_kat);
                $($select.data('h_beli')).val(data.h_beli);
            });
        }
    });

});

$('#pembelian').on('change', '.banyak', function() {
    updateSubtotalp();
});

function updateSubtotalp() {

    $(".banyak").each(function() {
        var $row = $(this).closest('tr');
        var unitStock = parseInt($row.find('.stok').val());
        var unitCount = parseInt($row.find('.banyak').val());

        if (unitCount < 0) {
            $row.find('.banyak').val(0);
            updateSubtotalp();

        } else {
            var Sub = parseInt(($row.find('.h_beli').val()) * unitCount);
            $row.find('.subtotal').val(Sub);
            updateTotal();


        }
    });
}

function updateTotal() {
    var grandtotal = 0;
    $('.subtotal').each(function() {
        grandtotal += parseInt($(this).val());
    });
    $('#grandtotal').val(grandtotal);
}
</script>