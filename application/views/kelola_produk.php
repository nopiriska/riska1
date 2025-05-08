<?php $this->load->view('template/head'); ?>
<?php $this->load->view('template/sidebar'); ?>


<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <h1>AKSESORIESKA</h1>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <a href="<?php echo base_url('index.php/barang/tambah'); ?>" class="btn btn-sm btn-primary mb-3"><i class="ti-plus"></i> Tambah Barang</a>

                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Barang</th>
                                            <th>Deskripsi</th>
                                            <th>Harga</th>
                                            <th>Stok</th>
                                            <th>Kategori</th>
                                            <th>Aksi</th> </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($barang as $brg) : ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $brg->nama_barang; ?></td>
                                                <td><?php echo $brg->deskripsi; ?></td>
                                                <td><?php echo $brg->harga; ?></td>
                                                <td><?php echo $brg->stok; ?></td>
                                                <td><?php echo $brg->kategori; ?></td>
                                                <td>
                                                    <a href="<?php echo base_url('index.php/barang/edit_view/' . $brg->id_barang); ?>" class="btn btn-sm btn-warning"><i class="ti-pencil"></i> Edit</a>
                                                    <a href="<?php echo base_url('index.php/barang/hapus/' . $brg->id_barang); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><i class="ti-trash"></i> Hapus</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>