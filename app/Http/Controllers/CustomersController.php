<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;


class CustomersController extends Controller
{
    public function list()
    {
        $activeCustomers = Customer::where('active', 1)->get();
        $inactiveCustomers = Customer::where('active', 2)->get();
        return view('internals.customers', [
            'data_active_customers' => $activeCustomers,
            'data_active_customers' => $inactiveCustomers,
            // 'data_customers'        => compact('activeCustomers', 'inactiveCustomers'),
        ]);
    }

    public function store()
    {
        $data = request()->validate([
            'name'      => ['required', 'min:3'],
            'email'     => ['required', 'email'],
            'status'    => ['required'],
        ]);

        $customer = new Customer;
        $customer->name     = request('name');
        $customer->email    = request('email');
        $customer->active   = request('status');
        $customer->save();
        return back();
    }
}
