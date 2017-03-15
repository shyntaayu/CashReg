@extends('layout.header')
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
          <li class="active"><a href="#home" data-toggle="tab">Sales Summary</a>
          </li>
          <li><a href="#profile" data-toggle="tab">Payment Methods</a>
          </li>
          <li><a href="#messages" data-toggle="tab">Item Sales</a>
          </li>
          <li><a href="#settings" data-toggle="tab">Category Sales</a>
          </li>
          <li><a href="#settings" data-toggle="tab">Modifier Sales</a>
          </li>
          <li><a href="#settings" data-toggle="tab">Discounts</a>
          </li>
          <li><a href="#settings" data-toggle="tab">Taxes</a>
          </li>
          <li><a href="#settings" data-toggle="tab">Gratuity</a>
          </li>
          <li><a href="#settings" data-toggle="tab">Collected By</a>
          </li>
          <li><a href="#settings" data-toggle="tab">Served By</a>
          </li>
        </ul>
      </div>

      <div class="col-xs-9">
        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active" id="home">
            <p class="lead">Home tab</p>
            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
              synth. Cosby sweater eu banh mi, qui irure terr.</p>
            </div>
            <div class="tab-pane" id="profile">Profile Tab.</div>
            <div class="tab-pane" id="messages">Messages Tab.</div>
            <div class="tab-pane" id="settings">Settings Tab.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @stop