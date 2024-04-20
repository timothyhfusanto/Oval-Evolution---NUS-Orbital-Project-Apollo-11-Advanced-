@extends('backend.layouts.master')

{{-- for title website --}}
	@section('title')
		Drink List
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
	<div class="row">
		<div class="col-md-12" style="font-size:35px; font-weight:bold">
			Menu List
		</div>
	</div>

	<div class="row mb-3 mt-4" style="align-items: center;">
		<div class="col-md-1">		
			<a href="/staff/food" style="color:#BABABA; font-size:16px">
				Food
			</a>
		</div>
		<div class="col-md-1" >
			<a href="/staff/drink" style="color:#59ceb5; border-bottom:1px solid #59ceb5; font-size:16px">
				Beverage
			</a>
		</div>
		<div class="col-md-1"></div>
		<div class="col-md-1"></div>
		<div class="col-md-1"></div>
		<div class="col-md-1"></div>
		<div class="col-md-1"></div>
		<div class="col-md-1"></div>
		<div class="col-md-1"></div>
		<div class="col-md-1"></div>
		<div class="col-md-2" style="text-align: right;">
			<form action="{{route('drink.create')}}" method="get">@csrf 
                <div class="mb-2 ">
                    <button class="btn-round btn-black px-3 py-2"  style="font-size:15px; font-weight:bold" 
						type="submit">New drink +</button>
	            </div>
            </form>
		</div>
	</div>

		<div class="row">
            <div class="col-md-12">
                <div class="card m-b-30" style="border-radius: 10px;">
                	
					@if(session()->has('success'))
					<div class="alert alert-success alert-dismissible fade show d-flex align-items-center" style="font-size:15px"role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
                        </button>
                        <i class="mdi mdi-checkbox-marked-circle font-32"></i><strong class="pr-1">Success !</strong> {{ session('success') }}
					</div>
					@elseif(session()->has('update'))
					<div class="alert alert-success alert-dismissible fade show d-flex align-items-center" style="font-size:15px"role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
                        </button>
                        <i class="mdi mdi-checkbox-marked-circle font-32"></i><strong class="pr-1">Success !</strong> {{ session('update') }}
					</div>
					@elseif(session()->has('delete'))
					<div class="alert alert-success alert-dismissible fade show d-flex align-items-center" style="font-size:15px"role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
                        </button>
                        <i class="mdi mdi-checkbox-marked-circle font-32"></i><strong class="pr-1">Success !</strong> {{ session('delete') }}
					</div>
					@endif
					
                    <div class="card-body">
                    	
                        <div class="row">
                            <ul></ul>
                        </div>

                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; 
						border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                            	<th>No</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Description</th>
								<th>Image</th>
                                <th>Action</th>                            
                            </tr>
                            </thead>
                            <tbody>

                            	@foreach($dataindex as $key => $dataindex0 )
                            	
                            	<tr>
                            		<td>{{$key+1}}</td>
                            		<td>{{$dataindex0->name}}</td>
                            		<td>{{$dataindex0->price_in_sgd}}</td>
                            		<td>{{$dataindex0->description}}</td>
									<td>{{$dataindex0->image}}</td>
                            		<td>
                            			<a href="{{route('drink.edit',[$dataindex0->id])}}">
                            				<i class="fas fa-edit"></i>
                            			</a>
                            			<form action="{{route('drink.destroy',[$dataindex0->id])}}" method="post">@csrf {{method_field('delete')}}
                            				<button onclick="confirm('Are you sure you want to delete this dish?')">
                            					<i class="fas fa-trash"></i>
                            				</button>                            				
                            			</form>
                            		</td>
                            	</tr>
                            	
                            	@endforeach                 
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
	@endsection

{{-- for javascript --}}
	@section('script')
    <script type="text/javascript">
		  
    </script>

    	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-640f276f93b4aabd">
    
    </script>


	@endsection

{{-- for script footer $ modals --}}
	@section('modal')
    </div> <!-- content -->
        <footer class="footer">
            © 2023 Oval Evolution. All Rights Reserved.

        </footer>
    </div>
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



