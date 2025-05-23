<div class="container mt-4">
    <h3>Tambah Subkriteria</h3>
    <form method="post" action="<?= base_url('subkriteria/tambah') ?>">
        <div class="form-group">
            <label>Kriteria</label>
            <select name="id_kriteria" class="form-control" required>
                <option value="">Pilih Kriteria</option>
                <?php foreach ($kriteria as $k): ?>
                    <option value="<?= $k->id ?>"><?= $k->nama_kriteria ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <label>Nama Subkriteria</label>
            <input type="text" name="nama_subkriteria" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Nilai</label>
            <input type="number" step="0.01" name="nilai" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="<?= base_url('subkriteria') ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
