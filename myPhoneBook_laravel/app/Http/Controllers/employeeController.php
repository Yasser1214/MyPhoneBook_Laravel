<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;

class employeeController extends Controller
{
   	public function __construct()
	{
        $this->middleware('auth');
	}

	public function index() 
	{
		return view('employee_form');
	}
	
	public function create()
	{
		return redirect('employee');
	}

	public function store(Request $request)
   	{
		$employee = new employee();
	
		$employee->civility = $request->civility;
	    $employee->name = $request->name;
	    $employee->firstname = $request->firstname;
	    $employee->street = $request->street;
		$employee->city = $request->city;
		$employee->zip_code = $request->zip_code;
		$employee->phone_number = $request->phone_number;
		$employee->email = $request->email;
		$employee->company = $request->company;
     
		$employee->save();

		return redirect('employee/list');
	}
	
	public function show()
	{
		$data = employee::all();
		return view('employee_list', ['employees'=>$data]);
	}
	
	public function show_employee($id)
	{
		$employee = employee::find($id);
		return view('employee_update', ['employee'=>$employee]);
	}
	
	public function update(Request $request)
	{
		$employee = employee::find($request->id);
		
		$employee->civility = $request->civility;
   		$employee->name = $request->name;
   		$employee->firstname = $request->firstname;
   		$employee->street = $request->street;
		$employee->city = $request->city;
		$employee->zip_code = $request->zip_code;
		$employee->phone_number = $request->phone_number;
		$employee->email = $request->email;
		$employee->company = $request->company;
     
		$employee->save();

		return redirect('employee/list');
	}
	
	public function delete($id)
	{
		$data = employee::find($id);
		$data->delete();
		return redirect('employee/list');
	}
}
