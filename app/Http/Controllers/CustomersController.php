<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer; //เรียกโมเดล

class CustomersController extends Controller
{
    //
    public function list(){

    //$customers = Customer::all();

        $activecustomers = Customer::where('active',1)->get();
        $inactivecustomers = Customer::where('active',0)->get();
    //dd($customers);

    return view('customers.customers', compact('activecustomers', 'inactivecustomers')
   // ['activecustomers' => $activecustomers,
   //     'inactivecustomers' => $inactivecustomers,]
               );}
    public function store(){



        //dd($activecustomers);
        //dd($inactivecustomers);

        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'active' => 'required'
        ]);


        $customers = new Customer();
        $customers->name = request('name');
        $customers->email = request('email');
        $customers->active = request('active');
        $customers->save();
        return back();

        //dd(request('name'));
    }
}
