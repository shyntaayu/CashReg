@extends('layout.header')
@section('title')
Products
@stop
@section('breadcrumb')
<li>
	<a href="library">Library</a>
</li>
<li class="active">
	<strong>Products</strong>
</li>
@stop
@section('content')
<div class="row">
	<div class="col-md-2">
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
	<div class="col-md-2">
		<div class="btn-group">
			<button type="button" class="btn btn-default">All Categories</button>
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
				<i class="fa fa-sort" aria-hidden="true"></i>
			</button>

			<ul class="dropdown-menu" role="menu">
				<li><a href="#">All Categories</a>
				</li>
				<li><a href="#">Sayur</a>
				</li>
				<li><a href="#">Buah</a>
				</li>
				<li><a href="#">Uncategorized</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="col-md-2 pull-left">
		<div class="btn-group">
			<button type="button" class="btn btn-default">All Inventory</button>
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
				<i class="fa fa-sort" aria-hidden="true"></i>
			</button>

			<ul class="dropdown-menu" role="menu">
				<li><a href="#">All Inventory</a>
				</li>
				<li><a href="#">Low Stock Alert</a>
				</li>
				<li><a href="#">Out Of Stock Alert</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="col-md-2">
		<button type="button" class="btn btn-white pull-left">Total : 39</button>
	</div>
	<div class="col-md-4">
		<a href="javascript:;" onclick="jQuery('#modal-6').modal('show', {backdrop: 'static'});" class="btn btn-primary pull-right">Create Product</a>
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
			<th>Name</th>
			<th>Category</th>
			<th>Price</th>
			<th>In Stock</th>
			<th>Stock Alert</th>
		</tr>
	</thead>
	<tbody>
		<tr class="odd gradeX">
			<td>Trident</td>
			<td>Internet Explorer 4.0</td>
			<td>Win 95+</td>
			<td class="center">4</td>
			<td class="center">X</td>
		</tr>
		<tr class="even gradeC">
			<td>Trident</td>
			<td>Internet Explorer 5.0</td>
			<td>Win 95+</td>
			<td class="center">5</td>
			<td class="center">C</td>
		</tr>
		<tr class="odd gradeA">
			<td>Trident</td>
			<td>Internet Explorer 5.5</td>
			<td>Win 95+</td>
			<td class="center">5.5</td>
			<td class="center">A</td>
		</tr>
		<tr class="even gradeA">
			<td>Trident</td>
			<td>Internet Explorer 6</td>
			<td>Win 98+</td>
			<td class="center">6</td>
			<td class="center">A</td>
		</tr>
		<tr class="odd gradeA">
			<td>Trident</td>
			<td>Internet Explorer 7</td>
			<td>Win XP SP2+</td>
			<td class="center">7</td>
			<td class="center">A</td>
		</tr>
		<tr class="even gradeA">
			<td>Trident</td>
			<td>AOL browser (AOL desktop)</td>
			<td>Win XP</td>
			<td class="center">6</td>
			<td class="center">A</td>
		</tr>
		<tr class="gradeA">
			<td>Gecko</td>
			<td>Firefox 1.0</td>
			<td>Win 98+ / OSX.2+</td>
			<td class="center">1.7</td>
			<td class="center">A</td>
		</tr>
		<tr class="gradeA">
			<td>Gecko</td>
			<td>Firefox 1.5</td>
			<td>Win 98+ / OSX.2+</td>
			<td class="center">1.8</td>
			<td class="center">A</td>
		</tr>
		<tr class="gradeA">
			<td>Gecko</td>
			<td>Firefox 2.0</td>
			<td>Win 98+ / OSX.2+</td>
			<td class="center">1.8</td>
			<td class="center">A</td>
		</tr>
		<tr class="gradeA">
			<td>Gecko</td>
			<td>Firefox 3.0</td>
			<td>Win 2k+ / OSX.3+</td>
			<td class="center">1.9</td>
			<td class="center">A</td>
		</tr>
		<tr class="gradeA">
			<td>Gecko</td>
			<td>Camino 1.0</td>
			<td>OSX.2+</td>
			<td class="center">1.8</td>
			<td class="center">A</td>
		</tr>
		<tr class="gradeA">
			<td>Gecko</td>
			<td>Camino 1.5</td>
			<td>OSX.3+</td>
			<td class="center">1.8</td>
			<td class="center">A</td>
		</tr>
		<tr class="gradeA">
			<td>Gecko</td>
			<td>Netscape 7.2</td>
			<td>Win 95+ / Mac OS 8.6-9.2</td>
			<td class="center">1.7</td>
			<td class="center">A</td>
		</tr>
		<tr class="gradeA">
			<td>Gecko</td>
			<td>Netscape Browser 8</td>
			<td>Win 98SE+</td>
			<td class="center">1.7</td>
			<td class="center">A</td>
		</tr>
		<tr class="gradeA">
			<td>Gecko</td>
			<td>Netscape Navigator 9</td>
			<td>Win 98+ / OSX.2+</td>
			<td class="center">1.8</td>
			<td class="center">A</td>
		</tr>
		<tr class="gradeA">
			<td>Gecko</td>
			<td>Mozilla 1.0</td>
			<td>Win 95+ / OSX.1+</td>
			<td class="center">1</td>
			<td class="center">A</td>
		</tr>
		<tr class="gradeA">
			<td>Gecko</td>
			<td>Mozilla 1.1</td>
			<td>Win 95+ / OSX.1+</td>
			<td class="center">1.1</td>
			<td class="center">A</td>
		</tr>
		<tr class="gradeA">
			<td>Gecko</td>
			<td>Mozilla 1.2</td>
			<td>Win 95+ / OSX.1+</td>
			<td class="center">1.2</td>
			<td class="center">A</td>
		</tr>
		<tr class="gradeA">
			<td>Gecko</td>
			<td>Mozilla 1.3</td>
			<td>Win 95+ / OSX.1+</td>
			<td class="center">1.3</td>
			<td class="center">A</td>
		</tr>
		<tr class="gradeA">
			<td>Gecko</td>
			<td>Mozilla 1.4</td>
			<td>Win 95+ / OSX.1+</td>
			<td class="center">1.4</td>
			<td class="center">A</td>
		</tr>
		<tr class="gradeA">
			<td>Gecko</td>
			<td>Mozilla 1.5</td>
			<td>Win 95+ / OSX.1+</td>
			<td class="center">1.5</td>
			<td class="center">A</td>
		</tr>
		<tr class="gradeA">
			<td>Gecko</td>
			<td>Mozilla 1.6</td>
			<td>Win 95+ / OSX.1+</td>
			<td class="center">1.6</td>
			<td class="center">A</td>
		</tr>
		<tr class="gradeA">
			<td>Gecko</td>
			<td>Mozilla 1.7</td>
			<td>Win 98+ / OSX.1+</td>
			<td class="center">1.7</td>
			<td class="center">A</td>
		</tr>
		<tr class="gradeA">
			<td>Gecko</td>
			<td>Mozilla 1.8</td>
			<td>Win 98+ / OSX.1+</td>
			<td class="center">1.8</td>
			<td class="center">A</td>
		</tr>
		<tr class="gradeA">
			<td>Gecko</td>
			<td>Seamonkey 1.1</td>
			<td>Win 98+ / OSX.2+</td>
			<td class="center">1.8</td>
			<td class="center">A</td>
		</tr>
		<tr class="gradeA">
			<td>Gecko</td>
			<td>Epiphany 2.20</td>
			<td>Gnome</td>
			<td class="center">1.8</td>
			<td class="center">A</td>
		</tr>
		<tr class="gradeA">
			<td>Webkit</td>
			<td>Safari 1.2</td>
			<td>OSX.3</td>
			<td class="center">125.5</td>
			<td class="center">A</td>
		</tr>
		<tr class="gradeA">
			<td>Webkit</td>
			<td>Safari 1.3</td>
			<td>OSX.3</td>
			<td class="center">312.8</td>
			<td class="center">A</td>
		</tr>
		<tr class="gradeA">
			<td>Webkit</td>
			<td>Safari 2.0</td>
			<td>OSX.4+</td>
			<td class="center">419.3</td>
			<td class="center">A</td>
		</tr>
		<tr class="gradeA">
			<td>Webkit</td>
			<td>Safari 3.0</td>
			<td>OSX.4+</td>
			<td class="center">522.1</td>
			<td class="center">A</td>
		</tr>
		<tr class="gradeA">
			<td>Webkit</td>
			<td>OmniWeb 5.5</td>
			<td>OSX.4+</td>
			<td class="center">420</td>
			<td class="center">A</td>
		</tr>
		<tr class="gradeA">
			<td>Webkit</td>
			<td>iPod Touch / iPhone</td>
			<td>iPod</td>
			<td class="center">420.1</td>
			<td class="center">A</td>
		</tr>
		<tr class="gradeA">
			<td>Webkit</td>
			<td>S60</td>
			<td>S60</td>
			<td class="center">413</td>
			<td class="center">A</td>
		</tr>
		<tr class="gradeA">
			<td>Presto</td>
			<td>Opera 7.0</td>
			<td>Win 95+ / OSX.1+</td>
			<td class="center">-</td>
			<td class="center">A</td>
		</tr>
		<tr class="gradeA">
			<td>Presto</td>
			<td>Opera 7.5</td>
			<td>Win 95+ / OSX.2+</td>
			<td class="center">-</td>
			<td class="center">A</td>
		</tr>
		<tr class="gradeA">
			<td>Presto</td>
			<td>Opera 8.0</td>
			<td>Win 95+ / OSX.2+</td>
			<td class="center">-</td>
			<td class="center">A</td>
		</tr>
		<tr class="gradeA">
			<td>Presto</td>
			<td>Opera 8.5</td>
			<td>Win 95+ / OSX.2+</td>
			<td class="center">-</td>
			<td class="center">A</td>
		</tr>
		<tr class="gradeA">
			<td>Presto</td>
			<td>Opera 9.0</td>
			<td>Win 95+ / OSX.3+</td>
			<td class="center">-</td>
			<td class="center">A</td>
		</tr>
		<tr class="gradeA">
			<td>Presto</td>
			<td>Opera 9.2</td>
			<td>Win 88+ / OSX.3+</td>
			<td class="center">-</td>
			<td class="center">A</td>
		</tr>
		<tr class="gradeA">
			<td>Presto</td>
			<td>Opera 9.5</td>
			<td>Win 88+ / OSX.3+</td>
			<td class="center">-</td>
			<td class="center">A</td>
		</tr>
		<tr class="gradeA">
			<td>Presto</td>
			<td>Opera for Wii</td>
			<td>Wii</td>
			<td class="center">-</td>
			<td class="center">A</td>
		</tr>
		<tr class="gradeA">
			<td>Presto</td>
			<td>Nokia N800</td>
			<td>N800</td>
			<td class="center">-</td>
			<td class="center">A</td>
		</tr>
		<tr class="gradeA">
			<td>Presto</td>
			<td>Nintendo DS browser</td>
			<td>Nintendo DS</td>
			<td class="center">8.5</td>
			<td class="center">C/A<sup>1</sup>
			</td>
		</tr>
		<tr class="gradeC">
			<td>KHTML</td>
			<td>Konqureror 3.1</td>
			<td>KDE 3.1</td>
			<td class="center">3.1</td>
			<td class="center">C</td>
		</tr>
		<tr class="gradeA">
			<td>KHTML</td>
			<td>Konqureror 3.3</td>
			<td>KDE 3.3</td>
			<td class="center">3.3</td>
			<td class="center">A</td>
		</tr>
		<tr class="gradeA">
			<td>KHTML</td>
			<td>Konqureror 3.5</td>
			<td>KDE 3.5</td>
			<td class="center">3.5</td>
			<td class="center">A</td>
		</tr>
		<tr class="gradeX">
			<td>Tasman</td>
			<td>Internet Explorer 4.5</td>
			<td>Mac OS 8-9</td>
			<td class="center">-</td>
			<td class="center">X</td>
		</tr>
		<tr class="gradeC">
			<td>Tasman</td>
			<td>Internet Explorer 5.1</td>
			<td>Mac OS 7.6-9</td>
			<td class="center">1</td>
			<td class="center">C</td>
		</tr>
		<tr class="gradeC">
			<td>Tasman</td>
			<td>Internet Explorer 5.2</td>
			<td>Mac OS 8-X</td>
			<td class="center">1</td>
			<td class="center">C</td>
		</tr>
		<tr class="gradeA">
			<td>Misc</td>
			<td>NetFront 3.1</td>
			<td>Embedded devices</td>
			<td class="center">-</td>
			<td class="center">C</td>
		</tr>
		<tr class="gradeA">
			<td>Misc</td>
			<td>NetFront 3.4</td>
			<td>Embedded devices</td>
			<td class="center">-</td>
			<td class="center">A</td>
		</tr>
		<tr class="gradeX">
			<td>Misc</td>
			<td>Dillo 0.8</td>
			<td>Embedded devices</td>
			<td class="center">-</td>
			<td class="center">X</td>
		</tr>
		<tr class="gradeX">
			<td>Misc</td>
			<td>Links</td>
			<td>Text only</td>
			<td class="center">-</td>
			<td class="center">X</td>
		</tr>
		<tr class="gradeX">
			<td>Misc</td>
			<td>Lynx</td>
			<td>Text only</td>
			<td class="center">-</td>
			<td class="center">X</td>
		</tr>
		<tr class="gradeC">
			<td>Misc</td>
			<td>IE Mobile</td>
			<td>Windows Mobile 6</td>
			<td class="center">-</td>
			<td class="center">C</td>
		</tr>
		<tr class="gradeC">
			<td>Misc</td>
			<td>PSP browser</td>
			<td>PSP</td>
			<td class="center">-</td>
			<td class="center">C</td>
		</tr>
		<tr class="gradeU">
			<td>Other browsers</td>
			<td>All others</td>
			<td>-</td>
			<td class="center">-</td>
			<td class="center">U</td>
		</tr>
	</tbody>
	<tfoot>
		<tr>
			<th>Rendering engine</th>
			<th>Browser</th>
			<th>Platform(s)</th>
			<th>Engine version</th>
			<th>CSS grade</th>
		</tr>
	</tfoot>
</table>
@stop
@section('modal')
<!-- Modal 6 (Long Modal)-->
<div class="modal fade" id="modal-6">
	<div class="modal-dialog">
		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Modal Content is Responsive</h4>
			</div>

			<div class="modal-body">
				
				<div class="row">
					<div class="col-md-6">

						<div class="form-group">
							<label for="field-1" class="control-label">Name</label>

							<input type="text" class="form-control" id="field-1" placeholder="John">
						</div>	

					</div>

					<div class="col-md-6">

						<div class="form-group">
							<label for="field-2" class="control-label">Surname</label>

							<input type="text" class="form-control" id="field-2" placeholder="Doe">
						</div>	
						
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-12">

						<div class="form-group">
							<label for="field-3" class="control-label">Address</label>

							<input type="text" class="form-control" id="field-3" placeholder="Address">
						</div>	

					</div>
				</div>
				
				<div class="row">
					<div class="col-md-4">

						<div class="form-group">
							<label for="field-4" class="control-label">City</label>

							<input type="text" class="form-control" id="field-4" placeholder="Boston">
						</div>	

					</div>

					<div class="col-md-4">

						<div class="form-group">
							<label for="field-5" class="control-label">Country</label>

							<input type="text" class="form-control" id="field-5" placeholder="United States">
						</div>	
						
					</div>

					<div class="col-md-4">

						<div class="form-group">
							<label for="field-6" class="control-label">Zip</label>

							<input type="text" class="form-control" id="field-6" placeholder="123456">
						</div>	
						
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-12">

						<div class="form-group no-margin">
							<label for="field-7" class="control-label">Personal Info</label>

							<textarea class="form-control autogrow" id="field-7" placeholder="Write something about yourself"></textarea>
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