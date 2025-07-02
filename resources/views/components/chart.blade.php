<div class="mt-5">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-white fw-bold">Data Penjualan Mingguan</div>
        <div class="card-body" style="height: 350px;">
            <canvas id="salesChart"></canvas>
        </div>
    </div>
</div>

{{-- Chart.js --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    let salesChartInstance;

    document.addEventListener('DOMContentLoaded', function () {
        const ctx = document.getElementById('salesChart').getContext('2d');

        // Create gradient
        const gradient = ctx.createLinearGradient(0, 0, 0, 300);
        gradient.addColorStop(0, 'rgba(13, 110, 253, 0.4)');
        gradient.addColorStop(1, 'rgba(13, 110, 253, 0)');

        salesChartInstance = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'],
                datasets: [{
                    label: 'Penjualan 2020',
                    data: [15, 45, 22, 88, 40, 10, 55],
                    borderColor: '#0d6efd',
                    backgroundColor: gradient,
                    fill: true,
                    tension: 0.4,
                    pointBackgroundColor: '#0d6efd',
                    pointRadius: 4,
                    pointHoverRadius: 6
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: true,
                        labels: {
                            color: '#333',
                            font: {
                                weight: 'bold'
                            }
                        }
                    },
                    tooltip: {
                        backgroundColor: '#fff',
                        titleColor: '#000',
                        bodyColor: '#000',
                        borderColor: '#ccc',
                        borderWidth: 1
                    }
                },
                scales: {
                    x: {
                        grid: {
                            color: '#f1f1f1'
                        },
                        ticks: {
                            color: '#555'
                        }
                    },
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: '#f1f1f1'
                        },
                        ticks: {
                            color: '#555'
                        }
                    }
                }
            }
        });
    });
</script>
