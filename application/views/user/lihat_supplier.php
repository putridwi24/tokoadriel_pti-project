<!-- DataTales Example -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark"><?= $title; ?></h6>
        </div>
        <div class="card-body">

            <!-- notifikasi data berhasil ditambahkan -->
            <?php if ($this->session->flashdata('flash') ) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Supplier <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php endif; ?>

            <a href="<?php echo base_url('user/form_tambahsupplier'); ?>"><button class="btn btn-success mb-3">
                    <i class="fas fa-plus"> Tambah Supplier</i></button></a>


            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Supplier</th>
                            <th>Alamat</th>
                            <th>No Telepon</th>
                            <th style="width:9%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1; 
                        foreach ($supplier as $data) : 
                    ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $data->nama_supplier; ?></td>
                            <td><?= $data->alamat_supplier; ?></td>
                            <td><?= $data->telepon_supplier; ?></td>
                            <td>
                                <a href="<?= base_url('user/edit_supplier/'). $data->id_supplier?>"><button type="edit"
                                        class="sbtn btn-success"><i class="fas fa-edit"></i></button></a>

                                <a href="<?= base_url('user/hapus_pemasok/'). $data->id_supplier?>"><button type="delete"
                                        class="sbtn btn-danger" onclick="return confirm('Yakin?')"><i
                                            class="fas fa-trash"></i></button></a>
            </div>
            </td>
            </tr>

            <?php endforeach; ?>
            </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<!--  -->