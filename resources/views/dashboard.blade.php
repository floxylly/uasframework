@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dashboard</h1>
    <h2>Statistik Hewan</h2>
    <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: {!! json_encode(array_keys($statistik)) !!},
            datasets: [{
                label: 'Jumlah Hewan',
                data: {!! json_encode(array_values($statistik)) !!},
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
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
@endsection