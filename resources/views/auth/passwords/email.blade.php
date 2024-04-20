@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <svg height="80"; width="600" style="position:relative; left: 303px; top: -10px"> 
                <text x="0" y="60" fill="black" font-size="33" font-weight="bold" >Reset Password</text>
            </svg>	         
        </div>

         <div class="container">
            <div class="login-card" style="position:relative; left:370px; top:50px; height:330px">
                <div class="login-card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="row mb-3">
                            <div class="row" style="position:relative; left:-20px">
                                <svg height="70" width="100">
                                    <text x="90" y="50" fill="#FF5C5C" class="custom-font" font-size="15">* indicates required field</text>
                                </svg>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-9 ">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"
                                        placeholder="* Current email address"  style="position:relative; left:65px; top:3px; height:45px; border: 1px solid gray">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button href="{[ url('/') }}" type="submit" style="font-size:18; font-weight:bold; position:relative; left:-35px; top:40px" class="inline-block px-4 py-2 btn-registration">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
