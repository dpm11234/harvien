<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Company;
use App\Events\NewCustomerHasRegisteredEvent;

use Illuminate\Http\Request;


class CustomersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $customers = Customer::all();

        return view('customers.index', compact('customers'));
    }

    public function create()
    {
        $companies = Company::all();
        $customer  = new Customer();
        return view('customers.create', compact('customer', 'companies'));
    }

    public function store()
    {

        $customer = Customer::create($this->validateRequest());
        // if (request()->has('avatar'))
        // {
        //     dd($customer);
        //     $isStored = request()->file('avatar')->storeAs('public/customerpics', now());
        //     // $customer->update(['avatar'=> $isStored]);
        // }

            $filenameToStore = 'noimage.jpg';
        if(request()->hasFile('avatar'))
        {

            $fileNameWithExt = request()->file('avatar')->getClientOriginalName();

            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            $extension = request()->file('avatar')->getClientOriginalExtension();

            $filenameToStore = $filename.'_'.time().'.'.$extension;
            $path =request()->file('avatar')->storeAs('public/customerpics', $filenameToStore);
            // dd($path);
        }
        $customer->update(['avatar' => $filenameToStore]);

        event(new NewCustomerHasRegisteredEvent($customer));
        // sleep(10);
        return redirect('customers');
    }

    public function show(Customer $customer)
    {
        // $customer = Customer::where('id', $id)->firstOrFail();
        return view('customers.show', compact('customer'));
    }

    public function edit(Customer $customer)
    {
        $companies = Company::all();
        return view('customers.edit', compact('customer', 'companies'));
    }

    public function update(Customer $customer)
    {
        $data = $this->validateRequest();
        $customer->update($data);
        return redirect('customers/' . $customer->id);
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect('customers');
    }

    private function validateRequest()
    {
        return request()->validate([
            'name'          => ['required', 'min:3'],
            'email'         => ['required', 'email'],
            'avatar'        => [],
            'active'        => ['required'],
            'company_id'    => ['required'],
        ]);
    }
}
