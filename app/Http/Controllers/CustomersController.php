<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer; //เรียกโมเดล

class CustomersController extends Controller
{
    //
    public function list(){

    $customers = Customer::all();


    //dd($customers);

    return view('customers.customers',[
        'customers'=>$customers
    ]);
    }
    public function store(){


        $customers = new Customer();
        $customers->name = request('name');
        $customers->save();
        return back();

        //dd(request('name'));
    }
}
