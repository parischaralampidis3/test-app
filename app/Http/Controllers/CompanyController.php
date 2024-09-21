<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::latest()->get();
       
        return view('main', ['companies' => $companies]);
      
    }

    public function show($id)
    {
        $company = Company::find($id);
           if (!$company) {
            session()->flash('fail', "Company can't be displayed");
            return redirect('main');
        } 
        return view ('show.showCompany', ['company' => $company]);
    }

    public function create(){
        return view('create.createCompany');
    }

   public function store(Request $request)
{
    $request->validate([
        'name' => 'required|max:255',
        'address' => 'required|max:255',
        'email' => 'required|email|max:255|unique:company,email',  // Ensure it's checking in 'company' table
        'website' => 'url|max:255|nullable'
    ]);

    Company::create($request->only('name', 'address', 'email', 'website'));  // Ensure it's using 'company' table

    session()->flash('success', 'Company created successfully!');

    return redirect()->back();
}

    public function edit(){
        return view('update.updateCompany');
    }

    public function update(Request $request, $id)
    {
        $company = Company::find($id);
        if (!$company) {
            session()->flash('fail', "Company can't be updated");
            return redirect("main");
        }
        $request->validate(
            [
                'name' => 'required|max:255',
                'address' => 'required|max:255',
                'email' => 'required|max:255|unique:company,email' . $company -> id,
                'website' => 'required|url|max:255'
            ]
        );
        $company->update($request->only(['name','address','email','website']));
        session()->flash('success', 'Company is created successfully');
        return redirect("main");
    }

    public function destroy($id)
    {
        $company = Company::find($id);
        $company->delete();
    }
}
