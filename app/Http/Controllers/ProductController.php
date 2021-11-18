<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::paginate(8);
        return view ('pages.products')->with(compact('products'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $product = Product::find($id);
        return view('pages.show', compact('product'));
    }
    public function order(Request $request, $id)
    {
        $product = Product::find($id);
        $quantity = $request->get('quantity');
        $price = ($product->sp_giaBan)*($quantity);
        return view('pages.checkout',  compact('product', 'quantity', 'price'));
    }
}
