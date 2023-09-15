@extends('layouts.index')

<title>@yield('title') Estadistíca</title>

@section('content')

    <div class="container-fluid" style="margin-top: 11%">
        <div class="p-3" style="background:  rgb(255, 253, 253); border-radius: 20px;">
            <div id="container"></div>
        </div>     
    </div>

        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
        <script src="https://code.highcharts.com/modules/accessibility.js"></script>

        <script>
            Highcharts.chart('container', {
                chart: {
                    type: 'column'
                },
                title: {
                    align: 'center',
                    text: 'Estadistíca'
                },
                accessibility: {
                    announceNewData: {
                        enabled: true
                    }
                },
                xAxis: {
                    type: 'category'
                },
                legend: {
                    enabled: false
                },
                plotOptions: {
                    series: {
                        borderWidth: 0,
                        dataLabels: {
                            enabled: true,
                            format: '{point.y:.1f}%'
                        }
                    }
                },
    
                tooltip: {
                    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
                },
    
                series: [
                    {
                        name: 'Estadistica',
                        colorByPoint: true,
                        data: <?= $data ?>
                    }
                ],
            
            });
            
        </script>
    
@endsection

    