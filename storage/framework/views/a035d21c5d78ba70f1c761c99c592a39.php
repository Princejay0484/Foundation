<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/img/logo.png" type="image/png">
    <title>Maya's Hope Sponsored</title>
    <style>
/* General Styling */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #B2C9AD;
    animation: fadeIn 1.5s ease-in;
}

header, footer {
    color: #fff;
    padding: 10px 20px;
    text-align: center;
}

main {
    padding: 10px 50px 10px 15px;
}

/* Heading Animation */
h2 {
    color: #000080;
    padding: 15px;
    text-align: center;
    animation: slideIn 1s ease-in-out;
}

/* Search Form */
.search-form {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 20px;
    gap: 10px;
}

.search-input {
    padding: 10px;
    font-size: 16px;
    border: 1px solid #66785F;
    border-radius: 4px;
    width: 300px;
}

/* Search Button Hover Animation */
.search-button {
    padding: 15px;
    font-size: 16px;
    background-color: #f0e68c;
    color: #000080;
    border: none;
    border-radius: 50px;
    cursor: pointer;
    transition: transform 0.3s ease, background-color 0.3s ease;
}

.search-button:hover {
    background-color: #66785F;
    transform: scale(1.05);
}

/* Content Layout */
.create-new {
    display: flex;
    align-items: center;
    text-decoration: none;
    color: #f0e68c;
    gap: 5px;
    font-size: 16px;
}

.create-new img {
    width: 24px;
    height: 24px;
}

.content-layout {
    display: flex;
    gap: 20px;
}

/* Table Styling with Animation */
.table-container {
    flex: 0 0 30%;
    padding: 20px;
    border-radius: 8px;
}

table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 10px;
    margin-bottom: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    background-color: #fff;
    border-radius: 30px;
    animation: zoomIn 1s ease-in;
}

table th, table td {
    padding: 10px;
    text-align: left;
}

table th {
    background-color: #f0e68c;
    color: #000080;
}

/* Action Buttons */
.actions img {
    width: 20px;
    height: 20px;
    margin: 0 5px;
    cursor: pointer;
    transition: opacity 0.3s ease;
}

.actions img:hover {
    opacity: 0.8;
}

/* Footer Links */
footer a {
    color: #fff;
    text-decoration: underline;
}

footer a:hover {
    text-decoration: none;
}

/* Chart Container */
.chart-container {
    width: 60%;
    margin: 0 auto;
    padding: 20px;
}
canvas {
    background-color: white;
    padding: 5px;
    border-radius: 10px;
}

.create-new span{
    color: white;
    transition: all 0.3s ease 0s;
    background-color: #24252A;
    border: none;
    padding: 15px;
    border-radius: 50px;
}
.create-new span:hover{
    color: #0088a9;
}
/* Animations */
@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

@keyframes slideIn {
    from {
        transform: translateY(-50px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

@keyframes zoomIn {
    from {
        transform: scale(0.8);
        opacity: 0;
    }
    to {
        transform: scale(1);
        opacity: 1;
    }
}
/* General Mobile Responsiveness */
@media screen and (max-width: 768px) {
    body {
        font-size: 14px;
        padding: 10px;
    }

    h2 {
        font-size: 20px;
    }

    .search-form {
        flex-direction: column;
        align-items: stretch;
        gap: 10px;
    }

    .search-input {
        width: 60%;
        font-size: 14px;
    }

    .search-button {
        width: 40%;
        font-size: 14px;
    }

    .create-new {
        justify-content: center;
    }

    .content-layout {
        flex-direction: column;
        gap: 15px;
    }

    .table-container, .chart-container {
        width: 100%;
        padding: 10px;
    }

    table {
        font-size: 14px;
        display: block;
        overflow-x: auto; /* Enable horizontal scrolling for wide tables */
        white-space: nowrap; /* Prevent wrapping */
    }

    table th, table td {
        padding: 8px;
    }

    .actions img {
        width: 18px;
        height: 18px;
    }
}

/* For Very Small Screens (Phones, max-width: 480px) */
@media screen and (max-width: 480px) {
    body {
        font-size: 12px;
    }

    h2 {
        font-size: 18px;
    }

    .search-input, .search-button {
        font-size: 12px;
    }

    table th, table td {
        padding: 5px;
    }
}


    </style>
    <!-- Include Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <header id="header">
        <?php echo $__env->make('/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </header>

    <main id="main">
        <div class="main_second_div">
            <h2>Maya's Hope Sponsored</h2>

            <form action="/search_chalice" method="get" class="search-form">
                <input type="text" name="search" placeholder="Search..." class="search-input">
                <button type="submit" class="search-button">Search</button>
                <a href="/chalice_edit" class="create-new">
                    <span>CREATE NEW</span>
                </a>
            </form>

            <div class="content-layout">
                <!-- Left Section: Table -->
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th></th>
                                <th>Full Name</th>
                                <th>Age</th>
                                <th>Diagnosis</th>
                                <th>Year Started</th>
                                <th>Status</th>
                                <th class="actions">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $chalice; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><a href="<?php echo e('chalice_view/'.$data['id']); ?>" style="color:black;">View</a></td>
                                <td><?php echo e($data['fname']); ?></td>
                                <td><?php echo e($data['age']); ?></td>
                                <td><?php echo e($data['diagnosis']); ?></td>
                                <td><?php echo e($data['YEARSTARTED']); ?></td>
                                <td><?php echo e($data['status']); ?></td>
                                <td class="actions">
                                    <a href="<?php echo e('chalice_edit_edit/'.$data['id']); ?>">
                                        <img src="/img/edit.png" alt="Edit">
                                    </a>
                                    <a href="<?php echo e('chalice_delete/'.$data['id']); ?>">
                                        <img src="/img/delete.png" alt="Delete">
                                    </a>
                                    <a href="<?php echo e('chalice_print/'.$data['id']); ?>">
                                        <img src="/img/print.png" alt="Print">
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                
                <!-- Right Section: Graph -->
                <div class="chart-container">
                    <canvas id="yearChart"></canvas>
                </div>

            </div>
        </div>
    </main>

    <script>
        // Data for the chart (replace this with dynamic data from your server)
        const yearData = <?php echo json_encode($chalice->pluck('YEARSTARTED')); ?>;  // Assuming the data is passed as an array

        // Count the number of occurrences of each year
        const yearCounts = yearData.reduce((counts, year) => {
            counts[year] = (counts[year] || 0) + 1;
            return counts;
        }, {});

        // Prepare chart data
        const chartLabels = Object.keys(yearCounts);
        const chartData = Object.values(yearCounts);

        // Chart.js setup
        const ctx = document.getElementById('yearChart').getContext('2d');
        const yearChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: chartLabels,
                datasets: [{
                    label: 'Year Started',
                    data: chartData,
                    backgroundColor: '#91AC8F',
                    borderColor: '#66785F',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
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
<?php /**PATH C:\xampp\htdocs\fundation-main\resources\views/chalice.blade.php ENDPATH**/ ?>