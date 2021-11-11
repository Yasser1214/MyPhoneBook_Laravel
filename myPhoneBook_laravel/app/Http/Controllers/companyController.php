<?php

namespace App\Http\Controllers;

use App\Models\company;
use App\Models\collaborateur;
use Illuminate\Http\Request;

class companyController extends Controller
{
	public function __construct()
	{
        $this->middleware('auth');
	}

	public function index() 
	{
		return view('company_form');
	}
	
	public function create()
	{
		return redirect('company_form');
	}

	public function store(Request $request)
   	{
    	$company = new company();
    	
   		$company->name = $request->name;
   		$company->street = $request->street;
		$company->city = $request->city;
		$company->zip_code = $request->zip_code;
		$company->phone_number = $request->phone_number;
		$company->email = $request->email;
     
		$company->save();

		return redirect('company/list');
	}
	
	public function show()
	{
		$data = company::all();
		return view('company_list', ['companies'=>$data]);
	}
	
	public function show_company($id)
	{
		$company = company::find($id);
		return view('company_update', ['company'=>$company]);
	}
	
	public function update(Request $request)
	{
		$company = company::find($request->id);
		
		$company->name = $request->name;
   		$company->street = $request->street;
		$company->city = $request->city;
		$company->zip_code = $request->zip_code;
		$company->phone_number = $request->phone_number;
		$company->email = $request->email;
     
		$company->save();

		return redirect('company/list');
	}
	
	public function delete($id)
	{
		$data = company::find($id);
		$data->delete();
		return redirect('company/list');
	}
	
}
