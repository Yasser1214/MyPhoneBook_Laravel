@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>

	<head>
		<title> My Phone Book </title>
		<meta name="csrf-token" content="{{ csrf_token() }}">
	
		<style type="text/css">
			
			/* ALL */

			* {
				background-color: #E5E7E9;
			}

			body{
				font-family: Arial, sans-serif;
			}

			fieldset {
			 	border: none;
			}

			input:focus {
			 	outline: none;
			 	border-bottom: 1px solid #54A6B1;
			}
			 
			/* Main */

			main {
				clear: both;
				margin-left: 50px;
			}

			main form fieldset legend {
				border-bottom: 5px solid #000;
				width: 90%;
				font-weight: bold;
				font-size: 25px;
				margin-bottom: 10px;
			}

			main fieldset legend img {
				width: 40px;
				height: 50px;
			}

			main form fieldset label {
				text-transform: uppercase;
				font-weight: bold;
				margin-top: 15px;
			}

			main form fieldset input {
				border: none;
				border-bottom: 1px solid #000;
				width: 90%;
				margin-bottom: 15px;
			}

			/* Main Informations*/

			.form_employee {
				margin-bottom: 50px;
			}

			.civility_label {
				text-transform: uppercase;
				float: left;
				font-weight: bold;
				font-size: 25px;
				margin-bottom: 10px;
			}

			.civility {
				width: 90%;
				font-weight: bold;
			}

			.civility div {
				float: right;
				display: inline-block;
				margin-top: 20px;	
			}

			.Female {
				margin-right: 100px;
			}

			.infos {
				clear: both;
			}

			.infos label {
				display: block;
			}

			#button {
				text-transform: uppercase;
				width: 100px;
				height: 65px;
				color: #FFF;
				background-color: #000;
				float: left;
				margin-top: 50px;
				border: none;
			}

			#button:hover {
				background-color: #FFF;
				color: #000;
				border: 1px solid #000;
			}

		</style>

	</head>

	<body>

		<main>		
			<form action="{{ url('employee/update') }}" method="POST">

				@csrf

				<fieldset class="form_employee">
					<legend>  
						<img src="{{URL::asset('assets/img/employee.png')}}" id="employee-logo"></img>
						Employee Form 
					</legend>	
				</fieldset>
				
				<input type="hidden" id="id" name="id" min="1" max="12" value="{{$employee['id']}}">
				
				<div class="civility_label">
					<fieldset>
						<label > Civility </label>
					</fieldset>	
				</div>			

				<div class="civility">
					<div class="Male">
						<label for="male"> Male </label>
						<input type="radio" id="male" name="civility" value="M">
					</div>
					<div class="Female">
						<label for="female"> Female </label>
						<input type="radio" id="female" name="civility" value="F">
					</div>
				</div>
				
				<fieldset class="infos">

					<label for="name"> Name </label><br/>
					<input type="text" id="name" name="name" min="2" max="12" placeholder="Please fill this field" value="{{$employee['name']}}">
					
					<label for="firstname"> Firstname </label><br/>
					<input type="text" id="firstname" name="firstname" min="2" max="12" placeholder="Please fill this field" value="{{$employee['firstname']}}">

					<label for="street"> Street </label><br/>
					<input type="text" id="street" name="street" min="2" max="12" placeholder="Please fill this field" value="{{$employee['street']}}">


					<label for="city"> City </label><br/>
					<input type="text" id="city" name="city" min="2" max="12" placeholder="Please fill this field" value="{{$employee['city']}}">

					<label for="zip_code"> Zip Code </label><br/>
					<input type="text" id="zip_code" name="zip_code" min="2" max="12" placeholder="Please fill this field" value="{{$employee['zip_code']}}">

					<label for="phone_number"> Phone number </label><br/>
					<input type="number" id="phone_number" name="phone_number" min="10" placeholder="Please fill this field" value="{{$employee['phone_number']}}">
					
					<label for="email"> Email </label><br/>
					<input type="email" id="email" name="email" min="6" placeholder="Please fill this field" value="{{$employee['email']}}">
					
					<label for="company"> Company </label><br/>
					<input type="text" id="company" name="company" min="6" placeholder="Please fill this field" value="{{$employee['company']}}">

				</fieldset>

				<fieldset class="submit">
					<button type="submit" class="btn btn-primary" id="button"> Update </button>
				</fieldset>
			</form>	
		</main>
	</body>

</html>

@endsection
