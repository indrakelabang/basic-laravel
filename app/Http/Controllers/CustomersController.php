<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list()
    {
        $customers = [
            'John Doe',
            'Jane',
            'Mary',
        ];
        return view('internals.customers',[
             'anothername' => $customers,         //parsing data
        ]);
    }
}
