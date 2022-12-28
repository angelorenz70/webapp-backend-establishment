<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    
    public function index()
    {
        $customers = Customer::all();
        return view ('customer.index')->with('customers', $customers);
    }
    
    public function create()
    {
        return view('customer.create');
    }
  
    public function store(Request $request)
    {
        $input = $request->all();
        Customer::create($input);
        return redirect('customers')->with('flash_message', 'New Customer Addedd!');  
    }
    
    public function show($id)
    {
        $customer = Customer::find($id);
        return view('customer.show')->with('customers', $customer);
    }
    
    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('customer.edit')->with('customers', $customer);
    }
  
    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        $input = $request->all();
        $customer->update($input);
        return redirect('customer')->with('flash_message', 'customer Updated!');  
    }
  
    public function destroy($id)
    {
        Customer::destroy($id);
        return redirect('customer')->with('flash_message', 'customer deleted!');  
    }
}
