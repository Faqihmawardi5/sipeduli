<!-- Pastikan sudah include Bootstrap Icons di layout -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> -->

<div class="container mt-4">
    <h3>Data Alternatif (Program Kerja Desa)</h3>
    <a href="<?= base_url('alternatif/tambah') ?>" class="btn btn-primary mb-3">
        <i class="bi bi-plus-circle"></i> Tambah Proker
    </a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Program Kerja</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alternatif as $alt): ?>
            <tr>
                <td><?= $alt->nama_alternatif ?></td>
                <td>
                    <a href="<?= base_url('alternatif/edit/' . $alt->id) ?>" class="btn btn-warning btn-sm">
                        <i class="bi bi-pencil-square"></i> Edit
                    </a>
                    <a href="<?= base_url('alternatif/hapus/' . $alt->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">
                        <i class="bi bi-trash"></i> Hapus
                    </a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
