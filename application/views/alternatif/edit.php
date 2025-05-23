<div class="container mt-4">
    <h3>Edit Alternatif</h3>
    <form method="post" action="<?= base_url('alternatif/edit/' . $alternatif->id) ?>">
        <div class="form-group">
            <label>Nama Program Kerja</label>
            <input type="text" name="nama_alternatif" class="form-control" value="<?= $alternatif->nama_alternatif ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="<?= base_url('alternatif') ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
