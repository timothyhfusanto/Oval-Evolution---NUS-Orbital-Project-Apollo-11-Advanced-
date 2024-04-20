@extends('backend.layouts.master')

{{-- for title website --}}
	@section('title')
		Completed Order
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
			Received Orders
		</div>
	</div>

	<div class="row mb-4 mt-4">
		<div class="col-md-1">		
			<a href="/staff/order/all-order" style="color:#BABABA; font-size:16px">
				All Order
			</a>
		</div>
		<div class="col-md-1" >
			<a href="/staff/order/on-going" style="color:#BABABA; font-size:16px">
				On-going
			</a>
		</div>
		<div class="col-md-1">
			<a href="/staff/order/completed" style="color:#59ceb5; border-bottom:1px solid #59ceb5; font-size:16px">
				Completed
			</a>
		</div>		
	</div>

		<div class="row">
            <div class="col-md-12">
                <div class="card m-b-30" style="border-radius: 10px;">
					
                    <div class="card-body">
						@if(session()->has('update'))
						<div class="alert alert-success alert-dismissible fade show d-flex align-items-center" style="font-size:15px"role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<i class="mdi mdi-checkbox-marked-circle font-32"></i><strong class="pr-1">Success!</strong> {{ session('update') }}
						</div>
						@endif
                        <div class="row">
                            <ul></ul>
                        </div>

                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; 
						border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
								<th>Order Date</th>
                            	<th>Queue No</th>
                                <th>Total Price</th>
								<th>Payment</th>
                                <th>Status</th>
                                <th>Details</th> 
								<th>Order Status</th>                
                            </tr>
                            </thead>
                            <tbody>
                            	@foreach($dataindex as $key => $dataindex0 )
                            	<tr>
									<td>{{$dataindex0->created_at->setTimezone('Asia/Singapore')->format('H:i:s d/m/Y')}}</td>
                            		<td>{{$dataindex0->queue}}</td>
                            		<td>${{$dataindex0->total_price}}</td>
									<td>{{$dataindex0->payment_mode}}</td>
                            		<td>{{$dataindex0->status}}</td>
                            		<td>
                                        <a href="{{route('ongoing.show', [$dataindex0->id])}}">
                                            <button class="btn-round btn-black">
                                                View Details
                                            </button>               
                                        </a>             				
                            		</td>
									<td >
									<form action="{{route('stat.update', [$dataindex0->id])}}" id="statusForm" method="post"> @csrf {{method_field('patch')}}
										<select class="select2 form-control custom-select" name="changestat">
											<option value="Completed">Completed</option>
											<option value="Pending">Pending</option>
										</select>
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
	  $(document).ready(function() {
			var table = $('#datatable').DataTable();
			table.order([[0, 'desc']]).draw();

			const selectElements = document.querySelectorAll('.select2');

			selectElements.forEach(function(selectElement) {
				selectElement.addEventListener('change', function() {
				this.closest('form').submit();
				});
			});
		});
	</script>
	@endsection



