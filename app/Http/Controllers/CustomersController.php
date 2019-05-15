<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer; //เรียกโมเดล

class CustomersController extends Controller
{
    //
    public function list(){

    //$customers = Customer::all();

        $activecustomers = Customer::active()->get(); //Model Customer
        $inactivecustomers = Customer::inactive()->get(); //''
    //dd($customers);

    return view('customers.customers', compact('activecustomers', 'inactivecustomers')//แสดงผลพร้อมสถานะยูเซอ
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
        ]); //ฟิลที่ห้ามว่าง


        $customers = new Customer();
        $customers->name = request('name');
        $customers->email = request('email');
        $customers->active = request('active');
        $customers->save();
        return back(); //รับข้อมูลจากฟิลส่งขึ้นDB

        //dd(request('name'));
    }
}
