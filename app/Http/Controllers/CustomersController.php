<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Company;
class CustomersController extends Controller
{
    public function list()
    {
        $activeCustomers = Customer::where('active', 1)->get();
        $inactiveCustomers = Customer::where('active', 0)->get();
        $companies = Company::all();

        return view('pages.customers', compact('activeCustomers', 'inactiveCustomers', 'companies'));
        //return view('pages.customers');
    }
    public function store(Request $request)
    {
        //dd(request('name'));
       
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'active' => 'required',
            'company_id' => 'required'
        ]);
        
         Customer::create($data);
         return back();

    }
}
