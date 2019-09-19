@extends('master')


@section('header')
	<link rel="stylesheet" type="text/css" href="{{ url('assets/plugins/highcart/code/css/highcharts.css') }}">
    <script src="{{url('https://code.highcharts.com/highcharts.js')}}"></script>
@stop
@section('content')
	
	<section class="content-header">
		<h1>
	    	Grafik Data Penduduk
	    	
	  	</h1>
	</section>

	<section class="content">

		<div class="row">


			
			

			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-body">
						<div id="jml_warga"></div>
					</div>
				</div>
			</div>

			


		</div>

	</section>

@stop

@section('footer')
	
	<script type="text/javascript" src="{{ url('assets/plugins/highcart/code/highcharts.js') }}"></script>
	<script type="text/javascript">
		$(function(){

			


			Highcharts.chart('jml_warga', {
			    chart: {
			        type: 'column'
			    },
			    title: {
			        text: 'Perbandingan Berdasarkan Jenis Kelamin'
			    },
			    subtitle: {
			        text: 'Per Tahun'
			    },
			    xAxis: {
			        categories: {!! json_encode($jml_warga['category']) !!},
			        crosshair: true
			    },
			    yAxis: {
			        min: 0,
			        title: {
			            text: 'Jumlah'
			        }
			    },
			    tooltip: {
			        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
			        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
			            '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
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
			    series: {!! json_encode($jml_warga['series']) !!}
			});


			
		})
	</script>
@stop