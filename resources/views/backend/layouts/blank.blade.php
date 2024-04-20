@extends('backend.layouts.master')

{{-- for title website --}}
	@section('title')
		Diisi title
	@endsection

{{-- for link header --}}
	@section('addheaderlink')
    {{-- DataTables --}}
    <link href="{{asset('template/assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('template/assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    {{-- Responsive datatable examples --}}
    <link href="{{asset('template/assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" /> 
    {{-- Select2 --}}
    <link href="{{asset('template/assets/plugins/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
	@endsection

{{-- for content after card --}}
	@section('content')

	@endsection

{{-- for javascript --}}
	@section('script')
    <script type="text/javascript">
		  
    </script>
	@endsection

{{-- for script footer $ modals --}}
	@section('modal')
  @endsection

  @section('addfooterscript')
	  {{-- Required datatable js --}}
	  <script src="{{asset('template/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
	  <script src="{{asset('template/assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
	  {{-- Buttons examples --}}
	  <script src="{{asset('template/assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
	  <script src="{{asset('template/assets/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
	  {{-- Responsive examples --}}
	  <script src="{{asset('template/assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
	  <script src="{{asset('template/assets/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>
	  {{-- Datatable init js --}}
	  <script src="{{asset('template/assets/pages/datatables.init.js')}}"></script>
    {{-- select2 --}}
    <script src="{{asset('template/assets/plugins/select2/select2.min.js')}}"></script>
	@endsection

{{-- for document ready --}}
	@section('refresh')
	<script type="text/javascript">
	  $(document).ready(function()
	    {
        //
	    });
	</script>
	@endsection



