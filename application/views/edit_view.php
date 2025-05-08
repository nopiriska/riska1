
<?php $this->load->view('template/head'); ?>
<?php $this->load->view('template/sidebar'); ?>


<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <h1>Edit Barang</h1>
                        </div>
                        <div class="card-body">
                         <form action="<?php echo base_url('index.php/barang/proses_edit'); ?>" method="post">
                                <input type="hidden" name="id_barang" value="<?php echo $barang->id_barang; ?>">

                                <div class="form-group">
                                    <label for="nama_barang">Nama Barang</label>
                                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?php echo $barang->nama_barang; ?>" required>
                                </div>

                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea class="form-control" id="deskripsi" name="deskripsi"><?php echo $barang->deskripsi; ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="harga">Harga</label>
                                    <input type="number" class="form-control" id="harga" name="harga" value="<?php echo $barang->harga; ?>" required>
                                </div>

                                <div class="form-group">
                                    <label for="stok">Stok</label>
                                    <input type="number" class="form-control" id="stok" name="stok" value="<?php echo $barang->stok; ?>" required>
                                </div>

                                <div class="form-group">
                                    <label for="kategori">Kategori</label>
                                    <input type="text" class="form-control" id="kategori" name="kategori" value="<?php echo $barang->kategori; ?>">
                                </div>

                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                <a href="<?php echo base_url('index.php/barang'); ?>" class="btn btn-secondary">Batal</a>
                            </form>
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