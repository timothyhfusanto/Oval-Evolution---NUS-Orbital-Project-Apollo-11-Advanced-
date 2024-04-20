<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Oval Evolution Foods</title>

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

            .truncate {
                width: 230px; /* Set the desired width */
                overflow: hidden;
                white-space: nowrap;
                text-overflow: ellipsis;
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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="{{asset('/template/assets/images/ovalevolution.png')}}" rel ="icon" type="image/png">
        <link href="{{asset('template/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('template/assets/plugins/animate/animate.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('template/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('template/assets/css/style.css')}}" rel="stylesheet" type="text/css">

    </head>
    <body style="background-color: #EAEFF2; font-family:Roboto; color:black">
    @include('sweetalert::alert')
        <?php
        use App\Http\Controllers\CartController;
        $total = CartController::cartItem();
        ?>
        <header class="header-block">
            <div class="flex items-center">
                <svg height="100" width="200" style="margin-right:0px;">
                    <circle cx="65" cy="50" fill="#ffffff" r="25"></circle>
                </svg>

                <svg width="50" height="70" viewBox="0 0 1080 1080" version="1.1" xmlns="http://www.w3.org/2000/svg" 
                    xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" 
                    style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2; position:relative; left:-160px;
                    top:0px">
                    <a href="{{ url('/') }}">
                        <g transform="matrix(3.09279,0,0,3.09279,-3195.42,-1157.15)">
                            <path d="M1206.99,489.852L1168.17,489.852L1168.17,662.02L1097.95,662.02L1097.95,489.852L1063.25,489.852L1063.25,
                            437.203L1206.99,437.203L1274.86,437.203L1277.21,437.203L1277.21,474.061L1278.09,474.061C1289.07,450.366 1308.39,
                            435.446 1332.99,435.446C1339.14,435.446 1344.41,435.446 1352.31,437.203L1352.31,498.636C1346.6,497.758 1342.65,
                            497.319 1337.82,497.319C1306.2,497.319 1277.21,517.083 1277.21,557.515L1277.21,662.02L1270.67,662.02C1270.18,
                            662.056 1269.73,662.055 1269.31,662.02L1206.99,662.02L1206.99,489.852Z" 
                            style="fill:black;"/>
                        </g>
                    </a>
                </svg>

                
                <div class="btn-group">
                    <div type="button" style="position:relative; left: -110px; top: 0px; margin-right: 10px; font-size:16px; 
                    font-weight:bold" class="dropdown-toggle head-text" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        FOODS
                    </div>                
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="/">All Foods</a>
                        <a class="dropdown-item" href="/favourites">Favourites <i class="fas fa-heart" style="position:relative; 
                        font-size:13px; top:0px; left:30px"></i></a>
                    </div>
                </div>

                <div class="btn-group">
                    <div type="button" style="position:relative; left: -64px; top: 0px; margin-right: 10px; font-size:16px; 
                    font-weight:bold" class="dropdown-toggle head-text" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        DRINKS
                    </div>                
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="/drinks">All Drinks</a>
                        <a class="dropdown-item" href="/favourites">Favourites <i class="fas fa-heart" style="position:relative; 
                        font-size:13px; top:0px; left:30px"></i></a>
                    </div>      
                </div> 

                <svg height="60"; width="100" class="head-text" style="position:relative; left: -15px; top: 10px; margin-right: 10px">  
                    <a href="{{ url('/about-us') }}">    
                        <text x="0" y="25"class="head-text" font-size="16" font-weight="bold">ABOUT US</text>
                    </a>
                </svg>

                 <a href="/add-to-cart">
                    <div class="ml-4">
                        <i class="fas fa-shopping-cart" style="font-size:30px; color:black"></i>
                        <span class="badge badge-success noti-icon-badge" style="position: relative; top:-25px; left:-5px; font-size:15px">{{$total}}</span>
                    </div>
                </a>
            </div>
             <div class="flex items-center">
            
                @if (Route::has('login'))
                
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block" style="position:relative; left:590px;">
                    @auth
                    
                    <ul class="list-inline float-right mb-0" style="position:relative; top: -112px; left:720px">
                        
                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light nav-user" data-toggle="dropdown" href="/" role="button" aria-haspopup="false" aria-expanded="false">
                                @if(Auth::user()->profile_image !== null)
                                    <img src="{{ asset('storage/' . Auth::user()->profile_image) }}" class="rounded-circle" style="height:50px; width: 50px">
                                @else
                                    <img src="{{ url('template/assets/images/pp.png') }}" class="rounded-circle" style="height:50px; width: 50px">
                                @endif
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                                <div class="dropdown-item noti-title">
                                    <h5>Welcome back, {{ Auth::user()->name }}</h5>
                                </div>
                                {{--<a class="dropdown-item" href="{{url('password/reset')}}">
                                    <i class="mdi mdi-settings "></i>Password
                                </a>--}}
                                <a class="dropdown-item" href="{{ route('profile.index') }}">
                                    <i class="fas fa-user"></i> My Profile
                                </a>
                                <a class="dropdown-item" href="{{ route('myorders.index') }}">
                                    <i class="ti-shopping-cart-full"></i> My Orders
                                </a>
                                <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                    <i class="mdi mdi-power text-danger"></i> Logout
                                </a>
                                
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                @else
                    <a href="{{ url('/login-option') }}" class="btn-round btn-outline-black inline-block px-4 py-2 text-black" style="
                    font-size: 15px; font-weight:700; position:relative; top:-85px; left:565px">Sign in</a>  

                    @if (Route::has('register'))
                        <a href="{{ url('/register-option') }}" class="btn-round btn-black inline-block px-3 py-2
                        text-white" style="font-size: 15px; font-weight:700; position:relative; top:-85px;left:580px">Join now</a> 
                    @endif
                    @endauth
                </div>
                @endif
            </div>
        </header>
        @php 
            $totalPrice = 0;
        @endphp
        <div style="margin-top:20px; margin-right:20px; margin-left:80px; margin-right:80px">

            <div class="card">
                <div class="card-header" style="font-size:25px;background-color:#ffe6bc; color:black; font-weight:bold">
                    <div class="row" style="display: flex; align-items:center">
                        <div class="col-md-6" style="text-align: left;">
                            Shopping Cart <i class="fas fa-shopping-cart" style="font-size:20px;"></i>
                        </div>
                        <div class= "col-md-6"style="text-align: right; display:flex; justify-content:flex-end; align-items:center">
                            <form id="clearForm"action="{{route('clearCart')}}" method="post"> @csrf {{method_field('delete')}}
                            </form>
                                <button style="font-size:20px" id="buttonClear" class="btn-roundabit btn-danger px-3 mr-3">
                                    Clear cart <i class="fas fa-trash-alt"></i>
                                </button>
                            <a href="{{url('/')}}">
                                <button class="btn-roundabit btn-black px-3" style="font-size:20px">
                                    <i class="fas fa-home"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                @if(count($food_list) === 0 && count($drink_list) === 0)
            </div>
            <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
                <img src="{{ url('/template/assets/images/empty.png') }}" style="width: 350px; height: auto;">
                <div style="font-size:40px" >
                    Shopping cart is empty
                </div>
            </div>
                    
                @else 
                @php
                    $foodsTotal = 0;
                    $drinksTotal = 0;
                @endphp
                    @if(count($food_list)!== 0)
                        <div class="card-body">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row" style="font-size:17px">
                                        <div class="col-md-4">
                                            Foods Cart
                                        </div>
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4">
                                            Price :
                                        </div>
                                    </div>
                                </div>
                            
                            @foreach($food_list as $fitems)
                                <div class="card-body">
                                    <div class="row mb-2 ml-3" style="color: black;">
                                        <div class="col-md-3">
                                            <img src="{{ asset('storage/' . $fitems->image) }}" style="border-radius:10px; max-width:150px; max-height:100px">
                                        </div>
                                        <div class="col-md-3">
                                            <h4 class="mb-3 truncate" style="font-size:19px">{{$fitems->name}}</h4>
                                            @if($fitems->cart_head1_items !== null)
                                            <div style="display: flex; justify-content: space-between;">
                                                <h6 style="font-size: 13px;" class="truncate">{{$fitems->cart_cust_head1}}: {{$fitems->cart_head1_items}}</h6>
                                                @if(!empty($fitems->cart_head1_price))
                                                    <h6 style="text-align: right; font-size:13px">+${{$fitems->cart_head1_price}}</h6>
                                                @endif
                                            </div>
                                            @endif
                                            @if($fitems->cart_head2_items !== null)
                                            <div style="display: flex; justify-content: space-between;">
                                                <h6 style="font-size:13px"class="truncate">{{$fitems->cart_cust_head2}}: {{$fitems->cart_head2_items}}</h6>
                                                @if(!empty($fitems->cart_head2_price))
                                                <h6 style="text-align: right; font-size:13px">+${{$fitems->cart_head2_price}}</h6>
                                                @endif
                                            </div>
                                            @endif
                                            @if($fitems->cart_head3_items !== null)
                                            <div style="display: flex; justify-content: space-between;">
                                                <h6 style="font-size:13px"class="truncate">{{$fitems->cart_cust_head3}}: {{$fitems->cart_head3_items}}</h6>
                                                @if(!empty($fitems->cart_head3_price))
                                                <h6 style="text-align: right; font-size:13px">+${{$fitems->cart_head3_price}}</h6>
                                                @endif
                                            </div>
                                            @endif
                                            @if($fitems->cart_head4_items !== null)
                                            <div style="display: flex; justify-content: space-between;">
                                                <h6 style="font-size:13px"class="truncate">{{$fitems->cart_cust_head4}}: {{$fitems->cart_head4_items}}</h6>
                                                @if(!empty($fitems->cart_head4_price))
                                                <h6 style="text-align: right;font-size:13px">+${{$fitems->cart_head4_price}}</h6>
                                                @endif
                                            </div>
                                            @endif
                                            @if($fitems->cart_head5_items !== null)
                                            <div style="display: flex; justify-content: space-between;">
                                                <h6 style="font-size:13px"class="truncate">{{$fitems->cart_cust_head5}}: {{$fitems->cart_head5_items}}</h6>
                                                @if(!empty($fitems->cart_head5_price))
                                                <h6 style="text-align: right;font-size:13px">+${{$fitems->cart_head5_price}}</h6>
                                                @endif
                                            </div>
                                            @endif
                                            @if($fitems->food_notes !== null)
                                            <div style="display: flex; justify-content: space-between;">
                                                <h6 style="font-size:13px; font-weight:lighter"class="truncate">Notes: {{$fitems->food_notes}}</h6>
                                            </div>
                                            @endif

                                        </div>
                                        <div class="col-md-3 d-flex align-items-center justify-content-center">
                                            <form action="{{route('cartQupdate', [$fitems->cart_id])}}" method="POST"> @csrf {{method_field('patch')}}
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <button style="font-size:15px; position:relative; left:30px" type='summit' value='-' class='qtyminus minus btn-black' data-field="{{$fitems->cart_id}}">-</button>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type='text' name='quantity' class='qty form-control' value="{{$fitems->food_quantity}}" style="position:relative; top:-3px" id="quantity-{{$fitems->cart_id}}">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <button style="font-size:15px;" type='summit' value='+' class='qtyplus plus btn-black' data-field="{{$fitems->cart_id}}" >+</button>
                                                    </div>
                                                <div class="col-md-3 d-flex align-items-center justify-content-center">
                                                    <div class="">
                                                    $ {{ floatval($fitems->food_quantity) * (floatval($fitems->price_in_sgd) + floatval($fitems->cart_head1_price) + floatval($fitems->cart_head2_price) 
                                                    + floatval($fitems->cart_head3_price) + floatval($fitems->cart_head4_price) + floatval($fitems->cart_head5_price))}} 
                                                    </div>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                        <div class="col-md-3 d-flex align-items-center justify-content-center">
                                            <form action="{{route('cart.destroy', [$fitems->cart_id])}}" method="post"> @csrf {{method_field('delete')}}
                                                <button class="btn btn-roudnabit btn-black"><i class="fas fa-trash"></i>
                                                    Remove from cart
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div style="border-bottom: 1px solid #ccc;"></div>
                                @php
                                    $foodsTotal += $fitems->food_quantity * ($fitems->price_in_sgd + $fitems->cart_head1_price + $fitems->cart_head2_price +
                                                   $fitems->cart_head3_price + $fitems->cart_head4_price +  $fitems->cart_head5_price)
                                @endphp
                            @endforeach
                            </div>
                        </div>
                    @endif

                    @if(count($drink_list)!== 0)
                        <div class="card-body">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-md-4" style="font-size:17px">
                                            Drinks Cart
                                        </div>
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4">
                                            Price :
                                        </div>
                                    </div>
                                </div>
                            
                            @foreach($drink_list as $ditems)
                                <div class="card-body product-data">
                                    <div class="row mb-3 ml-3">
                                        <div class="col-md-3">
                                            <img src="{{ asset('storage/' . $ditems->image) }}" style="border-radius:10px; max-width:160px; max-height:190px">
                                        </div>
                                        <div class="col-md-3">
                                            <h4 class="mb-4 truncate" style="font-size:19px">{{$ditems->name}}</h4>
                                            @if($ditems->cart_head1_items !== null)
                                            <div style="display: flex; justify-content: space-between;">
                                                <h6 class="truncate">{{$ditems->cart_cust_head1}}: {{$ditems->cart_head1_items}} </h6>
                                                @if($ditems->cart_head1_price !== null)
                                                    <h6 style="text-align: right; font-size:15px">+${{$ditems->cart_head1_price}}</h6>
                                                @endif
                                            </div>
                                            @endif
                                            @if($ditems->cart_head2_items !== null)
                                            <div style="display: flex; justify-content: space-between;">
                                                <h6 class="truncate">{{$ditems->cart_cust_head2}}: {{$ditems->cart_head2_items}}</h6>
                                                @if($ditems->cart_head2_price !== null)
                                                    <h6 style="text-align: right; font-size:15px">+${{$ditems->cart_head2_price}}</h6>
                                                @endif
                                            </div>
                                            @endif
                                            @if($ditems->cart_head3_items !== null)
                                            <div style="display: flex; justify-content: space-between;">
                                                <h6 class="truncate">{{$ditems->cart_cust_head3}}: {{$ditems->cart_head3_items}}</h6>
                                                @if($ditems->cart_head3_price !== null)                                          
                                                    <h6 style="text-align: right; font-size:15px">+${{$ditems->cart_head3_price}}</h6>
                                                @endif
                                            </div>
                                            @endif
                                            @if($ditems->cart_head4_items !== null)
                                            <div style="display: flex; justify-content: space-between;">
                                                <h6 class="truncate">{{$ditems->cart_cust_head4}}: {{$ditems->cart_head4_items}}</h6>
                                                @if($ditems->cart_head4_price !== null)
                                                    <h6 style="text-align: right;font-size:15px">+${{$ditems->cart_head4_price}}</h6>
                                                @endif
                                            </div>
                                            @endif
                                            @if($ditems->cart_head5_items !== null)
                                            <div style="display: flex; justify-content: space-between;">
                                                <h6 class="truncate">{{$ditems->cart_cust_head5}}: {{$ditems->cart_head5_items}}</h6>
                                                @if($ditems->cart_head5_price !== null)
                                                    <h6 style="text-align: right;font-size:15px">+${{$ditems->cart_head5_price}}</h6>
                                                @endif
                                            </div>
                                            @endif
                                            @if($ditems->drink_notes !== null)
                                            <div style="display: flex; justify-content: space-between;">
                                                <h6 style="font-size:13px; font-weight:lighter"class="truncate">Notes: {{$ditems->drink_notes}}</h6>
                                            </div>
                                            @endif
                                        </div>
                                        <div class="col-md-3 d-flex align-items-center justify-content-center">
                                            <form action="{{route('cartQupdate', [$ditems->cart_id])}}" method="POST"> @csrf {{method_field('patch')}}
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <button style="font-size:15px; position:relative; left:30px" type='summit' value='-' class='qtyminus minus btn-black' data-field="{{$ditems->cart_id}}">-</button>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type='text' name='quantity' class='qty form-control' value="{{$ditems->drink_quantity}}" style="position:relative; top:-3px" id="quantity-{{$ditems->cart_id}}">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <button style="font-size:15px;" type='summit' value='+' class='qtyplus plus btn-black' data-field="{{$ditems->cart_id}}">+</button>
                                                    </div>
                                                    <div class="col-md-3 d-flex align-items-center justify-content-center">
                                                        <div id="price-{{$ditems->cart_id}}">
                                                        $ {{ floatval($ditems->drink_quantity) * (floatval($ditems->price_in_sgd) + floatval($ditems->cart_head1_price) + floatval($ditems->cart_head2_price) 
                                                        + floatval($ditems->cart_head3_price) + floatval($ditems->cart_head4_price) + floatval($ditems->cart_head5_price))}}                                                     
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-md-3 d-flex align-items-center justify-content-center">
                                            <form action="{{route('cart.destroy', [$ditems->cart_id])}}" method="post"> @csrf {{method_field('delete')}}
                                                <button class="btn btn-roudnabit btn-black"><i class="fas fa-trash"></i>
                                                    Remove from cart
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div style="border-bottom: 1px solid #ccc;"></div>
                                @php
                                $drinksTotal += $ditems->drink_quantity * ($ditems->price_in_sgd + $ditems->cart_head1_price + $ditems->cart_head2_price +
                                                $ditems->cart_head3_price + $ditems->cart_head4_price +  $ditems->cart_head5_price)                               
                                @endphp
                            @endforeach
                        </div>
                    </div>
                    @endif
                    @php 
                        $totalPrice = $drinksTotal + $foodsTotal;
                    @endphp
                        <div class="row">
                            <form id="store-form" action="{{route('ongoing.store')}}" method="post"> @csrf
                                <input type="hidden" name="total_price" value="{{ $totalPrice }}">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="ml-5 mb-3" style="font-size:20px; font-weight:bold">Total Price : </div>
                                    </div>
                                    <div class="col-md-3"></div>
                                    <div class="col-md-3"></div>
                                    <div class="col-md-3" style="text-align:center">
                                        <div class="" style="font-size:20px; font-weight:bold">${{$totalPrice}}</div>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                        <div class="row mt-4 mr-2" style="align-items:center">
                            <form id="store-form" action="{{route('ongoing.store')}}" method="post"> @csrf
                                <input type="hidden" id="totalPrice" name="total_price" value="{{ $totalPrice }}">
                                <input type="hidden" name="payment" value="Cash">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="ml-5" style="font-size:20px; font-weight:bold">Payment method :</div>
                                    </div>
                                    <div class="col-md-3"></div>
                                    <div class="col-md-3"></div>
                                    <div class="col-md-3" style="text-align:center">
                                        <button class="btn-black btn-roundabit form-control" type="submit" style="font-size:17px;">Cash <i class="fas fa-money-bill-alt"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="row mt-2 ml-2" style="align-items:center">
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-3"></div>
                                    <div class="col-md-3"></div>
                                    <div class="col-md-3" style="text-align:center">
                                        <div id="paypal-button-container"></div>
                                    </div>
                                </div>
                        </div>
                @endif
            </div>
        </div>
    </body>

    <script src="https://www.paypal.com/sdk/js?client-id=AeDdEJ6ics12z696fK7v0nzG4T2tV_GUOFiLK6ag9JHrnx0F1FdMMaeaTkC88_9Eb-A-aknFGnJ685Gg&currency=SGD"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script>
    
    $('#buttonClear').click(function() {
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
                window.location.href = "/add-to-cart";
            }
        });
    });
    </script>
    <script>
        
	      paypal.Buttons({
	        createOrder: function(data,actions) {
	          return actions.order.create({
	            purchase_units: [{
	                amount: {
	                    value:'{{$totalPrice}}'
                    }
                }]
                });
            },
	        onApprove:function(data,actions) {
                return actions.order.capture().then(function(details) {
                var payment_id = details.id;    
                var totalPrice = $('#totalPrice').val();

                    $.ajax({
                        method: "POST",
                        url: "{{ route('ongoing.store') }}",
                        data: {
                            'payment_mode': "Paypal",
                            'total_price': totalPrice,
                            'payment_id': payment_id,
                            'status': "Pending",
                            'del_stat': "1",
                            '_token': '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            Swal.fire({
                                icon: 'success',
                                text: response.status,
                                title: 'Order placed successfully',
                                confirmButton: 'Confirm',
                            }).then(function (result) {
                                window.location.href = "/myorders/all-order";
                            });
                        }
                    });
                });
            }
	      }).render('#paypal-button-container');
	    </script>
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

    <script>

        $('.qtyminus').click(function() {
            var fieldId = $(this).data('field');
            var $quantityInput = $("#quantity-" + fieldId);
            var currentValue = parseInt($quantityInput.val());

            if (!isNaN(currentValue) && currentValue > 1) {
                $quantityInput.val(currentValue - 1);
            }
        });

        $('.qtyplus').click(function() {
            var fieldId = $(this).data('field');
            var $quantityInput = $("#quantity-" + fieldId);
            var currentValue = parseInt($quantityInput.val());
            
            if (!isNaN(currentValue)) {
                $quantityInput.val(currentValue + 1);
            } else {
                $quantityInput.val(1);
            }
        });

        window.addEventListener('beforeunload', function() {
            localStorage.setItem('scrollPosition', window.pageYOffset.toString());
        });

        window.addEventListener('load', function() {
            var scrollPosition = localStorage.getItem('scrollPosition');
            if (scrollPosition) {
                window.scrollTo(0, parseInt(scrollPosition));
                localStorage.removeItem('scrollPosition');
            }
        });

    </script>

    {{-- jQuery  --}}

    <script src="{{asset('template/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('template/assets/js/modernizr.min.js')}}"></script>
    <script src="{{asset('template/assets/js/detect.js')}}"></script>
    <script src="{{asset('template/assets/js/fastclick.js')}}"></script>
    <script src="{{asset('template/assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('template/assets/js/jquery.blockUI.js')}}"></script>
    <script src="{{asset('template/assets/js/waves.js')}}"></script>
    <script src="{{asset('template/assets/js/jquery.nicescroll.js')}}"></script>
    <script src="{{asset('template/assets/js/jquery.scrollTo.min.js')}}"></script>

{{-- App js --}}
    <script src="{{asset('template/assets/js/app.js')}}"></script>