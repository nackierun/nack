<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer; //เรียกโมเดล
use App\Company;

class CustomersController extends Controller {

    //
    public function list() {

        //$customers = Customer::all();

        $activecustomers = Customer::active()->get(); //Model Customer
        $inactivecustomers = Customer::inactive()->get(); //''
        $companies = Company::all();
        //dd($customers);

        return view('customers.customers', compact('activecustomers', 'inactivecustomers', 'companies')//แสดงผลพร้อมสถานะยูเซอ
                // ['activecustomers' => $activecustomers,
                //     'inactivecustomers' => $inactivecustomers,]
        );
    }

    public function store() {



        //dd($activecustomers);
        //dd($inactivecustomers);

        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'active' => 'required',
            'company_id' => 'required',
        ]); //ฟิลที่ห้ามว่าง


        $customers = Customer::create($data);
        /* $customers = new Customer();
          $customers->name = request('name');
          $customers->email = request('email');
          $customers->active = request('active');
          $customers->save();
          //รับข้อมูลจากฟิลส่งขึ้นDB
         */
        //dd(request('name'));
        return back();
    }

}
