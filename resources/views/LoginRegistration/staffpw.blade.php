<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Enter Password</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .food-bg {
                background-image: url('/template/assets/images/owo.jpg');
                background-color: white;
                background-repeat: no-repeat;
                background-size: 920px;
                background-position: right;
            }
            
        </style>
        
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta content="Admin Dashboard" name="description" />
        <meta content="themesdesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link href="{{asset('/template/assets/images/ovalevolution.png')}}" rel ="icon" type="image/png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <link href="{{asset('template/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('template/assets/plugins/animate/animate.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('template/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('template/assets/css/style.css')}}" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="relative flex sm:rounded-lg items-top justify-start min-h-screen sm:items-center py-8 sm:pt-0 food-bg plain-bg">
                <!--@if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    
                        <a href="{{ url('home') }}" class="btn-round btn-outline-info inline-block px-4 py-2 rounded-md bg-blue-500 hover:bg-blue-600 
                        text-white underline" style="font-size: 18px; font-weight:700">Home</a>

                    @else

                        <a href="{{ route('login') }}" class="btn-round btn-outline-info inline-block px-4 py-2 rounded-md bg-blue-500 hover:bg-blue-600 
                        text-white underline" style="font-size: 18px; font-weight:700">Login</a>                       

                        @if (Route::has('register'))

                            <a href="{{ route('register') }}" class="btn-round btn-outline-info inline-block px-4 py-2 rounded-md bg-blue-500 
                            hover:bg-blue-600 text-white underline" style="font-size: 18px; font-weight:700">Register</a>

                        @endif
                    @endauth
                </div>
            @endif
            -->
        
            <div class="justify-center mt-3 sm:items-center sm:justify-between">
                            <!--
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a> -->


                <div class="flex items-center">
                    <svg width="200" height="60" viewBox="0 0 1080 1080" version="1.1" xmlns="http://www.w3.org/2000/svg" 
                    xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" 
                    style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2; margin-left:60px; 
                    position: relative; top: -180px">
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
                    <svg height="50" width="1500" style="margin-right:500px; position: relative; top: -181px; left: -10px">
                        <a href="{{ url('/') }}">
                            <text x="0" y="35" fill="black" font-size="25" font-weight="bold">Oval Evolution</text>
                        </a>
                    </svg>
                </div>
                    
                <div class="flex items-center">
                    <svg height="100" width="1500">
                        <text x="90" y="50" fill="black" class="custom-font" font-size="55" font-weight="bold">Staffs</text>
                    </svg>
                </div>

                <div class="mt-4 " style="margin-left: 74px; position: relative; top: -50px; left:15px; display: flex; align-items: center">
                    <input style="height:40px; width:330px" type="password" id="pass2" class="form-control" required
                    placeholder="Enter password to access staff page"/>                            
                    <i class="far fa-eye-slash" id="togglePassword" style="position:relative; left:10px; cursor: pointer;"></i>   
                </div>


                <div class="flex items-center" style="position: relative; top: -45px; right:-95px"> 
                    <text id="alert-inc" style="color: red; font-size:13px"></text>
                </div>

                <div class="flex items-center">
                     <button class="btn-roundabit btn-black" id="submitBtn" style="width: 330px; height: 38px; margin-left: 89px; margin-top:21px;
                    position: relative; top: -50px" >
                        <a href="{{ url('') }}" id="submitBtnLink">
                            <svg height="60"; width="300">                                       
                                <text x="130" y="24" fill="#FFFBF5" font-size="17" font-weight="bold">Enter</text>
                           </svg>	
                        </a>
                    </button>		
                </div>
                    <!--
                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                    -->
            </div>
        </div>
    </body>
</html>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>

    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#pass2');

    togglePassword.classList.add('fas', 'fa-eye-slash');
    togglePassword.addEventListener('click', function (e) {
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        togglePassword.classList.toggle('fa-eye-slash');
        togglePassword.classList.toggle('fa-eye');
    });

    $(document).ready(function() {
        $('#submitBtn').click(function(event) {
            event.preventDefault();
            const enteredPassword = $('#pass2').val();
            const correctPassword = '12345678';

            if (enteredPassword === correctPassword) {
                window.location.href = '/staff/login';
            } else if (enteredPassword === '') {
                $('#alert-inc').html('* Required');
            } else {
                $('#alert-inc').html('Incorrect password. Please try again.');
            }
        });
    });

</script>

