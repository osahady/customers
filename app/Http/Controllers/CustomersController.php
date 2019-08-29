<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomersController extends Controller
{
    public function list()
    {
        $activeCustomers = Customer::where('active', 1)->get();
        $inactiveCustomers = Customer::where('active', 0)->get();
        //$customers= Customer::all();

        return view('pages.customers', compact('activeCustomers', 'inactiveCustomers'));
        //return view('pages.customers');
    }
    public function store(Request $request)
    {
        //dd(request('name'));
       
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'active' => 'required'
        ]);
        
         Customer::create($data);
         return back();

    }
}
