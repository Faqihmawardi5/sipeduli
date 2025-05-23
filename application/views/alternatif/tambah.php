<div class="container mt-4">
    <h3>Tambah Alternatif</h3>
    <form method="post" action="<?= base_url('alternatif/tambah') ?>">
        <div class="form-group">
            <label>Nama Program Kerja</label>
            <input type="text" name="nama_alternatif" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="<?= base_url('alternatif') ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
