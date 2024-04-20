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
                        <a class="dropdown-item" href="/drinkfavourites">Favourites <i class="fas fa-heart" style="position:relative; 
                        font-size:13px; top:0px; left:30px"></i></a>
                    </div>      
                </div> 

                <svg height="60"; width="100" class="head-text" style="position:relative; left: -15px; top: 10px; margin-right: 10px">  
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
        