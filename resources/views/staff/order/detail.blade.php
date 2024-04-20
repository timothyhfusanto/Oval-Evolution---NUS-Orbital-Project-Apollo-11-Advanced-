@extends('backend.layouts.master')

{{-- for title website --}}
	@section('title')
        Order Detail
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
            <div class="col-md-12">
                <div class="card m-b-30">
                	<div class="card-header" style="background-color: black;">
    					<h4 class="text-center" style="color: white; font-size:30px; position:relative; bottom:-6px; font-weight:bold" class="card-title">
							Queue {{$order -> queue}} Details  			
                		</h4>	
                	</div>
                    @if(count($order->orderitems->whereNotNull('food_id')) !== 0)

                    <div class="card-body">
                        
                        <div class="row" style="font-size:25px; font-weight:bold">
                            <ul>Food Order</ul>
                        </div>
                        <div class="mb-4">
                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; 
                            border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Food</th>
                                    <th>Quantity</th>
                                    <th>CustHead1</th>
                                    <th>HeadItems1</th>
                                    <th>CustHead2</th>
                                    <th>HeadItems2</th>
                                    <th>CustHead3</th>
                                    <th>HeadItems3</th>
                                    <th>CustHead4</th>
                                    <th>HeadItems4</th>
                                    <th>CustHead5</th>
                                    <th>HeadItems5</th>
                                    <th>Notes</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order->orderitems as $item)
                                    @if($item->food !== null)
                                    <tr>
                                        <td>{{$item->food->name}}</td>
                                        <td>{{$item->qty}}</td>
                                        <td>{{$item->cust_head1}}</td>
                                        <td>{{$item->head1_items}}</td>
                                        <td>{{$item->cust_head2}}</td>
                                        <td>{{$item->head2_items}}</td>
                                        <td>{{$item->cust_head3}}</td>
                                        <td>{{$item->head3_items}}</td>
                                        <td>{{$item->cust_head4}}</td>
                                        <td>{{$item->head4_items}}</td>
                                        <td>{{$item->cust_head5}}</td>
                                        <td>{{$item->head5_items}}</td>
                                        <td>{{$item->notes}}</td>
                                    </tr>
                                    @endif
                                    @endforeach
                                
                                </tbody>
                            </table>
                        </div>
                        <div style="border-top: 1px solid #ccc;"></div>
                        @endif

                        @if(count($order->orderitems->whereNotNull('drink_id')) !== 0)

                        <div class="row mt-2" style="font-size:25px; font-weight:bold">
                            <ul>Drink Order</ul>
                        </div>

                        <div class="mt-3 mb-4">
                            <table id="datatable2" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; 
                            border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Drink</th>
                                    <th>Quantity</th>
                                    <th>CustHead1</th>
                                    <th>HeadItems1</th>
                                    <th>CustHead2</th>
                                    <th>HeadItems2</th>
                                    <th>CustHead3</th>
                                    <th>HeadItems3</th>
                                    <th>CustHead4</th>
                                    <th>HeadItems4</th>
                                    <th>CustHead5</th>
                                    <th>HeadItems5</th>
                                    <th>Notes</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order->orderitems as $item)
                                    @if($item->drink !== null)
                                    <tr>
                                        <td>{{$item->drink->name}}</td>
                                        <td>{{$item->qty}}</td>
                                        <td>{{$item->cust_head1}}</td>
                                        <td>{{$item->head1_items}}</td>
                                        <td>{{$item->cust_head2}}</td>
                                        <td>{{$item->head2_items}}</td>
                                        <td>{{$item->cust_head3}}</td>
                                        <td>{{$item->head3_items}}</td>
                                        <td>{{$item->cust_head4}}</td>
                                        <td>{{$item->head4_items}}</td>
                                        <td>{{$item->cust_head5}}</td>
                                        <td>{{$item->head5_items}}</td>
                                        <td>{{$item->notes}}</td>
                                    </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div style="border-top: 1px solid #ccc;"></div>

                        @endif

                        <div class="row mt-3" style="font-size:20px; font-weight:bold">
                            <div class="col-md-4">
                                Order Status
                            </div>
                        </div>
                        <div class="row mt-4">
                            
                            <div class="col-md-4">
                                <form action="{{route('stat.update', [$order->id])}}" id="statusForm" method="post"> @csrf {{method_field('patch')}}
									<select class="select2 form-control custom-select" name="changestat">
										<option {{$order->status == 'Pending' ? 'selected' : ''}} value="Pending">Pending</option>
										<option {{$order->status == 'Completed' ? 'selected' : ''}} value="Completed">Completed</option>
									</select>
                                    <button type="submit" class="btn btn-black mt-3 float-right">Update</button>
								</form>
                            </div>
                        </div>
                       
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



