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

			a {
				text-decoration: none;
				text-transform: uppercase;
				color: #54a6b1;
				font-weight: bold;
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

			main fieldset legend img {
				width: 40px;
				height: 50px;
			}

			/* Main  FORM company*/

			.infos {
				margin-top : 50px;
				clear: both;
			}

			.infos label {
				display: block;
			}


			/* Main SUBMIT */

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
			<form action="{{ url('company/form') }}" method="POST">

				@csrf

				<fieldset class="form_company">

					<legend> 
						<img src="{{URL::asset('assets/img/company.png')}}" id="company-logo"></img>
						Company Form 
					</legend>	

				</fieldset>
				
				<fieldset class="infos">

					<label for="nom"> Name </label><br/>
					<input type="text" id="name" name="name" min="2" max="12" placeholder="Please fill this field">

					<label for="street"> Street </label><br/>
					<input type="text" id="street" name="street" min="2" max="12" placeholder="Please fill this field">

					<label for="city"> City </label><br/>
					<input type="text" id="city" name="city" min="2" max="12" placeholder="Please fill this field">

					<label for="zip_code"> Zip Code </label><br/>
					<input type="text" id="zip_code" name="zip_code" min="2" max="12" placeholder="Please fill this field">

					<label for="phone_number"> Phone number </label><br/>
					<input type="number" id="phone_number" name="phone_number" min="10" placeholder="Please fill this field">
					
					<label for="email"> Email </label><br/>
					<input type="email" id="email" name="email" min="6" placeholder="Please fill this field">

				</fieldset>

				<fieldset class="submit">
					<button type="submit" class="btn btn-primary" id="button"> Validate  </button>
				</fieldset>
			</form>	
		</main>
	</body>

</html>

@endsection
