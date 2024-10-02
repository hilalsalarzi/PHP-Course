<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pie Chart Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

    <h2>Pie Chart Example</h2>
    
<div>
    <div class="row">
        <div class="col-md-2  offset-4"> 
        <canvas id="myPieChart" width="100" height="100"></canvas>
        </div>
    </div>
</div>
    <script>
        // Get the canvas element
        const ctx = document.getElementById('myPieChart').getContext('2d');

        // Data for the chart
        const data = {
            labels: ['Category A', 'Category B', 'Category C', 'Category D'],
            datasets: [{
                label: 'Categories',
                data: [90, 29, 15, 10],  // Corresponding values
                backgroundColor: [
                    'rgba(255, 99, 0, 0.7)',
                    'rgba(54, 162, 1, 0.7)',
                    'rgba(255, 206, 86, 0.7)',
                    'rgba(75, 192, 192, 0.7)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 1
            }]
        };

        // Create the pie chart
        const myPieChart = new Chart(ctx, {
            type: 'pie',  // Chart type is 'pie'
            data: data,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        enabled: true,
                    }
                }
            }
        });
    </script>

</body>
</html>
