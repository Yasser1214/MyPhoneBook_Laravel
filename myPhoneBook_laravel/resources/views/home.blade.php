@extends('layouts.app')

@section('content')
<style type="text/css">

    * {
		background-color: #E5E7E9;
	}

	body {
		font-family: Arial, sans-serif;
	}
    
    .card {
        margin-bottom: 10px;
        clear: both;
    }

    h1 {
        margin: 10px 28%;
    }

    #phonebook-logo {
        width: 300px;
        height: 300px;
        margin: auto 25%;
    }

    .fieldset {
        margin-top: 300px;
    }

    #company {
		width: 200px;
		height: 65px;
        text-transform: uppercase;
        text-decoration: none;
		background-color: #686868;
        background-image: url("{{ asset('assets/img/company.png') }}");
        background-repeat: no-repeat;
        background-size: 30%;
		float: right;
        padding-left: 30px;
		margin-top: 50px;
		border: none;
	}

	#company:hover {
        color: #000;
		background-color: #fff;
        background-image: url("{{ asset('assets/img/company.png') }}");
        background-repeat: no-repeat;
        background-size: 30%;
		border: 1px solid #000;
	}

    #employee {
		width: 200px;
		height: 65px;
        text-transform: uppercase;
        text-decoration: none;
		background-color: #686868;
        background-image: url("{{ asset('assets/img/employee.png') }}");
        background-repeat: no-repeat;
        background-size: 30%;
		float: left;
        padding-left: 30px;
		margin-top: 50px;
		border: none;
	}

	#employee:hover {
        color: #000;
		background-color: #fff;
        background-image: url("{{ asset('assets/img/employee.png') }}");
        background-repeat: no-repeat;
        background-size: 30%;
		border: 1px solid #000;
	}

</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <h1> My Phone Book </h1>

                    <img src="{{URL::asset('assets/img/phonebook.png')}}" id="phonebook-logo"></img>
                </div>               
                
                </div>

                <fieldset>
                    <form action={{"/company/list/"}}>
                        <button type="submit" class="btn btn-primary" id="company"> Company </button>
                    </form>
                    
                    <form action={{"/employee/list/"}}>
                        <button type="submit" class="btn btn-primary" id="employee"> Employee </button>
                    </form>
                </fieldset>

            </div>   
        </div>
    </div>
</div>
@endsection
