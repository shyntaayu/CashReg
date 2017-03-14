@extends('layout.header')
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
<h3>Feedback</h3>
<br />
<div class="row">
	<div class="col-sm-5">

		<div class="daterange daterange-inline" data-format="MMMM D, YYYY" data-start-date="October 21, 2015" data-end-date="November 4, 2015">
			<i class="entypo-calendar"></i>
			<span>October 21, 2015 - November 4, 2015</span>
		</div>

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

@stop