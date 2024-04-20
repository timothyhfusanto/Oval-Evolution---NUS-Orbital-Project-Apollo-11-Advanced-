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
            .head-text {
                color : #979797;
            }
            .head-text:hover {
                color: black;
            }
            #slider {
                background-size: cover;
                margin:0;
                padding:0;
                overflow: hidden;
            }
            #slider a {
                position: absolute;
            }
            #slider a:nth-of-type(1) {
                animation-name: fader;
                animation-delay: 4s;
                animation-duration:2s;
                z-index:-10;
            }
            #slider a:nth-of-type(2) {
                z-index:-20;
            }
            #slider a:nth-of-type(n+3) {
                display:none;
            }
            @keyframes fader {
                from{opacity:1.0;}
                to{opacity:0.0};
            }
            #slider img {
                width: 100%;
                height: 100%;
                object-fit: cover; 
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
    <body style="background-color:white; color:black; font-family:Roboto;">
        <div id="slider">
            <a href="1.jpg"><img class="img-fluid"src="{{url('template/assets/images/dining.png')}}"></a>
            <a href="3.jpg"><img class="img-fluid"src="{{url('template/assets/images/burgerknife.png')}}"></a>
            <a href="2.jpg"><img class="img-fluid"src="{{url('template/assets/images/bgus.png')}}"></a>
            <a href="4.jpg"><img class="img-fluid"src="{{url('template/assets/images/healthy.png')}}"></a>
        </div>

        <?php
            use App\Http\Controllers\CartController;
            use App\Models\favourite;
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

                <svg height="60"; width="100" style="position:relative; left: -15px; top: 10px; margin-right: 10px">  
                    <a href="{{ url('/about-us') }}">    
                        <text x="0" y="25" fill="black" font-size="16" font-weight="bold">ABOUT US</text>
                    </a>
                </svg>


                <a href="/add-to-cart">
                    <div class="ml-4">
                        <i class="fas fa-shopping-cart" style="font-size:30px"></i>
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
        <div class="row" style="background-color: white; margin-top:620px">
            <div class="col">
                <div class="container">
                    <div class="row" style="margin-top:100px">
                        <div class="col-md-6 " style="margin-bottom:200px">
                            <div class="row" style="margin-top:170px;">
                                <div class="col" style="font-size:27px; font-weight:bold">
                                    Welcome to Oval Evolution <i class="mdi mdi-food"></i>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col" style="font-size:20px; letter-spacing:2px; justify-content:center; text-align:justify">
                                A place where culinary excellence meets warm hospitality. Established in 2023, our restaurant has been serving western
                                cuisine to our valued guests for 3 months. Our passion for food and dedication to providing an exceptional dining 
                                experience have made us a favorite among locals and visitors alike.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <svg width="100%" height="100%" viewBox="0 0 1080 1300" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                                <g transform="matrix(0.976492,0,0,1,0,0)">
                                    <rect x="500" y="0" width="400" height="1150" style="fill:rgb(8,6,5);"/>
                                </g>
                                <use id="WEF" xlink:href="#_Image1" x="488" y="0" width="1040px" height="885px"/>
                                <defs>
                                    <image id="_Image1" width="300px" height="1150px" xlink:href="data:image/png;base64,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VgkIAAAAwCoBAQAAAFglIAAAAACrBAQAAABglYAAAAAArBIQAAAAgFUCAgAAALBKQAAAAABWCQgAAADAKgEBAAAAWCUgAAAAAKsEBAAAAGCVgAAAAACsEhAAAACAVQICAAAAsEpAAAAAAFYJCAAAAMAqAQEAAABYJSAAAAAAqwQEAAAAYJWAAAAAAKwSEAAAAIBVAgIAAACwSkAAAAAAVgkIAAAAwCoBAQAAAFglIAAAAACrBAQAAABglYAAAAAArBIQAAAAgFUCAgAAALBKQAAAAABWCQgAAADAKgEBAAAAWCUgAAAAAKsEBAAAAGCVgAAAAACsEhAAAACAVQICAAAAsEpAAAAAAFYJCAAAAMAqAQEAAABYJSAAAAAAqwQEAAAAYJWAAAAAAKwSEAAAAIBVAgIAAACwSkAAAAAAVgkIAAAAwCoBAQAAAFglIAAAAACrBAQAAABglYAAAAAArBIQAAAAgFUCAgAAALBKQAAAAABWCQgAAADAKgEBAAAAWCUgAP9/O3YgAAAAACDI33qEBQojAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAJRAAAACAFRRCYjKNt9fYAAAAAElFTkSuQmCC"/>
                                </defs>
                            </svg>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-5"></div>
                        <div class="col-md-2" style="border-bottom: 1px solid #D1D1D1"></div>
                        <div class="col-md-5"></div>
                    </div>
                    <div class="row" style="margin-top:140px; align-items:center">
                        <div class="col-md-6">
                            <img src="{{url('template/assets/images/second.jpg')}}" style="height:300px">
                        </div>
                        <div class="col-md-6" style=" font-size:14px; letter-spacing: 2px">
                            <div class="mb-4" style="font-size:20px; font-weight:bold">Identity</div>
                                Our team of talented chefs crafts each dish with precision and creativity, ensuring every bite is a delightful symphony of taste.
                            <div class="mt-4">Dining is not just about nourishing the body, but also about 
                                creating cherished memories. </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('backend.layouts.footer')



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

        <script>
            
            document.addEventListener("DOMContentLoaded", function() {
                var fadeComplete = function(e) { stage.appendChild(arr[0]); };
                var stage = document.getElementById("slider");
                var arr = stage.getElementsByTagName("a");
                for(var i=0; i < arr.length; i++) {
                    arr[i].addEventListener("animationend", fadeComplete, false);
                }
            }, false);
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
    </body>
</html>