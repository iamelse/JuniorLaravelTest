<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('company.index', [
            'companies' => Company::latest()->paginate(10)
        ]);
    }

    public function create()
    {
        return view('company.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'      => 'required|max:255',
            'email'     => 'required|max:255',
            'image'     => 'required|image|file|max:1024',
            'website'   => 'required|max:255'
        ]);

        if($request->file('image')) {
            $validated['image'] = $request->file('image')->store('company_logo');
        }

        Company::create($validated);

        return redirect('/company')->with('success', '<strong>Success!</strong> New post has been created!');
    }

    public function show($id)
    {
        $company = Company::find($id);
        return view('company.show', [
            'company' => $company
        ]);
    }

    public function edit($id)
    {
        $company = Company::find($id);
        return view('company.edit', [
            'company' => $company
        ]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name'      => 'required|max:255',
            'email'     => 'required|max:255',
            'image'     => 'image|file|max:1024',
            'website'   => 'required|max:255'
        ]);

        if($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['image'] = $request->file('image')->store('company_logo');
        }

        Company::where('id', $id)->update($validated);
        return redirect('/company')->with('success', '<strong>Success!</strong> Post has been updated!');
    }

    public function destroy($id)
    {
        $company = Company::find($id);
        
        if($company->image) {
            Storage::delete($company->image);
        }
        
        $company->delete();
        
        return redirect('/company')->with('success', '<strong>Success!</strong> post has been deleted!');
    }
}
