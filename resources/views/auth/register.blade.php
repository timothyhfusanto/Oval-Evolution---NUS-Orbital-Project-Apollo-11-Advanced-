@extends('layouts.app')

<title>Oval Evolution Registration</title>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <svg height="80"; width="600" style="position:relative; left: 279px; top: -10px"> 
                <text x="0" y="60" fill="black" font-size="33" font-weight="bold" >Create an account</text>
            </svg>	         
        </div>

        <div class="col-md-8">
            <svg height="80"; width="600" style="position:relative; left: 295px; top: -25px"> 
                <text x="0" y="60" fill="gray" font-size="18" font-weight="bold" >Get notified & leave reviews</text>
            </svg>	         
        </div>

        <div class="col-md-8">
            <svg height="80"; width="600" style="position:relative; left: 190px; top: -75px"> 
                <text x="0" y="60" fill="gray" font-size="14" >Join Oval Evolution to be notified about upcoming promotions. Leave your </text>
            </svg>	         
        </div>

        <div class="col-md-8">
            <svg height="80"; width="600" style="position:relative; left: 270px; top: -133px"> 
                <text x="0" y="60" fill="gray" font-size="14" >glowing reviews for the
                    foods and beverages.</text>
            </svg>	         
        </div>
        <style>
            input[type="file"] {
                display: none;
            }
        </style>
        <div class="container">
            <div class="registration-card" style="position:relative; left:370px; top:-90px">
                <div class="registration-card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="row mb-3">
                            <div class="row" style="position:relative; left:-20px">
                                <svg height="70" width="100">
                                    <text x="90" y="50" fill="#FF5C5C" class="custom-font" font-size="15">* indicates required field</text>
                                </svg>
                            </div>
                            <div class="row mt-4 mb-2" style="margin-left:5px;">
                                <div class="col" style="display:flex; justify-content:center;text-align: center;">
                                    <div class="profile-container" style="display:flex; text-align:center; justify-content:center; align-items:center">
                                        <img class="img-preview img-fluid mb-3" src="{{ url('/template/assets/images/pp.png') }}" 
                                        style="height:120px; width:120px">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5 mb-3" style="margin-left:5px">
                                <div class="col-md-3"></div>
                                <div class="col-md-3">
                                    <label for="image" id="upload-button" class="btn-roundabit btn-black px-2 py-2" style="font-size:15px">
                                        Edit Profile <i class="fas fa-pencil-alt"></i>
                                    </label>
                                    <input class="form-control @error('image') is-invalid @enderror" type="file" name="image" id="image" onchange="previewImage()" autofocus style="display: none;">
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <button class="btn-roundabit btn-danger py-2" style="font-size:15px;">
                                        Remove Profile <i class="fas fa-trash"></i>
                                    </button>
                                </div>

                            </div>
                            <div class="row" style="position:relative; left:-20px">
                                <svg height="70" width="100">
                                    <text x="90" y="50" fill="black" class="custom-font" font-size="20" font-weight="bold">Personal Information</text>
                                </svg>
                            </div>

                            <div class="col-md-9">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                placeholder="* Name" style="position:relative; left:65px">

                                @error('name')
                                    <span style="position:relative; left:65px; top:10px" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3" style="position:relative; top:-20px">
                            <div class="row" style="position:relative; left:-20px">
                                <svg height="70" width="100">
                                    <text x="90" y="50" fill="black" class="custom-font" font-size="20" font-weight="bold">Account Security</text>
                                </svg>
                            </div>

                            <div class="col-md-9">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"
                                placeholder="* Email address"  style="position:relative; left:65px; top:3px">

                                @error('email')
                                    <span style="position:relative; left:68px; top:2px"class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-9">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"
                                placeholder="* Password" style="position:relative; left:65px; top:-9px">
                                <i class="far fa-eye-slash" id="togglePassword" style="position:relative; left:480px; top:-33px; cursor: pointer;"></i>
                                @error('password')
                                    <span style="position:relative; left:68px; top:-25px"class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">

                            <div class="col-md-9">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"
                                placeholder="* Confirm Password" style="position:relative; left:65px; top:-15px">
                                <i class="far fa-eye-slash" id="togglePassword2" style="position:relative; left:480px; top:-39px; cursor: pointer;"></i>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" style="font-size:18; font-weight:bold; position:relative; left:100px; top:10px" class="inline-block px-4 py-2 btn-registration">
                                    {{ __('Create Account') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>


</script>

<script>
    function previewImage() {
		const image = document.querySelector('#image');
		const imgPreview = document.querySelector('.img-preview');
		imgPreview.style.display = 'block';

		const oFReader = new FileReader();
		oFReader.readAsDataURL(image.files[0]);

		oFReader.onload = function(oFREvent) {
			imgPreview.src = oFREvent.target.result;
		}
	}

    function resetImageToDefault() {
        const imgPreview = document.querySelector('.img-preview');
        imgPreview.src = "{{ url('/template/assets/images/pp.png') }}";

        // Reset the file input value to null
        const image = document.querySelector('#image');
        image.value = null;
    }


    document.querySelector('.btn-danger').addEventListener('click', function() {
        resetImageToDefault();
    });

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
@endsection
