<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{
    public function addinvoice()
    {
        $customers=User::all();
        $products=Product::all();
        return view('add_invoice',compact('customers','products'));
    }

    public function storeinvoice(Request $request)
    {
        $productId = $request->input('product');
        $customerId = $request->input('customer');
        $quantity = $request->input('qty');

        $product = Product::find($productId);
        $customer = User::find($customerId);

        // Calculate the total bill
        $totalBill = $product->price * $quantity;

        $price=$product->price;

        DB::table('products')->where('id',$productId)->decrement('quantity',$quantity);

        return view('view_invoice', compact('customer', 'product', 'totalBill','price','quantity'));
    }

}
