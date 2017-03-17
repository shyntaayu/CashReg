@extends('layout.datatable')
@section('title')
Discounts
@stop
@section('breadcrumb')
<li>
	<a href="library">Library</a>
</li>
<li class="active">
	<strong>Discounts</strong>
</li>
@stop
@section('content')
<div class="row">
	<div class="col-md-3">
		<div class="form-group">
			<select class="form-control">
				<option>Outlet 1</option>
				<option>Outlet 2</option>
				<option>Outlet 3</option>
				<option>Outlet 4</option>
				<option>Outlet 5</option>
			</select>
		</div>
	</div>
	<div class="col-md-9">
		<a href="javascript:;" onclick="jQuery('#modal-6').modal('show', {backdrop: 'static'});" class="col-md-3 btn btn-primary pull-right">Create Discount</a>
	</div>
</div>
<br>


<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Discount</h2>
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
							<th>Discount Name</th>
							<th>Amount</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Big</td>
							<td>50%</td>
						</tr>
						<tr>
							<td>Jumbo</td>
							<td>60%</td>
						</tr>
						<tr>
							<td>Little</td>
							<td>20%</td>
						</tr>
					</tbody>
				</table>

			</div>
		</div>
	</div>
</div>

@stop
@section('modal')
<!-- Modal 6 (Long Modal)-->
<div class="modal fade" id="modal-6">
	<div class="modal-dialog">
		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Discount Information</h4>
			</div>

			<div class="modal-body">
				
				<div class="row">
					<div class="col-md-4">

						<div class="form-group">
							<input type="text" class="form-control" id="field-1" placeholder="Name">
						</div>	

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<input type="number" class="form-control" id="field-2" placeholder="Amount">
						</div>	
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<div class="radio">
								<label>
									<input type="radio" class="flat"> Rp
								</label>
								<label>
									<input type="radio" class="flat"> %
								</label>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-info">Save To All Outlets</button>
				<button type="button" class="btn btn-info">Save</button>
			</div>
		</div>
	</div>
</div>
@stop
@section('js')
<script src="{{asset("assets/js/icheck/icheck.min.js")}}"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#datatable-responsive').DataTable();
	});
</script>
@stop