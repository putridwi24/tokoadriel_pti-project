<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark"><?= $title; ?></h6>
        </div>
        <div class="x_content">
            <form action="" method="post" class="form-horizontal form-label-left" novalidate>

                <div class="row justify-content-center pt-4" post>
                    <div class="col-2">
                        <label for="nama_barang" class="col-form-label">Nama Barang</label>
                    </div>
                    <div class="col-3">
                        <input type="text" id="nama_barang" name="nama_barang" class="form-control"
                            value="<?= set_value('nama_barang')?>">
                        <?= form_error('nama_barang', '<small class="text-danger pl-3">' ,'</small>'); ?>
                    </div>
                </div>
                <div class="row justify-content-center pt-4" post>
                    <div class="col-2">
                        <label for="nama_kat" class="col-form-label">Kategori</label>
                    </div>
                    <div class="col-3">
                        <select name="nama_kat" id="nama_kat" class="select2_single form-control" tabindex="-1"
                            required="required">
                            <option selected="true" value="" disabled></option>
                            <?php foreach($get_kat as $gk){ ?>
                            <option value="<?php echo $gk; ?>"><?php echo $gk; ?></option>
                            <?php  }?>
                        </select>
                        <?= form_error('nama_kat', '<small class="text-danger pl-3">' ,'</small>'); ?>
                    </div>
                </div>

               

                <!-- <div class="row justify-content-center pt-2">
                    <div class="col-2">
                        <label for="deskripsi" class="col-form-label">Deskripsi</label>
                    </div>
                    <div class="col-3">
                        <input id="deskripsi" name="deskripsi" class="form-control"
                            value="<?= set_value('deskripsi')?>">
                        <?= form_error('deskripsi', '<small class="text-danger pl-3">','</small>'); ?>
                    </div>
                </div> -->

                <div class=" row justify-content-center pt-4 pb-4">
                    <div class="col-1">
                        <button type="submit" class="btn btn-success" name="submit" id="submit">Simpan</button>
                    </div>
                    <div class="col-1">
                        <a href="<?php echo base_url('user/lihat_produk'); ?>"><button class="btn btn-danger"
                                type="button" name="batal" id="batal">Batal</button></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>