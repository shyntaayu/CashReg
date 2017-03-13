@extends('layout.header')
@section('content')
<script type="text/javascript">
	jQuery(document).ready(function($)
	{
			// Sample Toastr Notification
			setTimeout(function()
			{
				var opts = {
					"closeButton": true,
					"debug": false,
					"positionClass": rtl() || public_vars.$pageContainer.hasClass('right-sidebar') ? "toast-top-left" : "toast-top-right",
					"toastClass": "black",
					"onclick": null,
					"showDuration": "300",
					"hideDuration": "1000",
					"timeOut": "5000",
					"extendedTimeOut": "1000",
					"showEasing": "swing",
					"hideEasing": "linear",
					"showMethod": "fadeIn",
					"hideMethod": "fadeOut"
				};

				toastr.success("You have been awarded with 1 year free subscription. Enjoy it!", "Account Subcription Updated", opts);
			}, 3000);


			
			// Line Charts
			var line_chart_demo = $("#line-chart-demo");

			var line_chart = Morris.Area({
				element: 'line-chart-demo',
				data: [
				{ y: '1', a: getRandomInt(1,100) },
				{ y: '2', a: getRandomInt(1,100) },
				{ y: '3', a: getRandomInt(1,100) },
				{ y: '4', a: getRandomInt(1,100) },
				{ y: '5', a: getRandomInt(1,100) },
				{ y: '6', a: getRandomInt(1,100) },
				{ y: '7', a: getRandomInt(1,100) },
				{ y: '8', a: getRandomInt(1,100) },
				{ y: '9', a: getRandomInt(1,100) },
				{ y: '10', a: getRandomInt(1,100) },
				{ y: '11', a: getRandomInt(1,100) },
				{ y: '12', a: getRandomInt(1,100) },
				{ y: '13', a: getRandomInt(1,100) },
				{ y: '14', a: getRandomInt(1,100) },
				{ y: '15', a: getRandomInt(1,100) },
				{ y: '16', a: getRandomInt(1,100) },
				{ y: '17', a: getRandomInt(1,100) },
				{ y: '18', a: getRandomInt(1,100) },
				{ y: '19', a: getRandomInt(1,100) },
				{ y: '20', a: getRandomInt(1,100) },
				{ y: '21', a: getRandomInt(1,100) },
				{ y: '22', a: getRandomInt(1,100) },
				{ y: '23', a: getRandomInt(1,100) },
				{ y: '24', a: getRandomInt(1,100) }
				],
				xkey: 'y',
				ykeys: ['a'],
				labels: ['Gross'],
				redraw: true
			});

			line_chart_demo.parent().attr('style', '');


			// Area Chart
			var area_chart_demo = $("#area-chart-demo");

			area_chart_demo.parent().show();

			var area_chart = Morris.Bar({
				element: 'area-chart-demo',
				data: [
				{x: 'Sunday', y: getRandomInt(1,10)},
				{x: 'Monday', y: getRandomInt(1,10)},
				{x: 'Tuesday', y: getRandomInt(1,10)},
				{x: 'Wednesday', y: getRandomInt(1,10)},
				{x: 'Thursday', y: getRandomInt(1,10)},
				{x: 'Friday', y: getRandomInt(1,10)},
				{x: 'Saturday', y: getRandomInt(1,10)}
				],
				xkey: 'x',
				ykeys: ['y'],
				labels: ['Gross Sales'],
				barColors: ['#707f9b',]
			});

			area_chart_demo.parent().attr('style', '');

		});


	function getRandomInt(min, max)
	{
		return Math.floor(Math.random() * (max - min + 1)) + min;
	}
</script>

<h2>Sales Sumary</h2>
<hr>
<div class="row">
	<div class="col-sm-3 col-xs-6">

		<div class="tile-stats tile-red">
			<div class="icon"><i class="entypo-users"></i></div>
			<div class="num" data-start="0" data-end="83" data-postfix="" data-duration="1500" data-delay="0">0</div>

			<h3>Gross Sales</h3>
		</div>

	</div>

	<div class="col-sm-3 col-xs-6">

		<div class="tile-stats tile-green">
			<div class="icon"><i class="entypo-chart-bar"></i></div>
			<div class="num" data-start="0" data-end="135" data-postfix="" data-duration="1500" data-delay="600">0</div>

			<h3>Net Sales</h3>
		</div>

	</div>

	<div class="clear visible-xs"></div>

	<div class="col-sm-3 col-xs-6">

		<div class="tile-stats tile-aqua">
			<div class="icon"><i class="entypo-mail"></i></div>
			<div class="num" data-start="0" data-end="23" data-postfix="" data-duration="1500" data-delay="1200">0</div>

			<h3>Number Of Transactions</h3>
		</div>

	</div>

	<div class="col-sm-3 col-xs-6">

		<div class="tile-stats tile-blue">
			<div class="icon"><i class="entypo-rss"></i></div>
			<div class="num" data-start="0" data-end="52" data-postfix="" data-duration="1500" data-delay="1800">0</div>

			<h3>Avg. Sale Per Transaction</h3>
		</div>

	</div>
</div>

<br />
<div class="row">
	<div class="col-sm-4">

		<div class="panel panel-primary" id="charts_env">

			<div class="panel-heading">
				<div class="panel-title"><h4>Day Of The Week Gross Sales Amount</h4></div>

				<!-- <div class="panel-options">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#area-chart" data-toggle="tab"></a></li>
						
					</ul>
				</div> -->
			</div>

			<div class="panel-body">

				<div class="tab-content">

					<div class="tab-pane active" id="area-chart">
						<div id="area-chart-demo" class="morrischart" style="height: 300px"></div>
					</div>

					<div class="tab-pane" id="pie-chart">
						<div id="donut-chart-demo" class="morrischart" style="height: 300px;"></div>
					</div>

				</div>

			</div>
		</div>

	</div>

	<div class="col-sm-8">

		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="panel-title">
					<h4>
						Hourly Gross Sales Amount
					</h4>
				</div>

				<div class="panel-options">
					<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
					<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
					<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
				</div>
			</div>

			<div class="panel-body no-padding">
				<div id="line-chart-demo" class="morrischart" style="height: 300px"></div>
				<div id="rickshaw-chart-demo"  style="display: none;">
					<div id="rickshaw-legend"></div>
				</div>
			</div>
		</div>

	</div>
</div>


<br />
<h2>Item Sumary</h2>
<hr>
<div class="row">

	<div class="col-sm-4">
		
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title">Category By Volume</div>

				<div class="panel-options">
					<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
					<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
					<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
				</div>
			</div>
			<div class="panel-body">
				<center><span class="chart"></span></center>
			</div>
		</div>
		
	</div>

	<div class="col-sm-4">
		
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title">Category By Sales</div>

				<div class="panel-options">
					<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
					<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
					<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
				</div>
			</div>
			<div class="panel-body">
				<center><span class="chart"></span></center>
			</div>
		</div>
		
	</div>

	<div class="col-sm-4">

		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="panel-title">Top Items</div>

				<div class="panel-options">
					<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
					<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
					<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
				</div>
			</div>

			<table class="table table-bordered table-responsive">
				<thead>
					<tr>
						<th>Item</th>
						<th>Volume</th>
						<th>Sales</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td>Botol Tupperware</td>
						<td>1</td>
						<td>Rp 60.000</td>
					</tr>

					<tr>
						<td>Charger Lenovo</td>
						<td>1</td>
						<td>Rp 250.000</td>
					</tr>

					<tr>
						<td>Mouse</td>
						<td>1</td>
						<td>Rp 100.000</td>
					</tr>

				</tbody>
			</table>
		</div>

	</div>

</div>

<br />




<script type="text/javascript">
	jQuery(document).ready(function($)
	{
		$(".chart").sparkline([1,2,3,1], {
			type: 'pie',
			barColor: '#485671',
			height: '110px',
			barWidth: 10,
			barSpacing: 2});

		var map = $("#map-2");

		map.vectorMap({
			map: 'europe_merc_en',
			zoomMin: '3',
			backgroundColor: '#383f47',
			focusOn: { x: 0.5, y: 0.8, scale: 3 }
		});
		$(".bar-large").sparkline([5,6,7,2,1,0,4,3,5,7,2,4], {
			type: 'bar',
			barColor: '#ff6264',
			height: '150px',
			barWidth: 10,
			barSpacing: 2
		});	
	});
</script>
@stop