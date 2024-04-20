@extends('backend.layouts.master')

{{-- for title website --}}
	@section('title')
		Create User
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
		<div class="row" style="margin-top: 75px;">
			<div class="col-12">
				<div class="card">
					<div class="row">
						<div class="col-sm-6">
							<div>Name</div>
							<div><input class="form-control" id="name"></div>
						</div>
						<div class="col-sm-6">
							<div>Email</div>
							<div><input class="form-control" id="email"></div>
						</div>
						<div class="col-sm-6">
							<div>Password</div>
							<div><input class="form-control" type="password" id="password"></div>
						</div>
						<div class="col-sm-6">
							<div>Address</div>
							<div><input class="form-control" id="address"></div>
						</div>
						<div class="col-sm-6">
							<div>Mobile Number</div>
							<div><input class="form-control" id="mobile_number"></div>
						</div>
						<div class="col-sm-6">
							<div>Department</div>
							<div>
								<select class="form-control" id="department_id">									
									<option value="" disabled="" selected="">Select*</option>
									@foreach($department as $department0)
									<option value="{{$department0 -> id}}">{{$department0 -> name}}</option>

									@endforeach
								</select>
							</div>
						</div>
						<div class="col-sm-6">
							<div>Role</div>
							<div>
								<select class="form-control" id="role_id">									
									<option value="" disabled="" selected="">Select*</option>
									@foreach($role as $role0)
									<option value="{{$role0 -> id}}">{{$role0 -> name}}</option>

									@endforeach
								</select>
							</div>
						</div>
						<div class="col-sm-6">
							<div>Start from</div>
							<div>
								<input class="form-control" type="date" name="" id="start_from">
								
							</div>
						</div>
					</div>


<div class="row">
	<div class="col-12">
		<button id="button" class="btn btn-round btn-primary" onclick="save()">save</button>
	</div>

</div>




				</div>
			</div>
		</div>
	@endsection

{{-- for javascript --}}
	@section('script')
    <script type="text/javascript">
		  function getValue(){
		  	name = $('#name').val();
		  	email = $('#email').val();
		  	password = $('#password').val();
		  	address = $('#address').val();
		  	mobile_number = $('#mobile_number').val();
		  	department_id = $('#department_id').val();
		  	role_id = $('#role_id').val();
		  	start_from = $('#start_from').val();
		  }

		  function save(){
		  	getValue();

		  		$.ajax({
		  			method : "POST",
		  			url : "/user",
		  			data : {
		  				name,
						email,
						password,
						address,
						mobile_number,
						department_id,
						role_id,
						start_from,
		  				_token : '{{ csrf_token() }}'
		  			}
		  		}).done(function(response){

		  			if(response.code == 200){
		  				alert(response.message)
		  				window.location.href = '/user';
		  			}
		  			if(response.code == 400){
		  				console.log(response.error)
		  				alert('data error')
		  			}


		  		}).fail(function(){
		  			console.log(response)
		  		});
		  }
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



