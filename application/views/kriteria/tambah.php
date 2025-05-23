<div class="container mt-4">
    <h3><?= isset($kriteria) ? 'Edit' : 'Tambah' ?> Kriteria</h3>
    <form method="post">
        <div class="form-group">
            <label>Nama Kriteria</label>
            <input type="text" name="nama_kriteria" class="form-control" value="<?= isset($kriteria) ? $kriteria->nama_kriteria : '' ?>" required>
        </div>
        <div class="form-group">
            <label>Bobot</label>
            <input type="number" step="0.01" name="bobot" class="form-control" value="<?= isset($kriteria) ? $kriteria->bobot : '' ?>" required>
        </div>
        <div class="form-group">
            <label>Tipe</label>
            <select name="tipe" class="form-control" required>
                <option value="benefit" <?= isset($kriteria) && $kriteria->tipe == 'benefit' ? 'selected' : '' ?>>Benefit</option>
                <option value="cost" <?= isset($kriteria) && $kriteria->tipe == 'cost' ? 'selected' : '' ?>>Cost</option>
            </select>
        </div>
        <button class="btn btn-success">Simpan</button>
        <a href="<?= base_url('kriteria') ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
