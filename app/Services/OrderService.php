<?php

namespace App\Services;

use App\Order;
use App\Repositories\OrderRepository;
use Illuminate\Http\Request;

class OrderService
{
    /**
     * @var $orderRepository
     */
    protected $orderRepository;

    /**
     * OrderService constructor.
     * 
     * @param OrderRepository $orderRepository;
     */
    public function __construct(OrderRepository $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }
    public function product($id)
    {
        return $this->orderRepository->product($id);
    }
    public function total(Request $request, $price)
    {
        $quantity = $request->get('quantity');
        return ($price)*($quantity);
    }
    public function quantity(Request $request)
    {
        return $request->get('quantity');
    }
    public function checkout(Request $request)
    {
        return $this->orderRepository->insertData($request);
    }
}
