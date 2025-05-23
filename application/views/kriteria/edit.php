<div class="container mt-4">
    <h3>Edit Kriteria</h3>
    <form method="post">
        <div class="form-group">
            <label>Nama Kriteria</label>
            <input type="text" name="nama_kriteria" class="form-control" value="<?= $kriteria->nama_kriteria ?>" required>
        </div>
        <div class="form-group">
            <label>Bobot</label>
            <input type="number" name="bobot" step="0.01" class="form-control" value="<?= $kriteria->bobot ?>" required>
        </div>
        <div class="form-group">
            <label>Tipe</label>
            <select name="tipe" class="form-control" required>
                <option value="benefit" <?= $kriteria->tipe == 'benefit' ? 'selected' : '' ?>>Benefit</option>
                <option value="cost" <?= $kriteria->tipe == 'cost' ? 'selected' : '' ?>>Cost</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="<?= base_url('kriteria') ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
