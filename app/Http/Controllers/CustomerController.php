<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function show_all(){
        $users= Customer::where('age', 21)->get();
        return view('customer.persons', ['user' => $users]);
    }
}
