@extends('layout.datatable')
@section('title')
Report
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
  <div class="">
    <div class="x_content">
      <div class="col-xs-3">
        <!-- required for floating -->
        <!-- Nav tabs -->
        <ul class="nav nav-tabs tabs-left">
          <li class="active"><a href="#sales" data-toggle="tab">Sales Summary</a>
          </li>
          <li><a href="#payment" data-toggle="tab">Payment Methods</a>
          </li>
          <li><a href="#item" data-toggle="tab">Item Sales</a>
          </li>
          <li><a href="#category" data-toggle="tab">Category Sales</a>
          </li>
          <li><a href="#modifier" data-toggle="tab">Modifier Sales</a>
          </li>
          <li><a href="#discount" data-toggle="tab">Discounts</a>
          </li>
          <li><a href="#taxes" data-toggle="tab">Taxes</a>
          </li>
          <li><a href="#gratuity" data-toggle="tab">Gratuity</a>
          </li>
          <li><a href="#collected" data-toggle="tab">Collected By</a>
          </li>
          <li><a href="#served" data-toggle="tab">Served By</a>
          </li>
        </ul>
      </div>

      <div class="col-xs-9">
        <!-- Tab panes -->
        <div class="tab-content x_panel">
          <div class="tab-pane active" id="sales">
            <table class="tile_custom dt-responsive nowrap" id="datatable-buttons">
              <thead>
                <tr class="tabhead">
                  <td>Type</td>
                  <td>Amount</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Gross Sales</td>
                  <td>Rp 1.814.930</td>
                </tr>
                <tr>
                  <td>Discount</td>
                  <td>(Rp 13)</td>
                </tr>
                <tr>
                  <td>Refund</td>
                  <td>(Rp 0)</td>
                </tr>
                <tr class="line">
                  <td >Net Sales</td>
                  <td >Rp 1.814.917</td>
                </tr>
                <tr>
                  <td>Gratuity</td>
                  <td>Rp 0</td>
                </tr>
                <tr>
                  <td>Tax</td>
                  <td>Rp 0</td>
                </tr>
                <tr class="total">
                  <td>Total Collected</td>
                  <td>Rp 1.814.917</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="tab-pane" id="payment">
            <table class="tile_custom table table-striped dt-responsive nowrap" id="datatable-payment">
              <thead>
                <tr>
                  <td>Paymnet Method</td>
                  <td>Number Of Transaction</td>
                  <td>Total Collected</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Cash</td>
                  <td>0</td>
                  <td>Rp 0</td>
                </tr>
                <tr>
                  <td>Debit/ Credit</td>
                  <td>0</td>
                  <td>Rp 0</td>
                </tr>
                <tr>
                  <td>Invoice</td>
                  <td>1</td>
                  <td>Rp 500</td>
                </tr>
                <tr>
                  <td>EDC</td>
                  <td>6</td>
                  <td>Rp 1.214.417</td>
                </tr>
                <tr>
                  <td>Gift Card</td>
                  <td>0</td>
                  <td>Rp 0</td>
                </tr>
                <tr>
                  <td>Other</td>
                  <td>2</td>
                  <td>Rp 600.000</td>
                </tr>
                <tr class="total">
                  <td>Total</td>
                  <td>9</td>
                  <td>Rp 1.814.917</td>
                </tr>
              </tbody>
            </table></div>
            <div class="tab-pane" id="item">
              <table class="tile_custom table table-striped dt-responsive nowrap" id="datatable-item">
                <thead>
                  <tr>
                    <td>Name</td>
                    <td>SKU</td>
                    <td>Category</td>
                    <td>Item Sold</td>
                    <td>Gross Sales</td>
                    <td>Discount</td>
                    <td>Refund</td>
                    <td>Net Sales</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Custom Amout</td>
                    <td></td>
                    <td>Uncategorized</td>
                    <td>5</td>
                    <td>Rp 14.930</td>
                    <td>(Rp 13)</td>
                    <td></td>
                    <td>Rp 14.917</td>
                  </tr>
                  <tr>
                    <td>Samsung</td>
                    <td></td>
                    <td>Uncategorized</td>
                    <td>6</td>
                    <td>Rp 1.800.000</td>
                    <td></td>
                    <td></td>
                    <td>Rp 1.800.000</td>
                  </tr>
                  <tr class="total">
                    <td>Total</td>
                    <td></td>
                    <td></td>
                    <td>11</td>
                    <td>Rp 1.814.930</td>
                    <td>(Rp 13)</td>
                    <td></td>
                    <td>Rp 1.814.917</td>
                  </tr>
                </tbody>
              </table></div>
              <div class="tab-pane" id="category"><table class="tile_custom table table-striped dt-responsive nowrap" id="datatable-category">
                <thead>
                  <tr>
                    <td>Category</td>
                    <td>Item Sold</td>
                    <td>Gross Sales</td>
                    <td>Discount</td>
                    <td>Refund</td>
                    <td>Net Sales</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Uncategorized</td>
                    <td>11</td>
                    <td>Rp 1.814.930</td>
                    <td>(Rp 13)</td>
                    <td></td>
                    <td>Rp 1.814.930</td>
                  </tr>
                  <tr class="total">
                    <td>Total</td>
                    <td>11</td>
                    <td>Rp 1.814.930</td>
                    <td>(Rp 13)</td>
                    <td></td>
                    <td>Rp 1.814.930</td>
                  </tr>
                </tbody>
              </table></div>
              <div class="tab-pane" id="modifier"><table class="tile_custom table table-striped dt-responsive nowrap" id="datatable-modifier">
                <thead>
                  <tr>
                    <td>Name</td>
                    <td>Quantity Sold</td>
                    <td>Gross Sales</td>
                    <td>Discount</td>
                    <td>Refund</td>
                    <td>Net Sales</td>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table></div>
              <div class="tab-pane" id="discount"><table class="tile_custom table table-striped dt-responsive nowrap" id="datatable-discount">
                <thead>
                  <tr>
                    <td>Name</td>
                    <td>Discount Amount</td>
                    <td>Count</td>
                    <td>Gross Discount</td>
                    <td>Discount Refunded</td>
                    <td>Net Discount</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>teh</td>
                    <td>2%</td>
                    <td>2</td>
                    <td>(Rp 13)</td>
                    <td></td>
                    <td>(Rp 13)</td>
                  </tr>
                  <tr class="total">
                    <td>Total</td>
                    <td>2%</td>
                    <td>2</td>
                    <td>(Rp 13)</td>
                    <td></td>
                    <td>(Rp 13)</td>
                  </tr>
                </tbody>
              </table></div>
              <div class="tab-pane" id="taxes"><table class="tile_custom table table-striped dt-responsive nowrap" id="datatable-taxes">
                <thead>
                  <tr>
                    <td>Name</td>
                    <td>Tax Rate</td>
                    <td>Taxable Amount</td>
                    <td>Tax Collected</td>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table></div>
              <div class="tab-pane" id="gratuity"><table class="tile_custom table table-striped dt-responsive nowrap" id="datatable-gratuity">
                <thead>
                  <tr>
                    <td>Name</td>
                    <td>Rate</td>
                    <td>Gratuity Collected</td>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table></div>
              <div class="tab-pane" id="served"><table class="tile_custom table table-striped dt-responsive nowrap" id="datatable-served">
                <thead>
                  <tr>
                    <td>Name</td>
                    <td>Title</td>
                    <td>Number of Transactions</td>
                    <td>Total Collected</td>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table></div>
              <div class="tab-pane" id="collected"><table class="tile_custom table table-striped dt-responsive nowrap" id="datatable-collected">
                <thead>
                  <tr>
                    <td>Name</td>
                    <td>Title</td>
                    <td>Number of Transactions</td>
                    <td>Total Collected</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>denykalpar</td>
                    <td>Owner</td>
                    <td>9</td>
                    <td>Rp 1.814.917</td>
                  </tr>
                  <tr class="total">
                    <td>Total</td>
                    <td></td>
                    <td>9</td>
                    <td>Rp 1.814.917</td>
                  </tr>
                </tbody>
              </table></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @stop
    @section('js')
    <script>
      $(document).ready(function() {
        $('#datatable-buttons').DataTable( {
          "searching": false,
          "paging":   false,
          "ordering": false,
          "info":     false,
          dom: 'Bfrtip',
          buttons: [{
            extend: "csv",
            className: "btn-sm"
          }, {
            extend: "excel",
            className: "btn-sm"
          }, {
            extend: "print",
            className: "btn-sm"
          }]
        } );

        $('#datatable-payment').DataTable( {
          "searching": false,
          "paging":   false,
          "ordering": false,
          "info":     false,
          dom: 'Bfrtip',
          buttons: [{
            extend: "csv",
            className: "btn-sm"
          }, {
            extend: "excel",
            className: "btn-sm"
          }, {
            extend: "print",
            className: "btn-sm"
          }]
        } );

        $('#datatable-item').DataTable( {
          "searching": false,
          "paging":   false,
          "ordering": false,
          "info":     false,
          dom: 'Bfrtip',
          buttons: [{
            extend: "csv",
            className: "btn-sm"
          }, {
            extend: "excel",
            className: "btn-sm"
          }, {
            extend: "print",
            className: "btn-sm"
          }]
        } );

        $('#datatable-category').DataTable( {
          "searching": false,
          "paging":   false,
          "ordering": false,
          "info":     false,
          dom: 'Bfrtip',
          buttons: [{
            extend: "csv",
            className: "btn-sm"
          }, {
            extend: "excel",
            className: "btn-sm"
          }, {
            extend: "print",
            className: "btn-sm"
          }]
        } );
        $('#datatable-modifier').DataTable( {
          "searching": false,
          "paging":   false,
          "ordering": false,
          "info": false,
          dom: 'Bfrtip',
          buttons: [{
            extend: "csv",
            className: "btn-sm"
          }, {
            extend: "excel",
            className: "btn-sm"
          }, {
            extend: "print",
            className: "btn-sm"
          }]
        } );
        $('#datatable-discount').DataTable( {
          "searching": false,
          "paging":   false,
          "ordering": false,
          "info":     false,
          dom: 'Bfrtip',
          buttons: [{
            extend: "csv",
            className: "btn-sm"
          }, {
            extend: "excel",
            className: "btn-sm"
          }, {
            extend: "print",
            className: "btn-sm"
          }]
        } );
        $('#datatable-taxes').DataTable( {
          "searching": false,
          "paging":   false,
          "ordering": false,
          "info": false,
          dom: 'Bfrtip',
          buttons: [{
            extend: "csv",
            className: "btn-sm"
          }, {
            extend: "excel",
            className: "btn-sm"
          }, {
            extend: "print",
            className: "btn-sm"
          }]
        } );
        $('#datatable-gratuity').DataTable( {
          "searching": false,
          "paging":   false,
          "ordering": false,
          "info": false,
          dom: 'Bfrtip',
          buttons: [{
            extend: "csv",
            className: "btn-sm"
          }, {
            extend: "excel",
            className: "btn-sm"
          }, {
            extend: "print",
            className: "btn-sm"
          }]
        } );
        $('#datatable-collected').DataTable( {
          "searching": false,
          "paging":   false,
          "ordering": false,
          "info": false,
          dom: 'Bfrtip',
          buttons: [{
            extend: "csv",
            className: "btn-sm"
          }, {
            extend: "excel",
            className: "btn-sm"
          }, {
            extend: "print",
            className: "btn-sm"
          }]
        } );
        $('#datatable-served').DataTable( {
          "searching": false,
          "paging":   false,
          "ordering": false,
          "info": false,
          dom: 'Bfrtip',
          buttons: [{
            extend: "csv",
            className: "btn-sm"
          }, {
            extend: "excel",
            className: "btn-sm"
          }, {
            extend: "print",
            className: "btn-sm"
          }]
        } );
      } );
    </script>
    @stop