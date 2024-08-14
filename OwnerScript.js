document.addEventListener('DOMContentLoaded', function() {
    // Message Channel Chart
    const messageChannelCtx = document.getElementById('messageChannelChart').getContext('2d');
    new Chart(messageChannelCtx, {
        type: 'bar',
        data: {
            labels: ['Messenger', 'Zalo ZNS', 'Zalo Quan Tâm', 'SMS', 'Gmail'],
            datasets: [{
                label: 'Đã gửi',
                data: [5000, 1000, 500, 100, 50],
                backgroundColor: 'rgba(54, 162, 235, 0.8)',
            }, {
                label: 'Đã nhận',
                data: [2500, 750, 100, 34, 25],
                backgroundColor: 'rgba(75, 192, 192, 0.8)',
            }, {
                label: 'Đã click',
                data: [1000, 75, 100, 5, 5],
                backgroundColor: 'rgba(255, 159, 64, 0.8)',
            }]
        },
        options: {
            responsive: true,
            scales: {
                x: {
                    stacked: true,
                },
                y: {
                    stacked: true
                }
            }
        }
    });

    // Device Usage Chart
    const deviceUsageCtx = document.getElementById('deviceUsageChart').getContext('2d');
    new Chart(deviceUsageCtx, {
        type: 'doughnut',
        data: {
            labels: ['Mobile', 'Desktop', 'Tablet', 'Unknown'],
            datasets: [{
                data: [70, 20, 8, 2],
                backgroundColor: [
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(75, 192, 192, 0.8)',
                    'rgba(255, 159, 64, 0.8)',
                    'rgba(201, 203, 207, 0.8)'
                ]
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'bottom',
                }
            }
        }
    });
});
