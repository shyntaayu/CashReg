@extends('layout.datatable')
@section('title')
Summary
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
	<div class="col-md-8">
		<div class="form-group pull-left">
			<select class="form-control">
				<option>Outlet 1</option>
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
<br>
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Summary</h2>
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
							<th>Name - Variant</th>
							<th>Category</th>
							<th>Outlet</th>
							<th>Beginning</th>
							<th>Purchase Order</th>
							<th>Sales</th>
							<th>Transfer</th>
							<th>Adjusment</th>
							<th>Ending</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Tela-tela</td>
							<td>Uncategorized</td>
							<td>Outlet 1</td>
							<td>50</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>50</td>
						</tr>

						<tr>
							<td>Wortel Manis</td>
							<td>Uncategorized</td>
							<td>Outlet 1</td>
							<td>50</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>50</td>
						</tr>

						<tr>
							<td>Pindang sambal</td>
							<td>Uncategorized</td>
							<td>Outlet 1</td>
							<td>50</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>50</td>
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
		$('#datatable-responsive').DataTable( {
			dom: 'Bfrtip',
			buttons: [{
				extend: "copy",
				className: "btn-sm"
			}, {
				extend: "csv",
				className: "btn-sm"
			}, {
				extend: "excel",
				className: "btn-sm"
			}, {
				extend: "pdf",
				className: "btn-sm"
			}, {
				extend: "print",
				className: "btn-sm"
			}]
		} );
	} );
</script>
@stop