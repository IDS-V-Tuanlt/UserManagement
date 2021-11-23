<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Services\ProductService;

class ProductController extends Controller
{
    protected $productservice;

    public function __construct(ProductService $productservice)
    {
        $this->productservice = $productservice;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->productservice->index();
        return view ('pages.product.products')->with(compact('products'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = $this->productservice->show($id);
        return view('pages.product.show', compact('product'));
    }
}
