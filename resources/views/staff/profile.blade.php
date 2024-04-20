@extends('backend.layouts.master')
    @php
        $user = Auth::user();
    @endphp
    {{-- for title website --}}
	@section('title')
		Profile
	@endsection

{{-- for content after card --}}
	@section('content')
        <div class="container">
            <div class="row mt-4">
                <div class="col" style="font-size:40px; font-weight:bold">
                    My Profile
                </div>
            </div>
            @if(session()->has('status'))
            <div class="alert alert-success alert-dismissible fade show d-flex align-items-center mt-3" style="font-size:17px"role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <i class="mdi mdi-checkbox-marked-circle font-32"></i><strong class="pr-1"></strong> {{ session('status') }}
            </div>
            @endif
            
            <div class="row mt-4">
                <div class="col">
                    <div class="card" style="padding:30px; border-radius:20px">
                        <div class="row">
                            <div class="col-md-3" style="text-align: center; justify-content:center; display:flex">
                                <div class="profile-container">
                                @if(Auth::user()->profile_image === null)
                                    <img class="img-preview img-fluid mb-3" src="{{ url('template/assets/images/pp.png') }}"
                                    style="height:120px">
                                @else
                                    <img class="img-preview img-fluid mb-3" src="{{ asset('storage/' . $user->profile_image) }}" 
                                    style="height:120px">
                                @endif
                                </div>
                            </div>
                            <div class="col mt-3" style="font-size:20px">
                                {{$user->name}}
                                <div class="row mt-4">
                                    <div class="col">
                                        <form id="editForm"action="{{route('profile.edit')}}" method="post" enctype="multipart/form-data"> @csrf {{method_field('patch')}}
                                        <input type="hidden" name="oldImage" value="{{$user->image}}">
                                        <input type="hidden" name="removeProfileImage" id="removeProfileImage" value="0">
                                        <label for="image" id="upload-button" class="btn-roundabit btn-black px-2 py-1" style="font-size:14px; border-radius:30px">
                                        Edit Profile <i class="fas fa-pencil-alt"></i>
                                    </label>
                                    <input class="form-control @error('image') is-invalid @enderror" type="file" name="image" id="image" onchange="previewImage()" autofocus style="display: none;">
                                    
                                    <button type="button"class="remove-prof btn-roundabit btn-danger py-1 ml-2" style="font-size:14px; border-radius:30px">
                                        Clear Profile <i class="fas fa-trash"></i>
                                    </button>
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card" style="border-radius:20px; padding:20px">
                        <div class="row">
                            <div class="col-md-3" style="font-size:18px; font-weight:bold; ">
                                Personal Information
                            </div>
                        </div>
                        <div class="row mt-4" style="font-size:15px; color:grey">
                            <div class="col-md-6">
                                Name <i onclick="toggleEdit()"id="editbutton" style="cursor:pointer"class="fas fa-pencil-alt"></i>
                            </div>
                            <div class="col-md-6">
                                Email address
                            </div>
                        </div>
                        <div class="row mt-2" style="font-size:18px; ">
                            <div class="col-md-6">
                                <span id="name">{{ $user->name }}</span>
                                <input id="nameInput" name="name" type="text" value="{{ $user->name }}" style="display: none; padding:5px; border:2px solid #E8E8E8; border-radius:10px">
                            </div>
                            <div class="col-md-6">
                                <span id="email">{{ $user->email }}</span>
                            </div>
                        </div>
                    </form>
                       
                        <div class="row mt-5" style="font-size:16px">
                            <div class="col">
                                <form id="delForm"action="{{route('profile.delete')}}" method="post" enctype="multipart/form-data">
                                    @csrf {{method_field('delete')}}
                                    <label id="delBut" style="color:red; cursor:pointer">
                                        Delete account
                                    </label>
                                </form>
                            </div>
                        </div>                
                    </div>
                </div>
            </div>  

            <div class="row mb-5">
                <div class="col" style="text-align:right; font-size:18px">
                    <button id="submitbut" class="btn-round btn-black px-3 mr-2 py-1">
                        Save changes
                    </button>
                    <button onclick="reloadPage()"class="btn-round btn-danger px-2 py-1" type="button">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
        <script>
    document.getElementById('image').addEventListener('change', function() {
        const fileInput = this;
        const errorContainer = document.getElementById('image-error');
        if (fileInput.files.length > 0) {
            const fileSize = fileInput.files[0].size; // Get the file size in bytes
            const maxSize = 2 * 1024 * 1024; // Maximum file size in bytes (2 MB)
            if (fileSize > maxSize) {
                // Show the error message
                errorContainer.style.display = 'block';
                errorContainer.innerHTML = 'The selected file is too large. Please choose a smaller file.';
                // Clear the file input value
                fileInput.value = '';
            } else {
                // Hide the error message if the selected file is valid
                errorContainer.style.display = 'none';
            }
        }
    });
</script>
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
   document.getElementById('submitbut').addEventListener('click', function() {
    document.getElementById('editForm').submit();
});


    $('#delBut').click(function() {
        Swal.fire({
            title: 'Are you sure?',
            text: "This action will delete your account. This cannot be undone!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'Cancel',
        }).then((result) => {
            if (result.isConfirmed) {
                $('#delForm').submit();
            } else {
                window.location.href= "/staff/profile";
            }
        });
    });
        
    function reloadPage() {
        // Reload the page
        location.reload();
    }

    function toggleEdit() {
        const name = document.getElementById('name');
        const nameInput = document.getElementById('nameInput');

        if (name.style.display === 'none') {
            // Display static text and hide input fields
            name.style.display = 'inline';
            nameInput.style.display = 'none';
        } else {
            // Display input fields and hide static text
            name.style.display = 'none';
            nameInput.style.display = 'inline';

            // Autofocus on the name input field
            nameInput.focus();
        }
    }
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

        // Set the value of the new hidden input field to indicate removal
        const removeProfileImage = document.querySelector('#removeProfileImage');
        removeProfileImage.value = 1;
    }

    document.querySelector('.remove-prof').addEventListener('click', function() {
        resetImageToDefault();
    });
    </script>

    @endsection