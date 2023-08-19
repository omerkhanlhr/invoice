<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function addinvoice()
    {
        $customers=User::all();
        $products=Product::all();
        return view('add_invoice',compact('customers','products'));
    }

}
