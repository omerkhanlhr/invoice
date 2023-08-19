<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function addcustomer()
    {
        return view('add_customers');
    }

    public function storecustomer(Request $req)
    {
        $customer= new User();
        $customer->name=$req['name'];
        $customer->email=$req['email'];
        $customer->password=123456789;
        $customer->save();
        return redirect()->route('all.customer');
    }

    public function allcustomer()
    {
        $customers=User::all();
        return view('all_customers',compact('customers'));
    }
}

