<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller {

    //
    public function index() {

        $companies = Company::all();

        return view('company.index', compact('companies'));
    }

    public  function  create(){

        $companies = Company::all();

        return view('company.create', compact('companies'));
    }

    public function store() {

        $data = request()->validate([
            'name' => 'required|min:3',
            'phone' => 'required'
        ]);

        $companies = Company::create($data);
        return redirect('company');
    }


}
