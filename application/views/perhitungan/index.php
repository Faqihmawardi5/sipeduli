<div class="container mt-4">
    <h3>Hasil Perhitungan SAW</h3>
    <a href="<?= base_url('perhitungan/cetak') ?>" target="_blank" class="btn btn-success mb-3">
    <i class="fa fa-print"></i> Cetak
    </a>
    <a href="<?= base_url('perhitungan/export_pdf') ?>" target="_blank" class="btn btn-danger mb-3">
        <i class="fa fa-file-pdf"></i> Export PDF
    </a>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Alternatif</th>
                <th>Skor</th>
                <th>Klasifikasi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hasil as $h): ?>
                <tr>
                    <td><?= $h['nama_alternatif'] ?></td>
                    <td><?= $h['skor'] ?></td>
                    <td>
                        <?php if ($h['klasifikasi'] == 'Jangka Pendek'): ?>
                            <span class="badge badge-success"><?= $h['klasifikasi'] ?></span>
                        <?php elseif ($h['klasifikasi'] == 'Jangka Menengah'): ?>
                            <span class="badge badge-warning"><?= $h['klasifikasi'] ?></span>
                        <?php else: ?>
                            <span class="badge badge-danger"><?= $h['klasifikasi'] ?></span>
                        <?php endif ?>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('chartSAW');
    const chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?= json_encode(array_column($hasil, 'nama_alternatif')) ?>,
            datasets: [{
                label: 'Skor SAW',
                data: <?= json_encode(array_column($hasil, 'skor')) ?>,
                backgroundColor: 'rgba(54, 162, 235, 0.7)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    max: 1
                }
            }
        }
    });
</script>

</div>
