@extends('layout.datatable')
@section('title')
Adjustment
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
	<div class="col-md-2">
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
	<div class="col-md-2">
		<a href="javascript:;" onclick="jQuery('#modal-6').modal('show', {backdrop: 'static'});" class="btn btn-primary pull-left">Create Adjustment</a>
	</div>
	<div class="col-md-8">
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
				<h2>Adjustment</h2>
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
							<th>Outlet</th>
							<th>Note</th>
							<th>Items</th>
							<th>Adjustment</th>
						</tr>
					</thead>
					<tbody>
						<!-- <tr>
							<td colspan="5">Wed Mar 15 2017</td>
						</tr> -->
						<tr>
							<td>14:02</td>
							<td>Outlet 2</td>
							<td>Kurang jumlah</td>
							<td>Tela-tela</td>
							<td>-20</td>
						</tr>

						<tr>
							<td>14:02</td>
							<td>Outlet 3</td>
							<td>Kurang jumlah</td>
							<td>Wortel manis</td>
							<td>-5</td>
						</tr>

						<tr>
							<td>14:02</td>
							<td>Outlet 2</td>
							<td>Kurang jumlah</td>
							<td>Tela-tela</td>
							<td>-20</td>
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
@section('modal')
<!-- Modal 6 (Long Modal)-->
<div class="modal fade" id="modal-6">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="col-md-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Form Design <small>different form elements</small></h2>
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
							<li>
								<a class="close-link" data-dismiss="modal"><i class="fa fa-close"></i></a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<br />
						<form class="form-horizontal form-label-left input_mask">

							<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
								<input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="First Name">
								<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
							</div>

							<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
								<input type="text" class="form-control" id="inputSuccess3" placeholder="Last Name">
								<span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
							</div>

							<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
								<input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Email">
								<span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
							</div>

							<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
								<input type="text" class="form-control" id="inputSuccess5" placeholder="Phone">
								<span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Default Input</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" placeholder="Default Input">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Disabled Input </label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" disabled="disabled" placeholder="Disabled Input">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Read-Only Input</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" readonly="readonly" placeholder="Read-Only Input">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
								</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
								</div>
							</div>
							<div class="ln_solid"></div>
							<div class="form-group">
								<div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
									<button type="submit" class="btn btn-primary" data-dismiss="modal">Cancel</button>
									<button type="submit" class="btn btn-success">Submit</button>
								</div>
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop