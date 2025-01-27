@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="mb-4">Dashboard</h1>
    <div class="row">
        <div class="col-md-12">
            <h3>Statistik Adopsi</h3>
            <canvas id="adopsiChart"></canvas>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('adopsiChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: {!! json_encode($labels) !!},
            datasets: [{
                label: 'Jumlah Adopsi',
                data: {!! json_encode($data) !!},
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