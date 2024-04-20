@extends('layouts.app')

<title>Oval Evolution Login</title>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <svg height="80"; width="600" style="position:relative; left: 279px; top: -10px"> 
                <text x="0" y="60" fill="black" font-size="33" font-weight="bold" >Create an account</text>
            </svg>	         
        </div>

        <div class="col-md-8">
            <svg height="80"; width="600" style="position:relative; left: 295px; top: -15px"> 
                <text x="0" y="60" fill="gray" font-size="18" font-weight="bold" >Get notified & Leave reviews</text>
            </svg>	         
        </div>

        <div class="col-md-8">
            <svg height="80"; width="600" style="position:relative; left: 190px; top: -60px"> 
                <text x="0" y="60" fill="gray" font-size="14" >Join Oval Evolution to be notified about upcoming promotions. Leave your </text>
            </svg>	         
        </div>

        <div class="col-md-8">
            <svg height="80"; width="600" style="position:relative; left: 270px; top: -118px"> 
                <text x="0" y="60" fill="gray" font-size="14" >glowing reviews for the
                    foods and beverages.</text>
            </svg>	         
        </div>


        <div class="row justify-center">
            <svg height="30"; width="600" style="position:relative; left: 590px; top: -50px"> 
                <text x="0" y="28" fill="black" font-size="30" font-weight="bold" >I'm a</text>
            </svg>	
        </div>
        <div class="row col-6" style="position:relative; top:-80px; left:-123px">
            <div class="flex items-center">
                <a href="{{ url('/register') }}">
                    <button class="btn-white-border-black text-black" style="height: 80px; width: 200px; border-radius:50px; font-size:25px;
                    font-weight:bold; position:relative; top:-14px; left:100px">Customer</button>
                </a>
                <svg height="210" width="50" style="position:relative; top:90px; left:130px">
                    <line x1="0" y1="0" x2="100" y2="0" style="stroke:rgb(0,0,0);stroke-width:2" />
                </svg>
                <svg height="80"; width="170" style="position:relative; left: 150px; top: -25px"> 
                    <text x="0" y="60" fill="black" font-size="35" font-weight="bold">or</text>
                </svg>	     
            </div>

            <div class="flex items-center">
                <a href="{{ url('/input-password') }}">
                    <svg height="210" width="50" style="position:relative; top:-120px; left:455px">
                        <line x1="0" y1="0" x2="100" y2="0" style="stroke:rgb(0,0,0);stroke-width:2" />
                    </svg>
                    <button class="btn-black text-white" style="height: 80px; width: 200px; border-radius:50px; font-size:25px;
                    font-weight:bold; position:relative; left:535px; top:-370px">Staff</button>
                </a>
            </div>

            <div class="flex items-center">
                <svg height="30"; width="600" style="position:relative; left: 318px; top: -300px"> 
                    <text x="0" y="28" fill="black" font-size="18" font-weight="bold" >Already have an account?</text>
                </svg>	
            </div>
            <a href="{{ url('/login-option') }}">
                <button class="btn-white-border-black text-black" style="height: 35px; width: 100px; border-radius:50px; font-size:15px;
                font-weight:bold; position:relative; left:370px; top:-275px">Sign in</button>
            </a>
        </div>
    </div>
</div>
@endsection