<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list()
    {
        $activeCustomers = Customer::active()->get();
        $inactiveCustomers = Customer::inactive()->get();

        return view('internals.customers', compact('activeCustomers', 'inactiveCustomers')
                      //parsing data
        );
    }

    public function store()
    {
        $data= request()->validate([
            'name'=> 'required|min:3',
            'email'=> 'required|email',
            'active'=> 'required',

            ]);

        $customers = new Customer();
        $customers->name = request('name');
        $customers->email = request('email');
        $customers->active = request('active');
        $customers->save();

        return back();
    }

}
