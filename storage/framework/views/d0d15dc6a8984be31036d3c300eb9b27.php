<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/img/logo.png" type="image/png">
    <title>Chalice</title>
    <style>
    
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #B2C9AD;
    animation: fadeIn 1s ease-in; /* Fade-in for the body */
}

header, footer {
    color: #fff;
    padding: 10px 20px;
    text-align: center;
    animation: slideDown 1s ease-in; /* Slide-down animation for header and footer */
}

main {
    padding: 20px;
}

h2 {
    color: #000080;
    text-align: center;
    padding: 10px;
}

.search-form {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 20px;
    gap: 10px;
    animation: fadeIn 1.2s ease-in; /* Slight delay for search form fade-in */
}

.search-input {
    padding: 10px;
    font-size: 16px;
    border: 1px solid #66785F;
    border-radius: 4px;
    width: 300px;
    transition: box-shadow 0.3s ease; /* Smooth transition for focus effect */
}

.search-input:focus {
    outline: none;
    box-shadow: 0 0 10px #91AC8F; /* Glowing border on focus */
}

.search-button {
    color: white;
    padding: 9px 25px;
    background-color: rgba(36, 37, 42, 1);
    border: none;
    border-radius: 50px;
    cursor: pointer;
    transition: all 0.3s ease 0s;
}

.search-button:hover {
    background-color: rgba(0,136,169,0.8);
    transform: scale(1.05); /* Slight zoom effect */
}


.content-layout {
    display: flex;
    gap: 20px;
}

.table-container, .chart-container {
    flex: 0 0 45%;
    padding: 20px;
    border-radius: 8px;
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    animation: fadeInUp 1.2s ease; /* Slide up and fade-in */
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
    border-radius: 8px;
}

table th, table td {
    padding: 10px;
    text-align: left;
    border: 1px solid #ddd;
    transition: background-color 0.3s ease; /* Smooth transition for hover */
}

table th {
    background-color: #f0e68c;
    color: #fff;
}

table tr:hover td {
    background-color: #f0f8f0; /* Light green background on hover */
}

.actions img {
    width: 20px;
    height: 20px;
    margin: 0 5px;
    cursor: pointer;
    transition: transform 0.3s ease;
}

.actions img:hover {
    transform: scale(1.2); /* Slight zoom effect on hover */
}
.create-new span{
    margin: 10% 0% 10% 0%;
    color: white;
    transition: all 0.3s ease 0s;
    background-color: #24252A;
    border: none;
    padding: 9px 25px;
    border-radius: 50px;
}
.create-new span:hover{
    color: #0088a9;
}
/* Keyframe Animations */
@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

@keyframes slideDown {
    from {
        transform: translateY(-20px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

@keyframes fadeInUp {
    from {
        transform: translateY(20px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

/* Responsive Styles for Tablets and Phones */
@media screen and (max-width: 768px) {
    body {
        font-size: 14px;
        padding: 10px;
    }

    h2 {
        font-size: 22px;
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

    .content-layout {
        flex-direction: column;
        gap: 20px;
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

/* Extra Small Screens (Phones, max-width: 480px) */
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

    .actions img {
        width: 16px;
        height: 16px;
    }
}


    </style>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <header id="header">
        <?php echo $__env->make('/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </header>

    <main id="main">
        <div class="main_second_div">
            <h2>Chalice</h2>

            <form action="/search" method="get" class="search-form">
                <input type="text" name="search" placeholder="Search..." class="search-input">
                <button type="submit" class="search-button">Search</button>
                <a href="/mayaform" class="create-new">
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
                                <th>Name</th>
                                <th>Grade</th>
                                <th>BIRTHDATE</th>
                                <th>Date Created</th>
                                <th>Score</th>
                                <th>Status</th>
                                <th class="actions">Action</th>
                            </tr>
                        </thead>           
                        <tbody>
                        <?php $__currentLoopData = $mayashope; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><a href=<?php echo e("mayashope_view/".$data['id']); ?> style="color:black;">view</a></td>
                                <td><?php echo e($data['nameofchild']); ?></td>
                                <td><?php echo e($data['Grade']); ?></td>
                                <td><?php echo e($data['dateofbirth']); ?></td>
                                <td><?php echo e($data['created_at']); ?></td> <!-- Displaying date created -->
                                <td><?php echo e($data['evaluation']); ?></td>
                                <td><?php echo e($data['status']); ?></td>
                                <td class="actions">
                                    <a href=<?php echo e("mayashope_edit/".$data['id']); ?>><img src="/img/edit.png" alt="edit"></a>
                                    <a href=<?php echo e("mayashope_delete/".$data['id']); ?>><img src="/img/delete.png" alt="delete"></a>
                                    <a href=<?php echo e("mayaform_print/".$data['id']); ?>><img src="/img/print.png" alt="print"></a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>

                <!-- Right Section: Graph -->
                <div class="chart-container">
                    <canvas id="dateScoreChart"></canvas>
                </div>
            </div>
        </div>
    </main>

    <script>
        const ctx = document.getElementById('dateScoreChart').getContext('2d');

        // Prepare data for the graph
        const labels = [<?php $__currentLoopData = $mayashope; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> '<?php echo e($data['created_at']); ?>', <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>];
        const scores = [<?php $__currentLoopData = $mayashope; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($data['evaluation']); ?>, <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>];

        // Create the graph
        const dateScoreChart = new Chart(ctx, {
            type: 'line', // Line chart to show trends
            data: {
                labels: labels, // Dates
                datasets: [{
                    label: 'Scores by Date Created',
                    data: scores, // Scores corresponding to the dates
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2,
                    tension: 0.3, // Smooth lines
                    fill: true,
                }]
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Date Created'
                        }
                    },
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Score'
                        }
                    }
                }
            }
        });
    </script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\fundation-main\resources\views/mayashope.blade.php ENDPATH**/ ?>