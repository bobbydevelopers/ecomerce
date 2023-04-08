<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employee = Employee::all();
        return view('employee',['employee'=>$employee]);

    }

    public function addemp(Request $request)
    {
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->address = $request->address;
        $data = $employee->save();


        if($data)
        {
            redirect('index');
        }
        
    }
}
