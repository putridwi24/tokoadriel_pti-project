<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark"><?= $title; ?></h6>
        </div>
        <div class="x_content">

            <form action="" method="post" class="form-horizontal form-label-left" novalidate>
                <input type="hidden" name="id" id="id" value="<?= $barang['id']; ?>">
                <div class="row justify-content-center pt-4" post>
                    <div class="col-2">
                        <label for="nama_barang" class="col-form-label">Nama Barang</label>
                    </div>
                    <div class="col-3">
                        <input type="text" id="nama_barang" name="nama_barang" class="form-control"
                            value="<?= $barang['nama_barang']; ?>">
                        <?= form_error('nama_barang', '<small class="text-danger pl-3">' ,'</small>'); ?>
                    </div>
                </div>

                <div class="row justify-content-center pt-2">
                    <div class="col-2">
                        <label for="nama_kat" class="col-form-label">Nama Kategori</label>
                    </div>
                    <div class="col-3">
                        <select type="text" name="nama_kat" id="nama_kat" class="form-control">
                            <?php foreach($get_kat as $gk) :?>
                            <?php if ( $gk == $barang['nama_kat']) :?>
                            <option value=" <?php echo $gk; ?>" selected><?php echo $gk; ?></option>
                            <?php else :  ?>
                            <option value="<?php echo $gk; ?>"><?php echo $gk; ?></option>
                            <?php endif; ?>
                            <?php  endforeach;?>
                        </select>
                        <?= form_error('nama_kat', '<small class="text-danger pl-3">' ,'</small>'); ?>
                    </div>
                </div>

                <div class="row justify-content-center pt-4 pb-4">
                    <div class="col-1">
                        <button type="submit" class="btn btn-success" name="submit" id="submit">Simpan</button>
                    </div>
                    <div class="col-1">
                        <a href="<?= base_url('user/lihat_produk')?>"><button type="button" class="btn btn-danger"
                                name="batal" id="batal">Batal</button></a>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#h_beli').keyup(function() {
        var beli = parseInt($('#h_beli').val());

        var a = beli + (beli * 0.11);
        var b = a * 0.2;
        var h_jual = a + b;
        $('#h_jual').val(h_jual);
    });
});
</script>