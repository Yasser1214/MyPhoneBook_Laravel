@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>

	<head>
		<title> Employees List </title>
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
		 	margin-left: 70px;
		}

		/* Main */

		main {
			clear: both;
			margin-left: 50px;
		}

		main fieldset legend {
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
		
		/* Main TABLE */
		
		table {
			margin-top: 50px;
		}
		
		.tlabel td {
			font-weight: bold;
			padding-bottom: 20px;
		}
		
		.labels_2 {
			padding-left: 80px;
		}
		
		.inputs_2 {
			padding-left: 80px;
		}
		
		.labels_1 {
			padding-left: 80px;
		}
		
		.inputs_1 {
			padding-left: 80px;
		}

		.road {
			padding-right: 20px;
			padding-left: 100px;
		}
	
		/* Main Delete */

		.delete, .bar, .update {
			text-decoration: none;
			text-transform: uppercase;
			font-weight: bold;
			font-size: 15px;
			color: #000;
			padding-right: 10px;
		}

		.delete:hover, .bar:hover, .update:hover {
			text-decoration: none;
			font-weight: bold;
			color: #FFF;
		}
		
		/* Main SUBMIT */

		#create {
				width: 120px;
				height: 45px;
		        text-transform: uppercase;
		        text-decoration: none;
				background-color: #686868;
				background-image: url("{{ asset('assets/img/create.png') }}");
		        background-repeat: no-repeat;
		        background-size: 30%;
		        background-position: 0% 20%;
				float: right;
				padding-left: 30px;
				margin-top: 50px;
				margin-right: 70px;
				border: none;
			}

			#create:hover {
				color: #000;
				background-color: #fff;
				background-image: url("{{ asset('assets/img/create.png') }}");
		        background-repeat: no-repeat;
		        background-size: 30%;
		        background-position: 0% 20%;
				border: 1px solid #000;
			}

		    #home {
				width: 120px;
				height: 45px;
		        text-transform: uppercase;
		        text-decoration: none;
				background-color: #686868;
				background-image: url("{{ asset('assets/img/home.png') }}");
		        background-repeat: no-repeat;
		        background-size: 30%;
		        background-position: 2% 20%;
				float: left;
				padding-left: 30px;
				margin-top: 50px;
				margin-left: 70px;
				border: none;
			}

			#home:hover {
				color: #000;
				background-color: #fff;
				background-image: url("{{ asset('assets/img/home.png') }}");
		        background-repeat: no-repeat;
		        background-size: 30%;
		        background-position: 2% 20%;
				border: 1px solid #000;
			}

		</style>

	</head>

	<body>

		<main>		


			@csrf

			<fieldset class="form_entreprise">
				<legend> 
					<img src="{{URL::asset('assets/img/employee.png')}}" id="employee-logo"></img>
					Employees List 
				</legend>	
			</fieldset>
			
			<table>
				<tr class="tlabel">
					<td class="labels_1"> Civility </td>
					<td class="labels_1"> Name </td>
					<td class="labels_1"> Fistname </td>
					<td class="road"> Street </td>
					<td class="labels_2"> City </td>
					<td class="labels_1"> Zip Code </td>
					<td class="labels_2"> Phone number </td>
					<td class="labels_2"> Email </td>
					<td class="labels_2"> Company </td>
					<td class="labels_2"> Actions </td>
				</tr>

				@foreach($employees as $employee)
				<tr class="tinput">
					<td class="inputs_1" required> {{$employee['civility']}} </td>
					<td class="inputs_1"> {{$employee['name']}} </td>
					<td class="inputs_1"> {{$employee['firstname']}} </td>
					<td class="road"> {{$employee['street']}} </td>
					<td class="inputs_2"> {{$employee['city']}} </td>
					<td class="inputs_1"> {{$employee['zip_code']}} </td>
					<td class="inputs_2"> {{$employee['phone_number']}} </td>
					<td class="inputs_2"> {{$employee['email']}} </td>
					<td class="inputs_2"> {{$employee['company']}} </td>
					
					<td class="inputs_2">
						<a href={{"/employee/delete/".$employee['id']}} class="delete"> Delete </a>
						<a class="bar"> | </a>
						<a href={{"/employee/update/".$employee['id']}} class="update"> Update </a>
					</td>
					
				</tr>
				@endforeach
			</table>
			
			<form action={{"/employee/form/"}}>
            	<button type="submit" class="btn btn-primary" id="create"> Create </button>
        	</form>
            
            <form action={{"/home/"}}>
                <button type="submit" class="btn btn-primary" id="home"> Home </button>
            </form>

		</main>
	</body>

</html>

@endsection
