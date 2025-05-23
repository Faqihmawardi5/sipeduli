<div class="container mt-4">
    <h3>Edit Subkriteria</h3>
    <form method="post" action="<?= base_url('subkriteria/edit/' . $sub->id) ?>">
        <div class="form-group">
            <label>Kriteria</label>
            <select name="id_kriteria" class="form-control" required>
                <?php foreach ($kriteria as $k): ?>
                    <option value="<?= $k->id ?>" <?= $sub->id_kriteria == $k->id ? 'selected' : '' ?>>
                        <?= $k->nama_kriteria ?>
                    </option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <label>Nama Subkriteria</label>
            <input type="text" name="nama_subkriteria" class="form-control" value="<?= $sub->nama_subkriteria ?>" required>
        </div>
        <div class="form-group">
            <label>Nilai</label>
            <input type="number" step="0.01" name="nilai" class="form-control" value="<?= $sub->nilai ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="<?= base_url('subkriteria') ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
