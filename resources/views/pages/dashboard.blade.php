<x-layout>
    <div class="container mt-5">
        <div class="d-flex justify-content-around">
            <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-header">
                    <h3>Suppliers</h3>
                </div>
                <div class="card-body d-flex justify-content-center align-items-center">
                    <h1>13</h1>
                </div>
            </div>
            <div class="card text-bg-secondary mb-3" style="max-width: 18rem;">
                <div class="card-header">
                    <h3>Categories</h3>
                </div>
                <div class="card-body d-flex justify-content-center align-items-center">
                    <h1>03</h1>
                </div>
            </div>
            <div class="card text-bg-danger mb-3" style="max-width: 18rem;">
                <div class="card-header">
                    <h3>Products</h3>
                </div>
                <div class="card-body d-flex justify-content-center align-items-center">
                    <h1>02</h1>
                </div>
            </div>
            <div class="card text-bg-success mb-3" style="max-width: 18rem;">
                <div class="card-header">
                    <h3>Customers</h3>
                </div>
                <div class="card-body d-flex justify-content-center align-items-center">
                    <h1>99</h1>
                </div>
            </div>
        </div>
        <canvas id="myChart"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

</x-layout>