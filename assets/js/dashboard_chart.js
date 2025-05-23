document.addEventListener('DOMContentLoaded', function () {
    const grafikJangka = window.grafikJangka || [0, 0, 0];
    const grafikNilai = window.grafikNilai || [];

    // Donut Chart
    const donutCtx = document.getElementById('donutChart').getContext('2d');
    new Chart(donutCtx, {
        type: 'doughnut',
        data: {
            labels: ['Pendek', 'Menengah', 'Panjang'],
            datasets: [{
                data: grafikJangka,
                backgroundColor: ['#4e73df', '#1cc88a', '#f6c23e'],
                hoverBackgroundColor: ['#2e59d9', '#17a673', '#f4b619'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });

    // Bar Chart
    const barCtx = document.getElementById('barChart').getContext('2d');
    new Chart(barCtx, {
        type: 'bar',
        data: {
            labels: grafikNilai.map(item => item.nama),
            datasets: [{
                label: 'Nilai Akhir',
                backgroundColor: '#36b9cc',
                borderColor: '#2c9faf',
                data: grafikNilai.map(item => item.nilai),
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
});
