<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function addproduct()
    {
        return view('add_product');
    }

    public function storeproduct(Request $req)
    {
        $product= new Product();
        $product->name=$req['name'];
        $product->price=$req['price'];
        $product->quantity=$req['qty'];
        $product->save();
        return redirect()->route('all.product');
    }

    public function allproduct()
    {
        $products=Product::all();
        return view('all_products',compact('products'));
    }

    public function editquantity($id)
    {
        $products=Product::findOrFail($id);
        return view('edit_quantity',compact('products'));
    }

    public function Updatequantity($id,Request $req)
    {
        $qty=$req->qty;
        DB::table('products')->where('id',$id)->increment('quantity',$qty);
        return redirect()->route('all.product');
    }

    public function editproduct($id)
    {
        $products=Product::findOrFail($id);
        return view('edit_product',compact('products'));
    }

    public function Updateproduct(Request $req,$id)
    {
        $product=Product::findOrFail($id);
        $product->name=$req['name'];
        $product->price=$req['price'];
        $product->save();
        return redirect()->route('all.product');
    }

    public function deleteproduct($id)
    {
        $products=Product::findOrFail($id);
        $products->delete();
        return redirect()->back();
    }
}
