<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{

    public function show_all(){
        $persons = Customer::all();
        return view('customer.persons', ['user' => $persons]);
    }

    public function show_names(){
        $persons = DB::table('customers')
            ->select('first_name', 'middle_init', 'last_name')
            ->get();
        return view('customer.shownames', ['user' => $persons]);
    }


    //unfinished cause I can't display the deleted customer
    public function delete_first(){
        $deleted = DB::table('customers')
            ->select('first_name', 'middle_init', 'last_name')
            ->where('age', '<', 60)
            ->delete();
        return view('customer.deletefirst', ['user' => $deleted]);
    }
}
