<!-- DataTales Example -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark"><?= $title1; ?></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="alert alert-danger" role="alert">
                    List Barang dengan Sisa Stok <strong>Kurang dari 10</strong>!
                </div>
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
                        foreach ($almstok as $data) : 
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

<!-- DataTales Example -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark"><?= $title2; ?></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
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
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1; 
                        foreach ($habis_stok as $data) : 
                    ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $data->nama_barang; ?></td>
                            <td><?= $data->nama_kat; ?></td>
                            <td><?= $data->stok; ?></td>
                            <td><?= $data->nama_supplier; ?></td>
                            <td><?= date('j F Y',strtotime($data->kedaluwarsa)); ?></td>
                            <td>Rp<?= number_format($data->h_jual); ?></td>
                            <td>
                                <a href="<?= base_url('user/hapus_habis_stok/'). $data->id?>"><button type="delete"
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