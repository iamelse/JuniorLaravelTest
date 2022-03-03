<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    
    public function index()
    {
        return view('employee.index', [
            'employees' => Employee::with('has_one_company')->latest()->paginate(10)
        ]);
    }

    public function create()
    {
        return view('employee.create', [
            'employees'  => Employee::with('has_one_company')->get()
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name'    => 'required|max:255',
            'last_name'     => 'required|max:255',
            'company_id'    => 'required|max:255',
            'email'         => 'required|max:255',
            'phone'         => 'required|max:255'
        ]);

        Employee::create($validated);

        return redirect('/employee')->with('success', '<strong>Success!</strong> New employee has been created!');
    }

    public function show($id)
    {
        return view('employee.show', [
            'employee' => Employee::findOrFail($id)
        ]);
    }

    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employee.edit', [
            'employee'      => $employee,
            'companies'     => Company::all()
        ]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'first_name'    => 'required|max:255',
            'last_name'     => 'required|max:255',
            'company_id'    => 'required|max:255',
            'email'         => 'required|max:255',
            'phone'         => 'required|max:255'
        ]);

        Employee::where('id', $id)->update($validated);
        return redirect('/employee')->with('success', '<strong>Success!</strong> Employee has been updated!');
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        
        $employee->delete();
        
        return redirect('/employee')->with('success', '<strong>Success!</strong> employee has been deleted!');
    }
}
