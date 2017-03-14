@extends('layout.header')
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
<script type="text/javascript">
	jQuery( document ).ready( function( $ ) {
		var $table4 = jQuery( "#table-4" );

		$table4.DataTable( {
			dom: 'Bfrtip',
			buttons: [
			'copyHtml5',
			'excelHtml5',
			'csvHtml5',
			'pdfHtml5'
			]
		} );
	} );
</script>
<table class="table table-bordered datatable" id="table-4">
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
					<div class="col-md-6">

						<div class="form-group">
							<input type="text" class="form-control" id="field-1" placeholder="Name">
						</div>

					</div>

					<div class="col-md-3">

						<div class="form-group">

							<input type="number" class="form-control" id="field-2" placeholder="Amount">
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<div class="col-sm-5">
								<div id="label-switch" class="make-switch" data-on-label="%" data-off-label="Rp">
									<input type="checkbox" checked>
								</div>
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