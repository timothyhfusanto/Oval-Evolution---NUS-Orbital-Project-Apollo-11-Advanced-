<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title id="title1">@yield('title')</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="themesdesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="{{asset('/template/assets/images/ovalevolution.png')}}" rel ="icon" type="image/png">
        <link href="{{asset('template/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('template/assets/plugins/animate/animate.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('template/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('template/assets/css/style.css')}}" rel="stylesheet" type="text/css">
        @yield('addheaderlink')

        {{-- tambahan css meta_property --}}

    </head>

        @include('backend.layouts.sidebar')

{{-- Start right Content here --}}
<div class="content-page">

    {{-- Start top bar --}}
    @php 
        $user = Auth::user();
    @endphp
    <header class="header-block" style="background-color: #8A8A8A;">
                <ul class="list-inline float-right mb-0" style="position:relative; top:13px; left:-20px">
                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            @if($user->profile_image !== null)
                                    <img src="{{ asset('storage/' . Auth::user()->profile_image) }}" class="rounded-circle" style="height:50px; width: 50px">
                                @else
                                    <img src="{{ url('template/assets/images/pp.png') }}" class="rounded-circle" style="height:50px; width: 50px">
                                @endif
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                            <div class="dropdown-item noti-title">
                                <h5>Welcome back,  {{Auth::user()->name}}</h5>
                            </div>
                            {{--<a class="dropdown-item" href="{{url('password/reset')}}">
                                <i class="mdi mdi-settings "></i>Password
                            </a>--}}
                            <a class="dropdown-item" href="/staff/profile">
                                    <i class="fas fa-user"></i> My Profile
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

                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left waves-light waves-effect">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>
                </ul>
                <div class="clearfix"></div>
        </header>

    {{-- Start content --}}

        <div class="content">


        {{-- Top Bar Start --}}

        
        {{-- Top Bar End --}}

        {{-- content --}}
        <div class="page-content-wrapper" style="margin-top:10px">
            <div class="container-fluid" >
                @yield('content')
            </div>
        </div>
        {{-- end content --}}

    <footer class="footer">
        © 2023 Oval Evolution. All rights reserved.
    </footer>

</div>
{{-- End Right content here --}}

        </div>
        {{-- END wrapper --}}

        {{-- jQuery  --}}
        <script src="{{asset('template/assets/js/jquery.min.js')}}"></script>
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
        @yield('addfooterscript')

    </body>
</html>
    @yield('script')
    <script>
    // enter tab
        jQuery.extend(jQuery.expr[':'], {
            focusable: function (el, index, selector) {
                return $(el).is('a, button, :input, [tabindex]');
            }
        });

        $(document).on('keypress', 'input,select', function (e) {
            if (e.which == 13) {
                e.preventDefault();
                // Get all focusable elements on the page
                var $canfocus = $(':focusable');
                var index = $canfocus.index(this) + 1;
                if (index >= $canfocus.length) index = 0;
                $canfocus.eq(index).focus();
            }
        });

    </script>

    @yield('refresh')
    @yield('modal')