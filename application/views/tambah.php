<?php $this->load->view('template/head'); ?>
<?php $this->load->view('template/sidebar'); ?>
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">



                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tambah barang</h4>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo base_url('index.php/barang/proses_tambah')?>" method="post">
                                <div class="mb-3">
                                    <label for="nama_barang" class="form-label">Nama barang</label>
                                    <input type="text" class="form-control" id="nama_barang" name="nama_barang">
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Deskripsi</label>
                                    <input type="text" class="form-control" id="deskripsi" name="deskripsi">
                                </div>
                                <div class="mb-3">
                                    <label for="harga" class="form-label">Harga</label>
                                    <input type="number" class="form-control" id="harga" name="harga">
                                </div>
                                <div class="mb-3">
                                    <label for="stok" class="form-label">Stok</label>
                                    <input type="number" class="form-control" id="stok" name="stok">
                                </div>
                                <div class="mb-3">
                                    <label for="kategori" class="form-label">Kategori</label>
                                    <input type="text" class="form-control" id="kategori" name="kategori">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
</div>