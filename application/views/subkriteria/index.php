<!-- Pastikan di layout head kamu sudah ada Bootstrap Icons -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> -->

<div class="container mt-4">
    <h3>Data Subkriteria</h3>
    <a href="<?= base_url('subkriteria/tambah') ?>" class="btn btn-primary mb-3">
        <i class="bi bi-plus-circle"></i> Tambah Subkriteria
    </a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Kriteria</th>
                <th>Subkriteria</th>
                <th>Nilai</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($subkriteria as $s): ?>
            <tr>
                <td><?= $s->nama_kriteria ?></td>
                <td><?= $s->nama_subkriteria ?></td>
                <td><?= $s->nilai ?></td>
                <td>
                    <a href="<?= base_url('subkriteria/edit/' . $s->id) ?>" class="btn btn-warning btn-sm">
                        <i class="bi bi-pencil-square"></i> Edit
                    </a>
                    <a href="<?= base_url('subkriteria/hapus/' . $s->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin hapus?')">
                        <i class="bi bi-trash"></i> Hapus
                    </a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
