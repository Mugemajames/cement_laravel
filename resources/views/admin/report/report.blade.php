@extends('admin.admin_dashboard')
@section('admin')
<div class="container">
        <x-filters :showContries='true' />

        <div class="card">
            <div class="card-body">
                {{-- This Canvas is for the Chart --}}
                <canvas id="barChart" width="800" height="400"></canvas>
            </div>
        </div>
    </div>

    <script>
        $(".bar_Menu").addClass('active');
        let chart;

        function getData() {
            $.ajax({
                url: '/bar-chart-data',
                method: 'GET',
                dataType: 'json',
                data: {
                    'country': $("#country").val(),
                    'from': $("#from").val(),
                    'to': $("#to").val(),
                },
                success: function(data) {
                    const country = data.country;
                    const countryData = data.countryData;

                    const ctx = document.getElementById('barChart').getContext('2d');

                    if (chart) {
                        chart.destroy();
                    }

                    chart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ['Confirmed', 'Recovered', 'Deaths'],
                            datasets: [{
                                label: `COVID-19 Statistics for ${country}`,
                                data: [countryData.Confirmed, countryData.Recovered, countryData.Deaths],
                                backgroundColor: ['rgb(255,99,132)', 'rgb(75,192,192)', 'rgb(54,162,235)'],
                                borderWidth: 1,
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });

                },
                error: function(error) {
                    console.log(error);
                }
            })
        }

        $(function() {
            getData();
        });
    </script>
@endsection