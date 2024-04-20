@extends('layouts.app')

<title>Oval Evolution Staff Login</title>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row justify-content-center" style="display: flex;">
            <div class="col">
                <p class="mt-3"style="text-align: center; font-size:30px; font-weight:bold">Sign in or create an account</p>
            </div>

        <div class="container">
            <div class="login-card" style="position:relative; left:370px; top:50px">
                <div class="login-card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row mb-3">
                            <div class="row" style="position:relative; left:-20px">
                                <svg height="70" width="100">
                                    <text x="90" y="50" fill="#FF5C5C" class="custom-font" font-size="15">* indicates required field</text>
                                </svg>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-9">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"
                                placeholder="* Email address"  style="position:relative; left:65px; top:3px; height:45px; border: 1px solid gray">

                                @error('email')
                                    <span style="position:relative; left:65px; top:10px" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-9">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"
                                placeholder="* Password" style="position:relative; left:65px; top:20px; height:45px; border: 1px solid gray">
                                <i class="far fa-eye-slash" id="togglePassword" style="position:relative; left:485px; top:-8px; cursor: pointer;"></i>
                                @error('password')
                                    <span style="position:relative; left:65px; top:10px" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-9">
                                <div class="form-check" style="position:relative; left:65px; top:25px">
                                    <input style="height:25px; width:25px" class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label style="font-size:15px; position:relative; left:17px; top:5px"class="form-check-label" for="remember">
                                        {{ __('Remember me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        {{--<div class="row mb-0">
                            <div class="col-md-9">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="position:relative; left:50px; top:30px">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>--}}

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button href="{[ url('/') }}" type="submit" style="font-size:18; font-weight:bold; position:relative; left:160px; top:40px" class="inline-block px-4 py-2 btn-registration">
                                    {{ __('Sign in') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row col-6" style="position:relative; top:0px; left:-125px">
            <div class="flex items-center">
                <svg height="30"; width="600" style="position:relative; left: 302px; top: -300px"> 
                    <text x="0" y="28" fill="black" font-size="18" font-weight="bold" >Doesn't have an account yet?</text>
                </svg>	
            </div>
            <a href="{{ url('/register-option') }}">
                <button class="btn-white-border-black text-black" style="height: 35px; width: 100px; border-radius:50px; font-size:15px;
                    font-weight:bold; position:relative; left:370px; top:-275px">Join now</button>
            </a>
        </div>
    </div>
</div>

<script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');

    togglePassword.classList.add('fas', 'fa-eye-slash');
    togglePassword.addEventListener('click', function (e) {
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        togglePassword.classList.toggle('fa-eye-slash');
        togglePassword.classList.toggle('fa-eye');
    });

    const togglePassword2 = document.querySelector('#togglePassword2');
    const passwordcon = document.querySelector('#password-confirm');

    togglePassword2.classList.add('fas', 'fa-eye-slash');
    togglePassword2.addEventListener('click', function (e) {
        const type = passwordcon.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordcon.setAttribute('type', type);
        togglePassword2.classList.toggle('fa-eye-slash');
        togglePassword2.classList.toggle('fa-eye');
    });
</script>
@endsection
