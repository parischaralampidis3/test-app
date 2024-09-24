<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CompanyRepository;

class CompanyController extends Controller
{
    private $companyRepository;

    public function __construct(CompanyRepository $companyRepository){
        $this-> companyRepository = $companyRepository;
    }

    public function index()
    {
        $companies= $this -> companyRepository -> index();
        return $companies;
    }

    public function show($id)
    {
        $company = $this-> companyRepository -> show($id);
        return $company;
    } 

    public function create()
    {
        return view('create.createCompany');
    }

    public function store(Request $request)
    {
        $company = $this -> companyRepository -> store($request);
        return $company;
    }

    public function edit($id)
    {
       $company = $this -> companyRepository -> edit($id);
       return $company;
    }

    public function update(Request $request, $id)
    {
       $company = $this -> companyRepository -> update($request, $id);
        return $company;
    }
    
    public function archive()
    {
       $company = $this -> companyRepository -> archive();
       return $company;
    }

    public function destroy($id)
    {
       $company = $this -> companyRepository -> destroy($id);
       return $company;
    }

    public function restore($id)
    {
       $company = $this -> companyRepository -> restore($id);
       return $company;
    }
}