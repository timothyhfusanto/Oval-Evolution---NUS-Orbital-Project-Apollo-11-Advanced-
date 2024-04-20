<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>My Orders</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                background-color: white;
                font-family: 'Nunito', sans-serif;
            }
            </style>
        
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta content="Admin Dashboard" name="description" />
        <meta content="themesdesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link href="{{asset('/template/assets/images/ovalevolution.png')}}" rel ="icon" type="image/png">
        <link href="{{asset('template/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('template/assets/plugins/animate/animate.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('template/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('template/assets/css/style.css')}}" rel="stylesheet" type="text/css">
        {{-- DataTables --}}
        <link href="{{asset('template/assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('template/assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        {{-- Responsive datatable examples --}}
        <link href="{{asset('template/assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" /> 
        {{-- Select2 --}}
        <link href="{{asset('template/assets/plugins/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />


    </head>
    <body style="background-color: #EAEFF2; font-family:Roboto;">

        <?php
        use App\Http\Controllers\CartController;
        $total = CartController::cartItem();
        ?>
        @include('backend.layouts.header')
        <div class="container">
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show d-flex align-items-center mt-3" style="font-size:17px"role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <i class="mdi mdi-checkbox-marked-circle font-32"></i><strong class="pr-1"></strong> {{ session('success') }}
            </div>
        @elseif(session()->has('status'))
        <div class="alert alert-success alert-dismissible fade show d-flex align-items-center mt-3" style="font-size:17px"role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <i class="mdi mdi-checkbox-marked-circle font-32"></i><strong class="pr-1"></strong> {{ session('status') }}
        </div>
        @endif
        <div class="row mt-5" style="align-items:center">
                <div class="col-md-3" style="font-size:37px; color:black; font-weight:bold">
                    Order History
                    <div class="" style="font-size:15px;color:grey">
                        Manage and view your recent orders
                    </div>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-6" style="text-align:right; display: flex; justify-content: flex-end;">
                    <form id="clearForm" action="{{route('myorders.clearHistory')}}" method="post"> @csrf
                    </form>

                        <button id="clearHistoryButton" class="px-3 btn-roundabit btn-danger mr-3" style="font-size:20px" type="button">
                            <i class="fas fa-history"></i> Clear History
                        </button>
                    <a href="{{url('/')}}">
                        <button class="btn-roundabit btn-black px-3" style="font-size:20px">
                            <i class="fas fa-home" style="margin-top: 5px;"></i>
                        </button>
                    </a>
                </div>
            </div>
            <div class="mt-4"style="border-bottom: 1px solid grey"></div>
           
            <div class="row mb-4 mt-4">
                <div class="col-md-1">		
                    <a href="/myorders/allorder" style="color:#59ceb5; border-bottom:1px solid #59ceb5; font-size:16px">
                        All Order
                    </a>
                </div>
                <div class="col-md-1" >
                    <a href="/myorders/on-going" style="color:#BABABA; font-size:16px">
                        On-going
                    </a>
                </div>
                <div class="col-md-1">
                    <a href="/myorders/completed" style="color:#BABABA; font-size:16px">
                        Completed
                    </a>
                </div>		
            </div>

            <div class="row mt-5">
                <div class="col-md-12">
                <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; 
						border-spacing: 0; width: 100%;">                        
                        <thead style="font-size:20px">
                            <tr>
                                <th>Order Date</th>
                                <th>Queue no</th>
                                <th>Total Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody style="font-size:18px">
                            @foreach ($orders as $item)
                            <tr>
                                <td>{{$item->created_at->setTimezone('Asia/Singapore')->format('H:i:s d/m/Y')}}</td>
                                <td id="item_id">{{$item->queue}}</td>
                                <td>$ {{$item->total_price}}</td>
                                <td>{{$item->status}}</td>
                                <td>
                                    <a href="{{url('view-order/'.$item->id)}}">
                                        <button class="btn-roundabit btn-black">
                                            View Details
                                        </button>
                                    </a>
                                </td>
                            </tr>        
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

        <script>
  $( function() {
    var availableTags = [];
    $.ajax({
        method: "GET",
        url: "/food-list",
        success:function(response) {
            startAutoComplete(response);
        }
    });

    function startAutoComplete(availableTags){
        $( "#search_product" ).autocomplete({
            source: availableTags
        });
    } 
});
</script>
{{-- jQuery  --}}

<script>
    
document.addEventListener('DOMContentLoaded', function () {
    var status = "{{session('status')}}"
   
    if (status) {
        Swal.fire({
            icon: 'success',
            title: 'Please proceed to counter for cash payment',
            text: status,
            confirmButtonText: 'OK',
        });
    }
});
</script>

<script>
    $('#clearHistoryButton').click(function() {
        Swal.fire({
            title: 'Are you sure?',
            text: "This action will clear all history. This cannot be undone!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, clear it!',
            cancelButtonText: 'Cancel',
        }).then((result) => {
            if (result.isConfirmed) {
                $('#clearForm').submit();
            } else {
                window.location.href = "/myorders/all-order";
            }
        });
    });
</script>

<script src="{{asset('template/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('template/assets/js/modernizr.min.js')}}"></script>
<script src="{{asset('template/assets/js/detect.js')}}"></script>
<script src="{{asset('template/assets/js/fastclick.js')}}"></script>
<script src="{{asset('template/assets/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('template/assets/js/jquery.blockUI.js')}}"></script>
<script src="{{asset('template/assets/js/waves.js')}}"></script>
<script src="{{asset('template/assets/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('template/assets/js/jquery.scrollTo.min.js')}}"></script>
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
    

{{-- App js --}}
<script src="{{asset('template/assets/js/app.js')}}"></script>
<script>
    $(document).ready(function() {
        var table = $('#datatable').DataTable(); // Get the reference to the existing DataTable

        table.order([[0, 'desc']]).draw(); // Sort by the first column (ID) in descending order and redraw the table
    });
</script>
    </body>
</html>