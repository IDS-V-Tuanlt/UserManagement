<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductService;
use App\Services\OrderService;

class OrderController extends Controller
{
    protected $orderservice;

    public function __construct(OrderService $orderservice)
    {
        $this->orderservice = $orderservice;
    }
    public function order(Request $request, $id)
    {
        $product = $this->orderservice->product($id);
        $quantity = $this->orderservice->quantity($request);
        $price = $this->orderservice->price($request, $product->sp_giaBan);
        return view('pages.product.checkout',  compact('product', 'quantity', 'price'));
    }
    public function checkout(Request $request)
    {
        $this->orderservice->checkout($request);
        return back()->with(['status'=>'Order Success']);
    }
}
