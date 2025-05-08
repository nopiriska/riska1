<!DOCTYPE html>
<html>
<head>
    <title><?php echo $judul; ?></title>
</head>
<body>
    <h1><?php echo $judul; ?></h1>

    <?php if ($this->session->flashdata('success')): ?>
        <p style="color: green;"><?php echo $this->session->flashdata('success'); ?></p>
    <?php endif; ?>

    <?php if ($this->session->flashdata('error')): ?>
        <p style="color: red;"><?php echo $this->session->flashdata('error'); ?></p>
    <?php endif; ?>

    <?php echo validation_errors('<p style="color: red;">', '</p>'); ?>

    <?php echo form_open('admin/aksesoris/update/' . $aksesoris['id_aksesoris']); ?>
        <div>
            <label for="nama_aksesoris">Nama Aksesoris:</label>
            <input type="text" name="nama_aksesoris" value="<?php echo set_value('nama_aksesoris', $aksesoris['nama_aksesoris']); ?>" required>
        </div>
        <br>
        <div>
            <label for="deskripsi">Deskripsi:</label>
            <textarea name="deskripsi"><?php echo set_value('deskripsi', $aksesoris['deskripsi']); ?></textarea>
        </div>
        <br>
        <div>
            <label for="harga">Harga:</label>
            <input type="number" name="harga" value="<?php echo set_value('harga', $aksesoris['harga']); ?>" required>
                    </div>
        <br>
        <div>
            <label for="stok">Stok:</label>
            <input type="number" name="stok" value="<?php echo set_value('stok', $aksesoris['stok']); ?>" required>
                    </div>
        <br>
        <div>
            <label for="keterangan">Keterangan:</label>
            <input type="number" name="keterangan" value="<?php echo set_value('keterangan', $aksesoris['keterangan']); ?>" required>
            
          
        </div>
        <br>
        <button type="submit">Simpan Perubahan</button>
    <?php echo form_close(); ?>

    <br>
    <p><a href="<?php echo site_url('admin/daftar_aksesoris'); ?>">Kembali ke Daftar Aksesoris</a></p>
</body>
</html>