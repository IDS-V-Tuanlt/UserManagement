<?php

namespace App\Repositories;

use App\Product;

class ProductRepository
{
    const number = 8;
    /**
     * @var Product
     */
    protected $product;

    /**
     * ProductRepository constructor.
     * 
     * @param Product $rroduct
     */
    public function __construct(Product $product)
    {
        $this->product = $product;
    }
    public function all()
    {
        return Product::paginate(self::number);
    }
    public function find($id)
    {
        return $this->product->find($id);
    }
}