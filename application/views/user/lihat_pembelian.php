<!-- DataTales Example -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark"><?= $title; ?></h6>
        </div>

        <div class="card-body">
            <a href="<?php echo base_url('user/form_pembelian'); ?>"><button class="btn btn-success mb-3">
                    <i class="fas fa-plus"> Tambah Pembelian</i></button></a>


            <div class="table-responsive">
                <!-- notifikasi data berhasil ditambahkan -->
                <?php if ($this->session->flashdata('flash') ) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Pembelian <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php endif; ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Kode Referensi</th>
                            <th>Nama Barang</th>
                            <th>Nama Supplier</th>
                            <th>Tanggal Beli</th>
                            <th>Harga Beli</th>
                            <th>Banyak</th>
                            <th>Total Pembelian</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($tb_pembelian as $data) : 
                    ?>
                        <tr>
                            <td><?= $data->ref; ?></td>
                            <td><?= $data->nama_barang; ?></td>
                            <td><?= $data->nama_supplier; ?></td>
                            </td> <td><?= date('j F Y',strtotime($data->tgl_beli)); ?></td>
                            <td><?= $data->h_beli; ?></td>
                            <td><?= $data->banyak; ?></td>
                            <td>Rp <?php echo number_format($data->grandtotal) ?></td>
                            <td>
                                <a href="<?= base_url('user/lihat_nota_pembelian/'). $data->ref?>" target="_blank"><button type="button"
                                        class="sbtn btn-success"><i class="fas fa-file-invoice"></i></button></a>

                                <a href="<?= base_url('user/hapus_pembelian/'). $data->ref?>"><button type="delete"
                                        class="sbtn btn-danger" onclick="return confirm('Yakin?')"><i
                                            class="fas fa-trash"></i></button></a>
                            </td>
                        </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>