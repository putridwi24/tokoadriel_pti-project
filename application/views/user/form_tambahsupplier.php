<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark"><?= $title; ?></h6>
        </div>
        <div class="x_content">
            <form action="" method="post" class="form-horizontal form-label-left" novalidate>

                <div class="row justify-content-center pt-4" post>
                    <div class="col-2">
                        <label for="nama_supplier" class="col-form-label">Nama Supplier</label>
                    </div>
                    <div class="col-3">
                        <input type="text" id="nama_supplier" name="nama_supplier" class="form-control"
                            value="<?= set_value('nama_supplier')?>">
                        <?= form_error('nama_supplier', '<small class="text-danger pl-3">' ,'</small>'); ?>
                    </div>

                </div>

                <div class="row justify-content-center pt-2">
                    <div class="col-2">
                        <label for="alamat" class="col-form-label">Alamat</label>
                    </div>
                    <div class="col-3">
                        <input id="alamat" name="alamat" class="form-control"
                            value="<?= set_value('alamat')?>">
                        <?= form_error('alamat', '<small class="text-danger pl-3">','</small>'); ?>
                    </div>
                </div>

                <div class="row justify-content-center pt-2">
                    <div class="col-2">
                        <label for="telepon" class="col-form-label">No Telepon</label>
                    </div>
                    <div class="col-3">
                        <input id="telepon" name="telepon" class="form-control"
                            value="<?= set_value('telepon')?>">
                        <?= form_error('telepon', '<small class="text-danger pl-3">','</small>'); ?>
                    </div>
                </div>

                <div class=" row justify-content-center pt-4 pb-4">
                    <div class="col-1">
                        <button type="submit" class="btn btn-success" name="submit" id="submit">Simpan</button>
                    </div>
                    <div class="col-1">
                        <a href="<?php echo base_url('user/lihat_supplier'); ?>"><button class="btn btn-danger"
                                type="button" name="batal" id="batal">Batal</button></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
