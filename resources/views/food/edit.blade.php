@extends('backend.layouts.master')

{{-- for title website --}}
	@section('title')
		Edit Food Menu
	@endsection

{{-- for link header --}}
	@section('addheaderlink')
    {{-- DataTables --}}
    <link href="{{asset('template/assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('template/assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    {{-- Responsive datatable examples --}}
    <link href="{{asset('template/assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" /> 
    {{-- Select2 --}}
    <link href="{{asset('template/assets/plugins/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
	@endsection

{{-- for content after card --}}
	@section('content')
		<div class="row">
			<div class="col-12">
				<form action="{{route('food.update',[$dataedit->id])}}" onsubmit="return submit_button()" enctype="multipart/form-data" method="post">@csrf {{method_field('patch')}}
					<div class="card">
						<div class="card-header" style="background-color: black; text-align: center; font-weight: bold; 
						color:white; font-size: 25px;">Edit Food Menu</div>
						<div class="card-body">
							<div class="row">
								<div class="col-sm-6">
									<div style="color:black; font-size:15px"> Name : </div>
								
								    <div> <input placeholder="Enter name" class="form-control" type="" name="name" value="{{$dataedit->name}}" required></div>
								</div>
								<div class="col-sm-6">
									<div style="color:black; font-size:15px"> Price : </div>
								
								    <div> <input placeholder="Enter price" class="form-control" type="number" step="0.000001"name="price" value="{{$dataedit->price_in_sgd}}" required></div>
								</div>
							</div>
							<div class="row mt-3">
								<div class="col-sm-12">
									<div style="color:black; font-size:15px"> Description : </div>
								
								    <div> <textarea placeholder="Up to 300 characters" class="form-control" rows="2" name="desc" id="desc">{{$dataedit->description}}</textarea></div>
									<div><small id="alert-desc" style="color: red; font-size:13px"></small></div>
								</div>
							</div>

							<div class="mb-3">
								<label style="color:black; font-size:15px" for="image" class="form-label mt-3">Food Image :</label>
								<input type="hidden" name="oldImage" value="{{$dataedit->image}}" required>
								@if($dataedit->image)
									<img src =" {{ asset('storage/' . $dataedit->image) }}" class="img-preview img-fluid mb-3 d-block" style="max-height:300px">
								@else
									<img class="img-preview img-fluid mb-3" style="max-height:300px">
								@endif
								<input class="form-control @error('image') is-invalid @enderror" type="file" name="image" id="image" onchange="previewImage()" autofocus>
								@error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror							
							</div>
							<div class="row">
							<div class="col-sm-4">
								<div style="color:black; font-size:15px" class="mb-3 mt-3">Customization header (i.e. Size,Toppings) :</div>
							</div>
							<div class="col-sm-2">
								<div style="color:black; font-size:15px" class="mb-3 mt-3">Choices (max: 10) :</div>
							</div>
							<div class="col-sm-2">
								<div style="color:black; font-size:15px" class="mb-3 mt-3">Add Price :</div>
							</div>
							<div class="col-sm-4"></div>
						</div>

						<div class="row mb-1">
							<div class="col-md-4">
								<div class="form-group">
									<div> <input class="form-control" type="" name="header1" id="header1" value="{{$dataedit->cust_head1}}"placeholder="Enter Header 1" autofocus></div>
								</div>
							</div>
							<div class="col-md-2">
								<div class="wrapper1">
								<div><input class="form-control" name="input_array_name1[]" placeholder="Item" autofocus/></div>
								</div>
								<button class="add_fields1 btn-round btn-addmore mt-4 mb-4" style="width:100px; height:30px">Add more +</button>
							</div>
							<div class="col-md-2">
								<div class="price-wrapper1">
								<div><input class="form-control" type="number" step="0.000001" name="input_array_price1[]" placeholder="Price" autofocus/></div>
								</div>
							</div>
							<div class="col-md-4">
								<div id="requirement" style="position: relative;">
									<select class="select2 form-control custom-select" name="customization_header1" style="width: 100%; height:36px; margin-bottom:23px">
										<optgroup label="Optional (Select only 1)">
											<option value="yes">Yes</option>
										</optgroup>
										<optgroup label="Select up to (choices)">
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</optgroup>
									</select>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<div> <input class="form-control" type="" value="{{$dataedit->cust_head2}}" name="header2" id="header2" placeholder="Enter Header 2"></div>
								</div>
							</div>
							<div class="col-md-2">
								<div class="wrapper2">
								<div><input class="form-control" name="input_array_name2[]" placeholder="Item" autofocus/></div>
								</div>
								<button class="add_fields2 btn-round btn-addmore mt-4 mb-4" style="width:100px; height:30px">Add more +</button>
							</div>
							<div class="col-md-2">
								<div class="price-wrapper2">
								<div><input class="form-control" type="number" step="0.000001" name="input_array_price2[]" placeholder="Price" autofocus/></div>
								</div>
							</div>
							<div class="col-md-4">
								<div id="requirement" style="position: relative;">
									<select class="select2 form-control custom-select" name="customization_header2" style="width: 100%; height:36px; margin-bottom:23px">
										<optgroup label="Optional (Select only 1)">
											<option value="yes">Yes</option>
										</optgroup>
										<optgroup label="Select up to (choices)">
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</optgroup>
									</select>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<div> <input class="form-control" type="" value="{{$dataedit->cust_head3}}"name="header3" id="header3" placeholder="Enter Header 3"></div>
								</div>
							</div>
							<div class="col-md-2">
								<div class="wrapper3">
								<div><input class="form-control" name="input_array_name3[]" placeholder="Item" autofocus/></div>
								</div>
								<button class="add_fields3 btn-round btn-addmore mt-4 mb-4" style="width:100px; height:30px">Add more +</button>
							</div>
							<div class="col-md-2">
								<div class="price-wrapper3">
								<div><input class="form-control" type="number" step="0.000001"name="input_array_price3[]" placeholder="Price" autofocus/></div>
								</div>
							</div>
							<div class="col-md-4">
								<div id="requirement" style="position: relative;">
									<select class="select2 form-control custom-select" name="customization_header3" style="width: 100%; height:36px; margin-bottom:23px">
										<optgroup label="Optional (Select only 1)">
											<option value="yes">Yes</option>
										</optgroup>
										<optgroup label="Select up to (choices)">
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</optgroup>
									</select>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<div> <input class="form-control" type="" value="{{$dataedit->cust_head4}}"name="header4" id="header4" placeholder="Enter Header 4"></div>
								</div>
							</div>
							<div class="col-md-2">
								<div class="wrapper4">
								<div><input class="form-control" name="input_array_name4[]" placeholder="Item" autofocus/></div>
								</div>
								<button class="add_fields4 btn-round btn-addmore mt-4 mb-4" style="width:100px; height:30px">Add more +</button>
							</div>
							<div class="col-md-2">
								<div class="price-wrapper4">
								<div><input class="form-control" type="number" step="0.000001" name="input_array_price4[]" placeholder="Price" autofocus/></div>
								</div>
							</div>
							<div class="col-md-4">
								<div id="requirement" style="position: relative;">
									<select class="select2 form-control custom-select" name="customization_header4" style="width: 100%; height:36px; margin-bottom:23px">
										<optgroup label="Optional (Select only 1)">
											<option value="yes">Yes</option>
										</optgroup>
										<optgroup label="Select up to (choices)">
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</optgroup>
									</select>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<div> <input class="form-control" type="" value="{{$dataedit->cust_head5}}" name="header5" id="header5" placeholder="Enter Header 5"></div>
								</div>
							</div>
							<div class="col-md-2">
								<div class="wrapper5">
								<div><input class="form-control" name="input_array_name5[]" placeholder="Item" autofocus/></div>
								</div>
								<button class="add_fields5 btn-round btn-addmore mt-4 mb-4" style="width:100px; height:30px">Add more +</button>
							</div>
							<div class="col-md-2">
								<div class="price-wrapper5">
								<div><input class="form-control" type="number" step="0.000001" name="input_array_price5[]" placeholder="Price" autofocus/></div>
								</div>
							</div>
							<div class="col-md-4">
								<div id="requirement" style="position: relative;">
									<select class="select2 form-control custom-select" name="customization_header5" style="width: 100%; height:36px; margin-bottom:23px">
										<optgroup label="Optional (Select only 1)">
											<option value="yes">Yes</option>
										</optgroup>
										<optgroup label="Select up to (choices)">
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</optgroup>
									</select>
								</div>
							</div>
						</div>
						
						<div class="card-footer" >
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-6">
									<button class="btn-round btn-black" style="font-weight: bold; height:40px; width:150px; font-size:20px; position:relative; 
									left:190px" type="submit">Update</button>
								</div>
								<div class="col-sm-3"></div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	@endsection

{{-- for javascript --}}
	@section('script')
    <script type="text/javascript">
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

		function desc_limit() {
			var desc = $('#desc').val();
			if (desc.length > 300) {
				$('#alert-desc').html('Description is more than 300 characters').attr('error', '1');
				return true; // Return true if limit exceeded
			} else {
				$('#alert-desc').html('').removeAttr('error');
				return false; // Return false if within limit
			}
		}

		function submit_button() {
			if (desc_limit()) {
				return false; // Prevent form submission
			}
		}

		$(document).ready(function() {
		var max_fields = 50; //Maximum allowed input fields 
		var wrapper1    = $(".wrapper1"); //Input fields wrapper
		var wrapper2    = $(".wrapper2"); //Input fields wrapper
		var wrapper3    = $(".wrapper3"); //Input fields wrapper
		var wrapper4    = $(".wrapper4"); //Input fields wrapper
		var wrapper5    = $(".wrapper5"); //Input fields wrapper
		var pricewrapper1    = $(".price-wrapper1"); //Input fields wrapper
		var pricewrapper2    = $(".price-wrapper2"); //Input fields wrapper
		var pricewrapper3    = $(".price-wrapper3"); //Input fields wrapper
		var pricewrapper4    = $(".price-wrapper4"); //Input fields wrapper
		var pricewrapper5    = $(".price-wrapper5"); //Input fields wrapper
		var add_button1 = $(".add_fields1"); //Add button class or ID
		var add_button2 = $(".add_fields2");
		var add_button3 = $(".add_fields3");
		var add_button4 = $(".add_fields4");
		var add_button5 = $(".add_fields5");
		var x = 1; //Initial input field is set to 1
		
		//When user click on add input button
		$(add_button1).click(function(e){
			e.preventDefault();
			//Check maximum allowed input fields
			if(x < max_fields){ 
				x++; //input field increment
				//add input field
				$(pricewrapper1).append('<div class="mt-2" style="position:relative"><input type="number" step="0.000001" class="form-control" autofocus name="input_array_price1[]" placeholder="Price"></div>');
				$(wrapper1).append('<div class="mt-2" style="position:relative"><input class="form-control" autofocus name="input_array_name1[]" placeholder="Item"> <a style="font-size:15px; position: absolute; right: -20px; top: 8px; cursor:pointer;"href="javascript:void(0);" class="remove_field">X</a></div>');
			}
		});

		$(add_button2).click(function(e){
			e.preventDefault();
			//Check maximum allowed input fields
			if(x < max_fields){ 
				x++; //input field increment
				//add input field
				$(pricewrapper2).append('<div class="mt-2" style="position:relative"><input type="number" step="0.000001"class="form-control" autofocus name="input_array_price2[]" placeholder="Price"></div>');
				$(wrapper2).append('<div class="mt-2" style="position:relative"><input class="form-control" autofocus name="input_array_name2[]" placeholder="Item"> <a style="font-size:15px; position: absolute; right: -20px; top: 8px; cursor:pointer;"href="javascript:void(0);" class="remove_field">X</a></div>');
			}
		});

		$(add_button3).click(function(e){
			e.preventDefault();
			//Check maximum allowed input fields
			if(x < max_fields){ 
				x++; //input field increment
				//add input field
				$(pricewrapper3).append('<div class="mt-2" style="position:relative"><input type="number" step="0.000001" class="form-control" autofocus name="input_array_price3[]" placeholder="Price"></div>');
				$(wrapper3).append('<div class="mt-2" style="position:relative"><input class="form-control" autofocus name="input_array_name3[]" placeholder="Item"> <a style="font-size:15px;position: absolute; right: -20px; top: 8px; cursor:pointer;"href="javascript:void(0);" class="remove_field">X</a></div>');
			}
		});

		$(add_button4).click(function(e){
			e.preventDefault();
			//Check maximum allowed input fields
			if(x < max_fields){ 
				x++; //input field increment
				//add input field
				$(pricewrapper4).append('<div class="mt-2" style="position:relative"><input type="number" step="0.000001" class="form-control" autofocus name="input_array_price4[]" placeholder="Price"></div>');
				$(wrapper4).append('<div class="mt-2" style="position:relative"><input class="form-control" autofocus name="input_array_name4[]" placeholder="Item"> <a style="font-size:15px; position: absolute; right: -20px; top: 8px; cursor:pointer;"href="javascript:void(0);" class="remove_field">X</a></div>');
			}
		});

		$(add_button5).click(function(e){
			e.preventDefault();
			//Check maximum allowed input fields
			if(x < max_fields){ 
				x++; //input field increment
				//add input field
				$(pricewrapper5).append('<div class="mt-2" style="position:relative"><input type="number" step="0.000001" class="form-control" autofocus name="input_array_price5[]" placeholder="Price"></div>');
				$(wrapper5).append('<div class="mt-2" style="position:relative"><input class="form-control" autofocus name="input_array_name5[]" placeholder="Item"> <a style="font-size:15px; position: absolute; right: -20px; top: 8px; cursor:pointer;"href="javascript:void(0);" class="remove_field">X</a></div>');
			}
		});
		
		//when user click on remove button
		$(wrapper1).on("click",".remove_field", function(e){ 
			e.preventDefault();
			$(this).parent('div').remove(); //remove inout field
			$(pricewrapper1).find('div:last-child').remove();
			x--; //inout field decrement
		})

		$(wrapper2).on("click",".remove_field", function(e){ 
			e.preventDefault();
			$(this).parent('div').remove(); //remove inout field
			$(pricewrapper2).find('div:last-child').remove();
			x--; //inout field decrement
		})

		$(wrapper3).on("click",".remove_field", function(e){ 
			e.preventDefault();
			$(this).parent('div').remove(); //remove inout field
			$(pricewrapper3).find('div:last-child').remove();
			x--; //inout field decrement
		})

		$(wrapper4).on("click",".remove_field", function(e){ 
			e.preventDefault();
			$(this).parent('div').remove(); //remove inout field
			$(pricewrapper4).find('div:last-child').remove();

			x--; //inout field decrement
		})

		$(wrapper5).on("click",".remove_field", function(e){ 
			e.preventDefault();
			$(this).parent('div').remove(); //remove inout field
			$(pricewrapper5).find('div:last-child').remove();
			x--; //inout field decrement
		})
	});
    </script>
	@endsection

{{-- for script footer $ modals --}}
	@section('modal')
  @endsection

  @section('addfooterscript')
	  {{-- Required datatable js --}}
	  <script src="{{asset('template/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
	  <script src="{{asset('template/assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
	  {{-- Buttons examples --}}
	  <script src="{{asset('template/assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
	  <script src="{{asset('template/assets/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
	  {{-- Responsive examples --}}
	  <script src="{{asset('template/assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
	  <script src="{{asset('template/assets/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>
	  {{-- Datatable init js --}}
	  <script src="{{asset('template/assets/pages/datatables.init.js')}}"></script>
    {{-- select2 --}}
    <script src="{{asset('template/assets/plugins/select2/select2.min.js')}}"></script>
	@endsection

{{-- for document ready --}}
	@section('refresh')
	<script type="text/javascript">
	  $(document).ready(function()
	    {
			$('#desc').on('input', desc_limit);
	    });
	</script>
	@endsection



