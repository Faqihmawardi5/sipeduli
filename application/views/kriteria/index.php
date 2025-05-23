<!-- Pastikan Bootstrap Icons sudah di-include di layout utama -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> -->

<div class="container mt-4">
    <h3>Data Kriteria</h3>
    <a href="<?= base_url('kriteria/tambah') ?>" class="btn btn-primary mb-3">
        <i class="bi bi-plus-circle"></i> Tambah Kriteria
    </a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Kriteria</th>
                <th>Bobot</th>
                <th>Tipe</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kriteria as $k): ?>
            <tr>
                <td><?= $k->nama_kriteria ?></td>
                <td><?= $k->bobot ?></td>
                <td><?= ucfirst($k->tipe) ?></td>
                <td>
                    <a href="<?= base_url('kriteria/edit/' . $k->id) ?>" class="btn btn-warning btn-sm">
                        <i class="bi bi-pencil-square"></i> Edit
                    </a>
                    <a href="<?= base_url('kriteria/hapus/' . $k->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin?')">
                        <i class="bi bi-trash"></i> Hapus
                    </a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
