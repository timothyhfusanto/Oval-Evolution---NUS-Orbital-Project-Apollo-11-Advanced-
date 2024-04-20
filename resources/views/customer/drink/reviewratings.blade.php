<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title> Reviews and Ratings</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
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
                white-space: normal;
                text-overflow: ellipsis;
            }
            .fa {
                color: #cbcbcb;
            }
            .fa:hover {
                color: #75E2FF;
            }
            .truncate {
                overflow: hidden;
                white-space: nowrap;
                text-overflow: ellipsis;
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
            .fillStar{
                color: #ffc700;
            }
            .notFillStar {
                color: #AEAEAE;
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0/dist/chartjs-plugin-datalabels.min.js"></script>


    </head>

    <body style="background-color: #EAEFF2; font-family:Roboto; color:black">
        <?php
            use App\Http\Controllers\CartController;
            use App\Models\reviewrating;
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

                <svg height="60"; width="100" style="position:relative; left: -15px; top: 10px; margin-right: 10px">  
                    <a href="{{ url('/about-us') }}">    
                        <text x="0" y="25" class="head-text" font-size="16" font-weight="bold">ABOUT US</text>
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

        <div class="container">
            @if(session()->has('addreview'))
                <div class="alert alert-success alert-dismissible fade show d-flex align-items-center mt-3" style="font-size:17px"role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <i class="mdi mdi-checkbox-marked-circle font-32"></i><strong class="pr-1"></strong> {{ session('addreview') }}
                </div>
            @elseif(session()->has('neverOrder'))
                <div class="alert alert-warning alert-dismissible fade show d-flex align-items-center mt-3" style="font-size:17px"role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <i class="mdi mdi-alert font-32"></i><strong class="pr-1"></strong> {{ session('neverOrder') }}
                </div>
            @elseif(session()->has('update'))
            <div class="alert alert-success alert-dismissible fade show d-flex align-items-center mt-3" style="font-size:17px"role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <i class="mdi mdi-checkbox-marked-circle font-32"></i><strong class="pr-1"></strong> {{ session('update') }}
            </div>
            @elseif(session()->has('delete'))
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
            
            <div class="row mt-4">
                <div class="col-md-4">
                    <img src="{{ asset('storage/' . $drink->image) }}" style="width:80%; max-width:fit-content; border-radius:10px; box-shadow: 0 4px 10px 0 black">
                </div>
                <div class="col-md-8 truncate-desc" style="font-size:40px">
                    {{$drink->name}}
                    <div style="font-size:20px;" class="truncate-desc">
                        {{$drink->description}}
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-2" style="color:black; font-size:40px; font-weight:bold">
                    Reviews
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4" style="border-right: 2px solid #E8E8E8">
                    <div style="font-size:23px;">
                        Total Reviews
                    </div>
                    @if(!empty($countRev))
                    <div class="mt-2" style="font-size: 42px; font-weight:bold">
                        {{$countRev}}
                    </div>
                    @else
                    <div class="mt-2" style="font-size: 15px;">
                        There is no review yet for this menu
                    </div>
                    @endif
                </div>
                <div class="col-md-4" style="justify-content:center; text-align:center; border-right:2px solid #E8E8E8">
                    <div style="font-size:23px;">
                        Average Rating
                    </div>
                    @if(!empty($averageRate))
                    <div class="mt-2" style="font-size: 42px; font-weight:bold; display:flex; align-items:center; justify-content:center; text-align:center;">
                        {{$averageRate}}
                        <div style="font-size:20px; color:#ffc700" class="ml-3">
                            @if($averageRate == 5.0)
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            @elseif($averageRate > 4 && $averageRate < 5)
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half"></i>
                            @elseif($averageRate == 4.0)
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            @elseif($averageRate > 3 && $averageRate < 4)
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half"></i>
                            @elseif($averageRate == 3.0)
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            @elseif($averageRate > 2 && $averageRate < 3)
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half"></i>
                            @elseif($averageRate == 2.0)
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            @elseif($averageRate > 1 && $averageRate < 2)
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half"></i>
                            @elseif($averageRate == 1.0)
                                <i class="fas fa-star"></i>
                            @elseif($averageRate > 0 && $averageRate < 1)
                                <i class="fas fa-star-half"></i>
                            @endif
                        </div>
                    </div>
                    @else 
                    <div class="mt-2" style="font-size: 15px;">
                        There is no review yet for this menu
                    </div>
                    @endif
                </div>                
                <div class="col-md-4" style="text-align:center; justify-content:center; align-items:center; display:flex">
                    <canvas id="myChart" style="width:90%;max-width:274px"></canvas>
                </div>
            </div>
            <div style="border-top:2px solid #E8E8E8;" class="mt-5 mb-4"></div>
            <?php
                if($user) {
                    $oneReview = reviewrating::where('user_id', $user->id)->where('drink_id',$drink->id)->first();
                };
            ?>
            <div class="row mt-5">
                <div class="col">
                    <div style="font-size:21px">
                        Your Review
                    </div>
                </div>
            </div>
            @if($user)
                @if(!$oneReview)
                <div class="row mb-5">
                    <div class="col mt-4">
                        <form class="py-2 px-4" action="{{route('drinkreview.store')}}" style="box-shadow: 0 0 10px 0 #ddd; border-radius:10px;background-color:white" method="POST" autocomplete="off">
                        @csrf
                            <p class="font-weight-bold ">Review</p>
                            <div class="form-group row">
                                <input type="hidden" name="drink_id" value="{{ $drink->id }}">
                                <div class="col">
                                    <div class="rate">
                                        <input type="radio" checked id="star5" class="rate" name="rating" value="5"/>
                                        <label for="star5" title="text">5 stars</label>
                                        <input type="radio" id="star4" class="rate" name="rating" value="4"/>
                                        <label for="star4" title="text">4 stars</label>
                                        <input type="radio" id="star3" class="rate" name="rating" value="3"/>
                                        <label for="star3" title="text">3 stars</label>
                                        <input type="radio" id="star2" class="rate" name="rating" value="2">
                                        <label for="star2" title="text">2 stars</label>
                                        <input type="radio" id="star1" class="rate" name="rating" value="1"/>
                                        <label for="star1" title="text">1 star</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <div class="col">
                                    <textarea class="form-control" name="comment" rows="5" placeholder="Comment" maxlength="500"></textarea>
                                </div>
                            </div>
                            <div class="mt-3 text-right">
                                <button class="btn btn-sm py-2 px-3 btn-black">>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                @else 
                <div class="row mb-5">
                    <div class="col mt-4">   
                        <div class="card" style="box-shadow: 0 0 10px 0 #ddd; border-radius:10px;background-color:white">
                            <div class="row mt-4 ml-2 mb-4 ">
                                <div class="col-md-4" style="font-size: 18px; ">
                                @if($user->profile_image !== null)
                                    <img src="{{ asset('storage/' . Auth::user()->profile_image) }}" class="rounded-circle mr-4" style="height:50px; width: 50px">
                                @else
                                    <img src="{{ url('template/assets/images/pp.png') }}" class="rounded-circle mr-4" style="height:50px; width: 50px">
                                @endif
                                    {{$oneReview->user_name}}
                                </div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4" style="font-size: 20px; text-align:right">
                                    <div class="mr-4">
                                        <i class="fas fa-ellipsis-v" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor: pointer;"></i>
                                        <div class="dropdown-menu">
                                            <form id="deleteReviewForm" action="{{ route('drinkreview.delete', ['id' => $drink->id, 'user_id' => $oneReview->user_id]) }}" method="post"> @csrf {{method_field('delete')}}
                                                <div class="dropdown-item" onclick="confirmDelete()">Delete review</div>     
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row ml-2 mb-3">
                                <div class="col" style="display: flex;">
                                    @for($i=1; $i<=$oneReview->star_rating; $i++)
                                    <i class="fas fa-star fillStar" style="font-size: 20px;"></i>
                                    @endfor  
                                    @for($j = $oneReview->star_rating+1; $j<=5; $j++)
                                    <i class="fas fa-star notFillStar" style="font-size:20px"></i>
                                    @endfor   
                                    @if($oneReview->updated_at->setTimezone('Asia/Singapore')->isToday())
                                        <div class="ml-3">
                                            Today {{$oneReview->updated_at->setTimezone('Asia/Singapore')->format('H:i:s')}}
                                        </div>
                                    @elseif($oneReview->updated_at->setTimezone('Asia/Singapore')->isYesterday())
                                        <div class="ml-3">
                                            Yesterday {{$oneReview->updated_at->setTimezone('Asia/Singapore')->format('H:i:s')}}
                                        </div>
                                    @else 
                                        <div class="ml-3">
                                            {{$oneReview->updated_at->setTimezone('Asia/Singapore')->format('d/m/Y')}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            @if($oneReview->comments !== null)
                                <div class="row mt-3">
                                    <div class="col ml-4">
                                        <p style=" color:#000; font-family:'Roboto'; font-size:17px">{{ $oneReview->comments }}</p>

                                    </div>
                                    
                                </div>
                            @endif     
                            <div class="row ml-2 mb-4 mt-3">
                                <div class="col-md-2">
                                    <a href="{{ route('drinkreview.edit', ['id' => $drink->id, 'user_id' => $oneReview->user_id]) }}">
                                        <button class="btn-roundabit btn-black">Edit review <i class="fas fa-pencil-alt"></i></button>
                                    </a>
                                </div>
                            </div>
                        </div>         
                    </div>
                </div>
                @endif
            @else
                <div class="row mb-5">
                    <div class="col mt-4">   
                        <div class="card" style="box-shadow: 0 0 10px 0 #ddd; border-radius:10px;background-color:white">
                            <div class="row mt-4" style="justify-content:center; font-size:20px">
                                Login to leave review
                            </div>
                            <div class="row mt-4 mb-4">
                                <div class="col-md-4"></div>
                                <div class="col-md-4" style="justify-content: center; text-align:center">
                                    <a href="/login-option" class="mr-4">
                                        <button class="btn-round btn-outline-black px-3" style="background-color: white; font-size:18px">Sign in</button>
                                    </a>

                                    <a href="/register-option">
                                        <button class="btn-round btn-black px-3" style="font-size:18px">Join Now</button>
                                    </a>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                        </div>         
                    </div>
                </div>
            @endif

            <div class="row mb-4">
                <div class="col">
                    <div style="font-size:21px">Customer Reviews</div>
                </div>
            </div>

            <div class="card mt-3" style="box-shadow: 0 0 10px 0 #ddd; border-radius:10px;background-color:white">
            @foreach($datashow as $key => $datashow0)
            @if($datashow0->comments !== null)
                @if(!empty($datashow0->star_rating))
                <div class="review-card mr-5 ml-5 mb-5 mt-5">
                    <div class="row" style="align-items: center;">
                        <div class="col-md-4 truncate" style=" font-size:18px; color:black; font-family:Roboto">
                                @if($datashow0->user_profile !== null)
                                    <img src="{{ asset('storage/' . $datashow0->user_profile) }}" class="rounded-circle mr-3" style="height:50px; width: 50px">
                                @else
                                    <img src="{{ url('template/assets/images/pp.png') }}" class="rounded-circle mr-3" style="height:50px; width: 50px">
                                @endif
                            {{$datashow0->user_name}}
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <input type="hidden" name="drink_id" value="{{ $datashow0->id }}">
                                <div class="col" style="display: flex;">
                                    @for($i=1; $i<=$datashow0->star_rating; $i++)
                                    <i class="fas fa-star fillStar" style="font-size: 20px;"></i>
                                    @endfor   
                                    @for($j = $datashow0->star_rating+1; $j<=5; $j++)
                                    <i class="fas fa-star notFillStar" style="font-size:20px"></i>
                                    @endfor   
                                        
                                    @if($datashow0->updated_at->setTimezone('Asia/Singapore')->isToday())
                                        <div class="ml-3">
                                            Today {{$datashow0->updated_at->setTimezone('Asia/Singapore')->format('H:i:s')}}
                                        </div>
                                    @elseif($datashow0->updated_at->setTimezone('Asia/Singapore')->isYesterday())
                                        <div class="ml-3">
                                            Yesterday {{$datashow0->updated_at->setTimezone('Asia/Singapore')->format('H:i:s')}}
                                        </div>
                                    @else 
                                        <div class="ml-3">
                                            {{$datashow0->updated_at->setTimezone('Asia/Singapore')->format('d/m/Y')}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @if($datashow0->comments !== null)
                    <div class="row mt-3">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <p style=" color:#000; font-family:'Open Sans'; font-size:15px">{{ $datashow0->comments }}</p>
                        </div>
                    </div>
                    @endif     
                    <div class="mt-3"style="border-bottom: 1px solid #E8E8E8;"></div>
                </div>
                @else 
                <div class="row mt-5" style="text-align:center; justify-content:center">
                    <div class="col" style="color: black; font-size:30px">
                        There is no review for this menu yet
                    </div>
                </div>
                @endif
            @endif
            @endforeach
            </div>
            <div class="row" style="text-align: center;">
                <div class="col">
                    <button id="view-more-btn" class="btn btn-black mt-2">See all reviews</button>
                    <button id="view-less-btn" class="btn btn-black mt-2" style="display: none;">View Less</button>
                </div>
            </div>          
        </div>
        @include('backend.layouts.footer')
    
        <script>
        var xValues = [String.fromCharCode(9733) + "5", String.fromCharCode(9733) + "4", String.fromCharCode(9733) + "3", String.fromCharCode(9733) + "2", String.fromCharCode(9733) + "1"];
        var yValues = [<?php echo $fiveStar; ?>, <?php echo $fourStar; ?>, <?php echo $threeStar; ?>, <?php echo $twoStar; ?>, <?php echo $oneStar; ?>];
        var barColors = ["#00A300", "#C576F6", "#ffc700", "#68BBE3", "#FF5C5C"];

        new Chart("myChart", {
            type: "horizontalBar",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues,
                    barThickness: 8,
                    
                }]
            },
            options: {
                layout: {
                    padding: {
                        left: 0,
                        right: 30,
                    }
                },
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                scales: {
                    xAxes: [{
                        display: false
                    }],
                    yAxes: [{
                        gridLines: {
                            display: false
                        }
                    }]
                },
                plugins: {
                    datalabels: {
                        anchor: 'end',
                        align: 'end',
                        font: {
                            weight: 'bold'
                        },
                        formatter: function(value) {
                            return value; // Display the value as the label
                        }
                    }
                }
            }
        });
    </script>

    <script>
        function confirmDelete() {
            Swal.fire({
                title: 'Are you sure?',
                text: 'This action cannot be undone.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel',
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('deleteReviewForm').submit();
                }
            });
        }
    </script>
            
        {{-- jQuery  --}}

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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

        <script>
            $(document).ready(function() {
                var allCards = $('.review-card');
                var visibleCards = allCards.slice(0, 4);
                var viewMoreBtn = $('#view-more-btn');
                var viewLessBtn = $('#view-less-btn');
                    
                allCards.hide(); // Initially hide all cards
                
                visibleCards.show(); // Show only the first 5 cards
        
                viewMoreBtn.on('click', function() {
                    allCards.show(); // Show all cards
                    viewMoreBtn.hide(); // Hide the "View More" button
                    viewLessBtn.show(); // Show the "View Less" button
                });
                
                viewLessBtn.on('click', function() {
                    allCards.hide(); // Hide all cards
                    visibleCards.show(); // Show only the first 5 cards
                    viewLessBtn.hide(); // Hide the "View Less" button
                    viewMoreBtn.show(); // Show the "View More" button
                });
            });
        </script>
    </body>
</html>

   
