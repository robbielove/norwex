<?php

namespace App\Http\Controllers;

use App\Models\Customer;

class CustomerController extends Controller
{
    public function Action()
    {
        $customers = Customer::orderBy('name', 'asc')->get();
//        dd($customers);
        return view('customers', compact('customers'));
    }
}
