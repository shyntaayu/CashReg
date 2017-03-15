@extends('layout.header')
@section('title')
Dashboard
@stop
@section('content')
<div class="row">
	<div class="col-md-8">
		<div class="form-group pull-right">
			<select class="form-control">
				<option>Outlet</option>
				<option>Outlet 2</option>
				<option>Outlet 3</option>
				<option>Outlet 4</option>
				<option>Outlet 5</option>
			</select>
		</div>
	</div>
	<div class="col-md-4">
		<div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
			<i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
			<span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
		</div>
	</div>
</div>
<!-- top tiles -->
<div class="row tile_count">
	<div class="animated flipInY col-md-3 col-sm-4 col-xs-4 tile_stats_count">
		<div class="left"></div>
		<div class="right">
			<span class="count_top"><i class="fa fa-user"></i> Gross Sales (Rp)</span>
			<div class="count">1.814.930</div>
			<span class="count_bottom"><i class="green">4% </i> From last Week</span>
		</div>
	</div>
	<div class="animated flipInY col-md-3 col-sm-4 col-xs-4 tile_stats_count">
		<div class="left"></div>
		<div class="right">
			<span class="count_top"><i class="fa fa-clock-o"></i> Net Sales (Rp)</span>
			<div class="count">1.814.930</div>
			<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
		</div>
	</div>
	<div class="animated flipInY col-md-3 col-sm-4 col-xs-4 tile_stats_count">
		<div class="left"></div>
		<div class="right">
			<span class="count_top"><i class="fa fa-user"></i> Number of Transaction</span>
			<div class="count green">9</div>
			<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
		</div>
	</div>
	<div class="animated flipInY col-md-3 col-sm-4 col-xs-4 tile_stats_count">
		<div class="left"></div>
		<div class="right">
			<span class="count_top"><i class="fa fa-user"></i> Avg. Sale per Transaction (Rp)</span>
			<div class="count">201.657</div>
			<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
		</div>
	</div>
</div>
<!-- /top tiles -->
<div class="page-title">
	<div class="title_left">
		<h3>Sales Summary </h3>
	</div>
</div>
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="dashboard_graph">

			<div class="row x_title">
				<div class="col-md-6">
					<h3>Weekly <small>Gross Sales Amount</small></h3>
				</div>
			</div>

			<div class="col-md-12 col-sm-9 col-xs-12">
				<div id="placeholder33" style="height: 260px; display: none" class="demo-placeholder"></div>
				<div style="width: 100%;">
					<div id="canvas_dahs" class="demo-placeholder" style="width: 100%; height:270px;"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

</div>
<br />
<div class="row">
	<div class="col-md-4 col-sm-12 col-xs-12">
		<div class="dashboard_graph">

			<div class="row x_title">
				<div class="col-md-6">
					<h2>Daily <small>Gross Sales Amount</small></h2></h3>
				</div>
			</div>

			<div class="col-md-12 col-sm-9 col-xs-12">
				<div style="width: 100%;">
					<canvas id="mybarChart" class="demo-placeholder"></canvas>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="col-md-8 col-sm-12 col-xs-12">
		<div class="dashboard_graph">

			<div class="row x_title">
				<div class="col-md-6">
					<h3>Hourly <small>Gross Sales Amount</small></h3>
				</div>
			</div>

			<div class="col-md-12 col-sm-9 col-xs-12">
				<div style="width: 100%;">
					<canvas id="lineChart" class="demo-placeholder"></canvas>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<br>
<div class="page-title">
	<div class="title_left">
		<h3>Sales Summary </h3>
	</div>
</div>
<div class="row">
	<div class="col-md-4 col-sm-4 col-xs-12">
		<div class="x_panel tile fixed_height_320">
			<div class="x_title">
				<h2>Category By Volume</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Settings 1</a>
							</li>
							<li><a href="#">Settings 2</a>
							</li>
						</ul>
					</li>
					<li><a class="close-link"><i class="fa fa-close"></i></a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				
				<table class="" style="width:100%">
					<tr>
						<th style="width:37%;">
							<p>Top 5</p>
						</th>
						<th>
							<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
								<p class="">Device</p>
							</div>
							<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
								<p class="">Progress</p>
							</div>
						</th>
					</tr>
					<tr>
						<td>
							<canvas id="canvas1" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
						</td>
						<td>
							<table class="tile_info">
								<tr>
									<td>
										<p><i class="fa fa-square blue"></i>IOS </p>
									</td>
									<td>30%</td>
								</tr>
								<tr>
									<td>
										<p><i class="fa fa-square green"></i>Android </p>
									</td>
									<td>10%</td>
								</tr>
								<tr>
									<td>
										<p><i class="fa fa-square purple"></i>Blackberry </p>
									</td>
									<td>20%</td>
								</tr>
								<tr>
									<td>
										<p><i class="fa fa-square aero"></i>Symbian </p>
									</td>
									<td>15%</td>
								</tr>
								<tr>
									<td>
										<p><i class="fa fa-square red"></i>Others </p>
									</td>
									<td>30%</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>

			</div>
		</div>
	</div>

	<div class="col-md-4 col-sm-4 col-xs-12">
		<div class="x_panel tile fixed_height_320 overflow_hidden">
			<div class="x_title">
				<h2>Category By Sales</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Settings 1</a>
							</li>
							<li><a href="#">Settings 2</a>
							</li>
						</ul>
					</li>
					<li><a class="close-link"><i class="fa fa-close"></i></a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">

				<table class="" style="width:100%">
					<tr>
						<th style="width:37%;">
							<p>Top 5</p>
						</th>
						<th>
							<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
								<p class="">Device</p>
							</div>
							<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
								<p class="">Progress</p>
							</div>
						</th>
					</tr>
					<tr>
						<td>
							<canvas id="canvasDoughnut" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
						</td>
						<td>
							<table class="tile_info">
								<tr>
									<td>
										<p><i class="fa fa-square blue"></i>IOS </p>
									</td>
									<td>30%</td>
								</tr>
								<tr>
									<td>
										<p><i class="fa fa-square green"></i>Android </p>
									</td>
									<td>10%</td>
								</tr>
								<tr>
									<td>
										<p><i class="fa fa-square purple"></i>Blackberry </p>
									</td>
									<td>20%</td>
								</tr>
								<tr>
									<td>
										<p><i class="fa fa-square aero"></i>Symbian </p>
									</td>
									<td>15%</td>
								</tr>
								<tr>
									<td>
										<p><i class="fa fa-square red"></i>Others </p>
									</td>
									<td>30%</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>


	<div class="col-md-4 col-sm-4 col-xs-12">
		<div class="x_panel tile fixed_height_320">
			<div class="x_title">
				<h2>Top Item</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Settings 1</a>
							</li>
							<li><a href="#">Settings 2</a>
							</li>
						</ul>
					</li>
					<li><a class="close-link"><i class="fa fa-close"></i></a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<table class="table">
					<thead>
						<tr>
							<th>Item</th>
							<th>Volume</th>
							<th>Sales</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Bottle</td>
							<td>5</td>
							<td>Rp 250.000</td>
						</tr>
						<tr>
							<td>Headset</td>
							<td>6</td>
							<td>Rp 300.000</td>
						</tr>
						<tr>
							<td>Stopkontak</td>
							<td>3</td>
							<td>Rp 75.000</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>


<div class="row">
	<div class="col-md-4 col-sm-4 col-xs-12">
		<div class="x_panel tile">
			<div class="x_title">
				<h2>Top Items By Category</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Settings 1</a>
							</li>
							<li><a href="#">Settings 2</a>
							</li>
						</ul>
					</li>
					<li><a class="close-link"><i class="fa fa-close"></i></a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<canvas id="mybarCharttop" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
			</div>
		</div>
	</div>

</div>
@stop
@section('js')
<script type="text/javascript">
										// Bar chart
										var ctx = document.getElementById("mybarChart");
										var mybarChart = new Chart(ctx, {
											type: 'bar',
											data: {
												labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
												datasets: [{
													label: '# of Votes',
													backgroundColor: "#26B99A",
													data: [51, 30, 40, 28, 92, 50, 45]
												}]
											},

											options: {
												scales: {
													yAxes: [{
														ticks: {
															beginAtZero: true
														}
													}]
												}
											}
										});

										var mybarCharttop = new Chart(document.getElementById("mybarCharttop"), {
											type: 'bar',
											data: {
												labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
												datasets: [{
													label: '# of Votes',
													backgroundColor: "#26B99A",
													data: [51, 30, 40, 28, 92, 50, 45]
												}]
											},

											options: {
												scales: {
													yAxes: [{
														ticks: {
															beginAtZero: true
														}
													}]
												}
											}
										});

										// Line chart
										var ctx = document.getElementById("lineChart");
										var lineChart = new Chart(ctx, {
											type: 'line',
											data: {
												labels: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24"],
												datasets: [{
													label: "My First dataset",
													backgroundColor: "rgba(38, 185, 154, 0.31)",
													borderColor: "rgba(38, 185, 154, 0.7)",
													pointBorderColor: "rgba(38, 185, 154, 0.7)",
													pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
													pointHoverBackgroundColor: "#fff",
													pointHoverBorderColor: "rgba(220,220,220,1)",
													pointBorderWidth: 1,
													data: [
													Math.floor(Math.random() * 80) + 1 , 
													Math.floor(Math.random() * 80) + 1 , 
													Math.floor(Math.random() * 80) + 1 , 
													Math.floor(Math.random() * 80) + 1 , 
													Math.floor(Math.random() * 80) + 1 , 
													Math.floor(Math.random() * 80) + 1 , 
													Math.floor(Math.random() * 80) + 1 , 
													Math.floor(Math.random() * 80) + 1 , 
													Math.floor(Math.random() * 100) + 1 , 
													Math.floor(Math.random() * 80) + 1 , 
													Math.floor(Math.random() * 80) + 1 , 
													Math.floor(Math.random() * 80) + 1 , 
													Math.floor(Math.random() * 80) + 1 , 
													Math.floor(Math.random() * 80) + 1 , 
													Math.floor(Math.random() * 80) + 1 ,
													Math.floor(Math.random() * 100) + 1 ,
													Math.floor(Math.random() * 80) + 1 ,
													Math.floor(Math.random() * 80) + 1 ,
													Math.floor(Math.random() * 80) + 1 ,
													Math.floor(Math.random() * 80) + 1 ,
													Math.floor(Math.random() * 80) + 1 ,
													Math.floor(Math.random() * 80) + 1 ,
													Math.floor(Math.random() * 80) + 1 ,
													Math.floor(Math.random() * 80) + 1 ]
												}, {
													label: "My Second dataset",
													backgroundColor: "rgba(3, 88, 106, 0.3)",
													borderColor: "rgba(3, 88, 106, 0.70)",
													pointBorderColor: "rgba(3, 88, 106, 0.70)",
													pointBackgroundColor: "rgba(3, 88, 106, 0.70)",
													pointHoverBackgroundColor: "#fff",
													pointHoverBorderColor: "rgba(151,187,205,1)",
													pointBorderWidth: 1,
													data: [
													Math.floor(Math.random() * 80) + 1 , 
													Math.floor(Math.random() * 80) + 1 , 
													Math.floor(Math.random() * 80) + 1 , 
													Math.floor(Math.random() * 80) + 1 , 
													Math.floor(Math.random() * 80) + 1 , 
													Math.floor(Math.random() * 80) + 1 , 
													Math.floor(Math.random() * 100) + 1 , 
													Math.floor(Math.random() * 80) + 1 , 
													Math.floor(Math.random() * 80) + 1 , 
													Math.floor(Math.random() * 80) + 1 , 
													Math.floor(Math.random() * 80) + 1 , 
													Math.floor(Math.random() * 80) + 1 , 
													Math.floor(Math.random() * 80) + 1 , 
													Math.floor(Math.random() * 100) + 1 , 
													Math.floor(Math.random() * 80) + 1 ,
													Math.floor(Math.random() * 80) + 1 ,
													Math.floor(Math.random() * 80) + 1 ,
													Math.floor(Math.random() * 80) + 1 ,
													Math.floor(Math.random() * 80) + 1 ,
													Math.floor(Math.random() * 80) + 1 ,
													Math.floor(Math.random() * 80) + 1 ,
													Math.floor(Math.random() * 80) + 1 ,
													Math.floor(Math.random() * 80) + 1 ,
													Math.floor(Math.random() * 80) + 1
													]
												}]
											},
										});
										var data = {
											labels: [
											"Symbian",
											"Blackberry",
											"Other",
											"Android",
											"IOS"
											],
											datasets: [{
												data: [15, 20, 30, 10, 30],
												backgroundColor: [
												"#BDC3C7",
												"#9B59B6",
												"#455C73",
												"#26B99A",
												"#3498DB"
												],
												hoverBackgroundColor: [
												"#CFD4D8",
												"#B370CF",
												"#34495E",
												"#36CAAB",
												"#49A9EA"
												]

											}]
										};
										var canvasDoughnut = new Chart(document.getElementById("canvas1"), {
											type: 'doughnut',
											tooltipFillColor: "rgba(51, 51, 51, 0.55)",
											data: data
										});
										// Doughnut chart
										var ctx = document.getElementById("canvasDoughnut");
										var data = {
											labels: [
											"Dark Grey",
											"Purple Color",
											"Gray Color",
											"Green Color",
											"Blue Color"
											],
											datasets: [{
												data: [120, 50, 140, 180, 100],
												backgroundColor: [
												"#455C73",
												"#9B59B6",
												"#BDC3C7",
												"#26B99A",
												"#3498DB"
												],
												hoverBackgroundColor: [
												"#34495E",
												"#B370CF",
												"#CFD4D8",
												"#36CAAB",
												"#49A9EA"
												]

											}]
										};

										var canvasDoughnut = new Chart(ctx, {
											type: 'doughnut',
											tooltipFillColor: "rgba(51, 51, 51, 0.55)",
											data: data
										});
									</script>
									@stop