<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Dashboard</title>
    <style>
        body {
            padding-top: 56px;
        }

        .chart-container {
            max-width: 600px;
            margin: 20px auto;
        }

    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Settings</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="chart-container">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
            <div class="col-lg-6">
                <h2>Recent Data</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tincidunt euismod diam, id cursus justo pharetra in.</p>
            </div>
        </div>
    </div>

    <!-- JavaScript for Chart.js -->
    <script>
        // Sample data for the chart
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar'
            , data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange']
                , datasets: [{
                    label: '# of Votes'
                    , data: [12, 19, 3, 5, 2, 3]
                    , backgroundColor: [
                        'rgba(255, 99, 132, 0.2)'
                        , 'rgba(54, 162, 235, 0.2)'
                        , 'rgba(255, 206, 86, 0.2)'
                        , 'rgba(75, 192, 192, 0.2)'
                        , 'rgba(153, 102, 255, 0.2)'
                        , 'rgba(255, 159, 64, 0.2)'
                    ]
                    , borderColor: [
                        'rgba(255, 99, 132, 1)'
                        , 'rgba(54, 162, 235, 1)'
                        , 'rgba(255, 206, 86, 1)'
                        , 'rgba(75, 192, 192, 1)'
                        , 'rgba(153, 102, 255, 1)'
                        , 'rgba(255, 159, 64, 1)'
                    ]
                    , borderWidth: 1
                }]
            }
            , options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

    </script>

    <!-- Bootstrap JS and Popper.js (required for Bootstrap components) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
