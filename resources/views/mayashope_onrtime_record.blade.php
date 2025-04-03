<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maya's Hope Sponsored</title>
    <link rel="icon" href="/img/logo.png" type="image/png">
    <style>
    /* General Styling */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    animation: fadeIn 1.5s ease-in;
}

/* Main Section */
main {
    padding: 20px;
}

/* Heading with Slide-In Animation */
h2 {
    color: #000080;
    padding: 10px;
    text-align: center;
    animation: slideIn 1s ease-out;
}

/* Search Form */
.search-form {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 20px;
    gap: 10px;
}

/* Search Input */
.search-input {
    padding: 10px;
    font-size: 16px;
    border: 1px solid #66785F;
    border-radius: 4px;
    width: 300px;
    transition: box-shadow 0.3s ease;
}

.search-input:focus {
    box-shadow: 0 0 8px rgba(102, 120, 95, 0.7);
    outline: none;
}

/* Search Button with Hover Animation */
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
    background-color: #f0e68c;
    transform: scale(1.05);
}

/* Link with Hover Effect */
.create-new {
    display: flex;
    align-items: center;
    text-decoration: none;
    color: #f0e68c;
    gap: 5px;
    font-size: 16px;
    transition: color 0.3s ease;
}

.create-new:hover {
    color: #f0e68c;
}

.create-new img {
    width: 24px;
    height: 24px;
    transition: transform 0.3s ease;
}

.create-new:hover img {
    transform: rotate(10deg);
}

/* Content Layout */
.content-layout {
    display: flex;
    gap: 20px;
}

/* Table with Zoom-In Animation */
.table-container {
    flex: 0 0 30%;
    padding: 20px;
    border-radius: 8px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    background-color: #fff;
    border-radius: 25px;
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

/* Actions with Hover Animation */
.actions img {
    width: 20px;
    height: 20px;
    margin: 0 5px;
    cursor: pointer;
    transition: opacity 0.3s ease, transform 0.3s ease;
}

.actions img:hover {
    opacity: 0.8;
    transform: scale(1.1);
}

/* Chart Container */
.chart-container {
    width: 80%;
    margin: 20px auto;
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    animation: fadeInUp 1.5s ease-out;
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

/* Responsive Styles */
@media screen and (max-width: 768px) {
    body {
        font-size: 14px;
        padding: 10px;
    }

    h2 {
        font-size: 20px;
        margin-bottom: 10px;
    }

    .search-form {
        flex-direction: column;
        align-items: stretch;
        gap: 10px;
    }

    .search-input, .search-button {
        width: 60%;
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
        overflow-x: auto; /* Enable horizontal scrolling for tables */
        white-space: nowrap; /* Prevent text wrapping */
    }

    table th, table td {
        padding: 8px;
    }

    .actions img {
        width: 18px;
        height: 18px;
    }
}

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
</head>
<body>
    <header id="header">
        @include('/header')
    </header>

    <main id="main">
        <div class="main_second_div">
            <h2>Mayashope Onetime</h2>

            <form action="/search_mayaonetime" method="get" class="search-form">
                <input type="text" name="search" placeholder="Search..." class="search-input">
                <button type="submit" class="search-button">Search</button>
                <a href="/mayashope_onetime" class="create-new">
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
                                <th>guardian</th>
                                <th>Contact details</th>
                                <th>Name of child</th>
                                <th>No of surgery done</th>
                                <th>date of surgery</th>
                                <th class="actions">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mayashope_onrtime_record as $data)
                            <tr>
                                <td><a href={{"mayashope_onrtime_record_view/".$data['id']}} style="color:black;">view</a></td>
                                <td>{{$data['guardian']}}</td>
                                <td>{{$data['contact_details']}}</td>
                                <td>{{$data['child_name']}}</td>
                                <td>{{$data['no_of_surgery_done']}}</td>
                                <td>{{$data['date_of_surgery']}}</td>
                                <td class="actions">
                                    <a href={{"mayashope_onrtime_record_edit/".$data['id']}}><img src="/img/edit.png" alt="edit"></a>
                                    <a href={{"mayashope_onrtime_record_delete/".$data['id']}}><img src="/img/delete.png" alt="delete"></a>
                                    <a href={{"mayashope_onrtime_record_print/".$data['id']}}><img src="/img/print.png" alt="print"></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Right Section: Chart -->
                <div class="chart-container">
                    <canvas id="childChart"></canvas>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Extract data from Laravel
            const childNames = @json($mayashope_onrtime_record->pluck('child_name'));
            const creationDates = @json($mayashope_onrtime_record->pluck('date_created'));

            // Group data by dates for meaningful visualization
            const dataGroupedByDate = creationDates.reduce((acc, date) => {
                acc[date] = (acc[date] || 0) + 1; // Count occurrences per date
                return acc;
            }, {});

            // Prepare labels and data for the graph
            const labels = Object.keys(dataGroupedByDate);
            const dataValues = Object.values(dataGroupedByDate);

            // Chart.js setup
            const ctx = document.getElementById('childChart').getContext('2d');
            const childChart = new Chart(ctx, {
                type: 'bar', 
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Number of Children Sponsored',
                        data: dataValues,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
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
                            title: {
                                display: true,
                                text: 'Number of Children'
                            },
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>
</body>
</html>
