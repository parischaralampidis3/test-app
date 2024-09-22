<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::where('user_id', auth()->id())->latest()->get(); // Fetch companies for the logged-in user
        return view('dashboard', ['companies' => $companies]); // Pass them to the view
    }

    public function show($id)
    {
        $company = Company::find($id);

        // Check if the company exists and the user owns it
        if (!$company || $company->user_id !== auth()->id()) {
            session()->flash('fail', "Company can't be displayed or you don't have access.");
            return redirect('dashboard');
        }

        return view('show.showCompany', ['company' => $company]);
    }

    public function create()
    {
        return view('create.createCompany');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'email' => 'required|email|max:255|unique:companies,email',  // Ensure it's checking in 'companies' table
            'website' => 'url|max:255|nullable',
            
        ]);

        Company::create([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'email' => $request->input('email'),
            'website' => $request->input('website'),
            'user_id' => auth()->id(), // Assign the authenticated user's ID
        ]);

        session()->flash('success', 'Company created successfully!');
        return redirect()->back();
    }

    public function edit($id)
    {
        $company = Company::find($id);

        // Check if the company exists and the user owns it
        if (!$company || $company->user_id !== auth()->id()) {
            session()->flash('fail', "Company not found or you don't have permission.");
            return redirect('dashboard');
        }

        return view('update.updateCompany', compact('company'));
    }

    public function update(Request $request, $id)
    {
        $company = Company::find($id);

        // Check if the company exists and the user owns it
        if (!$company || $company->user_id !== auth()->id()) {
            session()->flash('fail', "Company can't be updated or you don't have permission.");
            return redirect('dashboard');
        }

        $request->validate([
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'email' => 'required|email|max:255|unique:companies,email,' . $company->id,
            'website' => 'url|max:255|nullable',
        ]);

        $company->update($request->all());
        session()->flash('success', 'Company updated successfully!');
        return redirect()->back();
    }

    public function destroy($id)
    {
        $company = Company::find($id);

        // Check if the company exists and the user owns it
        if (!$company || $company->user_id !== auth()->id()) {
            session()->flash('fail', "Company can't be deleted or you don't have permission.");
            return redirect('dashboard');
        }

        $company->delete();
        session()->flash('success', 'Company deleted successfully.');
        return redirect('dashboard');
    }
}
