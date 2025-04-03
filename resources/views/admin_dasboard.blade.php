<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/img/logo.png" type="image/png">
    <link rel="stylesheet" href="/css/admin_dashboard.css"/>
    <title>Admin Dashboard</title>
</head>
<body>
    <main id="main">
    @include('/header')
        <div class="main_second_div">
            <div class="main_second_div_top">
                <h1>BYSMP</h1>
                <h3>BLESS THE CHILDREN FOUNDATION</h3>
                <h3>INSPIRING CHANGE, BUILDING WITH HOPE</h3>
            </div>

            <!-- Create a container to hold the charts -->
            <div id="charts-container">
                <!-- Adding the pie chart -->
                <div class="main_second_div_circle">
                    <h3>Records Overview</h3>
                    <canvas id="recordsChart"></canvas>
                </div>
            <div id="leftsidechart">
                <div class="topchartRecord">
                    <h2>DASHBOARD</h2>
                </div>
                <!-- Adding another chart for created and updated -->
                <div class="main_second_div_box">
                    <h3>Created and Updated Records</h3>
                    <canvas id="createdUpdatedChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Internal JavaScript for the charts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Get the count values from the server
        var mayashopeOnetimeCount = {{ $mayashopeOnetimeCount ?? '0' }};
        var chaliceCount = {{ $chaliceCount ?? '0' }};
        var eventCount = {{ $eventCount ?? '0' }};

        // Data for the created_at and updated_at fields
        var createdDates = @json($createdDates ?? []);
        var updatedDates = @json($updatedDates ?? []);

        // Get the canvas element for the pie chart
        var ctx = document.getElementById('recordsChart').getContext('2d');

        // Create a pie chart
        var recordsChart = new Chart(ctx, {
            type: 'pie', // Pie chart type
            data: {
                labels: ['Mayashope Onetime', 'Maya Sponsorship', 'Events'],
                datasets: [{
                    label: 'Total Records',
                    data: [mayashopeOnetimeCount, chaliceCount, eventCount],
                    backgroundColor: ['rgba(45, 74, 40, 0.6)', 'rgba(255, 159, 64, 0.6)', 'rgba(75, 192, 192, 0.6)'],
                    borderColor: ['rgb(45, 74, 40)', 'rgb(255, 159, 64)', 'rgb(75, 192, 192)'],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top'
                    }
                }
            }
        });

        // Get the canvas element for the created/updated chart
var ctx2 = document.getElementById('createdUpdatedChart').getContext('2d');

// Function to count records per month
function countRecordsByMonth(dates) {
    var counts = {};
    dates.forEach(function(date) {
        var month = new Date(date).getMonth(); // Get month index (0-11)
        counts[month] = (counts[month] || 0) + 1;
    });
    return counts;
}

// Count records by month for created and updated dates
var createdCountByMonth = countRecordsByMonth(createdDates);
var updatedCountByMonth = countRecordsByMonth(updatedDates);

// Create a line chart for created and updated records
var createdUpdatedChart = new Chart(ctx2, {
    type: 'line', // Change to 'line' chart
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        datasets: [
            {
                label: 'Created Records',
                data: Object.values(createdCountByMonth),
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgb(54, 162, 235)',
                borderWidth: 2,
                fill: true,
                tension: 0.3 // Smooth curves
            },
            {
                label: 'Updated Records',
                data: Object.values(updatedCountByMonth),
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgb(255, 99, 132)',
                borderWidth: 2,
                fill: true,
                tension: 0.3
            }
        ]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top'
            }
        },
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

    </script>

</body>
</html>
