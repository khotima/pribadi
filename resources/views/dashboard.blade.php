<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    @include('inc.link')
    @include('inc.header')
</head>
<body>
    
</body>
</html>
Selamat Datang {{Auth::user()->name}}
    <tr>
<div class="panel">
    <div id="chartPenduduk"></div>

</div>



<a href="{{route('logout')}}">logout</a> 
<script src="https://code.highcharts.com/highcharts.js"></script>   
<script>
Highcharts.chart('chartPenduduk', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'GRAFIK DATA PENDUDUK'
    },
    subtitle: {
        text: 'Di Sebuah Kota'
    },
    xAxis: {
        categories: {!!json_encode('categories')!!},
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'JK'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Laki-laki',
        data: ['jk'->value=""]

    }, {
        name: 'Perempuan',
        data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]
    }]
});</script>