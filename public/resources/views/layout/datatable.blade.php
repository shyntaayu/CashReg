@extends('layout.header')
@section('customcss')
<link href="{{ asset("assets/js/datatables/jquery.dataTables.min.css")}}" rel="stylesheet" type="text/css" />
<link href="{{ asset("assets/js/datatables/buttons.bootstrap.min.css")}}" rel="stylesheet" type="text/css" />
<link href="{{ asset("assets/js/datatables/fixedHeader.bootstrap.min.css")}}" rel="stylesheet" type="text/css" />
<link href="{{ asset("assets/js/datatables/responsive.bootstrap.min.css")}}" rel="stylesheet" type="text/css" />
<link href="{{ asset("assets/js/datatables/scroller.bootstrap.min.css")}}" rel="stylesheet" type="text/css" />
@stop
@section('customjs')
<!-- Datatables-->
<script src="{{ asset("assets/js/datatables/jquery.dataTables.min.js")}}"></script>
<script src="{{ asset("assets/js/datatables/dataTables.bootstrap.js")}}"></script>
<script src="{{ asset("assets/js/datatables/dataTables.buttons.min.js")}}"></script>
<script src="{{ asset("assets/js/datatables/buttons.bootstrap.min.js")}}"></script>
<script src="{{ asset("assets/js/datatables/jszip.min.js")}}"></script>
<script src="{{ asset("assets/js/datatables/pdfmake.min.js")}}"></script>
<script src="{{ asset("assets/js/datatables/vfs_fonts.js")}}"></script>
<script src="{{ asset("assets/js/datatables/buttons.html5.min.js")}}"></script>
<script src="{{ asset("assets/js/datatables/buttons.print.min.js")}}"></script>
<script src="{{ asset("assets/js/datatables/dataTables.fixedHeader.min.js")}}"></script>
<script src="{{ asset("assets/js/datatables/dataTables.keyTable.min.js")}}"></script>
<script src="{{ asset("assets/js/datatables/dataTables.responsive.min.js")}}"></script>
<script src="{{ asset("assets/js/datatables/responsive.bootstrap.min.js")}}"></script>
<script src="{{ asset("assets/js/datatables/dataTables.scroller.min.js")}}"></script>
@stop