<!-- DataTales Example -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark"><?= $title; ?></h6>
        </div>
        <div class="card-body">
            <a href="<?php echo base_url('user/form_penjualan'); ?>"><button class="btn btn-success mb-3">
                    <i class="fas fa-plus"> Tambah Penjualan</i></button></a>

            <div class="table-responsive">
                <!-- notifikasi data berhasil ditambahkan -->
                <?php if ($this->session->flashdata('flash') ) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Penjualan <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php endif; ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Kode Referensi</th>
                            <th>Nama Pembeli</th>
                            <th>Tanggal Jual</th>
                            <th>Nama Barang</th>
                            <th>Harga Jual</th>
                            <th>Banyak</th>
                            <th>Total</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($tb_jual as $data) : 
                    ?>
                        <tr>
                            <td><?= $data->ref; ?></td>
                            <td><?= $data->nama_pembeli; ?></td>
                            <td><?= date('j F Y',strtotime($data->tgl_beli)); ?></td>
                            <td><?= $data->nama_barang; ?></td>
                            <td>Rp <?= number_format($data->h_beli); ?></td>
                            <td><?= $data->banyak; ?></td>
                            <td>Rp <?php echo number_format($data->grandtotal) ?></td>
                            <td style=" text-align: center;">
                                <a href="<?= base_url('user/lihat_nota_penjualan/'). $data->ref?>" target="_blank"><button type="button"
                                        class="sbtn btn-success"><i class="fas fa-file-invoice"></i></button></a>
                                <a href="<?= base_url('user/hapus_penjualan/'). $data->ref?>"><button type="delete"
                                        class="sbtn btn-danger" onclick="return confirm('Yakin?')"><i
                                            class="fas fa-trash"></i></button></a>

                                <!-- <a href="<?= base_url('user/hapus_penjualan/'). $data->id_jual?>"><button type="delete"
                                        class="sbtn btn-danger"><i class="fas fa-trash"></i></button></a> -->
                            </td>
                        </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>