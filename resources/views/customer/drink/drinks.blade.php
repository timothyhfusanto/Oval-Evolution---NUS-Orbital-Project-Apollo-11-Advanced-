<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Oval Evolution Drinks</title>

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
            
            .fa {
                color: #cbcbcb;
            }

            .fa:hover {
                color: #FF5C5C;
            }
            .filledHeart {
                color: #FF5C5C;
            }
            .truncate {
                overflow: hidden;
                white-space: nowrap;
                text-overflow: ellipsis;
            }
            .truncate-desc {
                overflow: hidden;
                display: -webkit-box;
                -webkit-line-clamp: 3; /* Number of lines to show */
                -webkit-box-orient: vertical;
                white-space: pre-wrap;
            }
            .rate {
                float: left;
                height: 46px;
                padding: 0 10px;
                }
                .rate:not(:checked) > input {
                position:absolute;
                display: none;
                }
                .rate:not(:checked) > label {
                float:right;
                width:1em;
                overflow:hidden;
                white-space:nowrap;
                cursor:pointer;
                font-size:30px;
                color:#ccc;
                }
                .rated:not(:checked) > label {
                float:right;
                width:1em;
                overflow:hidden;
                white-space:nowrap;
                cursor:pointer;
                font-size:30px;
                color:#ccc;
                }
                .rate:not(:checked) > label:before {
                content: '★ ';
                }
                .rate > input:checked ~ label {
                color: #ffc700;
                }
                .rate:not(:checked) > label:hover,
                .rate:not(:checked) > label:hover ~ label {
                color: #deb217;
                }
                .rate > input:checked + label:hover,
                .rate > input:checked + label:hover ~ label,
                .rate > input:checked ~ label:hover,
                .rate > input:checked ~ label:hover ~ label,
                .rate > label:hover ~ input:checked ~ label {
                color: #c59b08;
                }
                .star-rating-complete{
                    color: #c59b08;
                }
                .rating-container .form-control:hover, .rating-container .form-control:focus{
                background: #fff;
                border: 1px solid #ced4da;
                }
                .rating-container textarea:focus, .rating-container input:focus {
                color: #000;
                }
                .rated {
                float: left;
                height: 46px;
                padding: 0 10px;
                }
                .rated:not(:checked) > input {
                position:absolute;
                display: none;
                }
                .rated:not(:checked) > label {
                float:right;
                width:1em;
                overflow:hidden;
                white-space:nowrap;
                cursor:pointer;
                font-size:30px;
                color:#ffc700;
                }
                .rated:not(:checked) > label:before {
                content: '★ ';
                }
                .rated > input:checked ~ label {
                color: #ffc700;
                }
                .rated:not(:checked) > label:hover,
                .rated:not(:checked) > label:hover ~ label {
                color: #deb217;
                }
                .rated > input:checked + label:hover,
                .rated > input:checked + label:hover ~ label,
                .rated > input:checked ~ label:hover,
                .rated > input:checked ~ label:hover ~ label,
                .rated > label:hover ~ input:checked ~ label {
                color: #c59b08;
                }
                .zoom{
                    transition: 0.3s;
                }
                .zoom:hover{
                    transform: scale(1.03);
                }
                .head-text text {
                    fill:#979797;
                }
                .head-text text:hover {
                    fill: black;
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
        <link href="{{asset('/template/assets/images/ovalevolution.png')}}" rel ="icon" type="image/png">
        <link href="{{asset('template/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('template/assets/plugins/animate/animate.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('template/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('template/assets/css/style.css')}}" rel="stylesheet" type="text/css">


    </head>
    <body style="background-color:#EAEFF2; font-family:Roboto;">
        <?php
            use App\Http\Controllers\CartController;
            use App\Models\drinkfavourite;
            use Illuminate\Support\Facades\Auth;
            $user = Auth::user();
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
                    <div type="button" style="position:relative; left: -64px; top: 0px; margin-right: 10px; color:black;  font-size:16px; 
                    font-weight:bold" class="dropdown-toggle head-text" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        DRINKS
                    </div>                
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="/drinks">All Drinks</a>
                        <a class="dropdown-item" href="/drinkfavourites">Favourites <i class="fas fa-heart" style="position:relative; 
                        font-size:13px; top:0px; left:30px"></i></a>
                    </div>      
                </div> 

                <svg height="60"; width="100" class="head-text" style="position:relative; left: -15px; top: 10px; margin-right: 10px">  
                    <a href="{{ url('/about-us') }}">    
                        <text x="0" y="25" font-size="16" font-weight="bold">ABOUT US</text>
                    </a>
                </svg>

                <a href="/add-to-cart">
                    <div class="ml-4">
                        <i class="fas fa-shopping-cart" style="font-size:30px"></i>
                        <span class="badge badge-success noti-icon-badge" style="position: relative; top:-25px; left:-5px; font-size:15px">{{$total}}</span>
                    </div>
                </a>

                <div class="search-bar ml-5">
                    <form action="{{route('drinksearched.index')}}" method="get">
                        @csrf
                        <div class="input-group">
                            <input required name="product_name" type="search" class="form-control" id="search_product" placeholder="Search drink..." aria-label="Username" aria-describedby="basic-addon1">
                            <button class="input-group-text btn-black btn" type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                </div>

                
            </div>
            <div class="flex items-center">
            
                @if (Route::has('login'))
                
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block" style="position:relative; left:590px;">
                    @auth
                    
                    <ul class="list-inline float-right mb-0" style="position:relative; top: -112px; left:720px">
                        
                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light nav-user" data-toggle="dropdown" href="/" role="button" aria-haspopup="false" aria-expanded="false">
                                @if($user->profile_image !== null)
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

        <style>
            .review-star {
                color: #ffc700;
            }
            .review-star:hover {
                color: #D1D100;
            }
        </style>
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show d-flex align-items-center mt-3" style="font-size:17px"role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <i class="mdi mdi-checkbox-marked-circle font-32"></i><strong class="pr-1"></strong> {{ session('success') }}
            </div>
        @endif
        @if(session()->has('delAcc'))
            <div class="alert alert-success alert-dismissible fade show d-flex align-items-center mt-3" style="font-size:17px"role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <i class="mdi mdi-checkbox-marked-circle font-32"></i><strong class="pr-1"></strong> {{ session('delAcc') }}
            </div>
        @endif
        @if(session()->has('addToCart'))
            <div class="alert alert-success alert-dismissible fade show d-flex align-items-center mt-3" style="font-size:17px"role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <i class="mdi mdi-checkbox-marked-circle font-32"></i><strong class="pr-1"></strong> {{ session('addToCart') }}
            </div>
        @endif
        @if(session()->has('delete'))
            <div class="alert alert-success alert-dismissible fade show d-flex align-items-center mt-3" style="font-size:17px"role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <i class="mdi mdi-checkbox-marked-circle font-32"></i><strong class="pr-1"></strong> {{ session('delete') }}
            </div>
        @endif
        @if(session()->has('searchNotFound'))
            <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center mt-3" style="font-size:17px"role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <i class="mdi mdi-close-circle font-32"></i><strong class="pr-1"></strong> {{ session('searchNotFound') }}
            </div>
        @endif
        @if(count($dataindex) === 0)
            <img src="{{ url('/template/assets/images/man-removebg-preview.png') }}" style="width:250px; height:250px; position:relative; 
            left:610px; top:100px">
            <svg height="200"; width="3000" style="position:relative; left:560px; top: 0px"> 
                <a href="{{ url('/') }}">                                  
                    <text x="0" y="150" fill="black" font-size="25" font-weight="bold">No menu found or created yet :(</text>
                </a>
            </svg>	
        @else
            <div class="row ml-5 mr-5">
                @foreach($dataindex as $key => $dataindex0)
                <?php 
                    if($user) {
                        $exist = drinkfavourite::where('user_id', $user->id)->where('drink_id', $dataindex0->id)->first();
                    };
                ?>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="card m-b-30 mt-5 mb-4" style="border-radius: 10px; height:450px; margin-left:10px; margin-right:10px; overflow:hidden">
                    <a href="{{route('drink.show' , [$dataindex0->id])}}">
                        <img class="card-img-top img-fluid zoom" style="width: 320px; height:200px; border-radius: 30px; padding:13px;
                        box-sizing:border-box;" src="{{ asset('storage/' . $dataindex0->image) }}" alt="Card image cap">
                    </a>
                        <div class="card-body" style="background-color: white;">
                            <div style="display: flex;">
                                <h4 class="card-title truncate" style="font-size:18px; color:black; width:78%" onclick="readMore(this)">{{$dataindex0->name}}</h4>
                                <h4 class="card-title truncate" style="text-align: right; font-size:18px; color:black">$ {{$dataindex0->price_in_sgd}}</h4> 
                            </div>                       
                            <p class="card-text truncate-desc" style="width:100%; height:65px;">{{$dataindex0->description}}</p>
                            <div style="display: flex; justify-content: space-between;">
                            @if($user)
                                @if($exist)
                                <form id="favouriteForm{{ $key }}" action="{{ route('drinkfavourite.remove') }}" method="post">
                                    @csrf {{method_field('delete')}}
                                    <input type="hidden" value="{{$dataindex0->id}}" name="drink_id">
                                    <i class="fa fa-heart favouriteIcon filledHeart" data-form-id="{{ $key }}" style="position:relative; cursor: pointer; font-size:25px;"></i>
                                </form>
                                @else 
                                <form id="favouriteForm{{ $key }}" action="{{ route('drinkfavourite.add') }}" method="post">
                                    @csrf 
                                    <input type="hidden" value="{{$dataindex0->id}}" name="drink_id">
                                    <i class="fa fa-heart favouriteIcon" data-form-id="{{ $key }}" style="position:relative; cursor: pointer; font-size:25px;"></i>
                                </form>
                                @endif
                            @else
                            <a href="/favourites">
                                <i class="fa fa-heart" style="position:relative; cursor: pointer; font-size:25px;"></i>
                            </a>
                            @endif
                                <button class="btn-black btn-round">
                                <a href="{{route('drinkreview.show', [$dataindex0->id])}}">
                                    <div style="display: flex; justify-content: flex-end;">
                                        <div style="font-size:17px; color:white" class="mr-2">
                                        @if($dataindex0->reviews->count() !== 0)
                                            @php
                                                $averageRate = round($dataindex0->reviews->sum('star_rating') / $dataindex0->reviews->count(), 1);
                                            @endphp
                                            {{$averageRate}}
                                        @else
                                            -
                                        @endif
                                            <i class="fas fa-star review-star" ></i>
                                        </div>
                                    </div>
                                </a>
                                </button>
                            </div>
                            <button class="btn btn-roundabit btn-black waves-effect waves-light mt-4" data-toggle="modal" data-target=".bd-example-modal-form-{{$key}}" 
                            style=" width:100%; font-weight:bold">Customize 
                                <i class="fas fa-pencil-alt ml-1" style="position:relative; cursor: pointer; font-size:13px; color:white"></i>        
                            </button>

                            <div class="modal fade bd-example-modal-form-{{$key}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content" style="border-radius:20px;">
                                        <div class="modal-header">
                                            <h4 class="modal-title" style="text-align: center;" id="exampleModalform">Customize your dish</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true" class="text-dark">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-12" style="text-align: center;">
                                                    <img class="card-img-top img-fluid" style="max-width: 70%; max-height:100%; border-radius: 30px; padding:13px;
                                                    box-sizing:border-box;" src="{{ asset('storage/' . $dataindex0->image) }}" alt="Card image cap">    
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12" style="text-align: center; display:flex">
                                                    <h4 class="card-title mt-4 truncate" style="font-size:28px; color:#2E2E2E; text-align :left; width:380px">{{$dataindex0->name}}</h4>
                                                    <h4 class="card-title mt-4 mr-3" style="font-size:23px; color:#2E2E2E; text-align :right; flex-grow:1">${{$dataindex0->price_in_sgd}}</h4>
                                                </div>
                                            </div>
                                            
                                            <form action="{{route('addToCart')}}" method="post">
                                                @csrf
                                                @if(!empty($dataindex0->cust_head1))
                                                    @if($dataindex0->requirements1 == 'yes')
                                                        <div class="row">
                                                            <div class="col-md-12">                
                                                                <div class="form-group">                                             
                                                                    <label class="control-label mt-4" style="font-size:18px">{{$dataindex0->cust_head1}}</label>
                                                                    <label class="control-label mt-4" style="font-size:14px">(choose 1)</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="row">
                                                            <div class="col-md-12">                
                                                                <div class="form-group">                                             
                                                                    <label class="control-label mt-4" style="font-size:18px">{{$dataindex0->cust_head1}}</label>
                                                                    <label class="control-label mt-4" style="font-size:14px">(up to {{$dataindex0->requirements1}} choices)</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    @php
                                                        $json1 = explode(', ',$dataindex0->head1_items);    
                                                        $jsonprice1 = explode(', ' ,$dataindex0->head1_price);    
                                                    @endphp
                                                    @if($dataindex0->requirements1 == 'yes')
                                                        <div class="btn-group-toggle" data-toggle="buttons">
                                                        @foreach($json1 as $p=>$json0)
                                                            <label class="btn btn-round btn-outline-black mb-3" style="width:200px; height:36px; display:flex; justify-content: space-between;">
                                                                <div class="truncate" style="width:100px; text-align:left">
                                                                    <input type="radio" name="options1" value="{{$json0}}" @if ($loop->first) checked @endif>{{$json0}}
                                                                </div>
                                                                @if(isset($jsonprice1[$p]) && !empty($jsonprice1[$p]))
                                                                <label class="" style="font-size: 14px;text-align: right; width: 120px; margin-left: 10px;">+ ${{$jsonprice1[$p]}}</label>
                                                                @endif
                                                            </label>
                                                        @endforeach
                                                        </div>
                                                    @else
                                                        @foreach($json1 as $p => $json0)
                                                            <div style="display: flex; align-items: center;" class="mb-3">
                                                                <label class="" style="font-size: 17px; color: black; text-align: left; flex: 1;" for="checkbox{{$p}}">{{$json0}}</label>
                                                                @if(isset($jsonprice1[$p]) && !empty($jsonprice1[$p]))
                                                                    <label class="" style="font-size: 14px; color: black; text-align: right; width: 50px; margin-left: 10px;">+ ${{$jsonprice1[$p]}}</label>
                                                                @endif
                                                                <input class="ml-3 mb-2" style="text-align: right; width: 20px; height: 20px;" type="checkbox" id="checkbox{{$p}}" name="checkOptions1[]" value="{{$json0}}">
                                                            </div>
                                                        @endforeach
                                                        
                                                        <script>
                                                            var checkboxes1 = document.querySelectorAll('input[name="checkOptions1[]"]');
                                                            var json0Value1 = parseInt('{{$dataindex0->requirements1}}');

                                                            checkboxes1.forEach(function(checkbox) {
                                                                checkbox.addEventListener('change', function() {
                                                                    var checkedCount = 0;
                                                                    checkboxes1.forEach(function(checkbox) {
                                                                        if (checkbox.checked) {
                                                                            checkedCount++;
                                                                        }
                                                                    });

                                                                    if (checkedCount === json0Value1) {
                                                                        checkboxes1.forEach(function(checkbox) {
                                                                            if (!checkbox.checked) {
                                                                                checkbox.disabled = true;
                                                                            }
                                                                        });
                                                                    } else {
                                                                        // Enable all checkboxes if the limit is not reached
                                                                        checkboxes1.forEach(function(checkbox) {
                                                                            checkbox.disabled = false;
                                                                        });
                                                                    }
                                                                });
                                                            });
                                                        </script>
                                                    @endif
                                                @endif
                                                    

                                                @if(!empty($dataindex0->cust_head2))
                                                    <div style="border-top: 1px solid #ccc; margin: 10px 0;"></div>
                                                    @if($dataindex0->requirements2 == 'yes')
                                                        <div class="row">
                                                            <div class="col-md-12">                
                                                                <div class="form-group">                                             
                                                                    <label class="control-label mt-4" style="font-size:18px">{{$dataindex0->cust_head2}}</label>
                                                                    <label class="control-label mt-4" style="font-size:14px">(choose 1)</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="row">
                                                            <div class="col-md-12">                
                                                                <div class="form-group">                                             
                                                                    <label class="control-label mt-4" style="font-size:18px">{{$dataindex0->cust_head2}}</label>
                                                                    <label class="control-label mt-4" style="font-size:14px">(up to {{$dataindex0->requirements2}} choices)</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    @php
                                                        $json1 = explode(', ' ,$dataindex0->head2_items);    
                                                        $jsonprice1 = explode(', ' ,$dataindex0->head2_price);    
                                                    @endphp
                                                    @if($dataindex0->requirements2 == 'yes')
                                                        <div class="btn-group-toggle" data-toggle="buttons">
                                                        @foreach($json1 as $p=>$json0)
                                                            <label class="btn btn-round btn-outline-black mb-3" style="width:200px; height:36px; display:flex; justify-content: space-between;">
                                                                <div class="truncate" style="width:100px; text-align:left">
                                                                    <input type="radio" name="options2" value="{{$json0}}" @if ($loop->first) checked @endif>{{$json0}}
                                                                </div>
                                                                @if(isset($jsonprice1[$p]) && !empty($jsonprice1[$p]))
                                                                <label class="" style="font-size: 14px; color: black; text-align: right; width: 120px; margin-left: 10px;">+ ${{$jsonprice1[$p]}}</label>
                                                                @endif
                                                            </label>
                                                        @endforeach
                                                        </div>
                                                    @else
                                                    @foreach($json1 as $p => $json0)
                                                        <div style="display: flex; align-items: center;" class="mb-3">
                                                            <label class="" style="font-size: 17px; color: black; text-align: left; flex: 1;" for="checkbox{{$p}}">{{$json0}}</label>
                                                            @if(isset($jsonprice1[$p]) && !empty($jsonprice1[$p]))
                                                                <label class="" style="font-size: 14px; color: black; text-align: right; width: 50px; margin-left: 10px;">+ ${{$jsonprice1[$p]}}</label>
                                                            @endif
                                                            <input class="ml-3 mb-2" style="text-align: right; width: 20px; height:20px" type="checkbox" id="checkbox{{$p}}" name="checkOptions2[]" value="{{$json0}}">
                                                        </div>
                                                    @endforeach
                                                        <script>
                                                            var checkboxes2 = document.querySelectorAll('input[name="checkOptions2[]"]');
                                                            var json0Value2 = parseInt('{{$dataindex0->requirements2}}');

                                                            checkboxes2.forEach(function(checkbox) {
                                                                checkbox.addEventListener('change', function() {
                                                                    var checkedCount = 0;
                                                                    checkboxes2.forEach(function(checkbox) {
                                                                        if (checkbox.checked) {
                                                                            checkedCount++;
                                                                        }
                                                                    });

                                                                    if (checkedCount === json0Value2) {
                                                                        checkboxes2.forEach(function(checkbox) {
                                                                            if (!checkbox.checked) {
                                                                                checkbox.disabled = true;
                                                                            }
                                                                        });
                                                                    } else {
                                                                        checkboxes.forEach(function(checkbox) {
                                                                            checkbox.disabled = false;
                                                                        });
                                                                    }
                                                                });
                                                            });
                                                        </script>
                                                    @endif
                                                @endif

                                                @if(!empty($dataindex0->cust_head3))
                                                    <div style="border-top: 1px solid #ccc; margin: 10px 0;"></div>
                                                    @if($dataindex0->requirements3 == 'yes')
                                                        <div class="row">
                                                            <div class="col-md-12">                
                                                                <div class="form-group">                                             
                                                                    <label class="control-label mt-4" style="font-size:18px">{{$dataindex0->cust_head3}}</label>
                                                                    <label class="control-label mt-4" style="font-size:14px">(choose 1)</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="row">
                                                            <div class="col-md-12">                
                                                                <div class="form-group">                                             
                                                                    <label class="control-label mt-4" style="font-size:18px">{{$dataindex0->cust_head3}}</label>
                                                                    <label class="control-label mt-4" style="font-size:14px">(up to {{$dataindex0->requirements3}} choices)</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    @php
                                                        $json1 = explode(', ' ,$dataindex0->head3_items);    
                                                        $jsonprice1 = explode(', ' ,$dataindex0->head3_price);    
                                                    @endphp
                                                    @if($dataindex0->requirements3 == 'yes')
                                                        <div class="btn-group-toggle" data-toggle="buttons">
                                                        @foreach($json1 as $p=>$json0)
                                                            <label class="btn btn-round btn-outline-black mb-3" style="width:200px; height:36px; display:flex; justify-content: space-between;">
                                                                <div class="truncate" style="width:100px; text-align:left">
                                                                    <input type="radio" name="options3" value="{{$json0}}" @if ($loop->first) checked @endif>{{$json0}}
                                                                </div>
                                                                @if(isset($jsonprice1[$p]) && !empty($jsonprice1[$p]))
                                                                <label class="" style="font-size: 14px; color: black; text-align: right; width: 120px; margin-left: 10px;">+ ${{$jsonprice1[$p]}}</label>
                                                                @endif
                                                            </label>
                                                        @endforeach
                                                        </div>
                                                    @else
                                                    @foreach($json1 as $p => $json0)
                                                        <div style="display: flex; align-items: center;" class="mb-3">
                                                            <label class="" style="font-size: 17px; color: black; text-align: left; flex: 1;" for="checkbox{{$p}}">{{$json0}}</label>
                                                            @if(isset($jsonprice1[$p]) && !empty($jsonprice1[$p]))
                                                                <label class="" style="font-size: 14px; color: black; text-align: right; width: 50px; margin-left: 10px;">+ ${{$jsonprice1[$p]}}</label>
                                                            @endif
                                                            <input class="ml-3 mb-2" style="text-align: right; width: 20px; height: 20px;" type="checkbox" id="checkbox{{$p}}" name="checkOptions3[]" value="{{$json0}}">
                                                        </div>
                                                    @endforeach
                                                        <script>
                                                            var checkboxes3 = document.querySelectorAll('input[name="checkOptions3[]"]');
                                                            var json0Value3 = parseInt('{{$dataindex0->requirements3}}');

                                                            checkboxes3.forEach(function(checkbox) {
                                                                checkbox.addEventListener('change', function() {
                                                                    var checkedCount = 0;
                                                                    checkboxes3.forEach(function(checkbox) {
                                                                        if (checkbox.checked) {
                                                                            checkedCount++;
                                                                        }
                                                                    });
                                                            

                                                                    if (checkedCount === json0Value3) {
                                                                        checkboxes3.forEach(function(checkbox) {
                                                                            if (!checkbox.checked) {
                                                                                checkbox.disabled = true;
                                                                            }
                                                                        });
                                                                    } else {
                                                                        checkboxes3.forEach(function(checkbox) {
                                                                            checkbox.disabled = false;
                                                                        });
                                                                    }
                                                                });
                                                            });
                                                        </script>
                                                    @endif
                                                @endif

                                                @if(!empty($dataindex0->cust_head4))
                                                <div style="border-top: 1px solid #ccc; margin: 10px 0;"></div>
                                                    @if($dataindex0->requirements4 == 'yes')
                                                        <div class="row">
                                                            <div class="col-md-12">                
                                                                <div class="form-group">                                             
                                                                    <label class="control-label mt-4" style="font-size:18px">{{$dataindex0->cust_head4}}</label>
                                                                    <label class="control-label mt-4" style="font-size:14px">(choose 1)</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="row">
                                                            <div class="col-md-12">                
                                                                <div class="form-group">                                             
                                                                    <label class="control-label mt-4" style="font-size:18px">{{$dataindex0->cust_head4}}</label>
                                                                    <label class="control-label mt-4" style="font-size:14px">(up to {{$dataindex0->requirements4}} choices)</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    @php
                                                        $json1 = explode(', ' ,$dataindex0->head4_items);    
                                                        $jsonprice1 = explode(', ' ,$dataindex0->head4_price);    
                                                    @endphp
                                                    @if($dataindex0->requirements4 == 'yes')
                                                        <div class="btn-group-toggle" data-toggle="buttons">
                                                        @foreach($json1 as $p=>$json0)
                                                            <label class="btn btn-round btn-outline-black mb-3" style="width:200px; height:36px; display:flex; justify-content: space-between;">
                                                                <div class="truncate" style="width:100px; text-align:left">
                                                                    <input type="radio" name="options4" value="{{$json0}}" @if ($loop->first) checked @endif>{{$json0}}
                                                                </div>
                                                                @if(isset($jsonprice1[$p]) && !empty($jsonprice1[$p]))
                                                                <label class="" style="font-size: 14px;text-align: right; width: 120px; margin-left: 10px;">+ ${{$jsonprice1[$p]}}</label>
                                                                @endif
                                                            </label>
                                                        @endforeach
                                                        </div>
                                                    @else
                                                        @foreach($json1 as $p => $json0)
                                                            <div style="display: flex; align-items: center;" class="mb-3">
                                                                <label class="" style="font-size: 17px; color: black; text-align: left; flex: 1;" for="checkbox{{$p}}">{{$json0}}</label>
                                                                @if(isset($jsonprice1[$p]) && !empty($jsonprice1[$p]))
                                                                    <label class="" style="font-size: 14px; color: black; text-align: right; width: 50px; margin-left: 10px;">+ ${{$jsonprice1[$p]}}</label>
                                                                @endif
                                                                <input class="ml-3 mb-2" style="text-align: right; width: 20px; height: 20px;" type="checkbox" id="checkbox{{$p}}" name="checkOptions4[]" value="{{$json0}}">
                                                            </div>
                                                        @endforeach
                                                        <script>
                                                            var checkboxes4 = document.querySelectorAll('input[name="checkOptions4[]"]');
                                                            var json0Value4 = parseInt('{{$dataindex0->requirements4}}');

                                                            checkboxes4.forEach(function(checkbox) {
                                                                checkbox.addEventListener('change', function() {
                                                                    var checkedCount = 0;
                                                                    checkboxes4.forEach(function(checkbox) {
                                                                        if (checkbox.checked) {
                                                                            checkedCount++;
                                                                        }
                                                                    });

                                                                    if (checkedCount === json0Value4) {
                                                                        checkboxes4.forEach(function(checkbox) {
                                                                            if (!checkbox.checked) {
                                                                                checkbox.disabled = true;
                                                                            }
                                                                        });
                                                                    } else {
                                                                        // Enable all checkboxes if the limit is not reached
                                                                        checkboxes4.forEach(function(checkbox) {
                                                                            checkbox.disabled = false;
                                                                        });
                                                                    }
                                                                });
                                                            });
                                                        </script>
                                                    @endif
                                                @endif

                                                @if(!empty($dataindex0->cust_head5))
                                                <div style="border-top: 1px solid #ccc; margin: 10px 0;"></div>
                                                    @if($dataindex0->requirements5 == 'yes')
                                                        <div class="row">
                                                            <div class="col-md-12">                
                                                                <div class="form-group">                                             
                                                                    <label class="control-label mt-4" style="font-size:18px">{{$dataindex0->cust_head5}}</label>
                                                                    <label class="control-label mt-4" style="font-size:14px">(choose 1)</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="row">
                                                            <div class="col-md-12">                
                                                                <div class="form-group">                                             
                                                                    <label class="control-label mt-4" style="font-size:18px">{{$dataindex0->cust_head5}}</label>
                                                                    <label class="control-label mt-4" style="font-size:14px">(up to {{$dataindex0->requirements5}} choices)</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    @php
                                                        $json1 = explode(', ' ,$dataindex0->head5_items);    
                                                        $jsonprice1 = explode(', ' ,$dataindex0->head5_price);
                                                    @endphp
                                                    @if($dataindex0->requirements5 == 'yes')
                                                        <div class="btn-group-toggle" data-toggle="buttons">
                                                        @foreach($json1 as $p=>$json0)
                                                            <label class="btn btn-round btn-outline-black mb-3" style="width:200px; height:36px; display:flex; justify-content: space-between;">
                                                                <div class="truncate" style="width:100px; text-align:left">
                                                                    <input type="radio" name="options5" value="{{$json0}}" @if ($loop->first) checked @endif>{{$json0}}
                                                                </div>
                                                                @if(isset($jsonprice1[$p]) && !empty($jsonprice1[$p]))
                                                                <label class="" style="font-size: 14px;text-align: right; width: 120px; margin-left: 10px;">+ ${{$jsonprice1[$p]}}</label>
                                                                @endif
                                                            </label>
                                                        @endforeach
                                                        </div>
                                                    @else
                                                        @foreach($json1 as $p => $json0)
                                                            <div style="display: flex; align-items: center;" class="mb-3">
                                                                <label class="" style="font-size: 17px; color: black; text-align: left; flex: 1;" for="checkbox{{$p}}">{{$json0}}</label>
                                                                @if(isset($jsonprice1[$p]) && !empty($jsonprice1[$p]))
                                                                    <label class="" style="font-size: 14px; color: black; text-align: right; width: 50px; margin-left: 10px;">+ ${{$jsonprice1[$p]}}</label>
                                                                @endif
                                                                <input class="ml-3 mb-2" style="text-align: right; width: 20px; height: 20px;" type="checkbox" id="checkbox{{$p}}" name="checkOptions5[]" value="{{$json0}}">
                                                            </div>
                                                        @endforeach
                                                        <script>
                                                            var checkboxes5 = document.querySelectorAll('input[name="checkOptions5[]"]');
                                                            var json0Value5 = parseInt('{{$dataindex0->requirements5}}');

                                                            checkboxes5.forEach(function(checkbox) {
                                                                checkbox.addEventListener('change', function() {
                                                                    var checkedCount = 0;
                                                                    checkboxes5.forEach(function(checkbox) {
                                                                        if (checkbox.checked) {
                                                                            checkedCount++;
                                                                        }
                                                                    });

                                                                    if (checkedCount === json0Value5) {
                                                                        checkboxes5.forEach(function(checkbox) {
                                                                            if (!checkbox.checked) {
                                                                                checkbox.disabled = true;
                                                                            }
                                                                        });
                                                                    } else {
                                                                        // Enable all checkboxes if the limit is not reached
                                                                        checkboxes5.forEach(function(checkbox) {
                                                                            checkbox.disabled = false;
                                                                        });
                                                                    }
                                                                });
                                                            });
                                                        </script>
                                                    @endif
                                                @endif

                                                <div style="border-top: 1px solid #ccc; margin: 10px 0;"></div>
                                                <div class="mb-3 mt-3">
                                                    <textarea class="form-control" id="notes" name="notes" rows="4" placeholder="Notes :"></textarea>
                                                </div>

                                                <div style="border-top: 1px solid #ccc;" class="mt-4"></div> <!-- Add this div with custom CSS styles -->
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label class="mt-5" style="color:black; font-size:18px; ">Quantity :</label>
                                                    </div>
                                                    <div class="col-md-4"></div>
                                                    <div class="col-md-4">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <input style="font-size:15px; position:relative; top:46px"type='button' value='-' class='qtyminus minus btn-black' field='quantity'/>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type='text' name='quantity' class='qty form-control mt-4' value="1"style="position:relative; top:19px">
                                                            </div>
                                                            <div class="col-md-3">
                                                                <input style="font-size:15px; position:relative; top:46px; left:-10px"type='button' value='+' class='qtyplus plus btn-black' field='quantity'/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer mt-4">
                                                <input name="drink_id" value="{{$dataindex0->id}}" class="hidden">
                                                <button type="submit" class="btn btn-raised btn-roundabit btn-black mr-2 mt-3">Add to cart +</button>
                                                <button type="button" class="btn btn-raised btn-roundabit btn-danger mt-3" data-dismiss="modal">Close</button>
                                            </div>
                                        </form> 
                                    </div>        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if(($key + 1) % 4 === 0)
                    </div>
                    <div class="row ml-5 mr-5">
                @endif
                @endforeach
            </div>
        @endif
        @include('backend.layouts.footer')
    </body>
</html>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

<script>
  $( function() {
    var availableTags = [];
    $.ajax({
        method: "GET",
        url: "/drink-list",
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

const favouriteIcons = document.querySelectorAll('.favouriteIcon');

favouriteIcons.forEach(function(icon) {
    icon.addEventListener('click', function() {
        const formId = this.getAttribute('data-form-id');
        const form = document.getElementById('favouriteForm' + formId);
        form.submit();
    });
});

    $('.qtyminus').click(function() {
        var fieldName = $(this).attr('field');
        var $quantityInput = $("input[name='" + fieldName + "']");
        var currentValue = parseInt($quantityInput.val());
        
        if (!isNaN(currentValue) && currentValue > 1) {
            $quantityInput.val(currentValue - 1);
        }
    });

    $('.qtyplus').click(function() {
        var fieldName = $(this).attr('field');
        var $quantityInput = $("input[name='" + fieldName + "']");
        var currentValue = parseInt($quantityInput.val());
        
        if (!isNaN(currentValue)) {
            $quantityInput.val(currentValue + 1);
        } else {
            $quantityInput.val(1);
        }
    });
</script>

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-640f276f93b4aabd"></script>

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

    