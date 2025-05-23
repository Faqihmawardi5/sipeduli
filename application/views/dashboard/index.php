<div class="container mt-4">
    <br>
    <!-- Sambutan -->
    <div class="mb-4">
        <h4 class="text-center text-primary font-weight-bold">
            Selamat Datang di SIPEDULI <br>Sistem Informasi Pepedan untuk Usulan dan Lokasi Inisiatif
        </h4>
        <p class="text-center text-muted">
            SIPEDULI hadir sebagai sarana transparan dan objektif dalam menentukan prioritas program kerja Desa Pepedan. Sistem ini menghimpun dan menganalisis usulan masyarakat berdasarkan kriteria yang jelas, sebagai bentuk komitmen bersama untuk perencanaan pembangunan yang tepat sasaran, partisipatif, dan berkelanjutan demi mewujudkan Pepedan yang lebih maju dan sejahtera.
        </p>
    </div>

    <div class="row">


        <!-- Kriteria -->
        <div class="col-md-3 mb-3">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <a href="<?= base_url('kriteria') ?>" class="text-decoration-none text-dark">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="h5 font-weight-bold"><?= $total_kriteria ?> Kriteria</div>
                            </div>
                            <div class="text-primary">
                                <i class="fas fa-balance-scale fa-2x"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Subkriteria -->
        <div class="col-md-3 mb-3">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <a href="<?= base_url('subkriteria') ?>" class="text-decoration-none text-dark">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="h5 font-weight-bold"><?= $total_subkriteria ?> Subkriteria</div>
                            </div>
                            <div class="text-info">
                                <i class="fas fa-stream fa-2x"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Alternatif -->
        <div class="col-md-3 mb-3">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <a href="<?= base_url('alternatif') ?>" class="text-decoration-none text-dark">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="h5 font-weight-bold"><?= $total_alternatif ?> Alternatif</div>
                            </div>
                            <div class="text-success">
                                <i class="fas fa-project-diagram fa-2x"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Penilaian -->
        <div class="col-md-3 mb-3">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <a href="<?= base_url('penilaian') ?>" class="text-decoration-none text-dark">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="h5 font-weight-bold"><?= $total_penilaian ?> Penilaian</div>
                            </div>
                            <div class="text-warning">
                                <i class="fas fa-edit fa-2x"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Perhitungan -->
        <div class="col-md-3 mb-3">
            <div class="card border-left-dark shadow h-100 py-2">
                <div class="card-body">
                    <a href="<?= base_url('perhitungan') ?>" class="text-decoration-none text-dark">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="h5 font-weight-bold"><?= $total_terhitung ?> Perhitungan</div>
                            </div>
                            <div class="text-secondary">
                                <i class="fas fa-chart-line fa-2x"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </div>

    <!-- Grafik SAW -->
    <div class="row mt-5">
    <div class="col-md-6 mb-4">
            <div class="card shadow">
                <div class="card-header bg-success text-white">
                    Grafik Batang: Klasifikasi Program
                </div>
                <div class="card-body">
                    <canvas id="barChart"></canvas>
                </div>
            </div>
        </div>
        
        <div class="col-md-6 mb-4">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    Grafik Donat: Klasifikasi Program
                </div>
                <div class="card-body">
                    <canvas id="donutChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Chart.js + Plugin Datalabels -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2"></script>

<script>
    const donutData = {
        labels: ['Jangka Pendek', 'Jangka Menengah', 'Jangka Panjang'],
        datasets: [{
            data: [<?= $jumlah_pendek ?>, <?= $jumlah_menengah ?>, <?= $jumlah_panjang ?>],
            backgroundColor: ['#4e73df', '#1cc88a', '#f6c23e'],
            hoverOffset: 10
        }]
    };

    const barData = {
        labels: ['Jangka Pendek', 'Jangka Menengah', 'Jangka Panjang'],
        datasets: [{
            label: 'Jumlah Program',
            data: [<?= $jumlah_pendek ?>, <?= $jumlah_menengah ?>, <?= $jumlah_panjang ?>],
            backgroundColor: ['#4e73df', '#1cc88a', '#f6c23e']
        }]
    };

    new Chart(document.getElementById('donutChart'), {
        type: 'doughnut',
        data: donutData,
        options: {
            plugins: {
                datalabels: {
                    formatter: (value, context) => {
                        const total = context.chart.data.datasets[0].data.reduce((a, b) => a + b, 0);
                        const percentage = (value / total * 100).toFixed(1);
                        return `${percentage}%`;
                    },
                    color: '#fff',
                    font: {
                        weight: 'bold'
                    }
                },
                legend: {
                    position: 'bottom'
                }
            }
        },
        plugins: [ChartDataLabels]
    });

    new Chart(document.getElementById('barChart'), {
        type: 'bar',
        data: barData,
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: { stepSize: 1 }
                }
            }
        }
    });
</script>
