<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller
{
    //
    public function showcomp(){

        $companies = Company::all();

        return view('customers.companies', compact('companies'));
    }

    public function store(){

        $data = request()->validate([
            'name' => 'required|min:3',
            'phone' => 'required'
        ]);

        $companies = Company::create($data);
        return back();
    }

}
