@extends('layout.datatable')
@section('title')
Feedback
@stop
@section('breadcrumb')
<li>
	<a href="customerlist">Customers</a>
</li>
<li class="active">
	<strong>Feedback</strong>
</li>
@stop
@section('content')
<div class="row">
	<div class="col-md-12">
		<div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
			<i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
			<span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
		</div>
	</div>
</div>
<br>
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Feedback</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a href="#"><i class="fa fa-chevron-up"></i></a>
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
					<li><a href="#"><i class="fa fa-close"></i></a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Date</th>
							<th>Name</th>
							<th>Comment</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Arlind</td>
							<td>Nushi</td>
						</tr>

						<tr>
							<td>2</td>
							<td>Art</td>
							<td>Ramadani</td>
						</tr>

						<tr>
							<td>3</td>
							<td>Filan</td>
							<td>Fisteku</td>
						</tr>
					</tbody>
				</table>

			</div>
		</div>
	</div>
</div>

@stop
@section('js')
<script type="text/javascript">
	$(document).ready(function() {
		$('#datatable-responsive').DataTable();
	});
</script>
@stop