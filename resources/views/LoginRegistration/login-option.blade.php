@extends('layouts.app')

<!DOCTYPE html>

<title>Oval Evolution Login</title>

@section('content')
<div class="container">
    <div class="row justify-content-center" style="display: flex;">
        <div class="col">
            <p class="mt-3"style="text-align: center; font-size:30px; font-weight:bold">Sign in or create an account</p>
        </div>
        <div>
            <ul class="mb-5"></ul>
        </div>
        <div class="row justify-center">
            <div class="col">
                <p class=""style="text-align: center; font-size:30px; font-weight:bold">I'm a</p>
            </div>        
        </div>
        <div class="row justify-content-center" style="display: flex;">
            <div class="col" style="text-align: center;">
                <div style="display: inline-block;" class="mr-4">
                    <a href="{{ url('/login') }}">
                        <button class="btn-white-border-black text-black" style="height: 60px; width: 200px; border-radius:50px; font-size:25px;
                        font-weight:bold;">Customer</button>
                    </a>
                </div>
                <div class="mr-4"style="display:inline-block; text-align: center; font-size:30px; font-weight:bold">---</div>
                <div style="display:inline-block; text-align: center; font-size:30px; font-weight:bold">or</div>
                <div class="ml-4"style="display:inline-block; text-align: center; font-size:30px; font-weight:bold">---</div>
                <div style="display:inline-block" class="ml-4">
                    <a href="{{ url('/input-password') }}">
                        <button class="btn-black text-white" style="height: 60px; width: 200px; border-radius:50px; font-size:25px;
                        font-weight:bold;">Staff</button>
                    </a>
                </div>
            </div>
        </div>
            <div>
                <ul class="mb-4"></ul>
            </div>
            <div class="mt-5">
                <div class="row justify-center">
                    <div class="col">
                        <p class=""style="text-align: center; font-size:20px; font-weight:bold">Doesn't have an account yet?</p>
                    </div>        
                </div>
                <div class="row justify-center" style="text-align: center;">
                    <a href="{{ url('/register-option') }}">
                        <button class="btn-white-border-black text-black" style="height: 35px; width: 100px; border-radius:50px; font-size:15px;
                        font-weight:bold;">Join now</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
